<?php

namespace App\Http\Controllers;

use App\DataTables\UserDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\UserRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Response;

class UserController extends AppBaseController
{
    /** @var  UserRepository */
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }

    /**
     * Display a listing of the User.
     *
     * @param UserDataTable $userDataTable
     * @return Response
     */
    public function index(UserDataTable $userDataTable)
    {
        return $userDataTable->render('users.index');
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        $input = $request->all();

        // crypt the password
        $input['password'] = Hash::make($input['password']);

        $user = $this->userRepository->create($input);

        // assign user role
        $role = $input['role'];
        $user->assignRole($role);

        toastr()->success('Utilisateur enregistré avec succès.');

        return redirect(route('users.index'));
    }

    /**
     * Display the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            toastr()->error('Utilisateur non trouvé.');

            return redirect(route('users.index'));
        }

        return view('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            toastr()->error('Utilisateur non trouvé.');

            return redirect(route('users.index'));
        }
        // add role field
        $user['role'] = $user->getRoleNames()->first();

        return view('users.edit')->with('user', $user);
    }

    /**
     * Update the specified User in storage.
     *
     * @param  int              $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRequest $request)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            toastr()->error('Utilisateur non trouvé.');

            return redirect(route('users.index'));
        }
        // input
        $input = $request->all();
        // crypt the password if exist
        if ($request->password){
            $input['password'] = Hash::make($request->input('password'));
        } else {
            $input['password'] = $user->password;
        }
        $user = $this->userRepository->update($input, $id);

        // re-assign role if is changed in dashboard
        if($request->role !== $user->getRoleNames()->first())
        {
            // delete old role
            $user->removeRole($user->roles->first());
            // assign new role
            $role = $input['role'];
            $user->assignRole($role);
        }

        toastr()->success('Utilisateur mis à jour avec succès.');

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified User from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            toastr()->error('Utilisateur non trouvé.');

            return redirect(route('users.index'));
        }

        // remove role
        $user->removeRole($user->roles->first());

        $this->userRepository->delete($id);

        toastr()->success('Utilisateur supprimé avec succès.');

        return redirect(route('users.index'));
    }
}

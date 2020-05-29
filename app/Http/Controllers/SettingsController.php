<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingsUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    /** @var  UserRepository */
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit()
    {
        $user = Auth::user();

        if (empty($user)) {
            toastr()->error('Compte non trouvé.');

            return redirect(route('home'));
        }
        // add role field
        $user['role'] = $user->getRoleNames()->first();

        return view('settings.edit')->with('user', $user);
    }

    /**
     * Update the specified User in storage.
     *
     * @param int $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update($id, SettingsUserRequest $request)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            toastr()->error('Compte non trouvé.');

            return redirect(route('home'));
        }
        // input
        $input = $request->all();
        // crypt the password if exist
        if ($request->password) {
            $input['password'] = Hash::make($request->input('password'));
        } else {
            $input['password'] = $user->password;
        }
        $user = $this->userRepository->update($input, $id);

        toastr()->success('Votre profil a été mis à jour avec succès.');
        return redirect(route('home'));
    }
}

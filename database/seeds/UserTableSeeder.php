<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //test if table is empty
        if(DB::table('users')->get()->count()<=1)
        {
            // insert a default Administrateur
            App\User::create([
                'first_name' => 'Frédéric' ,
                'last_name' => 'Chauveau',
                'cin' => '01022457' ,
                'credit_card_number' => '4485480221084675' ,
                'email' => 'admin@gmail.com' ,
                'password' => bcrypt('password'),
                'approved_at' => now(),
            ])->assignRole('Administrateur');


            // insert a default User
            App\User::create([
                'first_name' => 'Célina' ,
                'last_name' => 'Denis',
                'cin' => '09945120' ,
                'credit_card_number' => '4485480221084078' ,
                'email' => 'user@gmail.com' ,
                'password' => bcrypt('password'),
                'approved_at' => now(),
            ])->assignRole('User');

            // create a random users
            factory(App\User::class, 50)->create()->each(function ($user) {
                // assign random Role for each user
                $role_list = Array('Administrateur','User');
                $random_role =  $role_list[array_rand($role_list)];
                $user->assignRole($random_role);
            });

        }else
        {
            echo "Table USERS is not empty! \n";
        }
    }
}

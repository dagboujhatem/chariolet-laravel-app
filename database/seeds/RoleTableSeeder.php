<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //test if table is empty
        if(DB::table('roles')->get()->count()<=1)
        {
            // insert roles
            Role::create(['name' => 'Administrateur']);
            Role::create(['name' => 'User']);
        }else
        {
            echo "Table ROLES is not empty! \n";
        }
    }
}

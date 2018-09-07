<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_employee = new Role();
        $role_employee->name = 'admin';
        $role_employee->description = 'An Administrator of the App, can do almost everythings';
        $role_employee->save();

        $role_manager = new Role();
        $role_manager->name = 'applicant';
        $role_manager->description = 'A Applicant User';
        $role_manager->save();
    }
}

<?php

use App\Role;
use App\User;
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
        //
        $role_admin = Role::where('name', 'admin')->first();
        $role_applicant = Role::where('name', 'applicant')->first();

        $employee = new User();
        $employee->name = 'Admin';
        $employee->email = 'admin@yeceapp.com';
        $employee->password = bcrypt('secret');
        $employee->save();
        $employee->roles()->attach($role_admin);

        $manager = new User();
        $manager->name = 'Applicant 01';
        $manager->email = 'applican01t@yeceapp.com';
        $manager->password = bcrypt('password');
        $manager->save();
        $manager->roles()->attach($role_applicant);
    }
}

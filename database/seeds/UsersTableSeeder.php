<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Department;
use Illuminate\Http\Request;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Request $request)
    {
        //Departments
        $dept = new Department;
        $dept->name ='Administration';
        $dept->save();
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@bsh.com';
        $user->role ='administrator';
        $user->departmentId =1;
        $user->password = bcrypt('martin');
        $user->save();

    }
}

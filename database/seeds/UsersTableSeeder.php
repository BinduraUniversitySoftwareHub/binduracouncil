<?php

use Illuminate\Database\Seeder;
use App\User;
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
        
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@bsh.com';
        $user->role ='administrator';
        $user->password = bcrypt('martin');
        $user->save();

    }
}

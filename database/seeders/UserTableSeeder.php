<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Roles;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles_user = Roles::where('Nombre', 'user')->first();
        $roles_admin = Roles::where('Nombre', 'admin')->first();
        
        $user = new User();
        $user->name = 'User';
        $user->email = 'user@gmail.com';
        $user->avatar='avatar/default.png';
        $user->password = bcrypt('12345');
        $user->save();
        $user->roles()->attach($roles_user);

        $user = new User();
        $user->name = 'carlos bolaños';
        $user->email = 'admin@gmail.com';
        $user->avatar='avatar/default.png';
        $user->password = bcrypt('12345');
        $user->save();
        $user->roles()->attach($roles_admin);
    }
}

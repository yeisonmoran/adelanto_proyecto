<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Roles;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = new Roles();
        $roles->Nombre = 'admin';
        $roles->Description = 'Administrator';
        $roles->save();
        $roles = new Roles();
        $roles->Nombre = 'user';
        $roles->Description = 'User';
        $roles->save();

    }
}

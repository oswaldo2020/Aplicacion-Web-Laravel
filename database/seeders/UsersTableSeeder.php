<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use DB;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Role::truncate();
        DB::table('assigned_roles')->truncate();

        $user = User::create([
            'name' => 'Jorge',
            'email' => 'jorge@aprendible.com',
            'password' => '123123'
        ]);

        $role = Role::create([
            'name' => 'admin',
            'display_name' => 'Administrador',
            'description' => 'Administrador del sitiio web'
        ]);

        $user->roles()->save($role);

    }
}

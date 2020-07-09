<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');


        Role::create(['name' => 'user']);
        $user =  factory(\App\User::class)->create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
        ]);

        $user->assignRole('user');
        Role::create(['name' => 'admin']);

        $admin = factory(\App\User::class)->create([
            'name' => 'Nazeeh Saifi',
            'email' => 'nazeeh@example.com',
        ]);

        $admin->assignRole('admin');
    }
}

<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $role_owner = Role::where('name', 'owner')->first();
        $role_moderator = Role::where('name', 'moderator')->first();
        $role_user = Role::where('name', 'user')->first();

        $owner = new User();
        $owner->name = 'Joshua';
        $owner->email = 'joshua@gmail.com';
        $owner->password = bcrypt('Joshua123');
        $owner->save();
        $owner->roles()->attach($role_owner);

        $moderator = new User();
        $moderator->name = 'Pieter';
        $moderator->email = 'pieter@gmail.com';
        $moderator->password = bcrypt('Pieter123');
        $moderator->save();
        $moderator->roles()->attach($role_moderator);

        $user = new User();
        $user->name = 'Bianca';
        $user->email = 'bianca@gmail.com';
        $user->password = bcrypt('Bianca123');
        $user->save();
        $user->roles()->attach($role_user);
    }
}

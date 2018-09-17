<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    public function run()
    {
        $role_owner = new Role();
        $role_owner->name = 'owner';
        $role_owner->description = 'The owner role can basically do anything lmao';
        $role_owner->save();

        $role_moderator = new Role();
        $role_moderator->name = 'moderator';
        $role_moderator->description = 'The moderator can run basic CRUD calls';
        $role_moderator->save();

        $role_user = new Role();
        $role_user->name = 'user';
        $role_user->description = 'The user can download Magnet links';
        $role_user->save();

    }
}

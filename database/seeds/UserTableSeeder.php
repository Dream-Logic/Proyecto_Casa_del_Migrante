<?php

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
        $user = new \App\User();
        $user->name = "Administrador";
        $user->email = "admin@admin.com";
        $user->password = bcrypt("admin");
        $user->is_admin = true;
        $user->save();
        $user = new \App\User();
        $user->name = "Director";
        $user->email = "direc@admin.com";
        $user->password = bcrypt("direc");
        $user->save();

    }
}

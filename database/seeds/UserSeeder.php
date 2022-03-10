<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => "admin",
            'name' => "admin",
            'role' => "admin",
            'email' => "admin@admin.com",
            'password' => Hash::make('admin'),
            'foto' => "default.png",
        ]);

        DB::table('users')->insert([
            'username' => "user",
            'name' => "user",
            'role' => "user",
            'email' => "user@user.com",
            'password' => Hash::make('user'),
            'foto' => "default.png",
        ]);
        
    }
}

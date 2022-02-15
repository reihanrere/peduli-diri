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
        ]);

        DB::table('users')->insert([
            'username' => "siswa",
            'name' => "siswa",
            'role' => "siswa",
            'email' => "siswa@siswa.com",
            'password' => Hash::make('siswa'),
        ]);
    }
}

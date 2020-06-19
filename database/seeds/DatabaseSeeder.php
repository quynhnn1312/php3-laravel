<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name' => 'Nghiem Quynh',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('1'),
            'avatar' => 'users/user.png',
            'role_id' => 2,
            'status' => 1,
        ]);
    }
}

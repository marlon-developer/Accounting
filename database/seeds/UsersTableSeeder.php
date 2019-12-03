<?php

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
        $user = [
            0 => [
                "name"     => "dev",
                "email"    => "dev@dev.com",
                "password" => "pasw",
            ],
            1 => [
                "name"     => "dev1",
                "email"    => "dev1@dev.com",
                "password" => "pasw",
            ],
            2 => [
                "name"     => "dev2",
                "email"    => "dev2@dev.com",
                "password" => "pasw",
            ],
        ];

        DB::table('users')->insert($user);
    }
}

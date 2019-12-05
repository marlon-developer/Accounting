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
        $data = [
            0 => [
                "name"     => "dev",
                "email"    => "dev@dev.com",
                "password" => bcrypt("pasw"),
            ],
            1 => [
                "name"     => "dev1",
                "email"    => "dev1@dev.com",
                "password" => bcrypt("pasw"),
            ],
            2 => [
                "name"     => "dev2",
                "email"    => "dev2@dev.com",
                "password" => bcrypt("pasw"),
            ],
        ];

        DB::table('users')->insert($data);
    }
}

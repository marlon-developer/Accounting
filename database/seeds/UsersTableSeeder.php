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
                "usr_name"     => "dev",
                "usr_email"    => "dev@dev.com",
                "usr_password" => "pasw",
            ],
            1 => [
                "usr_name"     => "dev1",
                "usr_email"    => "dev1@dev.com",
                "usr_password" => "pasw",
            ],
            2 => [
                "usr_name"     => "dev2",
                "usr_email"    => "dev2@dev.com",
                "usr_password" => "pasw",
            ],
        ];

        DB::table('usr_user')->insert($user);
    }
}

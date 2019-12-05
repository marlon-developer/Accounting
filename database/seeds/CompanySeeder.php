<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
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
                "cp_cnpj" => "30989318000108",
                "cp_desc" => "Bichinho da Goiaba",
            ],
            1 => [
                "cp_cnpj" => "36289161000194",
                "cp_desc" => "Soninho",
            ],
            2 => [
                "cp_cnpj" => "88636589000160",
                "cp_desc" => "Simétrica",
            ],
            3 => [
                "cp_cnpj" => "15305731000112",
                "cp_desc" => "Real",
            ],
            4 => [
                "cp_cnpj" => "65703060000116",
                "cp_desc" => "Mundial",
            ],
            4 => [
                "cp_cnjp" => "11204512000196",
                "cp_desc" => "Volta Redonda",
            ],
            5 => [
                "cp_cnjp" => "19619196000125",
                "cp_desc" => "JKL",
            ],
        ];

        DB::table('companies')->insert($data);

    }
}

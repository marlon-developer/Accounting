<?php

use Illuminate\Database\Seeder;

class TypesSeeder extends Seeder
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
                "tp_desc" => "Ativo Circulante",
            ],
            1 => [
                "tp_desc" => "Ativo Não Circulante",
            ],
            2 => [
                "tp_desc" => "Passivo Circulante",
            ],
            3 => [
                "tp_desc" => "Passivo Não Circulante",
            ],
            4 => [
                "tp_desc" => "Patrimônio Líquido",
            ],
        ];

        DB::table('types')->insert($data);
    }
}

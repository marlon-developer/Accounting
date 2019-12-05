<?php

use Illuminate\Database\Seeder;

class PlanAccountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            0  => [
                "pa_type"    => "1",
                "pa_subtype" => "1",
                "pa_desc"    => "Caixa",
            ],
            1  => [
                "pa_type"    => "1",
                "pa_subtype" => "1",
                "pa_desc"    => "Depósitos bancários a vista",
            ],
            2  => [
                "pa_type"    => "1",
                "pa_subtype" => "1",
                "pa_desc"    => "Numerários em transito",
            ],
            3  => [
                "pa_type"    => "1",
                "pa_subtype" => "1",
                "pa_desc"    => "Aplicações de liquidez imediata",
            ],
            4  => [
                "pa_type"    => "1",
                "pa_subtype" => "2",
                "pa_desc"    => "Duplicatas a receber",
            ],
            5  => [
                "pa_type"    => "1",
                "pa_subtype" => "2",
                "pa_desc"    => "Duplicatas de Clientes",
            ],
            6  => [
                "pa_type"    => "1",
                "pa_subtype" => "2",
                "pa_desc"    => "Duplicatas Controladas e coligadas – transações operacionais",
            ],
            7  => [
                "pa_type"    => "1",
                "pa_subtype" => "2",
                "pa_desc"    => "Duplicatas descontadas",
            ],
            8  => [
                "pa_type"    => "1",
                "pa_subtype" => "2",
                "pa_desc"    => "Provisão para créditos de liquidação duvidosa",
            ],
            9  => [
                "pa_type"    => "1",
                "pa_subtype" => "2",
                "pa_desc"    => "Ajuste a valor presente",
            ],
            10 => [
                "pa_type"    => "1",
                "pa_subtype" => "2",
                "pa_desc"    => "Faturamento para entrega futura",
            ],
            11 => [
                "pa_type"    => "1",
                "pa_subtype" => "2",
                "pa_desc"    => "Saques de exportação",
            ],
            12 => [
                "pa_type"    => "1",
                "pa_subtype" => "2",
                "pa_desc"    => "Saques de exportação descontados",
            ],
        ];

        DB::table('plan_accounts')->insert($data);
    }
}

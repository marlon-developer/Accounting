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
                "type_id" => "1",
                "pa_desc" => "Caixa",
            ],
            1  => [
                "type_id" => "2",
                "pa_desc" => "Depósitos bancários a vista",
            ],
            2  => [
                "type_id" => "3",
                "pa_desc" => "Numerários em transito",
            ],
            3  => [
                "type_id" => "4",
                "pa_desc" => "Aplicações de liquidez imediata",
            ],
            4  => [
                "type_id" => "5",
                "pa_desc" => "Duplicatas a receber",
            ],
            5  => [
                "type_id" => "6",
                "pa_desc" => "Duplicatas de Clientes",
            ],
            6  => [
                "type_id" => "7",
                "pa_desc" => "Duplicatas Controladas e coligadas – transações operacionais",
            ],
            7  => [
                "type_id" => "8",
                "pa_desc" => "Duplicatas descontadas",
            ],
            8  => [
                "type_id" => "9",
                "pa_desc" => "Provisão para créditos de liquidação duvidosa",
            ],
            9  => [
                "type_id" => "10",
                "pa_desc" => "Ajuste a valor presente",
            ],
            10 => [
                "type_id" => "11",
                "pa_desc" => "Faturamento para entrega futura",
            ],
            11 => [
                "type_id" => "12",
                "pa_desc" => "Saques de exportação",
            ],
            12 => [
                "type_id" => "13",
                "pa_desc" => "Saques de exportação descontados",
            ],
        ];

        DB::table('plan_accounts')->insert($data);
    }
}

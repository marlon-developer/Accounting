<?php

use Illuminate\Database\Seeder;

class SubtypesSeeder extends Seeder
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
                "stp_desc" => "Disponível",
            ],
            1  => [
                "stp_desc" => "Clientes",
            ],
            2  => [
                "stp_desc" => "Outros Créditos",
            ],
            3  => [
                "stp_desc" => "Investimentos Temporários",
            ],
            4  => [
                "stp_desc" => "Estoques",
            ],
            5  => [
                "stp_desc" => "Despesas do Exercício Seguinte Pagas Antecipadamente",
            ],
            6  => [
                "stp_desc" => "Créditos e Valores",
            ],
            7  => [
                "stp_desc" => "Investimentos Temporário a Longo Prazo",
            ],
            8  => [
                "stp_desc" => "Investimentos Permanentes",
            ],
            9  => [
                "stp_desc" => "Imobilizado",
            ],
            10 => [
                "stp_desc" => "Depreciação, Amortização e Exaustão Acumulada",
            ],
            11 => [
                "stp_desc" => "Intangível",
            ],
            12 => [
                "stp_desc" => "Valores Diferidos",
            ],
            13 => [
                "stp_desc" => "Empréstimos e Financiamentos",
            ],
            14 => [
                "stp_desc" => "Debêntures",
            ],
            15 => [
                "stp_desc" => "Fornecedores",
            ],
            16 => [
                "stp_desc" => "Obrigações Fiscais",
            ],
            17 => [
                "stp_desc" => "Outras Obrigações",
            ],
            18 => [
                "stp_desc" => "Outras Provisões",
            ],
            19 => [
                "stp_desc" => "Empréstimos e Financiamentos",
            ],
            20 => [
                "stp_desc" => "Retenções Contratuais",
            ],
            21 => [
                "stp_desc" => "Provisão Para Imposto de Renda Diferido",
            ],
            22 => [
                "stp_desc" => "Provisão Para Resgate de Partes Beneficiária",
            ],
            23 => [
                "stp_desc" => "Provisão Para Riscos Fiscais e Outros Passivos Contigentes",
            ],
            24 => [
                "stp_desc" => "Receitas de Exercícios Futuros",
            ],
            25 => [
                "stp_desc" => "Custos e Despesas Correspondentes as Receitas",
            ],
            26 => [
                "stp_desc" => "Capital Social",
            ],
            27 => [
                "stp_desc" => "Reservas de Capital",
            ],
            28 => [
                "stp_desc" => "Ajustes de Avaliação Patrimonial",
            ],
            29 => [
                "stp_desc" => "Reserva de Lucros",
            ],
            30 => [
                "stp_desc" => "Lucros Acumulados",
            ],
        ];

        DB::table('subtypes')->insert($data);
    }
}

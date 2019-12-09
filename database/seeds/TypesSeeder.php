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
            0  => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Disponível",
                "tp_item"         => "Caixa",
            ],
            1  => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Disponível",
                "tp_item"         => "Depósitos bancários a vista",
            ],
            2  => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Disponível",
                "tp_item"         => "Numerários em transito",
            ],
            3  => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Disponível",
                "tp_item"         => "Aplicações de liquidez imediata",
            ],
            4  => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Clientes",
                "tp_item"         => "Duplicatas a receber",
            ],
            5  => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Clientes",
                "tp_item"         => "Duplicatas a receber de Clientes",
            ],
            6  => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Clientes",
                "tp_item"         => "Duplicatas a receber Controladas e Coligadas",
            ],
            7  => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Clientes",
                "tp_item"         => "(-) Duplicatas descontadas (conta credora)",
            ],
            8  => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Clientes",
                "tp_item"         => "(-) Provisão para créditos de liquidação duvidosa (conta credora)",
            ],
            9  => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Clientes",
                "tp_item"         => "(-) Ajuste a valor presente (conta credora)",
            ],
            10 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Clientes",
                "tp_item"         => "(-) Faturamento para entrega futura (conta credora)",
            ],
            11 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Clientes",
                "tp_item"         => "Saques de exportação",
            ],
            12 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Clientes",
                "tp_item"         => "(-) Saques de exportação descontados (conta credora)",
            ],
            13 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Outros Créditos",
                "tp_item"         => "Títulos a receber",
            ],
            14 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Outros Créditos",
                "tp_item"         => "Clientes – renegociação de contas a receber",
            ],
            15 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Outros Créditos",
                "tp_item"         => "Devedores mobiliários",
            ],
            16 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Outros Créditos",
                "tp_item"         => "Empréstimos a receber de terceiros",
            ],
            17 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Outros Créditos",
                "tp_item"         => "Títulos descontados (conta credora)",
            ],
            18 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Outros Créditos",
                "tp_item"         => "Receitas financeiras a transcorrer",
            ],
            19 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Outros Créditos",
                "tp_item"         => "Cheques em cobrança",
            ],
            20 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Outros Créditos",
                "tp_item"         => "Dividendos propostos a receber",
            ],
            21 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Outros Créditos",
                "tp_item"         => "Bancos – contas vinculadas",
            ],
            22 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Outros Créditos",
                "tp_item"         => "Juros a receber",
            ],
            23 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Outros Créditos",
                "tp_item"         => "Adiantamentos a terceiros",
            ],
            24 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Outros Créditos",
                "tp_item"         => "Créditos de funcionários",
            ],
            25 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Outros Créditos",
                "tp_item"         => "Adiantamentos para viagens",
            ],
            26 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Outros Créditos",
                "tp_item"         => "Adiantamentos para despesas",
            ],
            27 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Outros Créditos",
                "tp_item"         => "Antecipação de salários e ordenados",
            ],
            28 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Outros Créditos",
                "tp_item"         => "Empréstimos a funcionários",
            ],
            29 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Outros Créditos",
                "tp_item"         => "Antecipação de décimo terceiro salário",
            ],
            30 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Outros Créditos",
                "tp_item"         => "Antecipação de férias",
            ],
            31 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Outros Créditos",
                "tp_item"         => "Impostos a recuperar",
            ],
            32 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Outros Créditos",
                "tp_item"         => "IPI a compensar",
            ],
            33 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Outros Créditos",
                "tp_item"         => "ICMS a compensar",
            ],
            34 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Outros Créditos",
                "tp_item"         => "IRRF a compensar",
            ],
            35 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Outros Créditos",
                "tp_item"         => "IR a restituir / Compensar",
            ],
            36 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Outros Créditos",
                "tp_item"         => "IR diferido",
            ],
            37 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Outros Créditos",
                "tp_item"         => "Outros impostos a recuperar",
            ],
            38 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Outros Créditos",
                "tp_item"         => "Operação em bolsa",
            ],
            39 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Outros Créditos",
                "tp_item"         => "Depósitos para garantia de operação a termo",
            ],
            40 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Outros Créditos",
                "tp_item"         => "Prêmios pagos – mercado de opções",
            ],
            41 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Outros Créditos",
                "tp_item"         => "Depósitos restituíveis e valores vinculados",
            ],
            42 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Outros Créditos",
                "tp_item"         => "(-) Provisão para créditos de liquidação duvidosa (conta credora)",
            ],
            43 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Outros Créditos",
                "tp_item"         => "(-) Provisão para perdas (conta credora)",
            ],
            44 => [
                "tp_type_desc"    => "Ativo",
                "tp_subtype_desc" => "Outros Créditos",
                "tp_item"         => "(-) Ajuste a valor presente (conta credora)",
            ],
        ];

        DB::table('types')->insert($data);
    }
}

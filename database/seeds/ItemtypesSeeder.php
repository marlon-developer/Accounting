<?php

use Illuminate\Database\Seeder;

class ItemtypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // tyoe_id
        // AC   = 1
        // ANC  = 2
        // PC   = 3
        // PNC  = 4
        // PL   = 5

        // subtype_id

        $data = [
            0  => [
                "type_id"    => "1",
                "subtype_id" => "1",
                "itp_desc"   => "Caixa",
            ],
            1  => [
                "type_id"    => "1",
                "subtype_id" => "1",
                "itp_desc"   => "Depósitos bancários a vista",
            ],
            2  => [
                "type_id"    => "1",
                "subtype_id" => "1",
                "itp_desc"   => "Numerários em transito",
            ],
            3  => [
                "type_id"    => "1",
                "subtype_id" => "1",
                "itp_desc"   => "Aplicações de liquidez imediata",
            ],
            4  => [
                "type_id"    => "1",
                "subtype_id" => "2",
                "itp_desc"   => "Duplicatas a receber",
            ],
            5  => [
                "type_id"    => "1",
                "subtype_id" => "2",
                "itp_desc"   => "Duplicatas a receber de Clientes",
            ],
            6  => [
                "type_id"    => "1",
                "subtype_id" => "2",
                "itp_desc"   => "Duplicatas a receber Controladas e coligadas – transações operacionais",
            ],
            7  => [
                "type_id"    => "1",
                "subtype_id" => "2",
                "itp_desc"   => "(-) Duplicatas descontadas (conta credora)",
            ],
            8  => [
                "type_id"    => "1",
                "subtype_id" => "2",
                "itp_desc"   => "(-) Provisão para créditos de liquidação duvidosa (conta credora)",
            ],
            9  => [
                "type_id"    => "1",
                "subtype_id" => "2",
                "itp_desc"   => "(-) Ajuste a valor presente (conta credora)",
            ],
            10 => [
                "type_id"    => "1",
                "subtype_id" => "2",
                "itp_desc"   => "(-) Faturamento para entrega futura (conta credora)",
            ],
            11 => [
                "type_id"    => "1",
                "subtype_id" => "2",
                "itp_desc"   => "Saques de exportação",
            ],
            12 => [
                "type_id"    => "1",
                "subtype_id" => "2",
                "itp_desc"   => "(-) Saques de exportação descontados (conta credora)",
            ],
            13 => [
                "type_id"    => "1",
                "subtype_id" => "3",
                "itp_desc"   => "Títulos a receber",
            ],
            14 => [
                "type_id"    => "1",
                "subtype_id" => "3",
                "itp_desc"   => "Títulos a receber - Clientes – renegociação de contas a receber",
            ],
            15 => [
                "type_id"    => "1",
                "subtype_id" => "3",
                "itp_desc"   => "Títulos a receber - Devedores mobiliários",
            ],
            16 => [
                "type_id"    => "1",
                "subtype_id" => "3",
                "itp_desc"   => "Títulos a receber - Empréstimos a receber de terceiros",
            ],
            17 => [
                "type_id"    => "1",
                "subtype_id" => "3",
                "itp_desc"   => "Títulos a receber - Títulos descontados (conta credora)",
            ],
            18 => [
                "type_id"    => "1",
                "subtype_id" => "3",
                "itp_desc"   => "Títulos a receber - Receitas financeiras a transcorrer",
            ],
            19 => [
                "type_id"    => "1",
                "subtype_id" => "3",
                "itp_desc"   => "Cheques em cobrança",
            ],
            20 => [
                "type_id"    => "1",
                "subtype_id" => "3",
                "itp_desc"   => "Dividendos propostos a receber",
            ],
            21 => [
                "type_id"    => "1",
                "subtype_id" => "3",
                "itp_desc"   => "Bancos – contas vinculadas",
            ],
            22 => [
                "type_id"    => "1",
                "subtype_id" => "3",
                "itp_desc"   => "Juros a receber",
            ],
            23 => [
                "type_id"    => "1",
                "subtype_id" => "3",
                "itp_desc"   => "Adiantamentos a terceiros",
            ],
            24 => [
                "type_id"    => "1",
                "subtype_id" => "3",
                "itp_desc"   => "Créditos de funcionários - ",
            ],
            25 => [
                "type_id"    => "1",
                "subtype_id" => "3",
                "itp_desc"   => "Créditos de funcionários - Adiantamentos para viagens",
            ],
            26 => [
                "type_id"    => "1",
                "subtype_id" => "3",
                "itp_desc"   => "Adiantamentos para viagens - Adiantamentos para despesas",
            ],
            27 => [
                "type_id"    => "1",
                "subtype_id" => "3",
                "itp_desc"   => "Adiantamentos para viagens - Antecipação de salários e ordenados",
            ],
            28 => [
                "type_id"    => "1",
                "subtype_id" => "3",
                "itp_desc"   => "Adiantamentos para viagens - Empréstimos a funcionários",
            ],
            29 => [
                "type_id"    => "1",
                "subtype_id" => "3",
                "itp_desc"   => "Adiantamentos para viagens - Antecipação de décimo terceiro salário",
            ],
            30 => [
                "type_id"    => "1",
                "subtype_id" => "3",
                "itp_desc"   => "Adiantamentos para viagens - Antecipação de férias",
            ],
            31 => [
                "type_id"    => "1",
                "subtype_id" => "3",
                "itp_desc"   => "Impostos a recuperar",
            ],
            32 => [
                "type_id"    => "1",
                "subtype_id" => "3",
                "itp_desc"   => "Impostos a recuperar – IPI a compensar",
            ],
            33 => [
                "type_id"    => "1",
                "subtype_id" => "3",
                "itp_desc"   => "Impostos a recuperar – ICMS a compensar",
            ],
            34 => [
                "type_id"    => "1",
                "subtype_id" => "3",
                "itp_desc"   => "Impostos a recuperar – IRRF a compensar",
            ],
            35 => [
                "type_id"    => "1",
                "subtype_id" => "3",
                "itp_desc"   => "Impostos a recuperar – IR a restituir / Compensar",
            ],
            36 => [
                "type_id"    => "1",
                "subtype_id" => "3",
                "itp_desc"   => "Impostos a recuperar – IR diferido",
            ],
            37 => [
                "type_id"    => "1",
                "subtype_id" => "3",
                "itp_desc"   => "Impostos a recuperar – Outros impostos a recuperar",
            ],
            38 => [
                "type_id"    => "1",
                "subtype_id" => "3",
                "itp_desc"   => "Operação em bolsa",
            ],
            39 => [
                "type_id"    => "1",
                "subtype_id" => "3",
                "itp_desc"   => "Operação em bolsa – Depósitos para garantia de operação a termo",
            ],
            40 => [
                "type_id"    => "1",
                "subtype_id" => "3",
                "itp_desc"   => "Operação em bolsa – Prêmios pagos – mercado de opções",
            ],
            41 => [
                "type_id"    => "1",
                "subtype_id" => "3",
                "itp_desc"   => "Depósitos restituíveis e valores vinculados",
            ],
            42 => [
                "type_id"    => "1",
                "subtype_id" => "3",
                "itp_desc"   => "(-) Provisão para créditos de liquidação duvidosa (conta credora)",
            ],
            43 => [
                "type_id"    => "1",
                "subtype_id" => "3",
                "itp_desc"   => "(-) Provisão para perdas (conta credora)",
            ],
            44 => [
                "type_id"    => "1",
                "subtype_id" => "3",
                "itp_desc"   => "(-) Ajuste a valor presente (conta credora)",
            ],
            45 => [
                "type_id"    => "1",
                "subtype_id" => "4",
                "itp_desc"   => "Aplicações temporárias em ouro",
            ],
            46 => [
                "type_id"    => "1",
                "subtype_id" => "4",
                "itp_desc"   => "Títulos e valores mobiliários",
            ],
            47 => [
                "type_id"    => "1",
                "subtype_id" => "4",
                "itp_desc"   => "(-) Provisão para redução ao valor de mercado (conta credora)",
            ],
            48 => [
                "type_id"    => "1",
                "subtype_id" => "4",
                "itp_desc"   => "(-) Provisão para perdas (conta credora)",
            ],
            49 => [
                "type_id"    => "1",
                "subtype_id" => "5",
                "itp_desc"   => "Produtos acabados",
            ],
            50 => [
                "type_id"    => "1",
                "subtype_id" => "5",
                "itp_desc"   => "Mercadorias para revenda",
            ],
            51 => [
                "type_id"    => "1",
                "subtype_id" => "5",
                "itp_desc"   => "Produtos em elaboração",
            ],
            52 => [
                "type_id"    => "1",
                "subtype_id" => "5",
                "itp_desc"   => "Matérias- primas",
            ],
            53 => [
                "type_id"    => "1",
                "subtype_id" => "5",
                "itp_desc"   => "Matérias de acondicionamento de embalagem",
            ],
            54 => [
                "type_id"    => "1",
                "subtype_id" => "5",
                "itp_desc"   => "Materiais auxiliares",
            ],
            55 => [
                "type_id"    => "1",
                "subtype_id" => "5",
                "itp_desc"   => "Materiais semi-acabados",
            ],
            56 => [
                "type_id"    => "1",
                "subtype_id" => "5",
                "itp_desc"   => " Manutenção e suprimentos gerais",
            ],
            57 => [
                "type_id"    => "1",
                "subtype_id" => "5",
                "itp_desc"   => "Importação em andamento",
            ],
            58 => [
                "type_id"    => "1",
                "subtype_id" => "5",
                "itp_desc"   => "Mercadorias em transito",
            ],
            59 => [
                "type_id"    => "1",
                "subtype_id" => "5",
                "itp_desc"   => "Mercadorias entregues em consignação",
            ],
            60 => [
                "type_id"    => "1",
                "subtype_id" => "5",
                "itp_desc"   => "Almoxarifado",
            ],
            61 => [
                "type_id"    => "1",
                "subtype_id" => "5",
                "itp_desc"   => "Adiantamento a fornecedores",
            ],
            62 => [
                "type_id"    => "1",
                "subtype_id" => "5",
                "itp_desc"   => "(-) Provisão para redução ao valor de mercado (conta credora)",
            ],
            63 => [
                "type_id"    => "1",
                "subtype_id" => "5",
                "itp_desc"   => "(-) Provisão para perdas em estoques (conta credora)",
            ],
            64 => [
                "type_id"    => "1",
                "subtype_id" => "5",
                "itp_desc"   => "(-) Ajuste a valor presente (conta credora)",
            ],
            65 => [
                "type_id"    => "1",
                "subtype_id" => "6",
                "itp_desc"   => "Prêmios de seguros a apropriar",
            ],
            66 => [
                "type_id"    => "1",
                "subtype_id" => "6",
                "itp_desc"   => "Encargos financeiros a apropriar (desconto de duplicatas)",
            ],
            67 => [
                "type_id"    => "1",
                "subtype_id" => "6",
                "itp_desc"   => "Assinaturas e anuidades a apropriar",
            ],
            68 => [
                "type_id"    => "1",
                "subtype_id" => "6",
                "itp_desc"   => "Comissões e prêmios pagos antecipadamente",
            ],
            69 => [
                "type_id"    => "1",
                "subtype_id" => "6",
                "itp_desc"   => "Aluguéis pagos antecipadamente",
            ],
            70 => [
                "type_id"    => "1",
                "subtype_id" => "6",
                "itp_desc"   => "Outros custos e despesas pagos antecipadamente",
            ],
            71 => [
                "type_id"    => "2",
                "subtype_id" => "7",
                "itp_desc"   => "",
            ],
        ];

        DB::table('item_types')->insert($data);
    }
}

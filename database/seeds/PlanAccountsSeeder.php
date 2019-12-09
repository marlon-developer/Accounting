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
                "item_types_id" => "1",
            ],
            1  => [
                "item_types_id" => "2",
            ],
            2  => [
                "item_types_id" => "3",
            ],
            3  => [
                "item_types_id" => "4",
            ],
            4  => [
                "item_types_id" => "5",
            ],
            5  => [
                "item_types_id" => "6",
            ],
            6  => [
                "item_types_id" => "7",
            ],
            7  => [
                "item_types_id" => "8",
            ],
            8  => [
                "item_types_id" => "9",
            ],
            9  => [
                "item_types_id" => "10",
            ],
            10 => [
                "item_types_id" => "11",
            ],
            11 => [
                "item_types_id" => "12",
            ],
            12 => [
                "item_types_id" => "13",
            ],
            13 => [
                "item_types_id" => "14",
            ],
            14 => [
                "item_types_id" => "15",
            ],
            15 => [
                "item_types_id" => "16",
            ],
            16 => [
                "item_types_id" => "17",
            ],
            17 => [
                "item_types_id" => "18",
            ],
            18 => [
                "item_types_id" => "19",
            ],
            19 => [
                "item_types_id" => "20",
            ],
            20 => [
                "item_types_id" => "21",
            ],
        ];

        DB::table('item_types')->insert($data);
    }
}

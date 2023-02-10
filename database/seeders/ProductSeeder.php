<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert
        ([['name'=>'TV',
            'description'=>'Pantalla 80 pulgadas',
            'quantity'=>'10',
            'status'=>'sin estado',
            'seller_id'=>'',
            'created_at'=> date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s"),
            ],
           ]);
    }
}

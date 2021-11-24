<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaptopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('laptops')->insert([
        'name' => 'RX37000',
        'vid' => '1',
        'graphics_card' => 'RTX3070',
        'size' => '13',
        'cpu' => '5600',
        'price' => '1'
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VendorsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function generateRandomvendor(){
        $vendor = ['ASUS', 'ACER', 'MSI', 'AORUS', 'XPG', 'Lenovo', 'DELL', 'HP', 'Razer', 'APPLE'];
        return $vendor[rand(0, count($vendor) - 1)];
    }



public function run()
{
    $vendor=$this->generateRandomvendor();
    DB::table('vendor')->insert([
        'vendor' => $vendor,
        //'' => $,
        //'created_at' => $random_datetime,
        //'updated_at' => $random_datetime
    ]);
}
}



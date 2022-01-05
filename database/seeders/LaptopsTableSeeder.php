<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class LaptopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function generateRandomString($length = 10)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function generateRandomName()
    {
        $first_name = $this->generateRandomString(rand(2, 15));
        $first_name = strtolower($first_name);
        $first_name = ucfirst($first_name);
        $last_name = $this->generateRandomString(rand(2, 15));
        $last_name = strtolower($last_name);
        $last_name = ucfirst($last_name);
        $name = $first_name . " " . $last_name;
        return $name;
    }
    public function generateRandomgraphicscard()
    {
        $graphicscard = ['GeForce RTX3080',
                         'GeForce RTX3050 Ti',
                         'Intel UHD Graphics615',
                         'Intel lris Xe Graphics',
                         'GeForce RTX2060',
                         'GeForce RTX3060',
                         'GeForce RTX3050',
                         'GeForce RTX3070',
                         'GeForce GTX1660 Ti',
                         'GeForce RTX2070',
                         'INTEGRATED_IRIS_XE_GRAPHICS',
                         'GeForce GTX1650 Ti',
                         'MX350',
                         'Intel lris XE',
                         'Apple M1',
                         'Apple M1 Pro'];
        return $graphicscard[rand(0, count($graphicscard)-1)];
    }



        public function generateRandomcpu()
    {
        $cpu = ['AMD Ryzen9 5000 Series',
                '11th Gen Intel Core i9',
                'Intel Core i7-8500Y',
                'Intel Core i5-1135G7',
                'Intel Core i7-1165G7',
                'Intel Celeron N5100',
                'Intel Core i7-10750H',
                'Intel Core i7-11800H',
                'Intel Core i7-11375H',
                'Intel Core i5-11400H',
                'AMD Ryzen 9 5900HX',
                'Intel Core i7-9750H',
                'AMD Ryzen 7 5800H',
                'Intel Core i7-1075H',
                'Intel Core i5-10300H',
                'Intel Core i5-1165G7',
                'Intel Core i7-1185G7',
                'Intel Core i9-11900H',
                'Intel Core i5-1145G7',
                'Intel Core i7-11805H',
                'Apple M1',
                'Apple M1 Pro'];
        return $cpu[rand(0, count($cpu)-1)];
    }


    public function run()
    {
        for ($i = 0; $i < 500; $i++) {
            $name = $this->generateRandomName();
            $graphicscard = $this->generateRandomgraphicscard();
            $cpu = $this->generateRandomcpu();
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));

            DB::table('laptops')->insert([
                'name' => $name,
                'vid' => rand(1, 10),
                'graphics_card' => $graphicscard,
                'size' => rand(13,17),
                'cpu' => $cpu,
                'price' => rand(14000,130000),
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }

    }
}

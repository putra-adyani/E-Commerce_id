<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'samsung note 10',
                'price' => '16000000',
                'category' => 'mobile',
                'description' => 'a smartphone with 16gb ram and much more feature',
                'gallery' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3Yw8mdwOK0nuigzRObzCTL6SGwViiIgGL7U8ECrCHflCZr5wmkPK9zHp0prgjivMpGtznGiX-&usqp=CAc'
            ],
            [
                'name' => 'Tv samsung T6500',
                'price' => '4700000',
                'category' => 'TV',
                'description' => 'a tv and much more feature',
                'gallery' => 'https://images.samsung.com/is/image/samsung/id-fhd-t5500-ua43t6500akxxd-frontblack-229359102?$720_576_PNG$'
            ],
            [
                'name' => 'TV Polytron PLD32D',
                'price' => '2550000',
                'category' => 'TV',
                'description' => 'a tv polytron and much more',
                'gallery' => 'https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//98/MTA-10947373/polytron_tv_led_polytron_pld32d1850_-_32_inchi_-_pld_32_d1850_-_ready_full02_cq2zsl67.jpg'
            ],
            [
                'name' => 'Smart TV SHARP',
                'price' => '3500000',
                'category' => 'TV',
                'description' => 'a tv and much more feature',
                'gallery' => 'https://s1.bukalapak.com/img/19450106081/large/data.jpeg'
            ]
        ]);
    }
}

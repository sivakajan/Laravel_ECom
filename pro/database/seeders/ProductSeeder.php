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
        DB::table('product')->insert([
            'name'=>'apple',
            'price'=>'1000',
            'describtion'=>'good on',
            'category'=>'mobile',
            'gallary'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.lg.com%2Fin%2Fmobile-phones&psig=AOvVaw31SimD_3Sh5EChCMINzAcH&ust=1619109166784000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCIiJkrCJkfACFQAAAAAdAAAAABAD',
            
        ],
        [
            'name'=>'sony',
            'price'=>'100000',
            'describtion'=>'good watch daily',
            'category'=>'tv',
            'gallary'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.samsung.com%2Flevant%2Ftvs%2Ffull-hd-tv%2Ft5300-43-inch-full-hd-smart-tv-ua43t5300auxtw%2F&psig=AOvVaw01YJM-RR3QI6Q1hVMsLbuz&ust=1619110633089000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCJixkeuOkfACFQAAAAAdAAAAABAD',
            
        ],[
            'name'=>'sam',
            'price'=>'2000',
            'describtion'=>'tv illa mobils on',
            'category'=>'mobile',
            'gallary'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.lg.com%2Fin%2Fmobile-phones&psig=AOvVaw31SimD_3Sh5EChCMINzAcH&ust=1619109166784000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCIiJkrCJkfACFQAAAAAdAAAAABAD',
            
        ]
    );
    }
}

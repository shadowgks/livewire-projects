<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Continent;
use App\Models\Country;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //B Continents & Countries
        $continents = [
            ['name'=>'Europe'],
            ['name'=>'Africa'],
            ['name'=>'Asia'],
            ['name'=>'South America'],
            ['name'=>'North America']
        ];

        foreach ($continents as $key => $item) {
            Continent::factory()->create($item)
            ->each(function ($e){
                $e->countries()->saveMany(Country::factory(10)->make());
            });
        }//E

        //B Products
        Product::factory(100)->create();
    }
}

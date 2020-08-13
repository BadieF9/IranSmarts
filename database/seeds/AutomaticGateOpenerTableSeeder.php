<?php

use App\AutomaticGateOpener;
use App\AutomaticGateOpenerDetails;
use App\Product;
use Illuminate\Database\Seeder;

class AutomaticGateOpenerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Product::class, 20)->create(['category' => 'automatic-gate-opener'])->each(function ($products){
            $products->automaticGateOpener()->save(factory(AutomaticGateOpener::class)->make());
        });
    }
}

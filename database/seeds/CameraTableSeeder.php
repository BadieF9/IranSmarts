<?php

use App\Camera;
use App\CameraDetails;
use App\Product;
use Illuminate\Database\Seeder;

class CameraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Product::class, 20)->create(['category' => 'camera'])->each(function ($products){
            $products->camera()->save(factory(Camera::class)->make());
        });
    }
}

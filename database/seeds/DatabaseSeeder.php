<?php

use Illuminate\Database\Seeder;
use \App\User;
use \App\Product;
use \App\Camera;
use \App\CameraDetails;
use \App\AutomaticGateOpener;
use \App\AutomaticGateOpenerDetails;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            CameraTableSeeder::class,
            AutomaticGateOpenerTableSeeder::class
        ]);
    }
}

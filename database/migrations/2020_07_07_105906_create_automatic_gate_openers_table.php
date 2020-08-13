<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutomaticGateOpenersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('automatic_gate_openers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('products_id');
            $table->foreign('products_id')->references('id')->on('products')->onDelete('cascade');
            $table->string('weight')->nullable();
            $table->string('dimensions')->nullable();
            $table->string('casing')->nullable();
            $table->string('maximumLeafLength')->nullable();
            $table->string('maximumLeafWeight')->nullable();
            $table->string('powerSupply')->nullable();
            $table->string('maximumPower')->nullable();
            $table->string('openingTime')->nullable();
            $table->string('maximumTravel')->nullable();
            $table->string('operatingSpeed')->nullable();
            $table->string('maximumThrust')->nullable();
            $table->string('protectionDegree')->nullable();
            $table->string('dutyCycle')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('automatic_gate_openers');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cameras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('products_id');
            $table->foreign('products_id')->references('id')->on('products')->onDelete('cascade');
            $table->string('imageSensor')->nullable();
            $table->string('effectivePixels')->nullable();
            $table->string('scanningSystem')->nullable();
            $table->string('electronicShutterSpeed')->nullable();
            $table->string('minimumIllumination')->nullable();
            $table->string('snRatio')->nullable();
            $table->string('irDistance')->nullable();
            $table->string('irOnOffControl')->nullable();
            $table->string('irLEDs')->nullable();
            $table->string('audioIn')->nullable();
            $table->string('lensType')->nullable();
            $table->string('mountType')->nullable();
            $table->string('focalLength')->nullable();
            $table->string('maxAperture')->nullable();
            $table->string('angleOfView')->nullable();
            $table->string('focusControl')->nullable();
            $table->string('closeFocusDistance')->nullable();
            $table->string('rotation')->nullable();
            $table->string('pan')->nullable();
            $table->string('tilt')->nullable();
            $table->string('resolution')->nullable();
            $table->string('frameRate')->nullable();
            $table->string('videoOutput')->nullable();
            $table->string('dayNight')->nullable();
            $table->string('osd')->nullable();
            $table->string('backlightCompensation')->nullable();
            $table->string('wdr')->nullable();
            $table->string('gainControl')->nullable();
            $table->string('noiseReduction')->nullable();
            $table->string('whiteBalance')->nullable();
            $table->string('smartIR')->nullable();
            $table->string('certifications')->nullable();
            $table->string('audioInterface')->nullable();
            $table->string('alarmIO')->nullable();
            $table->string('powerSupply')->nullable();
            $table->string('powerConsumption')->nullable();
            $table->string('operatingConditions')->nullable();
            $table->string('storageConditions')->nullable();
            $table->string('vandalResistance')->nullable();
            $table->string('casing')->nullable();
            $table->string('dimensions')->nullable();
            $table->string('netWeight')->nullable();
            $table->string('grossWeight')->nullable();
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
        Schema::dropIfExists('cameras');
    }
}

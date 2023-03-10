<?php

use Illuminate\Database\Migrations\Migration;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motors', function (Blueprint $collection) {
            $collection->foreignId('kendaraan_id')->constrained('kendaraans')
            ->restrictOnDelete()
            ->cascadeOnUpdate();
            $collection->string('mesin');
            $collection->string('tipe_suspensi');
            $collection->string('tipe_transmisi');
            $collection->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motors');
    }
}

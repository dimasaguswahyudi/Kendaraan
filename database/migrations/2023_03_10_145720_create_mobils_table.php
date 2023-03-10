<?php

use Illuminate\Database\Migrations\Migration;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobils', function (Blueprint $collection) {
            $collection->foreignId('kendaraan_id')->constrained('kendaraans')
            ->restrictOnDelete()
            ->cascadeOnUpdate();
            $collection->string('mesin');
            $collection->string('kapasitas_penumpang');
            $collection->string('tipe');
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
        Schema::dropIfExists('mobils');
    }
}

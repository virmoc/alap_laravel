<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBejegyzesekTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bejegyzesek', function (Blueprint $table) {
            $table->id();
            $table->integer('tevekenyseg_id');
            $table->integer('osztaly_id');
            // $table->foreign('tevekenyseg_id')->references('tevekenyseg_id')->on('tevekenyseg');
            // $table->foreign('osztaly_id')->references('osztaly_id')->on('users');
            $table->boolean('allapot')->default(1)->change();
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
        Schema::dropIfExists('bejegyzesek');
    }
}

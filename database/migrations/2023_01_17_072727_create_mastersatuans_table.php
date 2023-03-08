<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMastersatuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mastersatuans', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('nama_satuan')->unique();
            $table->timestamps();
        });
        Schema::table('masterbarangs', function (Blueprint $table) {
            $table->bigInteger('satuan_id')->unsigned();
            $table->foreign('satuan_id')->references('id')->on('mastersatuans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mastersatuans');
    }
}

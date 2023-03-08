<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterbarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masterbarangs', function (Blueprint $table) {
            $table->string('kode_barang')->unique();
            $table->string('nama_barang');
            $table->integer('qty');
            $table->decimal('harga_beli',10,2);
            $table->decimal('harga_jual', 10,2);
            $table->timestamp('tanggal');    
        });
   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masterbarangs');
    }
}

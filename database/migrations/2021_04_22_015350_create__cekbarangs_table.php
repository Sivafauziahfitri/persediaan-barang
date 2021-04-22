<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCekbarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_cekbarangs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Kode_barang');
            $table->string('Nama_Supplier');
            $table->string('Nama_barang');
            $table->string('phone');
            $table->string('stock');
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
        Schema::dropIfExists('_cekbarangs');
    }
}

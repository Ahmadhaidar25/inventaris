<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Komentar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('komentar', function (Blueprint $table) {
        $table->uuid('id')->primary();
        $table->string('user_id');
        $table->uuid('barang_id');
        $table->string('parent');
        $table->string('komentar');
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
       Schema::dropIfExists('komentar');
   }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerjalanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perjalanans', function (Blueprint $table) {
            $table->id("id_perjalanan");
            $table->string("tanggal",50)->nullable();
            $table->string("jam",50)->nullable();
            $table->string("lokasi",100)->nullable();
            $table->bigInteger("suhu_tubuh")->nullable();
            $table->foreignId('user_id')
                    ->references('id')
                    ->on('users')
                    ->nullable()
                    ->constrained();
            $table->enum('status', ['menunggu', 'dalam perjalanan', 'sampai'])->nullable();
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
        Schema::dropIfExists('perjalanans');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history', function (Blueprint $table) {
            $table->id();
            $table->boolean('s1');
            $table->boolean('s2');
            $table->boolean('s3');
            $table->dateTime('waktu_tes');
            $table->unsignedBigInteger('id_hasil');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_hasil')->references('id')->on('hasil');
            $table->foreign('id_user')->references('id')->on('users');

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
        Schema::dropIfExists('history');
    }
}

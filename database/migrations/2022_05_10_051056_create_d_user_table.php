<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_user', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('user_name');
            $table->string('email_user');
            $table->string('password_user');

            $table->unsignedBigInteger('personel_id');
            $table->foreign('personel_id')->references('id_personel')->on('d_personel')->onDelete('cascade');

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
        Schema::dropIfExists('d_user');
    }
}

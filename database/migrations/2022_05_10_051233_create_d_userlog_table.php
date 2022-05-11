<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDUserlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_userlog', function (Blueprint $table) {
            $table->id('id_userlog');

            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('d_user')->onDelete('cascade');

            $table->dateTime('login_at');
            $table->dateTime('logout_at');
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
        Schema::dropIfExists('d_userlog');
    }
}

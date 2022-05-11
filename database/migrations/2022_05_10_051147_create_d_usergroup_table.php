<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDUsergroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_usergroup', function (Blueprint $table) {
            $table->id('id_usergroup');
            $table->string('name_usergroup');

            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_group');

            $table->foreign('id_user')->references('id_user')->on('d_user')->onDelete('cascade');
            $table->foreign('id_group')->references('id_group')->on('d_group')->onDelete('cascade');

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
        Schema::dropIfExists('d_usergroup');
    }
}

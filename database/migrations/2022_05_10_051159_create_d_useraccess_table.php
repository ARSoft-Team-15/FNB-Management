<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDUseraccessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_useraccess', function (Blueprint $table) {
            $table->id('id_useraccess');
            $table->string('access_token');

            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_access');

            $table->foreign('id_user')->references('id_user')->on('d_user')->onDelete('cascade');
            $table->foreign('id_access')->references('id_access')->on('d_access')->onDelete('cascade');
            
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
        Schema::dropIfExists('d_useraccess');
    }
}

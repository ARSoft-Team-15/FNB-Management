<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDGroupaccessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_groupaccess', function (Blueprint $table) {
            $table->id('id_groupaccess');
            $table->string('access_group');

            $table->unsignedBigInteger('id_group');
            $table->unsignedBigInteger('id_access');

            $table->foreign('id_group')->references('id_group')->on('d_group')->onDelete('cascade');
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
        Schema::dropIfExists('d_groupaccess');
    }
}

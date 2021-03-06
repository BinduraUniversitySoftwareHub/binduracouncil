<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInboxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inboxes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject');
            $table->integer('from')->unsigned();
            $table->integer('to')->unsigned();
            $table->integer('userId')->unsigned();
            $table->string('status')->default('pending');
            $table->timestamps();
            $table->foreign('userId')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('to')->references('id')->on('departments')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('from')->references('id')->on('departments')->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inboxes');
    }
}

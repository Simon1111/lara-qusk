<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('company_id');
            $table->string('text');
            $table->string('title');
            $table->string('image');
            $table->integer('shows');
            $table->integer('click');
            $table->integer('limit');
            $table->integer('lid');
            $table->integer('ctr');
            $table->integer('cpm');
            $table->integer('price');
            $table->integer('status');
            $table->timestamps();

            $table->foreign('company_id')->references('id')->on('company')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads');
    }
}

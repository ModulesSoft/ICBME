<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->text('address')->nullable();
            $table->longText('description')->nullable();
            $table->integer('rating')->nullable();
            $table->text('link')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}

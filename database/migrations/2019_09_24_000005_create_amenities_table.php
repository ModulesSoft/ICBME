<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmenitiesTable extends Migration
{
    public function up()
    {
        Schema::create('amenities', function (Blueprint $table) {
            $table->increments('id');

            $table->text('name');

            $table->timestamps();

            $table->softDeletes();
        });
    }
}

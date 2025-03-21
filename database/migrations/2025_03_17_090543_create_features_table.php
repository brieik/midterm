<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturesTable extends Migration
{
    public function up()
    {
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Column for feature name
            $table->text('description'); // Column for feature description
           
        });
    }

    public function down()
    {
        Schema::dropIfExists('features');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('movies');
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('name_eng')->nullable();
            $table->unsignedBigInteger('views')->default(0);
            $table->float('rating')->nullable();
            $table->string('type')->nullable();
            $table->string('age_limit')->nullable();
            $table->integer('year')->nullable();
            $table->string('country')->nullable();
            $table->string('director')->nullable();
            $table->text('description')->nullable();
            $table->string('preview')->nullable();
            $table->string('video')->nullable();
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
        Schema::dropIfExists('movies');
    }
}

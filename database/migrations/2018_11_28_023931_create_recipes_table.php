<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('recipeTitle');
            $table->string('recipeCategory');
            $table->string('description');
            $table->string('author');
            $table->string('ingredient');
            $table->string('ingredientTwo');
            $table->string('steps');
            $table->string('timeEstimate');
            $table->string('nutritionFact');
            $table->string('imageUpload')->nullable();
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
        Schema::dropIfExists('recipes');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->string('type', 20);
            $table->tinyInteger('cooking_time');
            $table->smallInteger('weight');
            $table->text('description');
            $table->text('src');
            $table->text('src_h');
            $table->text('src_p');
            $table->timestamps();
            // inserire colonne necessarie
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

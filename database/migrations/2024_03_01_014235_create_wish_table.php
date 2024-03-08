<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWishTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wish', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->integer('stockQuantity')->nullable();
            $table->decimal('total')->nullable();
            $table->integer('product_id')->nullable();
            $table->boolean('is_value')->nullable();
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
        Schema::dropIfExists('wish');
    }
}

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
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('slug')->nullable();
            $table->string('image')->default('image-default/no_image.jpg');
            $table->integer('cate_id')->index()->default(0);
            $table->integer('price')->default(0);
            $table->tinyInteger('sale')->nullable();
            $table->integer('count')->default(0);
            $table->text('short_desc')->nullable();
            $table->text('detail')->nullable();
            $table->tinyInteger('star')->default(0);
            $table->integer('views')->default(0);
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('products');
    }
}

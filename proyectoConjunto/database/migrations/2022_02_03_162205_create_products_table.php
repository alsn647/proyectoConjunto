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
            $table->string('name', 30);
            $table->foreignId('category_id')->constrained();
            $table->string('description', 1000);
            $table->double('price');
            $table->double('tax');
            $table->double('discount');
            $table->double('stock');
            $table->boolean('visibility')->default('1');
            $table->boolean('offer')->default('0');

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

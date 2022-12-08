<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id('pro_id');
            $table->integer('cat_id');
            $table->integer('brand_id');
            $table->string('pro_name',50);
            $table->bigInteger('pro_price');
            $table->text('pro_img');
            $table->text('pro_unit');
            $table->text('pro_description');
            $table->boolean('pro_status')->default(1);
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
        Schema::dropIfExists('product');
    }
}

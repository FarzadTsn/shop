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
            $table->bigIncrements('id');
            $table->string('title');
            $table->longText('description')->nullable();
            $table->integer('mainprice')->nullable()->unsigned();
            $table->integer('offprice')->nullable()->unsigned();
            $table->integer('totalprice')->nullable()->unsigned();
            $table->string('size')->nullable();
            $table->string('color')->nullable();
            $table->enum('status',['instock','notexist','disactive','special']);
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

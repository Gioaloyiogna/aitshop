<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhysicalOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('physical_order_details', function (Blueprint $table) {
            $table->id();
            $table->string("basketTag");
            $table->string("productId");
            $table->timestamps();
            $table->foreign("basketTag")->references("basketTag")->on("physical_orders");
            $table->foreign("productId")->references("Id")->on("products");
        });
    }
  
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('physical_order_details');
    }
}
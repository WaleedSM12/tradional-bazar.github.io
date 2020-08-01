<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSizeMappingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_size_mappings', function (Blueprint $table) {
            $table->primary(['size_id', 'product_id']);
            $table->unsignedInteger('size_id');     //FK (compositekey)
            $table->unsignedInteger('product_id');  //FK
            $table->timestamps();

            $table->foreign('size_id')->references('id')->on('product_sizes');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_size_mappings');
    }
}

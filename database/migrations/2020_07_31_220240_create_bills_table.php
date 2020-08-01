<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('order_id'); //FK orders
            $table->unsignedInteger('coupan_id')->nullable(); // FK used for coupans
            $table->double('bill_amount', 18 , 2);
            $table->string('bill_address',200);
            $table->timestamps();

            $table->foreign('order_id')->references('id')->on('orders');
            $table->foreign('coupan_id')->references('id')->on('coupans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills');
    }
}

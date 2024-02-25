<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_services', function (Blueprint $table) {
            $table->id();
            $table->string('productServiceName');
            $table->integer('initiatedQuantity');
            $table->float('recurringFees');
            $table->float('additionalFees');
            $table->enum('recurringPeriod', ['Monthly', 'Yearly']);
            $table->unsignedBigInteger('addedBy');
            $table->foreign('addedBy')->references('id')->on('users');
            $table->dateTime('addedDate');
            $table->unsignedBigInteger('clientId');
            $table->foreign('clientId')->references('id')->on('clients');
            $table->enum('productServiceStatus', ['Active', 'Inactive']);
            $table->unsignedBigInteger('vendorId');
            $table->foreign('vendorId')->references('id')->on('vendors');
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
        Schema::dropIfExists('product_services');
    }
}

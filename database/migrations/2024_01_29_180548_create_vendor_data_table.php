<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('productServiceId');
            $table->foreign('productServiceId')->references('id')->on('product_services');
            $table->string('invoiceNo');
            $table->float('invoiceAmount');
            $table->integer('invoiceMonth');
            $table->integer('invoiceYear');
            $table->date('invoiceDate');
            $table->unsignedBigInteger('addedBy');
            $table->foreign('addedBy')->references('id')->on('users');
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
        Schema::dropIfExists('vendor_data');
    }
}

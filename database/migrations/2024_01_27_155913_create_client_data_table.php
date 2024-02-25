<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('productServiceId');
            $table->foreign('productServiceId')->references('id')->on('product_services');
            $table->unsignedBigInteger('clientId');
            $table->foreign('clientId')->references('id')->on('clients');
            $table->integer('month');
            $table->integer('year');
            $table->integer('quantity');
            $table->decimal('additionalQuantity', 10, 3); // Adjust precision and scale as needed
            $table->decimal('additionalCost', 15, 2); // Adjust precision and scale as needed
            $table->decimal('totalMonthlyDue', 15, 2); // Adjust precision and scale as needed
            $table->decimal('outstandingBalance', 15, 2); // Adjust precision and scale as needed
            $table->decimal('totalDue', 15, 2); // Adjust precision and scale as needed
            $table->unsignedBigInteger('addedBy');
            $table->foreign('addedBy')->references('id')->on('users');
            $table->unsignedBigInteger('updatedBy')->nullable();
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
        Schema::dropIfExists('client_data');
    }
}

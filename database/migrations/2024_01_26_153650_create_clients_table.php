<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('clientName');
            $table->string('clientLogo')->nullable();
            $table->string('contactName');
            $table->string('mobileNo');
            $table->string('email');
            $table->unsignedBigInteger('babAcctManagerId');
            $table->date('orderDate');
            $table->date('startDate');
            $table->string('bill_to');
            $table->unsignedBigInteger('addedBy');
            $table->foreign('addedBy')->references('id')->on('users');
            $table->date('addedDate');
            $table->enum('clientStatus', ['Active', 'Inactive']);
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
        Schema::dropIfExists('clients');
    }
}

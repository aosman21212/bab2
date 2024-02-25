<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBabacctmanagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('babacctmanagers', function (Blueprint $table) {
            $table->id();
            $table->string('AcctManagerName');
            $table->string('AcctManagerContact');
            $table->string('AcctManagerEmail');
            $table->enum('AcctManagerStatus', ['Active', 'Inactive']);
            $table->unsignedBigInteger('addedBy');
            $table->foreign('addedBy')->references('id')->on('users');
            // other columns...
            $table->timestamps(); // Adds 'created_at' and 'updated_at' columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('babacctmanagers');
    }
}

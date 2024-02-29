<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServiceTypeTable extends Migration {

	public function up()
	{
		Schema::create('ServiceType', function(Blueprint $table) {
			$table->increments('id');
			$table->string('TypeName', 225)->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('ServiceType');
	}
}
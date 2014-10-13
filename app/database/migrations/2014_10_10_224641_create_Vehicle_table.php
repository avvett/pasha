<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema:: create('vehicle',function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Model');
			$table->string('Brand');
			$table->string('type');
			$table->date('manufactureYear');
			$table->string('Description');
			$table->integer('pricePerDay');
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
		Schema::drop('vehicle');

	}

}

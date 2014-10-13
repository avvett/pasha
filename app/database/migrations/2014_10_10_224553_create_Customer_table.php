<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema:: create('customer',function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Firstname');
			$table->string('lastname');
			$table->string('Address');
			$table->date('Date of Birth');
			$table->string('Email');
			$table->integer('Phone');
			$table->string('Password');
			$table->enum('isAdmin' , array(0,1))->default(0);
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
		Schema::drop('customer');

	}

}

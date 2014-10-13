<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema:: create('Branch',function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('Name');
			$table->string('Address');
			$table->string('email');
			$table->date('startedYear');
			$table->string('Description');
			$table->integer('Phone');			
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
		Schema::drop('Branch');
	}

}

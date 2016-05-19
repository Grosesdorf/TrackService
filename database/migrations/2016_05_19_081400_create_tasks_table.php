<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tasks', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('makeTruck');
            $table->string('modelTruck');
            $table->string('licensePlate');
            $table->date('dateTechnicalInspection');
            $table->tinyInteger('isCheked');
            $table->integer('odometr');
            $table->string('greadeEngineOil');
            $table->string('service');
            $table->integer('nextServiceKm');
            $table->date('nextServiceDate');
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
		Schema::drop('tasks');
	}

}

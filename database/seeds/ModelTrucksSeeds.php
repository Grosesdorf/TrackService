<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ModelTrucksSeeds extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('modelTrucks')->delete();

		$modelTrucks = [['Title'=>'FH 13.400', 'idMakeTruck'=>1],
						['Title'=>'FH 12.420', 'idMakeTruck'=>1],
						['Title'=>'TGX', 'idMakeTruck'=>2],
						['Title'=>'TGA L37', 'idMakeTruck'=>2]
						];

		DB::table('modelTrucks')->insert($modelTrucks);
	}

}

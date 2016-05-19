<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MakeTrucksSeeds extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('makeTrucks')->delete();

		$makeTrucks = [	['Title'=>'VOLVO', 'Country'=>'Sweden', 'Type'=>'Truck'],
						['Title'=>'MAN', 'Country'=>'Germany', 'Type'=>'Truck'],
						['Title'=>'RENAULT', 'Country'=>'France', 'Type'=>'Truck'],
						];

		DB::table('makeTrucks')->insert($makeTrucks);
	}

}

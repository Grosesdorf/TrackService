<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model {

	protected $table='tasks';
    protected $fillable=['id', 
    					'makeTruck',
    					'modelTruck',
    					'licensePlate',
    					'dateTechnicalInspection',
    					'isCheked',
    					'odometr',
    					'greadeEngineOil',
    					'service',
    					'nextServiceKm',
    					'nextServiceDate'];
}

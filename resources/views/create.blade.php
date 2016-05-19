@extends('app')
@section('content')
	
    <form class="form-horizontal" role="form" method="POST" action='tasks/store'>
     	<div class="form-group">
        	<label for="inputMakeTruck" class="col-sm-2 control-label">Марка</label>
        	<div class="col-sm-10">
		    	<select id="inputMakeTruck" class="form-control" name="selectMakeTruck">
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
		    </div>
		</div>
		<div class="form-group">
        	<label for="inputModelTruck" class="col-sm-2 control-label">Модель</label>
        	<div class="col-sm-10">
		    	<select id="inputModelTruck" class="form-control" name="selectModelTruck">
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
		    </div>
		</div>
		<div class="form-group">
        	<label for="inputLicensePlate" class="col-sm-2 control-label">Гос. номер</label>
        	<div class="col-sm-10">
		    	<select id="inputLicensePlate" class="form-control" name="selectLicensePlate">
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
		    </div>
		</div>
		<div class="form-group">
        	<label for="inputGreadeOil" class="col-sm-2 control-label">Моторное масло</label>
        	<div class="col-sm-10">
		    	<select id="inputGreadeOil" class="form-control" name="inputGreadOil">
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
		    </div>
		</div>
		<div class="form-group">
        	<label for="inputService" class="col-sm-2 control-label">Моторное масло</label>
        	<div class="col-sm-10">
		    	<select id="inputService" class="form-control" name="inputService">
					<option value="1">1</option>
					<option value="2">2</option>
				</select>
		    </div>
		</div>
		<div class="form-group">
        	<label for="inputDateTechInspect" class="col-sm-2 control-label">Дата осмотра</label>
        	<div class="col-sm-10">
		    	<input type="date" id="inputDateTechInspect" name="dateTechInspect">
		    </div>
		</div>
		<div class="form-group">
        	<label for="inputOdometr" class="col-sm-2 control-label">Одометр</label>
        	<div class="col-sm-10">
		    	<input type="number" id="inputOdometr" name="odometr">
		    </div>
		</div>
        <input type="hidden" value="{{csrf_token()}}">
        <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Создать">
        <input class="btn btn-primary" type="reset" value="Очистить">
        </div>
    </form>

@endsection
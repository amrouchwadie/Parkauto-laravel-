@extends('layouts.app')

@section('styles')

@endsection

@section('content')

<div class="row mt-5">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <h3 class="card-titl">Ajouter l'Entretien </h3>
                <hr>
                
                    <form action="{{route('entretiens.index')}}" method="post" enctype="multipart/form-data">  
                    {{ csrf_field() }}       
                               
                        <div class="form-group">                          
                                 <input type="hidden" name="_token" value="{{Session::token()}}">                          
                        </div>

                        <Label><b>Model Voiture*</b></Label>
                        <select name="car_id" class="custom-select" id="car_id">
                                
                            @foreach ($cars as $car )                     
                                <option value="{{$car->id}}" >{{$car->model}}</option>                        
                            @endforeach
                        </select>
                        
                        <Label><b>Matriculation*</b></Label>
                    <select name="car_id" class="custom-select" id="car_id">
                            
                        @foreach ($cars as $car )                     
                            <option value="{{$car->id}}" >{{$car->registration}}</option>                        
                        @endforeach
                    </select>

                    <Label><b>Opération</b></Label>
                    <select name="alert_id" class="custom-select" id="alert_id">                     
                    @foreach ($alerts as $alert )                     
                        <option value="{{$alert->id}}" >{{$alert->label}}</option>                        
                    @endforeach
                </select>
                <div class="form-group">
                    <label for="date"><b> Date d'opération*</b></label>
                    <input type="date" placeholder="Date de fin" class="form-control" id="date" name="date">
                </div>
                <div class="form-group">
                    <label for="km"><b> Kilométrage*</b></label>
                    <input type="text" placeholder="Kilométrage" class="form-control" id="km" name="km">
                </div>


                           
                        
                        <button type="submit" class="btn btn-success">Ajouter l'entretien</button>
                    </form>

                
                
            </div>
        </div>
    </div> 
</div>


@endsection
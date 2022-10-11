@extends('layouts.app')

@section('styles')

@endsection

@section('content')

<div class="row mt-5">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-body">
                <h3 class="card-titl"><b> Ajouter une Nouvelle voiture </b></h3>
                <hr>

                    <form action="{{route ('cars.show',$cars->id)}}" method="post" enctype="multipart/form-data">
                      
                            <div  class="mb-3" >
                                <label for="alerts"><b> voiture* </b></label>
                                <select name="id_car" class="custom-select" id="id_car" disabled >voiture
                                   
                                         <option value="{{$cars->id}} {{ $cars->id ? 'selected' : '' }}"   >{{$cars->model}}</option>
                                    
                          
                                         
                                      </select>
                             </div>
                             <div  class="mb-3" >
                                
                                    <label for="alerts"><b> Operation* </b></label>
                                    <select name="id_alert[]" class="custom-select" id="id_alert"   >Operation
            
                                        @foreach ($alerts as $alert)
                                        @if($alert->label!="Changement de Croix" && $alert->label!="Vidange" )
                                        <option value="{{$alert->label}} {{ $alert->id ? 'selected' : '' }}"   id="op">{{$alert->label}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                 </div>
                                 <div class="form-group">
                                    <label for="date"><b> Date Operation* </b></label>
                                    
                                    <div class="input-group" >
                                    <input type="date" class="form-control" id="date" name="date[]" >
                                    <div id="addnew" class="input-group-append">
                                        <a href="javascript:new_link()" class="btn btn-success" class="input-group-text bg-transparent border-left-0" ><i class='bx bx-plus'></i> </a>   
                                    </div>
                                    </div>
                                   
                                   </div>
                                   <form method="post" action="">
                                    <div id="newlink">
                                    </div>
                                    
                                    </form>
                                     
                                       
                                    <button type="submit" class="btn btn-success">Editer</button> 
                                    
                            
                       
                    </form>
            </div>
        </div>
    </div>
</div>
<script>
    var ct = 1;
function new_link()
 {

  ct++;
  var div1 = document.createElement("div");
  div1.id = ct;
  // link to delete extended form elements
  var delLink =
    '<div  style="margin-left:94%" class="input-group-append"><a href="javascript:delIt(' +
    ct +
    ')" class="btn btn-danger" class="input-group-text bg-transparent border-left-0" style="border-radius: 10%" ><i class="bx bx-minus"></i></a></div>';
  div1.innerHTML = document.getElementById("newlinktpl").innerHTML + delLink;
  document.getElementById("newlink").appendChild(div1);
}
// function to delete the newly added set of elements
function delIt(eleId) {
  d = document;
  var ele = d.getElementById(eleId);
  var parentEle = d.getElementById("newlink");
  parentEle.removeChild(ele);
}
</script>
@endsection
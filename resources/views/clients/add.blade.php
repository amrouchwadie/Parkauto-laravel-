@extends('layouts.app')

@section('styles')

@endsection

@section('content')


<div class="row mt-5">
    <div class="col-md-5 mx-auto">
        <div class="">
            <div class="card-body">


                    <form action="{{route('clients.index')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <h4 class="class=mb-3"><b> Ajouter un client </b></h4>
                    <div style="float: right;margin-top: -6%" >
                    <button type="submit" class="btn btn-success">Ajouter </button>
                    </div>
                    <hr>
                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label for="first_name"><b> Prenom de Client*</b></label>
                            <input type="text" class="form-control" placeholder="Prenom de Client" id="first_name"  name="first_name" required>
                            <div class="invalid-feedback">
                                Entrer le Prénom S'il vous plait.
                              </div>

                            <input type="hidden" name="_token" value="{{Session::token()}}">

                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="first_name"><b> Nom de Client*</b></label>
                            <input type="text" placeholder="Nom de Client" class="form-control" id="last_name" name="last_name" required>
                            <div class="invalid-feedback">
                                Veuillez Entrer le Nom S'il vous plait.
                              </div>
                        </div>
                    </div>
                        <div class="mb-3">
                            <label for="address"><b> Adresse*</b></label>
                            <input type="text" placeholder="address " class="form-control" id="address" name="address">
                        </div>
                        <div class="mb-3">
                        <label for="Email"><b> Email*</b></label>
                        <input type="text" placeholder="Email" class="form-control" id="email" name="email">
                        <br>
                        <div class="mb-3">
                            <label for="telephone"><b> Telephone* </b></label>
                            <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Telephone" >
                        </div>
                        <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cin"><b>  CIN* </b></label>
                            <input type="text" class="form-control" id="cin" name="cin" placeholder="CIN" >
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="permit"><b> Numero de Permit* </b></label>
                            <input type="text" class="form-control" id="permit" name="permit" placeholder="Permit" >
                        </div>
                    </div>
                        <div class="mb-3" >
                            <label for="documents"><b> Documents* </b></label>
                            <select name="document_id[]" class="custom-select" id="documents"  >Documents
                                <option value="" id="op" ></option>
                                @foreach ($documents as $document)

                                <option value="{{$document->id}}" id="op">{{$document->label}}</option>


                            @endforeach

                        </select>
                        </div>

                            <br> <br>
                            <div class="row">
                                <div class="col">
                                    <input name="file[]" id="file" type="file" >
                                </div>
                                <div class="col">
                                    <div id="addnew">
                                <a href="javascript:new_link()" class="btn btn-outline-secondary btn-sm" style="border-radius: 30%">+ </a>
                            </div> <br>
                                </div>
                              </div>

                           <form method="post" action="">
                            <div id="newlink">
                            <div>


                            </form>
                            <!-- Template -->
                            <div id="newlinktpl" style="display:none">
                            <div>
                                <div class="form-group">
                                                        <label for="documents"><b> Documents* </b></label>
                                                        <select name="document_id[]" class="custom-select" id="documents"  >Documents
                                                            <option value="" id="op" ></option>
                                                            @foreach ($documents as $document)

                                                            <option value="{{$document->id}}" id="op">{{$document->label}}</option>

                                                        @endforeach

                                                    </select>
                                                    <br>
                                                        <br>
                                                        <input name="file[]" id="file" type="file" >
                                                       <br>
                            </div>
                            </div>

                        </div>


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
    '<div style="text-align:right;margin-right:65px"><a href="javascript:delIt(' +
    ct +
    ')" class="btn btn-outline-danger btn-sm" style="border-radius: 30%" >🗑️</a></div>';
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

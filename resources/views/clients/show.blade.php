@extends('layouts.app')

@section('styles')

@endsection

@section('content')

<div class="">
  <div class="">
      <div class="card">
          <div class="card-body">
<table style="border-collapse: collapse; width: 100%;" border="0" class="table-responsive-md">
  <tbody>
  <tr>
  <td  style="width: 33.3333%;"><p><h1><strong><b> Information Client</b></strong></h1></p><hr /></td>
  
  <td  style="width: 33.3333%;">&nbsp;</td>
  <td  style="width: 33.3333%;"></td>
  </tr>
  </tbody>
  </table>

<table style="border-collapse: collapse; width: 92.0661%; height: 67px;" border="0">
<tbody>
<tr>
  <td  style="width: 33.3333%;">Nom : <b>{{$clients->first_name}}</b></td>
  <td   style="width: 33.3333%;">Telephone : <b>{{$clients->telephone}} </b></td>

</tr>
<tr>
  <td   style="width: 33.3333%;">Prénom: <b>{{$clients->last_name}}</b></td>
  <td   style="width: 33.3333%;">Permit : <b>{{$clients->permit}}</b></td>
</tr>
<tr>
  <td   style="width: 33.3333%;">E-mail : <b>{{$clients->email}}</b></td>
  <td  style="width: 33.3333%;">CIN : <b>{{$clients->cin}}</b></td>
</tr>
<tr>
  <td   style="width: 33.3333%;">Addresse : <b>{{$clients->address}}</b></td>
  
</tr>
</tbody>
</table>
<strong><hr /></strong>
<div class="table-responsive-md">

<table class="table table-hover">
  
 <p><h1><strong> <b> Documents</b></strong></h1></p> 
    <thead> 
      <tr >
        <th  scope="col">Document</th>
        <th scope="col">file</th>
        <th style=" text-align: right;" >Action</th>
        <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach($clients->documents()->get() as $item)
                          <tr> 
                             <td >
                            
                            {{$item->label    }}
                     
                    </td>
                    <td>
                       
                      <a class="img-fluid " href="{{asset('images/'.$item->pivot->file)}}" download="{{asset('images/'.$item->file)}}" alt="" name="download"  > Telecharger </a>
                 
                </td>
                <td  style="text-align: right">  <a class="btn btn-success" href="{{ route('clidoc.edit',$item->pivot->id) }}">Editer</a></td>
                    <td  style="text-align: left">
                        <form action="{{ route('clidoc.delete', $item->pivot->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Supprimer</button>
                                  </form></td>
                                   
                     
                    </tr>
                       @endforeach
                </tbody>
            </table>
          </div>
          </div>
      </div>
    </div>
</div>      
            

@endsection
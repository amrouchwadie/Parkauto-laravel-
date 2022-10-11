@extends('layouts.app')

@section('styles')

@endsection

@section('content')
<table class="table table-striped">
  <thead>
      
    <tr>
      <th scope="col">#</th>
      <th scope="col">statut de voiture</th>
      <th scope="col">Action</th>
   

    </tr>
  </thead>
 
  <tbody>
    <br>
    <a href="/" class="btn btn-primary">précedent</a>
    <br>
    <br>
  @foreach($statuses as $status)
  <tr>
    
      <th scope="row">{{$status->id}}</th>
      <td>{{$status->label}}</td>
      
   
      <td>
      <form action="{{ route('statuses.destroy', $status->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit" onclick="return confirm('Etes-vous sûr de la suppression?');">Supprimer</button>
                </form></td>
     
      <td><a class="btn btn-primary" href="{{ route('statuses.edit',$status->id) }}">Editer</a></td>
    </tr>
    @endforeach
  </tbody>

</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    
    @endsection
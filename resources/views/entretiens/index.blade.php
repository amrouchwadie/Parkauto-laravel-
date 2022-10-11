@extends('layouts.app')

@section('styles')

@endsection

@section('content')
<table class="table table-striped">
  <thead>
      
    <tr>
      <th scope="col">#</th>
      <th scope="col">Model de Voiture</th>
      <th scope="col">Matriculation de Voiture</th>     
      <th scope="col">Opération</th>
      <th scope="col">Date d'opération  </th>
      <th scope="col">Kilométrage</th>
      <th scope="col">Action</th>
  
      
    </tr>
  </thead>
 
  <tbody>
    <br>
    <a href="/" class="btn btn-primary" style="margin-left: 2%;" >back</a>
    <br>
    <br>
  @foreach($entretiens as $entretien)
  <tr>
    
      <th scope="row">#</th>
      <td>{{$entretien->cars->model}}</td>
      <td>{{$entretien->cars->registration}}</td>
      
      <td>{{$entretien->alerts->label}}</td>
      <td>{{$entretien->date}}</td>
      <td>{{$entretien->km}}</td>
            
      

                         
      <td>
      <form action="{{ route('entretiens.destroy', $entretien->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit" onclick="return confirm('Etes-vous sûr de la suppression?');">Supprimer</button>
                </form></td>

      <td><a class="btn btn-primary" href="{{ route('entretiens.edit',$entretien->id) }}">Editer</a></td>
    </tr>
    @endforeach
  </tbody>

</table>
  
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    
    @endsection
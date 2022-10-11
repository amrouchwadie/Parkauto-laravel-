@extends('layouts.app')

@section('styles')

@endsection

@section('content')


<table class="table table-striped" style="width: 20%">
  <div class="container">
  <thead>

    <tr>
      <th scope="col">#</th>
      <th scope="col">Prenom</th>
      <th scope="col">Nom</th>
      <th scope="col">Adresse</th>
      <th scope="col">Email</th>
      <th scope="col">Telephone</th>
      <th scope="col">CIN</th>
      <th scope="col">Permit</th>
      {{-- <th scope="col">file</th> --}}
      <th scope="col">action</th>

    </tr>
  </thead>

  <tbody>
    <br>
    <a href="/" class="btn btn-primary" style="margin-left: 2%;" >Précedent</a>
    <br>
    <br>
  @foreach($clients as $client)
      <tr>
         {{-- @dd($client->documents()->get()) --}}
          <th scope="row">{{$client->id}}</th>
          <td>{{$client->first_name}}</td>
          <td>{{$client->last_name}}</td>
          <td>{{$client->address}}</td>

          <td>{{$client->email}}</td>
          <td>{{$client->telephone}}</td>
          <td>{{$client->cin}}</td>
          <td>{{$client->permit}}</td>
           


            {{-- <td>
          @foreach (\App\ClientDocument::where('id_client', $client->id)->get() as $item)

            
              <a class="img-fluid " href="{{asset('images/'.$item->file)}}" download="{{asset('images/'.$item->file)}}" alt=""  > Download </a>

              @endforeach
          </td> --}}
    {{--      @foreach ($client->documents as $document)--}}


    {{--          <img class="img-fluid " src="{{asset('images/'.$document->file)}}" alt=""  style="height: 180px;width: 100%;">--}}
    {{--          @endforeach--}}


        </td>
          <td>
          <form action="{{ route('clients.destroy', $client->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit" onclick="return confirm('Etes-vous sûr de la suppression?');">Supprimer</button>
                    </form></td>

          <td><a class="btn btn-primary" href="{{ route('clients.edit',$client->id) }}">Editer</a></td>
          <td><a class="btn btn-warning" href="{{ route('clients.show',$client->id) }}">Documents</a></td>
        </tr>
    @endforeach
  </tbody>
</div>
</table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


    @endsection

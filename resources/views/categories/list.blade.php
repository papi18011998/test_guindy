@extends('welcome')
@section('content')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Numero</th>
      <th scope="col">Categorie</th>
      <th scope="col">Suppression</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $categorie)
        <tr>
            <th scope="row">{{$categorie->id}}</th>
            <td>{{$categorie->nom}}</td>
            <td><a href="{{route('categories.delete',[$categorie->id])}}" class="btn btn-danger">Supprimer</a></td>
        </tr>
    @endforeach
  </tbody>
</table>


@endsection
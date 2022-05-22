@extends('welcome')
@section('content')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Numero</th>
      <th scope="col">Nom du produit</th>
      <th scope="col">Prix</th>
      <th scope="col">Categorie</th>
      <th scope="col">Modifier</th>
    </tr>
  </thead>
  <tbody>
    @foreach($produits as $produit)
        <tr>
            <th scope="row">{{$produit->id}}</th>
            <td>{{$produit->nom}}</td>
            <td>{{$produit->prix}}</td>
            <td>{{$produit->categorie->nom}}</td>
        </tr>
    @endforeach
  </tbody>
</table>


@endsection
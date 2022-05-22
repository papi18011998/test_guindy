@extends('welcome')
@section('content')

<form action="{{route('import')}}" method="post" enctype='multipart/form-data'>
    @csrf
<div class="card">
  <div class="card-header">
    Importation de fichier
  </div>
  <div class="card-body">
    <input type="file" name="file" id="">
    <input type="submit" value="Importer">
  </div>
</div>
</form>
@endsection
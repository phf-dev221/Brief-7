@extends('layout.nav')
@section('content')
<form action="/matiere/addForm" method="post">
  @csrf
  <div class="container">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nom de la matiere</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="nom_matiere">
  </div>
  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
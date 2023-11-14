
@extends('layout.nav')
@section('content')




<div class="container mt-5">
<form>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Matière</label>
    <select class="form-select" aria-label="Default select example" name="matiere">
    <option selected>Open this select menu</option>
    <option value="1">One</option>
  
</select>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Etudiant</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="etudiant" value="id de l'étudiant ici">

  </div>
  <div class="mb-3">Note</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="note">

  </div>
  <button type="submit" class="btn btn-primary">Modifier</button>
</form>
</div>

  @endsection
@extends('layout.nav')
@section('content')
<div class="container">
  <form action="/etudiant/ajouterEtudiant" method="post">
    @csrf
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Nom</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="nom">
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Prenom</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="prenom">

    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Date de naissance</label>
      <input type="date" class="form-control" id="exampleInputEmail1" name="date_naissance">

    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Classe</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="classe">

    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="sexe" id="flexRadioDefault1" value="homme">
      <label class="form-check-label" for="flexRadioDefault1">
        Homme
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="sexe" id="flexRadioDefault2" value="femme">
      <label class="form-check-label" for="flexRadioDefault2">
        femme
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
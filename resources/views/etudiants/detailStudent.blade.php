@extends('layout.nav')
@section('content')

<div class="container">
  <div class="card border-primary mb-3" style="max-width: 35rem;">
    <div class="card-header"> Etudiant {{$etudiants->id}}</div>
    <div class="card-body text-primary">
      <h5 class="card-title">Nom et prenom: {{$etudiants->nom}} {{$etudiants->prenom}}</h5>


      <p class="card-text">date de naisance: {{$etudiants->date_naissance}} </p>
      <p class="card-text">classe: {{$etudiants->classe}}</p>
      <p class="card-text">sexe: {{$etudiants->sexe}}</p>



    </div>
  </div>
</div>
<div class="container">
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Matiere</th>
        <th scope="col">Note</th>
        <th scope="col">Action</th>



      </tr>
    </thead>
    <tbody>
      @foreach ($evaluations as $evaluation)
      <tr>
        <td>{{$evaluation->matiere->nom}}</td>
        <td>{{$evaluation->note}}</td>
        <td>
          <a href="/etudiant/evaluation/{{$evaluation->id}}/edit" class="btn btn-primary">Edit</a>
          <a href="/etudiant/evaluation/{{$evaluation->id}}" class="btn btn-danger">Supprimer</a>


        </td>
      </tr>
      @endforeach


    </tbody>
  </table>
</div>
<div class="container mt-5">
  <form>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Matière</label>
      <select class="form-select" aria-label="Default select example" name="matiere">
        @foreach($matieres as $matiere)
        <option value="{{$matiere->id}}">{{$matiere->nom}}</option>
        @endforeach

      </select>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Etudiant</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="etudiant" value="{{$etudiants->id}}" placeholder="{{$etudiants->nom}}">

    </div>
    <div class="mb-3">Note</label>
      <input type="number" class="form-control" id="exampleInputEmail1" name="note">

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</div>

@endsection
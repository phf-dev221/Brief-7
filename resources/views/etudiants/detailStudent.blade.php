@extends('layout.nav')
@section('content')
<div class="container">
<div class="card border-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Student</div>
  <div class="card-body text-primary">
    <h5 class="card-title">Nom et prenom</h5>
    <p class="card-text">date de naisance</p>
    <p class="card-text">classe :</p>
    <p class="card-text">sexe:</p> 
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
    <tr>
      <td>Mark</td>
      <td>Otto</td>
      <td>
      <a href="" class="btn btn-danger">supprimer</a>
      <a href="" class="btn btn-secondary">Modifier</a>
    </td>
    </tr>
  </tbody>
</table>
</div>
<div class="container mt-5">
<form action="/evaluation/addForm" method="post">
  @csrf
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Matière</label>
    <select class="form-select" id="matiere" name="matiere_id">
     
      <option value="1">Maths</option> 
    
  </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Etudiant</label>
    <input type="text" class="form-select" id="etudiant" name="etudiant_id" value="1">
     
  
  </div>
  <div class="mb-3">Note</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="note">

  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</div>

@endsection
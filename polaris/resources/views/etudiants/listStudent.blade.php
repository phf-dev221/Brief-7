@extends('layout.nav')
@section('content')

<div class="container">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Niveau d'étude</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td><a href="" class="btn btn-info">Details</a>
      <a href="" class="btn btn-danger">supprimer</a>
      <!-- <a href="{{'/etudiant/updateStudent/'.$etudiant->id}}" class="btn btn-secondary">Modifier</a> -->
    </td>

    </tr>
  
  </tbody>
</table>
</div>
@endsection
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

      @foreachelse($allStudents as $student)
      @if(!$student->is_deleted)
      <tr>
        <th scope="row">$student->id</th>
        <td>$student->nom</td>
        <td>$student->prenom</td>
        <td>$student->classe</td>
        <td>
          <a href="/etudiant/detailStudent/{{$student->id}}'" class="btn btn-info">Details</a>
          <a href="" class="btn btn-danger">supprimer</a>
          <a href="" class="btn btn-secondary">Modifier</a>
        </td>

      </tr>
      @endif
      @empty
      aucun etudiant enregistrer
      @endforeach
    </tbody>
  </table>
</div>
@endsection
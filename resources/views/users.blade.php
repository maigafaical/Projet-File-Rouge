@extends('layouts.mainlayouts')

@section('contenu')




<section class="section">
  <div>

    @if (session('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif

    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Liste des Utilisateurs</h5>

           


            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nom Prénom</th>
                  <th scope="col">Email</th>
                  <th scope="col">Role</th>
                  <th scope="col">Actions </th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $users as $user )
                <tr>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->roles_id}}</td>

                  <td>
                    

                    <a href="{{ route('users.edit', $user->id ) }}" class="btn btn-info"><i class="bi bi-pencil-square" title="modifier"></i></a>
                    <a href="{{ route('users.show', $user->id ) }}" class="btn btn-success"><i class="bi bi-eye" title="détails"></i></a>
                    <a href="{{ url('supprimer-users/' .$user->id) }}" class="btn btn-danger"> <i class="bi bi-trash" title="supprimer"></i></a>
                    
                    

                  </td>
                </tr>
                @endforeach


              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>
@endsection

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
            <h5 class="card-title">Liste des Demandes de Renouvellemnent</h5>

           


            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Prénom</th>
                  <th scope="col">Motif </th>
                  <th scope="col">Statut</th>
                  <th scope="col">Actions </th>
                </tr>
              </thead>
              <tbody>
                @foreach ( $demandes as $demande )
                <tr>
                  <td>{{ $demande->id }}</td>
                  <td>{{ $demande->nom }}</td>
                  <td>{{ $demande->prenom }}</td>
                  <td>{{ $demande->motif }}</td>
                  <td>{{ $demande->statut }}</td>

                  <td>
                    

                    <a href="{{ route('demandes.edit', $demande->id ) }}" class="btn btn-info"><i class="bi bi-pencil-square" title="modifier"></i></a>
                    <a href="{{ route('demandes.show', $demande->id ) }}" class="btn btn-success"><i class="bi bi-eye" title="détails"></i></a>
                    <a href="{{ url('supprimer-demandes/' .$demande->id) }}" class="btn btn-danger"> <i class="bi bi-trash" title="supprimer"></i></a>
                    
                    

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

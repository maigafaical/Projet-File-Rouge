@extends('layouts.mainlayouts')

@section('contenu')
    <div class="pagetitle">
        <h1>Tableau Bord</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard">Accueil</a></li>
                <li class="breadcrumb-item active">Modification du statut de la demande</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <!-- Formulaire inscription etudiant -->

                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">Modification du statut de la demande </h5>

                                <form class="row g-3" method="POST" action="{{ route('demandes.update', $demandes->id) }}">
                                    @method('PATCH')
                                    @csrf
                                    <div class="col-md-12">
                                        <label for="inputName5" class="form-label">Motif</label>
                                        <input type="text" class="form-control" name="motif"
                                            value="{{ $demandes->motif }}">
                                    </div>

                                   <div class="col-md-12">
                                        <label for="inputName5" class="form-label">Statut</label>
                                        <select name="statut" class="form-select"
                                            value="{{ $demandes->statut }}">
                                            <option>En attente</option>
                                            <option>Accepté</option>
                                            <option>Rejetté</option>
                                        </select>    
                                    </div>

                                   

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                                        <button type="reset" class="btn btn-danger">Effacer</button>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                    <!-- End Formulaire inscription etudiant -->

                </div>
            </div>
            <!-- End Left side columns -->

        </div>
    </section>
    @include('require.footer')
@endsection

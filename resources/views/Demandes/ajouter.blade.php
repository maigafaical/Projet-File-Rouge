<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Demande</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('asset/img/favicon.png')}}" rel="icon">
  <link href="{{asset('asset/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="{{asset('https://fonts.gstatic.com')}}" rel="preconnect">
  
  <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i')}}" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('asset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('asset/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('asset/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('asset/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('asset/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('asset/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('asset/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('asset/css/style.css')}}" rel="stylesheet">
  

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Aug 30 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>
<body>
    

    <div class="pagetitle bg-info">

        <div>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="alert alert-danger"> {{ $error }}</li>
                @endforeach
            </ul>
            <h1>Formulaire de demande de renouvellement</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('acceuil')}}">Accueil</a></li>
                    <li class="breadcrumb-item active">Nouvelle Demande</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard bg-info">

            <div class="row">
                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Formulaire inscription etudiant -->

                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">
                                <div class="card-body">
                                    <h5 class="card-title">Faire ma demande </h5>

                                    <form method="POST" action="{{ route('demandes.store') }}" class="row g-3"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-md-6">
                                            <label for="inputName5" class="form-label">Nom </label>
                                            <input type="text" class="form-control" name="nom">
                                        </div>
                                        @csrf
                                        <div class="col-md-6">
                                            <label for="inputEmail5" class="form-label">Prénom</label>
                                            <input type="text" class="form-control" name="prenom">
                                        </div>



                                        <div class="col-md-6">
                                            <label for="validationCustom04">Sexe</label>
                                            <select class="form-control" id="validationCustom04" name="sexe" required>
                                                <option selected disabled value="">Choisir...</option>
                                                <option>Homme</option>
                                                <option>Femme</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Svp veuillez choisir votre genre!
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <label for="inputAddress5" class="form-label">Nationalité</label>
                                            <input type="text" class="form-control" name="nationalite">
                                        </div>


                                        <div class="col-6">
                                            <label for="inputAddress5" class="form-label">N*ProGres</label>
                                            <input type="text" class="form-control" name="numero_progres">
                                        </div>

                                        <div class="col-6 mt-5">
                                            <label for="inputName5" class="form-label">Photo de l'attestation de refugié </label>
                                            <input type="file" name="photo_attestation" class="form-control"
                                                placeholder="Attestation">
                                        </div>

                                        <div class="col-6">
                                            <label for="inputAddress5" class="form-label">Téléphone</label>
                                            <input type="number" class="form-control" name="telephone">
                                        </div>
                                        
                                        <div class="col-6">
                                            <label for="inputAddress5" class="form-label">Motif de la demande</label>
                                            <input type="text" class="form-control" name="motif">
                                        </div>



                                        <div class="col-6">

                                            <select name="statut" class="form-select" hidden>
                                                <option value="En attente">
                                                <option>
                                            </select>
                                        </div>

                                        



                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                                            <button type="reset" class="btn btn-danger">Annuler</button>
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
    </body>
    </html>

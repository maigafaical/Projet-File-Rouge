<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</head>
<body class="bg-dark">
  <div class="container">
    <div class="row px-3">
      <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
        <div class="img-left d-none d-md-flex">
            <img src="{{asset('assett/img/hcrbleu.jpg')}}" alt="">
        </div>

        <div class="card-body">
          <h4 class="title text-center mt-4">
            Bienvenue sur Refugee Plateform!
            Connectez-vous ou créer un compte!
          </h4>
          @if (Session::has('error'))
          <div class="alert alert-danger" role="alert">
              {{ Session::get('error') }}
          </div>
            
        @endif
        <form method="POST" class="form-box px-3" action="{{route('login')}}">
          @csrf
            <div class="form-input">
              <span><i class="fa fa-envelope-o"></i></span>
              <input type="email" name="email" placeholder="Adresse mail " tabindex="10" required>
            </div>
            <div class="form-input">
              <span><i class="fa fa-key"></i></span>
              <input type="password" name="password" placeholder="Mot de passe" required>
            </div>

            <div class="mb-3">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="cb1" name="">
                <label class="custom-control-label" for="cb1">Remember me</label>
              </div>
            </div>

            <div class="mb-3">
              <button type="submit" class="btn btn-block text-uppercase">
                Se connecter
              </button>
            </div>

            <div class="text-right">
              <a href="#" class="forget-link">
                Mot de passe oublié?
              </a>
            </div>


            <hr class="my-4">

            <div class="text-center mb-2">
              N'avez-vous pas de compte?
              <a href="{{route('register')}}" class="register-link">
                Créer en ici!
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
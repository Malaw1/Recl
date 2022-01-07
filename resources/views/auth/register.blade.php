<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/logo_msas.png')}}"/>

    <title>Dirpharme | Inscription</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <!-- Custom styles for this template -->
    <style>
        html,
        body {
        height: 100%;
        }

        body {
        -ms-flex-align: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;
        padding-top: 15px;
        padding-bottom: 0px;
        background-color: #f5f5f5;
        background-image: url('img/msas.jpg');
        background-size: cover;
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-position: center;
        height: 100%;
        }

        .form-signin {
        width: 100%;
        max-width: 530px;
        padding: 15px;
        margin: 0 auto;
        background-color: aliceblue;
        }
        .form-signin .checkbox {
        font-weight: 400;
        }
        .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
        }
        .form-signin .form-control:focus {
        z-index: 2;
        }
        .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        }

    </style>
</head>
<body class="text-center">
    <div class="form-signin">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
        <nav>
        <img class="mb-4" src="{{ asset('img/logo_msas.png') }}" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Laborex | Inscription</h1>
        <h5><p>Avez-vous déjà un compte ?<a href="{{ route('login') }}"> Se connecter</a></p></h5>
            <hr>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Laboratoire</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">

            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <form method="POST" action="{{ route('register') }}">
                    <br>
                    @csrf
                    <input type="hidden" value="labo" name="role">

                    <div class="form-group">
                        <label for="name" class="sr-only">Matricule</label>
                        <input type="number" placeholder="Matricule" required class="form-control" aria-describedby="textHelp" name="matricule">
                    </div>

                    <div class="form-group">
                        <label for="telephone" class="sr-only">Prenom</label>
                        <input type="text" placeholder="Prenom" required class="form-control" aria-describedby="textHelp" name="prenom">
                    </div>

                    <div class="form-group">
                        <label for="adresse" class="sr-only">Nom</label>
                        <input type="text" placeholder="Nom" required class="form-control" aria-describedby="textHelp" name="nom">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1" class="sr-only">Adresse mail</label>
                        <input type="email" required placeholder="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1" class="sr-only">Mot de passe</label>
                        <input type="password" required placeholder="Mot de passe" class="form-control" id="exampleInputPassword1" name="password">
                    </div>

                    <div class="form-group">
                        <label for="password2" class="d-block sr-only">Confirmer le mot de passe</label>
                        <input id="password-confirm" placeholder="Confirmer le mot de passe" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="termsChkbx_2" onchange="isChecked(this, 'sub1')" name="agree">
                            <label class="form-check-label" for="gridCheck">
                                Accepter les <a href="#" target="_blank">termes et conditions</a> d'utilisation
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block" id="sub2" disabled>S'insrire</button>
                </form>
            </div>
        </div>
    </div>

<script>
document.getElementById('termsChkbx').addEventListener('click', function (e) {
  document.getElementById('sub1').disabled = !e.target.checked;
});
</script>

<script>
document.getElementById('termsChkbx_2').addEventListener('click', function (e) {
  document.getElementById('sub2').disabled = !e.target.checked;
});
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

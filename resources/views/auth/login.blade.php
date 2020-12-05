<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Panel Administrativo</title>
    <base href="/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <link href="icon/coreui-icons.min.css" rel="stylesheet">
    <link href="icon/flag-icon.min.css" rel="stylesheet">
    <link href="icon/font-awesome.min.css" rel="stylesheet">
    <link href="icon/simple-line-icons.css" rel="stylesheet">



    <link href="css/style.css" rel="stylesheet">
    <link href="vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        // Shared ID
        gtag('config', 'UA-118965717-3');
        // Bootstrap ID
        gtag('config', 'UA-118965717-5');
    </script>

</head>




<body class="app flex-row align-items-center">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-group">
                <div class="card p-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="card-body">
                        <h1>Iniciar Sesión</h1>
                        <p class="text-muted">Ingresar su cuenta.</p>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-user"></i>
                    </span>
                            </div>
                            <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-lock"></i>
                    </span>
                            </div>

                            <input id="password" type="password"  placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <button class="btn btn-primary px-4" type="submit" (click)="routerlink()">Login</button>
                            </div>
                            <div class="col-6 text-right">



                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="card text-white bg-dark py-5 d-md-down-none" style="width:44%">
                    <div class="card-body text-center">
                        <div>
                            <h2>Kaira DevOps</h2>
                            <p></p>
                            <button class="btn btn-primary active mt-3" type="button">Register Now!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

<script src="js/jquery.min.js"></script>
<script src= js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/pace.min.js"></script>
<script src="js/perfect-scrollbar.min.js"></script>
<script src="js/coreui.min.js"></script>
<!-- Plugins and scripts required by this view-->
<!--  <script src="assets/js/charts.js"></script>-->
<script src="js/custom-tooltips.min.js"></script>
<script src="js/main.js"></script>
<script src="js/dropdown.js"></script>
{!! Html::script('js/dropdown.js') !!}
</html>

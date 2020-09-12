<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/back-office/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="/back-office/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/back-office/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href=""><b>Admin </b>MoveTrack</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Connectez-vous pour commencer la session</p>

            <form action="{{route('backend.connexion')}}" method="post">
                @method('POST')
                @csrf
                <div class="input-group mb-3  ">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="username" placeholder="Nom d'utilisation" value="{{old('username')}}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control @error('name') is-invalid @enderror" name="password" placeholder="Mot de passe">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                @error('name')
                    <div class="text-danger">
                        <span class="fas fa-warning"></span>
                        <span class="">
                            {{$message}}
                        </span>
                    </div>
                @enderror
                <div class="row">

                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                    </div>
                    <!-- /.col -->
                </div>
                <div class="col-12 mt-3">
                    <div class="icheck-secondary">
                        <input type="checkbox" id="remember">
                        <label for="remember">
                            Se rappeller de moi
                        </label>
                    </div>
                </div>
            </form>

{{--            <div class="social-auth-links text-center mb-3">--}}
{{--                <p>- OR -</p>--}}
{{--                <a href="#" class="btn btn-block btn-primary">--}}
{{--                    <i class="fab fa-facebook mr-2"></i> Sign in using Facebook--}}
{{--                </a>--}}
{{--                <a href="#" class="btn btn-block btn-danger">--}}
{{--                    <i class="fab fa-google-plus mr-2"></i> Sign in using Google+--}}
{{--                </a>--}}
{{--            </div>--}}
            <!-- /.social-auth-links -->

            <p class="mb-1">
                <a href="forgot-password.html">Mot de passe oublié</a>
            </p>
            <p class="mb-0">
{{--                <a href="register.html" class="text-center">Register a new membership</a>--}}
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="/back-office/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/back-office/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/back-office/dist/js/adminlte.min.js"></script>
</body>
</html>

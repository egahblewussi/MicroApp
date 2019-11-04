<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('asset/vendors/themify/css/themify-icons.css') }}" rel="stylesheet"/>
    <link href="{{ asset('asset/vendors/iCheck/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('asset/css/login.css') }}" rel="stylesheet">
</head>

<body id="sign-in">

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 login-form" style="margin-top: 70px">
            <div class="panel-header">
                <h2 class="text-center">
                    <img src="{{ asset('asset/img/pages/clear_black.png') }}" alt="Logo">
                </h2>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12">
                        <form method="POST" action="{{ route('login') }}">
                                {{csrf_field()}}
                            <div class="form-group">
                                    <input id="email" placeholder="Nom d'utilisateur" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                    <input id="password" placeholder="Mot de passe" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group checkbox">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('souviens-toi de moi') }}
                                    </label>
                            </div>
                            <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        {{ __('Connexion') }}
                                    </button>
                            </div>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('reset_path') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                             @endif
                            
                          </form>
                    </div>
                </div>
                <div class="row text-center social">
                    <div class="col-xs-12">
                 
                    </div>
                    <div class="row">  
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="col-xs-4">
                               
                             
                            </div>
                            <div class="col-xs-4">
                    
        
                               
                                </a>
                            </div>
                            <div class="col-xs-4">
                         
                               
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('asset/js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('asset/js/bootstrap.min.js' ) }}" type="text/javascript"></script>
<!-- end of global js -->
<!-- page level js -->
<script type="text/javascript" src="{{ asset('asset/vendors/iCheck/js/icheck.js') }}"></script>
<script src="{{ asset('asset/vendors/bootstrapvalidator/js/bootstrapValidator.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('asset/js/custom_js/login.js') }}"></script>

</body>

</html>

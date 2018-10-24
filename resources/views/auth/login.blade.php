
<!DOCTYPE html>
<html lang="hy">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EverTree - Login | Make the world greener</title>
    <link rel="stylesheet" type="text/css" href="{{asset('auth/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('auth/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('auth/css/mainreg.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('auth/css/logreg.css')}}">
</head>
<body>

    
    <div class="form-body" class="container-fluid">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="images/logo-light.svg" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                    <div class="bg" style="
                    background-color: #fff;
                    opacity: 1;
                "></div>                <div class="info-holder">
                    <h3 style="color:#5cbc7c"> Հանձնելով թուղթը դուք կփորկեք բնությանը։ </h3>
                    <p style="color:#39aa5e">Դուք ոչ միայն կկարողանաք ստանալ միավորներ և դրանցով գնել նոր ծառեր. այլ նաև կփորկեք բնությանը։</p>
                    <img src="auth/images/little.gif" alt="">                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="index.html">
                                <div class="logo">
                                    <img class="logo-size" src="images/logo-light.svg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="page-links">
                            <a href="/login" class="active">Մուտք</a><a href="/register">Գրանցվել</a>
                        </div>


                        <form method="POST" action="{{ route('login') }}">
                            @csrf
    
    
                                    <input id="email" type="email" placeholder="Էլ-հասցե" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
    
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
    
                                    <input id="password" placeholder="Ծածկագիր" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
    
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
    
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            Հիշեք ինձ
                                        </label>
                
                                    <div class="form-button">
                                            <button id="submit" type="submit" class="ibtn"> Մուտք</button>
                                   </div>

                                   <div class="other-links">
                                        <span><a href="{{ route('password.request') }}"> Մոռացել եք գաղտնաբա՞ռը</a></span>
                                    </div>

                        </form>

                        <div class="other-links">
                            <span>Մուտք սոց. ցանցերով</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="{{asset('auth/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('auth/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('auth/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('auth/js/main.js')}}"></script>



</body>
</html>

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
                    <div class="bg" style="background-color: #fff;opacity: 1;"></div>                
                    <div class="info-holder">
                    <h3 style="color:#5cbc7c"> Հանձնելով թուղթը դուք կփորկեք բնությանը։ </h3>
                    <p style="color:#39aa5e">Դուք ոչ միայն կկարողանաք ստանալ միավորներ և դրանցով գնել նոր ծառեր. այլ նաև կփորկեք բնությանը։</p>
                    <img src="auth/images/little.gif" alt="">                
                </div>

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
                            <a href="/login">Մուտք</a><a class="active" href="/register">Գրանցվել</a>
                        </div>
                       
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
    
                            <select id="actype" class="image-picker show-html" >
                                    <option data-img-src="http://127.0.0.1:8000/auth/images/little.gif" data-img-class="first" data-img-alt="Page 1" value="1">  Page 1  </option>
                                    <option data-img-src="http://127.0.0.1:8000/auth/images/little.gif" data-img-alt="Page 2" value="2">  Page 2  </option>
                                    <option data-img-src="http://127.0.0.1:8000/auth/images/little.gif" data-img-alt="Page 3" value="3">  Page 3  </option>

                                  </select>
                                  <div class="bd-example">
                                        <form>



                                          <div class="form-row">
                                            <div class="form-group col-md-6">


                                                <!-- Name --> 
                                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Անուն" value="{{ old('name') }}" required autofocus>

                                                    @if ($errors->has('name'))
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                <!-- Name --> 


                                            </div>

                                                <!-- SurName --> 

                                                <div class="form-group col-md-6">
                                                        <input id="surname" placeholder="Ազգանուն" type="text" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname') }}" required autofocus>

                                                        @if ($errors->has('surname'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('surname') }}</strong>
                                                            </span>
                                                        @endif                                                </div>
                                                <!-- SurName --> 

                                          </div>


                                           
                                          <div class="form-row">
                                                <div class="form-group col-md-4">

                                                    
                                                        <select aria-valuemax="" id="inp" name="province" class="form-control">
                                                                <option value="" disabled selected hidden>Մարզ</option>
    
        
                                                            @foreach($province as $provinces)
                                                              <option value="{{$provinces->name}}">{{$provinces->name}}</option>
                                                             @endforeach
                                                             <option value="Երևան">Երևան</option>

                                                        </select>
                                                      </div>

                                                <div class="form-group col-md-4">
                                                  <select name='city' id="inpProv" style="display: flex !important;" class="form-control">

                                                    <option value=""  disabled selected hidden>Քաղաք</option>


                                                        @foreach($city as $cityes)
                                                          <option value="{{$cityes->name}}">{{$cityes->name}}</option>
                                                         @endforeach
                                                  </select>
                                                </div>

                                                <div class="form-group col-md-4">


            <input id="tel" type="text" placeholder="Հեռ." class="form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}" name="tel" value="{{ old('tel') }}" required autofocus>
    
                                @if ($errors->has('tel'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                @endif
                                                </div>
                                              </div>


                                        
                                          <div class="form-group">
                                                <input id="address" placeholder="Հասցե" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus>
    
                                                @if ($errors->has('address'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('address') }}</strong>
                                                    </span>
                                                @endif
                                          </div>



                                          <div class="form-group">

                                          <input id="email" placeholder="Էլ. փոստ" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                          @if ($errors->has('email'))
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $errors->first('email') }}</strong>
                                              </span>
                                          @endif

                                        </div>



                                           
                                        <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    
                                                        <input placeholder="Ծածկագիր" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                                        @if ($errors->has('password'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                </div>

                                                <div class="form-group col-md-6">
                                                    
     <input id="password-confirm" placeholder="Ծածկագրի հաստատում" type="password" class="form-control" name="password_confirmation" required>

                                                </div>
                                        </div>

                                        <div class="form-button">
                                                <button id="submit" type="submit" class="ibtn">Գրանցվել</button>
                                            </div>                                        </form>
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
<script type="text/javascript" src="https://rvera.github.io/image-picker/image-picker/image-picker.js"></script>
<script type="text/javascript" src="https://rvera.github.io/image-picker/js/prettify.js
"></script>
<script>
        $("select").imagepicker({
            show_label  : false
          })
        </script>

<script type="text/javascript" src="{{asset('auth/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('auth/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('auth/js/main.js')}}"></script>


</body>
</html>
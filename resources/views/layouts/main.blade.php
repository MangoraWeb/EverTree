
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/global.css') }}"/>
    <link href="https://fonts.googleapis.com/css?family=Cabin+Condensed" rel="stylesheet">
    <title>EverTree</title>

    <link rel="stylesheet" href="https://html.crumina.net/html-olympus/css/main.min.css">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
@yield('header')
</head>
<body>

    <div class="album py-5">
    <div class="box container-fluid ">

                <div class="row">
                <div class="none col-xl-5 col-lg-4 col-md-3 hidden-xs row1" id="r1bg" style="@yield('secstyle') @yield('bgcolorweather')">
                          
                            <div class="ever">
                            <div class="header-wrap" style="@yield('sdnone')">
                                    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3">
                                   
                                        <div class="row col-md-12">

                                            <div class="col-md-7">
                                              <nav class="nav d-flex justify-content-between">
                                                    <a class="p-2 text-muted" href="#"><h2 class="activet">EverTree logo</h2></a>
                                            </nav>
                                            </div>
                                            <div class="col-md-5">
                                            <div style="display:inline-block; margin-top: 5px; float:right;" class="nav justify-content-end">
                                               <a href="#"><div style="float:left;" class="serch">
                                                  <img class="serch" src="{{asset('evertree/search.png')}}"/>
                                              </div>
                                              </a>
                                              <a style="float:right; text-decoration: none;"  href="/about"><h2 class="text1 p-2 text-muted">Մեր մասին</h2></a>
                                            </div>
                                          </div>
                                          </div>
                                        </div>
                            </div>
                            </div>


@yield('slider')
                       

                        </div> <!-- First row end -->


                        <div class="viwe col-sm-7 row2" style="@yield('rowbg') ">
                            
                                <div class="ever">
                                        <div class="header-wrap">
                                      
                                      
                                                <div class="d-flex flex-column flex-md-row p-3 px-md-4 mb-3">
                                               
                                                    @yield('menu')

                                                 
                                                              @if (Auth::check())

                                                              <div class="col-sm-6 col-md-4 nav justify-content-end">
                                                                   
                                                                <a href="{{route('profile')}}"> 
                                                                        <img class="avatar" src="{{asset('evertree/avatar.png')}}"/>
                                                                    </a>

                                                                    <a style="text-decoration: none;" class="p-2 text-muted" href="{{route('profile')}}">
                                                                    <h5 class="fls" style=" font-size: 12px;">
                                                                      {{ Auth::user()->name }} {{ Auth::user()->surname }}
                                                                    </h5>
                                                                    
                                                                    <h6 class="fls" style="font-size: 11px;">{{ Auth::user()->coins }} միավոր</h6></a>

                                                                      <a class="p-2 text-muted" href="{{ route('register') }}">
                                                                         <h2 class="text1">  
                                                                            <img style="position:relative; top:5px;" class="fls settings" src="{{asset('evertree/settings.png')}}"/>
                                                                         </h2></a>


                                                                         
                                                                        <h2 class="fls text1">  
                                                                          <div class="fls settings">
                                                                            <a style="position:relative; top:15px;" class="p-2 text-muted" href="{{ route('logout') }}"
                                                                            onclick="event.preventDefault();
                                                                                          document.getElementById('logout-form').submit();">
                                                                             <img class="fls logout" src="{{asset('evertree/exit.png')}}"/>
                                                                            </a>   </div>
         
                                                                        </h2>
                                     
                                                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                             @csrf
                                                                         </form></a>

                                                                  
                                                                   
                                                                              
                                                                  </div>
                                                                </div>

                                                                

                                                                   @else


                                                                   <div class="col-sm-5 col-md-4 nav justify-content-end">
                                                                        <a class="p-2 text-muted" href="{{ route('login') }}"><h2 class="text1">Մուտք</h2></a>
                                                                        <a class="p-2 text-muted" href="{{ route('register') }}"><h2 class="text1">Գրանցվել</h2></a>
                                                                        
                                                                        <div class="flags">
                                                                        <a href="#">
                                                                          <div class="arm d-flex">
                                                                          <img class="armflag " src="{{asset('evertree/001-armenia.png')}}"/>
                                                                        </a>
                                                                       
                                                                        <a href="#">
                                                                        <div class="eng">
                                                                        <img class="engflag" src="{{asset('evertree/002-uk.png')}}"/>
                                                                        </div>
                                                                      </a>
                                                                      </div>
                                                                    </div>   


                                                                  </div>
@endif
                                        </div>
                                    </div>
                                    @yield('content')
                                          </div>
                                        </div>
                      </div>

                     

                      <div class="rounded-circle contact img-responsive center-block">
                          <img class="chat" src="{{asset('evertree/chat.png')}}"/>
                      </div>
                      

    

          @yield('footer')
        </body>
</html>
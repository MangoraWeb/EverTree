@extends('layouts.main')
@section('header')
<link rel="stylesheet" href="{{asset('weather/css/style.css')}}">

<link rel="stylesheet" href="{{asset('webprofile/css/main.min.css')}}">
<link rel="stylesheet" href="{{asset('webprofile/css/blocks.css')}}" >
<link rel="stylesheet" href="{{asset('css/bootstrap-grid.css')}}" >
<link rel="stylesheet" href="{{asset('css/bootstrap-reboot.css')}}" >


<!-- Styles for plugins -->
<link rel="stylesheet" type="text/css" href="{{asset('webprofile/css/jquery.mCustomScrollbar.min.css')}}">
<link rel='stylesheet' href='{{asset('webprofile/css/simplecalendar.css')}}'/>
<link rel="stylesheet" type="text/css" href="{{asset('webprofile/css/bootstrap-select.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('webprofile/css/daterangepicker.css')}}">
@endsection

@section('slider')
<div class="background">
  <div class="weathercontainer" style="margin-top: 65px;">	
    <svg id="back">
      <radialGradient id="SVGID_1_" cx="0" cy="0" r="320.8304" gradientUnits="userSpaceOnUse">
        <stop  offset="0" style="stop-color:#FFDE17;stop-opacity:0.7"/>
        <stop  offset="1" style="stop-color:#FFF200;stop-opacity:0"/>
      </radialGradient>
      <path id="sunburst" style="fill:url(#SVGID_1_);" d="M0,319.7c-18.6,0-37.3-1.6-55.5-4.8L-7.8,41.4c5.1,0.9,10.6,0.9,15.7,0L56,314.8C37.6,318,18.8,319.7,0,319.7z
     M-160.8,276.6c-32.5-18.8-61.3-42.9-85.5-71.6L-34,26.2c3.4,4.1,7.4,7.4,12,10.1L-160.8,276.6z M161.3,276.4L22.1,36.2
    c4.5-2.6,8.6-6,12-10.1l212.6,178.5C222.5,233.4,193.8,257.6,161.3,276.4z M-302.5,108.3C-315.4,73-321.9,36-322-1.8l277.6-0.5
    c0,5.3,0.9,10.4,2.7,15.2L-302.5,108.3z M302.6,107.8L41.8,12.8c1.7-4.7,2.6-9.7,2.6-14.9c0-0.3,0-0.6,0-1H322l0-1.3l0,1.9
    C322,35.4,315.5,72.5,302.6,107.8z M-41.8-17.5l-261-94.5c12.8-35.4,31.6-68,55.8-96.9L-34.1-30.8C-37.5-26.8-40.1-22.3-41.8-17.5z
     M41.7-17.7c-1.8-4.8-4.4-9.3-7.8-13.3l212-179.2c24.3,28.8,43.3,61.3,56.3,96.6L41.7-17.7z M-22.2-40.8l-139.6-240
    c32.7-19,68.1-32,105.2-38.6L-8-46.1C-13-45.2-17.8-43.4-22.2-40.8z M22-40.9c-4.4-2.6-9.2-4.3-14.2-5.1l47.1-273.6
    c37.2,6.4,72.7,19.2,105.4,38L22-40.9z"/>
    </svg>

    <div id="card" class="weather">
      <svg id="inner">
        <defs>
          <path id="leaf" d="M41.9,56.3l0.1-2.5c0,0,4.6-1.2,5.6-2.2c1-1,3.6-13,12-15.6c9.7-3.1,19.9-2,26.1-2.1c2.7,0-10,23.9-20.5,25 c-7.5,0.8-17.2-5.1-17.2-5.1L41.9,56.3z"/>
        </defs>
        <circle id="sun" style="fill: #F7ED47" cx="0" cy="0" r="50"/>
        <g id="layer3"></g>
        <g id="cloud3" class="cloud"></g>
        <g id="layer2"></g>
        <g id="cloud2" class="cloud"></g>
        <g id="layer1"></g>
        <g id="cloud1" class="cloud"></g>
      </svg>
      <div class="details">
        <div class="temp">{{$celsius}}<span>c</span></div>
        <div class="right">
          <div id="date">{{$today->format('d/m/Y h:m')}}</div>
          <div id="summary"> {{$city}} </div>
        </div>
        
      </div>
    </div>
    <svg id="outer"></svg>
  </div>
  </div>

 

  @endsection
@section('menu')
<div  style="margin-top:6px;" class="col-sm-5 col-md-8 nav justify-content">

                                                              

    <a style="text-decoration: none;" class="p-2 text-muted" href="/handstep">
            <h2 class="text1">Թղթի հանձնում</h2>  
    </a>


    <a style="text-decoration: none;" class="p-2 text-muted active" href="/post">
      <h2 class="text1">Նորություններ</h2>  
</a>

@if (Auth::check())
<a style="text-decoration: none;" class="p-2 text-muted" href="/mygarden">
  <h2 class="text1">Իմ այգին</h2>  
</a>


<a style="text-decoration: none;" class="p-2 text-muted" href="/">
  <h2 class="text1">Ծանուցումներ<div class="notbox" style="
    float: right;
    margin: -4px 10px;
    background-color: #00c88e;
    padding: 5px 10px;
    color: #fff;
">0</div></h2>  
</a>

@else
<a style="text-decoration: none;" class="p-2 text-muted" href="/gardens">
  <h2 class="text1">Այգիներ</h2>  
</a>

@endif


  </div>
@endsection

@section('content')


<div class="container">
    
      </div>


      <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
         
      @if(!$news->isEmpty()) 
        @foreach($news as $article)
        <div class="ui-block">
    
            
            <!-- Post -->
            
            <article class="col-12 hentry blog-post blog-post-v3">
            
              <div class="post-thumb">
              <img src="/storage/articles/{{$article->image}}" >
              <a href="#" class="post-category bg-blue-light">
                  {{ $article->category }}       
                       </a>
              </div>
            
              <div class="post-content">
                  <a href="#" class="post-title"> 
                    
                    {{$article->title}}

                  </a>
                <div class="author-date">
                  <div class="post__date">
                    <time class="published" datetime="{{$article->created_at}}">
                       տեղադրվել է -  {{$article->created_at->format('d/m/Y')}}
                    </time>
                  </div>
                </div>
            
                <a href="#" class="h3 post-title"> 
                    {{$article->excerpt}}
                </p>
            
              </div>
            
            </article>
            
            <!-- ... end Post -->
    
          </div>
    
 @endforeach
 @else 
 <div class="no-past-events" style="
 padding: 273px 30px;
">
<svg class="olymp-month-calendar-icon"><use xlink:href="http://127.0.0.1:8000/webprofile/icons/icons.svg#olymp-month-calendar-icon"></use></svg>
<span> Նորություններ <br>չեն գտվնել</span>
</div>
 @endif

    
    
    
         
    
        </div>
        </div>
        <!-- /row -->

        
         

@endsection

@section('footer')
<script src="https://html.crumina.net/html-olympus/js/jquery-3.2.1.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.4.1/snap.svg-min.js'></script>
<script  src="{{asset('/weather/js/index.js')}}"></script>
<!-- JS Scripts -->
<script src="{{asset('/js/main.js')}}"></script>



@switch($status)
    @case('Clear')
       <script>
        changeWeather(weather[1]);
      </script>
        @break

        @case('Sunny')
        <script>
         changeWeather(weather[4]);
       </script>
         @break

         @case('Partly cloudy')
         <script>
          changeWeather(weather[1]);
        </script>
          @break

          @case('Cloudy')
          <script>
           changeWeather(weather[1]);
         </script>
           @break

           @case('Overcast')
          <script>
           changeWeather(weather[1]);
         </script>
           @break

           @case('Mist')
           <script>
            changeWeather(weather[1]);
          </script>
            @break

            @case('Thundery outbreaks possible')
            <script>
             changeWeather(weather[1]);
           </script>
             @break

             @case('Blowing snow')
             <script>
              changeWeather(weather[0]);
            </script>
              @break

              @case('Blizzard')
              <script>
               changeWeather(weather[0]);
             </script>
               @break

              @case('Fog')
              <script>
               changeWeather(weather[1]);
             </script>
               @break

               @case('Freezing fog')
               <script>
                changeWeather(weather[0]);
              </script>
                @break
                @case('Patchy light drizzle')
                <script>
                 changeWeather(weather[0]);
               </script>
                 @break
                 @case('Patchy light rain')
                 <script>
                  changeWeather(weather[2]);
                </script>
                  @break

                  @case('Light rain')
                  <script>
                   changeWeather(weather[2]);
                 </script>
                   @break

                  @case('Moderate rain at times')
                  <script>
                   changeWeather(weather[2]);
                 </script>
                   @break

                   @case('Moderate rain')
                   <script>
                    changeWeather(weather[2]);
                  </script>
                    @break


                   @case('Heavy rain at times')
                   <script>
                    changeWeather(weather[2]);
                  </script>
                    @break

                    @case('Heavy rain')
                    <script>
                     changeWeather(weather[2]);
                   </script>
                     @break
 
 
                     @case('Light freezing rain')
                     <script>
                      changeWeather(weather[2]);
                    </script>
                      @break


 
                     @case('Moderate or heavy freezing rain')
                     <script>
                      changeWeather(weather[2]);
                    </script>
                      @break
  


                     @case('Light sleet')
                     <script>
                      changeWeather(weather[2]);
                    </script>
                      @break

                      @case('Moderate or heavy sleet')
                      <script>
                       changeWeather(weather[2]);
                     </script>
                       @break


                      @case('Patchy light snow')
                      <script>
                       changeWeather(weather[0]);
                     </script>
                       @break


                      @case('Light snow')
                      <script>
                       changeWeather(weather[0]);
                     </script>
                       @break



                      @case('Patchy moderate snow')
                      <script>
                       changeWeather(weather[0]);
                     </script>
                       @break

                      @case('Moderate snow')
                      <script>
                       changeWeather(weather[0]);
                     </script>
                       @break

                      @case('Patchy heavy snow')
                      <script>
                       changeWeather(weather[0]);
                     </script>
                       @break

                      @case('Ice pellets')
                      <script>
                       changeWeather(weather[0]);
                     </script>
                       @break


                      @case('Light rain shower')
                      <script>
                       changeWeather(weather[2]);
                     </script>
                       @break


                      @case('Moderate or heavy rain shower')
                      <script>
                       changeWeather(weather[2]);
                     </script>
                       @break


                      @case('Torrential rain shower')
                      <script>
                       changeWeather(weather[2]);
                     </script>
                       @break


                      @case('Light sleet showers')
                      <script>
                       changeWeather(weather[2]);
                     </script>
                       @break



                      @case('Moderate or heavy sleet showers')
                      <script>
                       changeWeather(weather[2]);
                     </script>
                       @break


                      @case('Light snow showers')
                      <script>
                       changeWeather(weather[0]);
                     </script>
                       @break

                       @case('Moderate or heavy snow showers')
                       <script>
                        changeWeather(weather[0]);
                      </script>
                        @break

                        @case('Light showers of ice pellets')
                        <script>
                         changeWeather(weather[0]);
                       </script>
                         @break



                        @case('Moderate or heavy showers of ice pellets')
                        <script>
                         changeWeather(weather[3]);
                       </script>
                         @break


                         @case('Moderate or heavy showers of ice pellets')
                         <script>
                          changeWeather(weather[0]);
                        </script>
                          @break

                          @case('Patchy light rain with thunder')
                          <script>
                           changeWeather(weather[3]);
                         </script>
                           @break

                           @case('Moderate or heavy rain with thunder')
                           <script>
                            changeWeather(weather[3]);
                          </script>
                            @break
 
                            @case('Patchy light snow with thunder')
                            <script>
                             changeWeather(weather[3]);
                           </script>
                             @break

                             @case('Moderate or heavy snow with thunder')
                             <script>
                              changeWeather(weather[3]);
                            </script>
                              @break
    @default
    <script>
        changeWeather(weather[1]);
      </script>
@endswitch


<script>
document.getElementById("r1bg").classList.add('weathersecbg'); 
</script>




<script src="{{asset('js/theme-plugins.js')}}"></script>
<script src="https://html.crumina.net/html-olympus/js/jquery.appear.js"></script>
<script src="https://html.crumina.net/html-olympus/js/jquery.mousewheel.js"></script>
<script src="https://html.crumina.net/html-olympus/js/perfect-scrollbar.js"></script>
<script src="https://html.crumina.net/html-olympus/js/jquery.matchHeight.js"></script>
<script src="https://html.crumina.net/html-olympus/js/jquery.magnific-popup.js"></script>
<script src="https://html.crumina.net/html-olympus/Bootstrap/dist/js/bootstrap.bundle.js"></script>
@endsection
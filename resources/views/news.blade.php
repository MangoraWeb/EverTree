@extends('layouts.main')


@section('header')





<link rel="stylesheet" href="{{asset('webprofile/css/main.min.css')}}">
<link rel="stylesheet" href="{{asset('css/fonts.min.css')}}" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('webprofile/css/blocks.css')}}" >
<link rel="stylesheet" href="{{asset('css/bootstrap-grid.css')}}" >
<link rel="stylesheet" href="{{asset('css/bootstrap-reboot.css')}}" >
<!-- Main Font -->
<script src="{{asset('webprofile/js/webfontloader.min.js')}}"></script>
<script>
  WebFont.load({
    google: {
      families: ['Roboto:300,400,500,700:latin']
    }
  });
</script>
<!-- Styles for plugins -->
<link rel="stylesheet" type="text/css" href="{{asset('webprofile/css/jquery.mCustomScrollbar.min.css')}}">
<link rel='stylesheet' href='{{asset('webprofile/css/fullcalendar.css')}}'/>
<link rel='stylesheet' href='{{asset('webprofile/css/simplecalendar.css')}}'/>
<link rel="stylesheet" type="text/css" href="{{asset('webprofile/css/bootstrap-select.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('webprofile/css/daterangepicker.css')}}">


<link rel="stylesheet" type="text/css" href="{{asset('webprofile/css/fonts.css')}}">




@endsection



@section('slider')
<div class="container">
    <div class="row">
      <div class="col-xl-12">
        
        <div class="col-md-12 roundeds">
          <img class="big-logo rounded mx-auto d-block center-block" src="evertree/43333376_579577592462250_96139591630716928_n.png">
          <p class="headling">ԱՄԵՆ ԹՂԹԻ ԿՏՈՐ ԿՏՐՎԱԾ ԾԱՌԻ ՄԻ ՄԱՍ Է</p>
        </div>


        <div class="col-md-12 roundeds">
            <h3 class="slogan">
             <div class="pass"> ԱՎԵԼԱՑՐՈւ՛, <br> ԿՅԱՆՔ <br>
              <div class="active">ԲՆՈւԹՅԱՆԸ</div> <br> </h3>
            <div class="col-md-10 quote">
              «Մարդիկ հավանաբար չգիտեն, որ 60 կիլոգրամ
                թուղթը  արժե  մեկ  ծառ։  Թղթի  վերամշակման
                ուղղությամբ  այսօր քիչ մարդիկ են աշխատում։
                Հանձնելով՝  որպես   աղբ  դիտարկվող  թուղթը,
                դուք   կկարողանաք  կյանք  տալ  բնությանը։»
            </div>
        </div>

      </div>
    </div>
  </div>

@endsection
@section('menu')
<div  style="margin-top:6px;" class="col-sm-5 col-md-8 nav justify-content">

                                                              

    <a style="text-decoration: none;" class="p-2 text-muted" href="/handstep">
            <h2 class="text1">Թղթի հանձնում</h2>  
    </a>

    <a style="text-decoration: none;" class="p-2 text-muted" href="/news">
      <h2 class="active  text1">Նորություններ</h2>  
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
    <div class="container">
        <div class="row">
          <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="ui-block responsive-flex1200">
              <div class="ui-block-title">
                <ul class="filter-icons">
                  <li>
                    <a href="#">
                      <img src="{{asset('webprofile/emoji/icon-chat2.png')}}" alt="icon">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="{{asset('webprofile/emoji/icon-chat3.png')}}" alt="icon">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="{{asset('webprofile/emoji/icon-chat4.png')}}" alt="icon">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="{{asset('webprofile/emoji/icon-chat5.png')}}" alt="icon">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="{{asset('webprofile/emoji/icon-chat6.png')}}" alt="icon">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="{{asset('webprofile/emoji/icon-chat7.png')}}" alt="icon">
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <img src="{{asset('webprofile/emoji/icon-chat8.png')}}" alt="icon">
                    </a>
                  </li>
                </ul>
                <div class="w-select">
                  <div class="title">Filter By:</div>
                  <fieldset class="form-group">
                    <div class="btn-group bootstrap-select form-control"><button type="button" class="btn dropdown-toggle btn-secondary" data-toggle="dropdown" role="button" title="All Categories"><span class="filter-option pull-left">All Categories</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">All Categories</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Favourite</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class=" dropdown-item" style="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Likes</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="selectpicker form-control" tabindex="-98">
                      <option value="NU">All Categories</option>
                      <option value="NU">Favourite</option>
                      <option value="NU">Likes</option>
                    </select></div>
                  <span class="material-input"></span></fieldset>
                </div>
      
               
      
                <form class="w-search">
                  <div class="form-group with-button is-empty">
                    <input class="form-control" type="text" placeholder="Search Blog Posts......">
                    <button>
                      <svg class="olymp-magnifying-glass-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-magnifying-glass-icon"></use></svg>
                    </button>
                  <span class="material-input"></span></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <div class="ui-block">
    
            
            <!-- Post -->
            
            <article class="col-12 hentry blog-post blog-post-v3">
            
              <div class="post-thumb">
                <img src="https://html.crumina.net/html-olympus/img/post1.jpg" alt="photo">
                <a href="#" class="post-category bg-blue-light">THE COMMUNITY</a>
              </div>
            
              <div class="post-content">
            
                <div class="author-date">
                  by
                  <a class="h6 post__author-name fn" href="#">Maddy Simmons</a>
                  <div class="post__date">
                    <time class="published" datetime="2017-03-24T18:18">
                      - 7 hours ago
                    </time>
                  </div>
                </div>
            
                <a href="#" class="h3 post-title">Here’s the Featured Urban photo of August! </a>
                <p>Here’s a photo from last month’s photoshoot. We had a lot of fun doing it and got really
                  awesome shots for the new summer catalog.
                </p>
            
                <div class="post-additional-info inline-items">
            
                  <ul class="friends-harmonic">
                    <li>
                      <a href="#">
                        <img src="{{asset('webprofile/emoji/icon-chat16.png')}}" alt="icon">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="{{asset('webprofile/emoji/icon-chat17.png')}}" alt="icon">
                      </a>
                    </li>
                  </ul>
                  <div class="names-people-likes">
                    26
                  </div>
            
                  <div class="comments-shared">
                    <a href="#" class="post-add-icon inline-items">
                      <svg class="olymp-speech-balloon-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-speech-balloon-icon"></use></svg>
                      <span>0</span>
                    </a>
                  </div>
            
                </div>
              </div>
            
            </article>
            
            <!-- ... end Post -->
    
          </div>
    
          <div class="ui-block">
    
            
            <!-- Post -->
            
            <article class="col-12 hentry blog-post blog-post-v3">
            
              <div class="post-thumb">
                <img src="https://html.crumina.net/html-olympus/img/post1.jpg" alt="photo">
                <a href="#" class="post-category bg-primary">OLYMPUS NEWS</a>
              </div>
            
              <div class="post-content">
            
                <div class="author-date">
                  by
                  <a class="h6 post__author-name fn" href="#">JACK SCORPIO</a>
                  <div class="post__date">
                    <time class="published" datetime="2017-03-24T18:18">
                      - 12 hours ago
                    </time>
                  </div>
                </div>
            
                <a href="#" class="h3 post-title">Olympus Network added new photo filters!</a>
                <p>Here’s a photo from last month’s photoshoot. We had a lot of fun doing it and got really
                  awesome shots for the new summer catalog.
                </p>
            
                <div class="post-additional-info inline-items">
            
                  <ul class="friends-harmonic">
                    <li>
                      <a href="#">
                        <img src="{{asset('webprofile/emoji/icon-chat4.png')}}" alt="icon">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="{{asset('webprofile/emoji/icon-chat26.png')}}" alt="icon">
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <img src="{{asset('webprofile/emoji/icon-chat16.png')}}" alt="icon">
                      </a>
                    </li>
                  </ul>
                  <div class="names-people-likes">
                    82
                  </div>
            
                  <div class="comments-shared">
                    <a href="#" class="post-add-icon inline-items">
                      <svg class="olymp-speech-balloon-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-speech-balloon-icon"></use></svg>
                      <span>14</span>
                    </a>
                  </div>
            
                </div>
              </div>
            
            </article>
            
            <!-- ... end Post -->
    
          </div>
    
    
    
          
          <!-- Pagination -->
          
          <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1<div class="ripple-container"><div class="ripple ripple-on ripple-out" style="left: -10.3833px; top: -16.8333px; background-color: rgb(255, 255, 255); transform: scale(16.7857);"></div></div></a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">...</a></li>
              <li class="page-item"><a class="page-link" href="#">12</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
          
          <!-- ... end Pagination -->
    
        </div>
        </div>
        <!-- /row -->

        

        



@endsection
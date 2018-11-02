@extends('layouts.main')


@section('slider')
<div class="container">
    <div class="row">
      <div class="col-xl-12">
        
        <div class="col-md-12 roundeds">
          <img class="big-logo rounded mx-auto d-block center-block" src="{{asset('/images/big.png')}}">
          <p class="headling">ԱՄԵՆ ԹՂԹԻ ԿՏՈՐ ԿՏՐՎԱԾ ԾԱՌԻ ՄԻ ՄԱՍ Է</p>
        </div>


        <div class="col-md-12 roundeds">

            <h3 class="slogan">
             <div class="pass"> ԱՎԵԼԱՑՐՈւ՛, <br>
                ԿՅԱՆՔ<br>
        <div class="active">ԲՆՈւԹՅԱՆԸ</div><br> </h3>
        <div class="col-md-10 quote">
            «  Մարդիկ հավանաբար չգիտեն, որ 60 կիլոգրամ
              թուղթը  արժե  մեկ  ծառ։  Թղթի  վերամշակման
              ուղղությամբ  այսօր քիչ մարդիկ են աշխատում։
              Հանձնելով՝  որպես   աղբ  դիտարկվող  թուղթը,
              դուք   կկարողանաք  կյանք  տալ  բնությանը ։ »
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

    <a style="text-decoration: none;" class="p-2 text-muted active" href="/post">
      <h2 class="text1">Նորություններ</h2>  
</a>
  

@if (Auth::check())
<a style="text-decoration: none;" class="p-2 text-muted" href="/mygarden">
  <h2 class="active text1">Իմ այգին</h2>  
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
  <h2 class="active text1">Այգիներ</h2>  
</a>

@endif


  </div>
@endsection

@section('content')


<div class="container">
    <div class="col col-xl-12 m-auto col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="ui-block">
  
          
          <!-- Single Post -->
          
          <article class="hentry blog-post single-post single-post-v2" style="
          width: 100%;
      ">          
            <a href="#" class="post-category bg-green-light">{{$art->category}}</a>
            <h2 class="h1 post-title">{{$art->title}}</h2>

          
            <div class="post-thumb">
              <img src="{{asset($art->image)}}" alt="author">
            </div>
          
          
            <div class="post-content-wrap">
          
              <div class="post-content">
                
                <p class="etnews">{{$art->body}}</p>
          
            
   
          
          </article>
          
          <!-- ... end Single Post -->
  
         
       
        </div>
      </div>
</div>
@endsection
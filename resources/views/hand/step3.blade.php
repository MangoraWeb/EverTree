@extends('layouts.main')

@section('slider')
<div class="container">
    <div class="row">
      <div class="col-xl-12">
        
        <div class="col-md-12 roundeds">
          <img class="big-logo rounded mx-auto d-block center-block" src="{{asset('images/big.png')}}">
          <p class="headling">ԱՄԵՆ ԹՂԹԻ ԿՏՈՐ ԿՏՐՎԱԾ ԾԱՌԻ ՄԻ ՄԱՍ Է</p>
        </div>


        <div class="col-md-12 roundeds">

            <h3 class="slogan">
             <div class="pass"> ԱՎԵԼԱՑՐՈւ՛, <br>
                ԿՅԱՆՔ<br>
        <div class="active">ԲՆՈւԹՅԱՆԸ</div><br> </h3>
        <div class="txl col-md-10 quote">
            «  Մարդիկ հավանաբար չգիտեն, որ 60 կիլոգրամ
              թուղթը  արժե  մեկ  ծառ։  Թղթի  վերամշակման
              ուղղությամբ  այսօր քիչ մարդիկ են աշխատում։
              Հանձնելով՝  որպես   աղբ  դիտարկվող  թուղթը,
              դուք   կկարողանաք  կյանք  տալ  բնությանը ։ »
            </div>

        <img class="fly" src="{{asset('evertree/paperfly.png')}}"/>
        </div>
      </div>
    </div>
  </div>

@endsection
@section('menu')
<div  style="margin-top:6px;" class="col-sm-5 col-md-8 nav justify-content">

                                                              

    <a style="text-decoration: none;" class="p-2 text-muted" href="/handstep">
            <h2 class="active text1">Թղթի հանձնում</h2>  
    </a>

    <a style="text-decoration: none;" class="p-2 text-muted" href="/post">
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
<div class="coose mx-auto ">


    <div class="choose">
       <div class="loop container col-md-8 row-eq-height top">

      <div class="col-md-3 bg1 paper  activediv text-center">
          <img class="type" src="{{asset('evertree/activetype.png')}}"/>
          <h4 class="papertext active mx-auto">Թղթերի քանակը</h4>

      

        </div>

      
        <div class="col-md-3 bg2 paper activediv text-center">
          <img class="type" src="{{asset('evertree/activetype.png')}}"/>
          <h4 class="papertext active mx-auto">Հասցե</h4>

        </div>

        <div class="col-md-3 bg3 paper activediv text-center">
          <img class="type" src="{{asset('evertree/activetype.png')}}"/>
          <h4 class="papertext active mx-auto">Շնորհակալություն</h4>

      </div>


      <div class="forms container col-lg-11 ">

          <div class="row formbut">
             
        
            <h3 class="papertext active mx-auto">


                @if (Auth::check())
                
            Շնորհակալություն հարգելի {{Auth::user()->name}}։ Մեր թիմը ստացավ ձեր հայտը։ 
            Վերցնելուց հետո միավորները կփոխանցվեն Ձեր հաշվին։ <br>
              <a href="#">Իմ հաշիվը</a><br>
              <a href="#">Միավորների օգտագործում</a>

                @else

                Շնորհակալություն։ Դուք փոխանցեցիք մեզ {{$step1['count']}} կիլոգամ թուղթ։
                Միավորները կառավարելու համար խնդրում ենք գրանցվել։

                @endif
             
              
            </h3>

            
            
            </div>


</div>


@endsection
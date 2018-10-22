@extends('layouts.main')

<link rel="stylesheet" href="{{ asset('css/newsstyle.css') }}"/>


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

    <a style="text-decoration: none;" class="p-2 text-muted" href="/news">
      <h2 class="active  text1">Նորություններ</h2>  
</a>

@if (Auth::check())
<a style="text-decoration: none;" class="p-2 text-muted" href="/mygarden">
  <h2 class="text1">Իմ այգին</h2>  
</a>


<a style="text-decoration: none;" class="p-2 text-muted" href="/">
  <h2 class="text1">Ծանուցումներ</h2>  
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
        <!-- row -->
        <div class="row">	
            <!-- post -->
            @foreach($article as $art)

            <div class="col-md-6">
                <div class="post post-thumb">
                    <a class="post-img" href="{{url('news/'. $art->id )}}">
                        <img src="{{$art->pic}}" alt="">
                    </a>
                    <div class="post-body">
                        <div class="post-meta">
                            <a class="post-category cat-2" href="category.html">{{$art->category}}</a>
                            <span class="post-date">{{ date('d m Y', $art->created_at->timestamp) }}</span>
                        </div>
                        <h3 class="post-title"><a href="{{url('news/'. $art->id )}}">
                                {{$art->description}}
                        </a></h3>
                    </div>
                </div>
            </div>
            <!-- /post -->

            @endforeach

          
        </div>
        <!-- /row -->

        

        





     <!--   <div class="col-md-6">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                  <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">{{$art->category}}</strong>
                    <h3 class="mb-0">
                      <a style=" text-decoration:none;" class="text-dark head" href="#"><h2 style="font-size: 20px;">{{$art->title}}</h2></a>
                    </h3>
                    <div class="mb-1 text-muted">{{ date('d m Y', $art->created_at->timestamp) }}</div> 
                    <p class="card-text mb-auto">{{$art->description}}</p>
                    <a href="{{url('news/'. $art->id )}}">Շարունակել կարդալ</a>
                  </div>
                  <img class="card-img-right flex-auto d-none d-lg-block" style="width: 200px; height: 250px;" src="{{$art->pic}}" data-holder-rendered="true">
                </div>
              </div> -->




@endsection
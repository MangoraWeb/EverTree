@extends('layouts.main')

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

    <a style="text-decoration: none;" class="p-2 text-muted" href="/news">
      <h2 class="text1">Նորություններ</h2>  
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
<div class="coose mx-auto ">


    <div class="choose">
       <div class="container col-md-8 row-eq-height top">

      <div class="col-md-3 bg1 paper  activediv text-center">
          <img class="type" src="evertree/activetype.png"/>
          <h4 class="papertext active mx-auto">Թղթերի քանակը</h4>

      

        </div>

        <div class="col-md-3 bg2 paper text-center">
          <img class="type" src="evertree/type.png"/>
        </div>

        <div class="col-md-3 bg3 paper text-center">
          <img class="type" src="evertree/type.png"/>
       
      </div>


      <div class="forms container col-lg-11 ">
          
        
        
        
        <div class="row formbut">
            <form action="/handstep" method="post" class="col-md-12">
              {{ csrf_field() }}
            <div class="col-md-6 flo mb-3">
                <label for="count">Քանակը</label>
                @if ($errors->has('count'))
                <input type="text" name="count" class="form-control is-invalid" id="count" placeholder="" value="{{ old('count') }}" required="">
                <div class="invalid-feedback">
                    {{ $errors->first('count') }}</div>
                @else 
                <input type="text" name="count" class="form-control" id="count" placeholder="" value="{{ old('count') }}" required="">
               @endif
            </div>
            <div class="col-md-6 flo mb-3">
                <label for="unit">Չափման միավորը</label>

                @if ($errors->has('unit'))

                    <select value="{{ old('unit') }}"  required="" class=" is-invalid custom-select mr-sm-2" name="unit" id="unit">
                        <option value="Կիլոգրամ">Կիլոգրամ</option>
                        <option value="box">Արկղ</option>
                      <option value="ton">Տոննա</option>
                    </select>

                    <div class="invalid-feedback">
                        {{ $errors->first('unit') }}</div>

            </div>
                    @else 
                    <select value="{{ old('unit') }}"  required="" class="custom-select mr-sm-2" name="unit" id="unit">
                        <option value="kilogram">Կիլոգրամ</option>
                        <option value="box">Արկղ</option>
                      <option value="ton">Տոննա</option>
                    </select>

                    @endif
               
            </div>
          <button type="submit" class="but float-right btn btn-success" >ՀԱՋՈՐԴԸ ></button>

          </form>

            
      </div>


</div>
@endsection
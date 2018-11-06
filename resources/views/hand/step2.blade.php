@extends('layouts.main')



@section('slider')
<div class="container">
    <div class="row">
      <div class="sd col-xl-12">
        
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

                                            <div class="col-md-3 bg3 paper text-center">
                                              <img class="type" src="{{asset('evertree/type.png')}}"/>
                                           
                                          </div>

                                          <form action="{{route('step3post')}}" method="post" class="col-md-12">
                                                
                                              {{ csrf_field() }} 
                                          <div class="row row-eq-height top" style="margin-left: 7px;padding: 0px 20px 0px;margin-left: 6px;">                                              
                                            
                                        <div class="col-md-4 mb-3">
                                            <label for="province">Մարզ</label>
                                            <select name="province" class="custom-select d-block w-100" required="" id="province" required="">
                                                <option style="display: none;"selected disabled  value="">Ընտրեք մարզը</option>
                                                @foreach($provinces as $province)
                                                <option value='{{$province->id}}'>{{$province->name}}</option>                                                
                                                @endforeach
                                            <select>
                                        </div>

                                        <div class="col-md-4 mb-3">

                                          
                                              <label for="state">Քաղաք</label>
                                               <select name="city" class="custom-select d-block w-100" required="" id="city">
                                                  <option  style="display: none;" selected disabled  value="">Ընտրեք քաղաքը</option>
                                                @foreach($cities as $city)
                                                  <option data-group='{{$city->province_id}}' value='{{$city->name}}'>{{$city->name}}</option>
                                                @endforeach
                                               </select>
                                        </div>
                                          

                                            
                                            <div class="col-md-4 mb-3">
                                                <label for="tel">Հեռ.</label>
                                                @if(isset($tel))
                                                <input type="text" name="tel" class="form-control" value="{{$tel}}" id="tel">
                                                @else 
                                                <input type="text" name="tel" class="form-control" placeholder="+374" id="tel">
                                                @endif
                                          </div>

                                          <div class="col-md-12 mb-12">
                                            @if(isset($add))
                                              <input type="text" class="form-control" name="address" id="address" value="{{$add}}" required="">
                                            @else
                                            <input type="text" class="form-control" name="address" id="address" placeholder="Հասցե" required="">
                                            @endif
                                          </div>

                                          <div class="col-md-12 mb-12">
                                            <button type="submit" class="batrights2" >ՀԱՋՈՐԴԸ ></button>
                                          </div>

                                        </form>
                                    </div>

@endsection

@section('footer')

<script>
    $(function(){
      $('#province').on('change', function(){
          var val = $(this).val();
          var sub = $('#city');
          $('option', sub).filter(function(){
              if (
                   $(this).attr('data-group') === val 
                || $(this).attr('data-group') === 'SHOW'
              ) {
                  $(this).show();
              } else {
                  $(this).hide();
              }
          });
      });
      $('#province').trigger('change');
  });
    </script>


@endsection
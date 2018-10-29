@extends('layouts.main')

@section('header')
<link rel="stylesheet" href="{{asset('webprofile/css/main.min.css')}}">

@endsection
@section('secstyle')
padding:0;
@endsection
@section('sdnone')
display: none;
@endsection
@section('slider')
<div class="main-header main-landing" style="height: 100%; background-color: #60f3bd;">
	<div class="content-bg-wrap bg-landing"></div>
	<div class="container">
		<div class="row">
			<div class="col col-lg-6 m-auto col-md-12 col-sm-12 col-12" >
				<div class="main-header-content">

					<a href="#" class="logo">
						<div class="img-wrap">
							<img style="width:150px" src="{{asset('/evertree/43333376_579577592462250_96139591630716928_n.png')}}">
            </div>
          </a>
     

				</div>
			</div>
		</div>
	</div>
  <svg viewBox="0 0 3387 1270" style=" position: relative;top: 165px;">
    <path id="planePath" class="planePath" d="M-226 626c439,4 636,-213 934,-225 755,-31 602,769 1334,658 562,-86 668,-698 266,-908 -401,-210 -893,189 -632,630 260,441 747,121 1051,91 360,-36 889,179 889,179"></path>
    
    <g id="plane">
     <polygon class="fil1" points="-141,-10 199,0 -198,-72 -188,-61 -171,-57 -184,-57 "></polygon>
     <polygon class="fil2" points="199,0 -141,-10 -163,63 -123,9 "></polygon>
     <polygon class="fil3" points="-95,39 -113,32 -123,9 -163,63 -105,53 -108,45 -87,48 -90,45 -103,41 -94,41 "></polygon>
     <path class="fil4" d="M-87 48l-21 -3 3 8 19 -4 -1 -1zm-26 -16l18 7 -2 -1 32 -7 -29 1 11 -4 -24 -1 -16 -18 10 23zm10 9l13 4 -4 -4 -9 0z"></path>
     <polygon class="fil1" points="-83,28 -94,32 -65,31 -97,38 -86,49 -67,70 199,0 -123,9 -107,27 "></polygon>
    </g>
    <!-- Define the motion path animation -->
      <animateMotion xlink:href="#plane" dur="5s" repeatCount="indefinite" rotate="auto">
        <mpath xlink:href="#planePath"></mpath>
      </animateMotion>
  
  
  </svg>
 

</div>

@endsection


@section('menu')
<div  style="margin-top:6px;" class="col-sm-5 col-md-8 nav justify-content">

                                                              

    <a style="text-decoration: none;" class="p-2 text-muted" href="/handstep">
            <h2 class="text1">Թղթի հանձնում</h2>  
    </a>
    <a style="text-decoration: none;" class="p-2 text-muted" href="/post">
      <h2 class="text1">Նորություններ</h2>  
</a>

@if (Auth::check())
<a style="text-decoration: none;" class="p-2 text-muted" href="/mygarden">
  <h2 class="text1">Իմ այգին</h2>  
</a>


<a style="text-decoration: none;" class="p-2 text-muted" href="/">
  <h2 class="text1">Ծանուցումներ <div class="notbox" style="
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

@section('rowbg')
background-image: src('/images/armmapevertree.png');
background-image: url(&quot;/images/armmapevertree.png&quot;);
background-size: 230px;
background-repeat: no-repeat;
background-position: center;
@endsection

@section('content')
<div class="container">
        <!-- row -->
        <div class="row">	
            <div class="col-md-12">
                 
        
            </div>
           
        </div>
</div>
@endsection
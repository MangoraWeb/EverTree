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
        <div class="txl col-md-10 quote">
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


    <a style="text-decoration: none;" class="p-2 text-muted" href="/post">
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
<div id="featured_campaign_5be5a1cf5588a" class="cmsmasters_featured_campaign">    
    <article id="post-10838" class="post-10838 campaign type-campaign status-publish has-post-thumbnail hentry cp-categs-campaigns cp-categs-featured">
        <div class="cmsmasters_campaign_wrap_img"><figure class="cmsmasters_img_rollover_wrap preloader"><img width="300" height="300" src="http://eco-press.cmsmasters.net/wp-content/uploads/2016/06/featured-300x300.jpg" class="full-width wp-post-image" alt="Into the Green" title="Into the Green" srcset="http://eco-press.cmsmasters.net/wp-content/uploads/2016/06/featured-300x300.jpg 300w, http://eco-press.cmsmasters.net/wp-content/uploads/2016/06/featured-150x150.jpg 150w, http://eco-press.cmsmasters.net/wp-content/uploads/2016/06/featured-60x60.jpg 60w, http://eco-press.cmsmasters.net/wp-content/uploads/2016/06/featured-180x180.jpg 180w, http://eco-press.cmsmasters.net/wp-content/uploads/2016/06/featured-440x440.jpg 440w" sizes="(max-width: 300px) 100vw, 300px"><div class="cmsmasters_img_rollover"><a href="http://eco-press.cmsmasters.net/campaign/into-the-green/" title="Into the Green" class="cmsmasters_open_post_link cmsmasters_theme_icon_image"></a></div></figure></div><div class="cmsmasters_campaign_donated_percent"><div class="cmsmasters_stats stats_mode_bars stats_type_vertical shortcode_animated"><div class="cmsmasters_stat_wrap"><div class="cmsmasters_stat_inner_stat_info"><span class="cmsmasters_stat_counter_wrap"><span class="cmsmasters_stat_counter">8</span><span class="cmsmasters_stat_units">%</span><span class="cmsmasters_stat_title">Donated</span></span></div><div class="cmsmasters_stat_container"><div id="cmsmasters_stat_5be5a1cf56dd4" class="cmsmasters_stat" data-percent="8"><div class="cmsmasters_stat_inner"><span class="cmsmasters_stat_counter_wrap"><span class="cmsmasters_stat_counter">8</span><span class="cmsmasters_stat_units">%</span></span></div><canvas height="140" width="140"></canvas><canvas height="220" width="220"></canvas></div></div></div></div></div>	<div class="cmsmasters_campaign_cont">
            <div class="cmsmasters_campaign_wrap_heading">
                <header class="cmsmasters_campaign_header entry-header"><h2 class="cmsmasters_campaign_title entry-title"><a href="http://eco-press.cmsmasters.net/campaign/into-the-green/">Into the Green</a></h2></header><span class="cmsmasters_campaign_rest_amount">$ 11000 To Go</span>		</div>
            <div class="cmsmasters_campaign_content entry-content">
    <p>Cras dapibus ullamcorper dictum. Vivamus nec erat placerat felis scelerisque porttitor in ac turpis. In nec imperdiet turpis. Suspendisse quis orci ut orci pulvinar eleifend. Nulla eu mattis ipsum. Integer eget sagittis nulla. Praesent consectetur lacus et maximus eleifend. Integer non lacus dui. Mauris tortor diam, laoreet quis commodo vitae, sodales vel augue.</p></div>
    <div class="cmsmasters_campaign_donate_button"><div class="cmsmasters_campaign_donate_button_inner"><a class="button" href="http://eco-press.cmsmasters.net/donate-confirmation/?campaign_id=10838">Donate Now</a></div></div>	</div>
    </article>    
    </div>

@endsection

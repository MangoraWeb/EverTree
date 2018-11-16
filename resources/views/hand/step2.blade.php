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


<a style="text-decoration: none;" class="text-muted" href="/">
	<div class="control-icon more has-items" style="margin-top: 3px;">			
			<h2 class="text1" style="margin-left: 10px;margin-right: 10px;">Ծանուցումներ <svg class="olymp-thunder-icon" style="width: 15px;fill: #28b380;"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-thunder-icon"></use></svg>
			</h2>	
			<div class="evercolor"><p class="not label-avatar">8</p></div>

			<div class="more-dropdown more-with-triangle triangle-top-center">
				<div class="ui-block-title ui-block-title-small">
					<h6 class="title">Notifications</h6>
					<a href="#">Mark all as read</a>
					<a href="#">Settings</a>
				</div>

				<div class="mCustomScrollbar ps ps--theme_default ps--active-y" data-mcs-theme="dark" data-ps-id="97ca6b3f-e014-d09b-9a5d-5fa520de5e96">
					<ul class="notification-list">
						<li>
							<div class="author-thumb">
								<img src="img/avatar62-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<div><a href="#" class="h6 notification-friend">Mathilda Brinker</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 hours ago</time></span>
							</div>
								<span class="notification-icon">
									<svg class="olymp-comments-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
								</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
								<svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
							</div>
						</li>

						<li class="un-read">
							<div class="author-thumb">
								<img src="img/avatar63-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<div>You and <a href="#" class="h6 notification-friend">Nicholas Grissom</a> just became friends. Write on <a href="#" class="notification-link">his wall</a>.</div>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 hours ago</time></span>
							</div>
								<span class="notification-icon">
									<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
								<svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
							</div>
						</li>

						<li class="with-comment-photo">
							<div class="author-thumb">
								<img src="img/avatar64-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<div><a href="#" class="h6 notification-friend">Sarah Hetfield</a> commented on your <a href="#" class="notification-link">photo</a>.</div>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">Yesterday at 5:32am</time></span>
							</div>
								<span class="notification-icon">
									<svg class="olymp-comments-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
								</span>

							<div class="comment-photo">
								<img src="img/comment-photo1.jpg" alt="photo">
								<span>“She looks incredible in that outfit! We should see each...”</span>
							</div>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
								<svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img src="img/avatar65-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<div><a href="#" class="h6 notification-friend">Green Goo Rock</a> invited you to attend to his event Goo in <a href="#" class="notification-link">Gotham Bar</a>.</div>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 5th at 6:43pm</time></span>
							</div>
								<span class="notification-icon">
									<svg class="olymp-happy-face-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use></svg>
								</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
								<svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
							</div>
						</li>

						<li>
							<div class="author-thumb">
								<img src="img/avatar66-sm.jpg" alt="author">
							</div>
							<div class="notification-event">
								<div><a href="#" class="h6 notification-friend">James Summers</a> commented on your new <a href="#" class="notification-link">profile status</a>.</div>
								<span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">March 2nd at 8:29pm</time></span>
							</div>
								<span class="notification-icon">
									<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
								</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
								<svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
							</div>
						</li>
					</ul>
				<div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; height: 300px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 148px;"></div></div></div>

				<a href="#" class="view-all bg-primary">View All Notifications</a>
			</div>
		</div>
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
@section('partners')

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


@extends('layouts.main')

@section('header')
<link rel="stylesheet" href="{{asset('webprofile/css/main.min.css')}}">
<link rel="stylesheet" href="{{asset('webprofile/css/fonts.min.css')}}" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('webprofile/css/blocks.css')}}" >
<link rel="stylesheet" href="{{asset('css/bootstrap-grid.css')}}" >
<link rel="stylesheet" href="{{asset('css/bootstrap-reboot.css')}}" >
<link rel="stylesheet" type="text/css" href="{{asset('webprofile/css/bootstrap-reboot.css')}}">
<!-- Styles for plugins -->
<link rel="stylesheet" type="text/css" href="{{asset('webprofile/css/jquery.mCustomScrollbar.min.css')}}">
<link rel='stylesheet' href='{{asset('webprofile/css/fullcalendar.css')}}'/>
<link rel="stylesheet" type="text/css" href="{{asset('webprofile/css/bootstrap-select.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('webprofile/css/daterangepicker.css')}}">


@endsection

@section('rowbg')
background-color: #edf2f6;
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
									<svg class="olymp-comments-post-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-comments-post-icon"></use></svg>
								</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-three-dots-icon"></use></svg>
								<svg class="olymp-little-delete"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-little-delete"></use></svg>
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
									<svg class="olymp-happy-face-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-happy-face-icon"></use></svg>
								</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-three-dots-icon"></use></svg>
								<svg class="olymp-little-delete"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-little-delete"></use></svg>
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
									<svg class="olymp-comments-post-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-comments-post-icon"></use></svg>
								</span>

							<div class="comment-photo">
								<img src="img/comment-photo1.jpg" alt="photo">
								<span>“She looks incredible in that outfit! We should see each...”</span>
							</div>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-three-dots-icon"></use></svg>
								<svg class="olymp-little-delete"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-little-delete"></use></svg>
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
									<svg class="olymp-happy-face-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-happy-face-icon"></use></svg>
								</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-three-dots-icon"></use></svg>
								<svg class="olymp-little-delete"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-little-delete"></use></svg>
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
									<svg class="olymp-heart-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-heart-icon"></use></svg>
								</span>

							<div class="more">
								<svg class="olymp-three-dots-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-three-dots-icon"></use></svg>
								<svg class="olymp-little-delete"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-little-delete"></use></svg>
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
@section('slider')
<div class="container">
	<div class="row">


		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="top-header top-header-favorit">
            <div class="top-header-thumb content-bg-wrap bg-profile" style="height: 213px; background-image: url({{asset($user->cover)}});">
              <div class="top-header-author">
							<div class="author-thumb">
							<img src="{{asset($user->avatar)}}" alt="{{$user->name}}">
							</div>
							<div class="author-content">
								<a href="#" class="h3 author-name">{{$user->name}} {{$user->surname}}</a>
							<div class="description">{{$user->city}} {{$user->actype}}</div>
							</div>
						</div>
					</div>
					<div class="profile-section">
						<div class="row">
							<div class="col-xl-8 m-auto col-lg-8 col-md-12">
								@if($user->about == 'NULL')

								<ul class="widget w-personal-info item-block">

										<li>
                        <span class="title">Իմ մասին:</span>
												<span class="text">{{Auth::user()->about}}
												</span>
                    </li>

										</ul>

										@endif
							</div>
						</div>

						<div class="control-block-button">
							<div class="btn btn-control bg-primary more">
								<svg class="olymp-settings-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-settings-icon"></use></svg>
							<div class="ripple-container"></div></div>

							<a href="#" class="btn btn-control bg-purple">
								<svg class="olymp-chat---messages-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-share-icon"></use></svg>
							</a>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">

          <div class="ui-block">
              <div class="birthday-item inline-items badges">
                <div class="author-thumb">
                  <img src="{{asset('webprofile/img/badge14.png')}}" alt="author">
                </div>
                <div class="birthday-author-name">
                  <a href="#" class="h6 author-name">Բնությունը փրկող</a>
                  <div class="birthday-date">Տրվում է գնած 10 ծառի դիմաց</div>
                </div>

                <div class="skills-item">
                  <div class="skills-item-meter">
                    <span class="skills-item-meter-active skills-animate" style="width: 80%; opacity: 1;"></span>
                  </div>
                </div>

              </div>
            </div>

        <div class="ui-block">
          <div class="birthday-item inline-items badges">
            <div class="author-thumb">
              <img src="{{asset('webprofile/img/badge2.png')}}">
            </div>
            <div class="birthday-author-name">
              <a href="#" class="h6 author-name">Ակտիվ պաշտպան</a>
              <div class="birthday-date"> Տրվում է 15 հանձնման դիմաց </div>
            </div>

            <div class="skills-item">
              <div class="skills-item-meter">
                <span class="skills-item-meter-active skills-animate" style="width: 100%; opacity: 1;"></span>
              </div>
            </div>

          </div>
        </div>

        <div class="ui-block">
          <div class="birthday-item inline-items badges">
            <div class="author-thumb">
              <img src="{{asset('webprofile/img/badge3.png')}}" alt="author">
              <div class="label-avatar bg-green">0</div>
            </div>
            <div class="birthday-author-name">
              <a href="#" class="h6 author-name">EverTree կամավոր</a>
              <div class="birthday-date">Տրվում է կամավոր աշխատանքների <br> կատարման ժամանակ </div>
            </div>

            <div class="skills-item">
              <div class="skills-item-meter">
                <span class="skills-item-meter-active skills-animate" style="width: 0%; opacity: 1;"></span>
              </div>
            </div>

          </div>
        </div>

        <div class="ui-block">
						<div class="birthday-item inline-items badges">
							<div class="author-thumb">
								<img src="{{asset('webprofile/img/badge3.png')}}" alt="author">
								<div class="label-avatar bg-green">1</div>
							</div>
							<div class="birthday-author-name">
								<a href="#" class="h6 author-name">EverTree կամավոր</a>
								<div class="birthday-date">Տրվում է կամավոր աշխատանքների <br> կատարման ժամանակ </div>
							</div>

							<div class="skills-item">
								<div class="skills-item-meter">
									<span class="skills-item-meter-active skills-animate" style="width: 0%; opacity: 1;"></span>
								</div>
							</div>

						</div>
					</div>

      </div>
    </div>
  </div>
@endsection


@section('content')

<div class="col-12">
        <div class="ui-block">
            <div class="ui-block-title">
                <h6 class="title">Կարգավորումներ</h6>
            </div>
            <div class="ui-block-content">

                
                <!-- Form Favorite Page Information -->
                
                <form>
                    <div class="row">
                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Անուն</label>
														<input class="form-control" placeholder="" type="text" value="{{Auth::user()->name}}">
                            <span class="material-input"></span></div>
                
                            <div class="form-group label-floating">
                                <label class="control-label">E-mail</label>
                                <input class="form-control" placeholder="" type="email" value="{{Auth::user()->email}}">
                            <span class="material-input"></span></div>
                
                            <div class="form-group date-time-picker label-floating">
                                <label class="control-label">Մարզ</label>
                                
                                                    
																<select aria-valuemax="" id="inp" name="province" class="form-control">

																	@if(Auth::user()->province_id)
																<option value="{{Auth::user()->province_id}}" disabled selected hidden>{{App\Province::where('id',Auth::user()->province_id)->first()->name}}</option>
																 @else 
																 <option value="" disabled selected hidden>Ընտրեք մարզը</option>

																 @endif

															@foreach($province as $provinces)
																<option value="{{$provinces->name}}">{{$provinces->name}}</option>
															 @endforeach
															 <option value="Երևան">Երևան</option>

													</select>
                                <span class="input-group-addon">
                                                        <svg class="olymp-calendar-icon icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-newsfeed-icon"></use></svg>
                                                    </span>
														</div>
														<div class="form-group label-floating">
															<label class="control-label">Իմ մասին</label>
															<textarea class="form-control"> </textarea>
													<span class="material-input"></span></div>
                        </div>
                
                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="form-group label-floating">
                                <label class="control-label">Ազգանուն</label>
                                <input class="form-control" placeholder="" type="text" value="{{Auth::user()->surname}}">
                            <span class="material-input"></span></div>
                
                            <div class="form-group label-floating">
                                <label class="control-label">Your Website</label>
                                <input class="form-control" placeholder="" type="email" value="www.ggrock.com">
                            <span class="material-input"></span></div>
                
                            <div class="form-group date-time-picker label-floating">
															<label class="control-label">Քաղաք</label>
															<select name='city' id="inpProv" style="display: flex !important;" class="form-control">

																<option value="{{Auth::user()->city_id}}"  disabled selected hidden>{{App\City::where('id',Auth::user()->province_id)->first()->name}}</option>


																		@foreach($city as $cityes)
																			<option value="{{$cityes->id}}">{{$cityes->name}}</option>
																		 @endforeach
															</select>
															<span class="input-group-addon">
																											<svg class="olymp-calendar-icon icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-newsfeed-icon"></use></svg>
																									</span>
													</div>
                
													<div class="form-group label-floating is-empty">
														<label class="control-label">Հասցե</label>
													<input class="form-control" placeholder="" value="{{Auth::user()->address}}" type="text">
												<span class="material-input"></span></div>
						

														<div class="form-group label-floating is-empty">
															<label class="control-label">Հեռախոսահամար</label>
													<input class="form-control" value="{{Auth::user()->telephone}}" placeholder="" type="text">
													<span class="material-input"></span></div>
                        </div>
                
                       
                
                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                
                            <div class="form-group label-floating is-empty">
                                <label class="control-label">Հասցե</label>
                                <input class="form-control" placeholder="" type="text">
                            <span class="material-input"></span></div>
                
                           
                        </div>
                
                      
                        <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
                            <a href="#" class="btn btn-primary btn-lg full-width">Save all Changes</a>
                        </div>
                    </div>
                </form>
                
                <!-- ... end Form Favorite Page Information -->
                

            </div>
        </div>

        </div>
    </div>
@endsection
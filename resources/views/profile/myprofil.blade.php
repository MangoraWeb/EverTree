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
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


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
@section('slider')
<div class="container">
	<div class="row">


		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="top-header top-header-favorit">
            <div class="top-header-thumb content-bg-wrap bg-profile" style="height: 213px; background-image: url({{asset($user->cover)}});">
              <div class="top-header-author">
							<div class="author-thumb">
								
								@if(Auth::user()->avatar = 'users/default.png')
									<div class="containeravatar">
											<div class="avatarpic">
											<form enctype="multipart/form-data" id="form" action="{{route('changeava')}}" method="POST">
												@csrf
												<input  name="image"  id="fileUpload" type="file" />
												 <svg version="1.1" id="camera" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
														viewBox="0 0 25 15" enable-background="new 0 0 25 15" xml:space="preserve">
												 <path id="cameraFrame" fill="none" stroke="white" stroke-miterlimit="10" d="M23.1,14.1H1.9c-0.6,0-1-0.4-1-1V1.9c0-0.6,0.4-1,1-1h21.2
														c0.6,0,1,0.4,1,1v11.3C24.1,13.7,23.7,14.1,23.1,14.1z"/>
												 <path id="circle" fill="none" stroke="#ffffff" stroke-width="1.4" stroke-miterlimit="12" d="M17.7,7.5c0-2.8-2.3-5.2-5.2-5.2S7.3,4.7,7.3,7.5s2.3,5.2,5.2,5.2
														S17.7,10.3,17.7,7.5z"/>
												 <g id="plus">
														<path fill="none" id="plusLine" class="line" stroke="#ffffff" stroke-linecap="round" stroke-miterlimit="10" d="M20.9,2.3v4.4"/>
														<path fill="none" class="line"stroke="#ffffff" stroke-linecap="round" stroke-miterlimit="10" d="M18.7,4.6h4.4"/>
												 </g>
												</svg>
											</form>
												<div id="openModal">
													<span>Ընտրեք նկարը</span>
												</div>
											 </div>
											</div>  
@endif
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
												<span class="text">Բարև ։) Ես Կարենն եմ։ Ես և իմ թիմը ստեղծեցինք այս կայքը մի նպատակով. որպեսզի բացատրենք.որ ԹՈՒՂԹԸ ԱՂԲ ՉԷ։
												</span>
                    </li>

										</ul>

										@endif
							</div>
						</div>

						<div class="control-block-button">
							
						<a href="{{route('profileSettings')}}" class="btn btn-control bg-primary more">
								<svg class="olymp-settings-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-settings-icon"></use></svg>
							
								<div class="ripple-container"></div>
						
							</a>
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
									
									<div class="label-avatar bg-green">{{ intval( Auth::user()->tree / 10) }}</div>

                </div>
                <div class="birthday-author-name">
                  <a href="#" class="h6 author-name">Բնությունը փրկող</a>
                  <div class="birthday-date">Տրվում է գնած 10 ծառի դիմաց</div>
                </div>

                <div class="skills-item">
                  <div class="skills-item-meter">

                    <span class="skills-item-meter-active skills-animate" style="width: {{ Auth::user()->tree %10  }}0%; opacity: 1;"></span>
                  </div>
                </div>

              </div>
            </div>

        <div class="ui-block">
          <div class="birthday-item inline-items badges">
            <div class="author-thumb">
							<img src="{{asset('webprofile/img/badge2.png')}}">
							<div class="label-avatar bg-green">{{ intval( App\Accepted::where('user_id', Auth::user()->id)->count() / 10) }}</div>

            </div>
            <div class="birthday-author-name">
              <a href="#" class="h6 author-name">Ակտիվ պաշտպան</a>
              <div class="birthday-date"> Տրվում է 10 հանձնման դիմաց </div>
            </div>

            <div class="skills-item">
              <div class="skills-item-meter">
                <span class="skills-item-meter-active skills-animate" style="width: {{ App\Accepted::where('user_id', Auth::user()->id)->count() %10  }}0%; opacity: 1;"></span>
              </div>
            </div>

          </div>
        </div>

        <div class="ui-block">
          <div class="birthday-item inline-items badges">
            <div class="author-thumb">
              <img src="{{asset('webprofile/img/badge3.png')}}">
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
								<img src="{{asset('webprofile/img/badge9.png')}}">
								<div class="label-avatar bg-green">0</div>
							</div>
							<div class="birthday-author-name">
								<a href="#" class="h6 author-name">EverTree բարերար</a>
								<div class="birthday-date">Տրվում է հանգանակությունների <br> կատարման ժամանակ </div>
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
<div class="container">
    <div class="row">

      <div class="col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-xs-12">
        <div class="ui-block">
          <div class="ui-block-content">
            <ul class="statistics-list-count">
              <li>
                <div class="points">
                  <span>
                    Հանձնած թղթի քանակը
                  </span>
                </div>
                <div class="count-stat">{{$ttCount}}
                  <span class="indicator positive"> + {{$incCount}} կգ</span>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-xs-12">
        <div class="ui-block">
          <div class="ui-block-content">
            <ul class="statistics-list-count">
              <li>
                <div class="points">
                  <span>
                   Գնված ծառերի քանակը
                  </span>
                </div>
                <div class="count-stat">{{Auth::user()->tree}}
                  <span class="indicator negative"> </span>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-xs-12">
        <div class="ui-block">
          <div class="ui-block-content">
            <ul class="statistics-list-count">
              <li>
                <div class="points">
                  <span>
                    Միավորներ
                  </span>
                </div>
                <div class="count-stat">{{$etc}} ETC
                  <span class="indicator positive"> + {{$incEtc}}</span>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-xl-3 order-xl-3 col-lg-6 order-lg-3 col-md-6 col-sm-12 col-xs-12">
        <div class="ui-block">
          <div class="ui-block-content">
            <ul class="statistics-list-count">
              <li>
                <div class="points">
                  <span>
                  Նվիրատվություն
                  </span>
                </div>
                <div class="count-stat">0 ETC
                  <span class="indicator positive"> + 0</span>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="container">
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="ui-block responsive-flex">
            <div class="ui-block-title">
              <ul class="nav nav-tabs calendar-events-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active " data-toggle="tab" href="#events" role="tab" aria-expanded="true">
                   Նորություններ
                  <div class="ripple-container"></div></a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#donate" role="tab" aria-expanded="false">
                     Օգնել <span class="items-round-little bg-breez">1</span>
                    <div class="ripple-container"></div></a>
                  </li>


              </ul>
              <a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-three-dots-icon"></use></svg></a>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="tab-content">
        <div class="tab-pane active" id="events" role="tabpanel" aria-expanded="true">

          <div class="container">
              <div class="container">
                  <div class="row">
                      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding: 0;">
                        <div class="ui-block">

                        <div class="ui-block-title ui-block-title-small">
                          <h6 class="title">Մոտակա իրադարձությունները</h6>
												</div>

												@if ($event)
                        <table class="event-item-table">
                          <tbody>
                            <tr class="event-item">

                              <td class="upcoming">
                                <div class="date-event">

                                  <svg class="olymp-small-calendar-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-small-calendar-icon"></use></svg>

                                  <span class="day">{{$event->date->format('d')}}</span>
                                  <span class="month">{{$event->date->format('M')}}</span>
                                </div>
                              </td>
                              <td class="author">
                                <div class="event-author inline-items">
                                  <div class="author-thumb">
                                    <img src="{{asset('webprofile/img/badge14.png')}}" alt="author">
                                  </div>
                                  <div class="author-date">
                                    <a href="#" class="author-name h6">{{$event->name}}</a>
                                    <time class="published">{{$event->timetext}}</time>
                                  </div>
                                </div>
                              </td>
                              <td class="description">
                                <p class="description">
																		{{$event->desc}}
                                </p>
                              </td>
                              <td class="users">
                                <ul class="friends-harmonic">
																	
																	
																	<li>
                                    <a href="#">
                                      <img src="{{asset('webprofile/img/friend-harmonic.jpg')}}" alt="friend">
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#">
                                      <img src="{{asset('webprofile/img/friend-harmonic.jpg')}}" alt="friend">
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#">
                                      <img src="{{asset('webprofile/img/friend-harmonic.jpg')}}" alt="friend">
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#">
                                      <img src="{{asset('webprofile/img/friend-harmonic.jpg')}}" alt="friend">
                                    </a>
                                  </li>
                                  <li>
                                    <a href="#">
                                      <img src="{{asset('webprofile/img/friend-harmonic.jpg')}}" alt="friend">
                                    </a>
																	</li>




                                  <li>
                                    <a href="#" class="all-users bg-breez">+24</a>
                                  </li>

                                </ul>
                              </td>
                              <td class="add-event">
																	<form action="{{route('etogo')}}" method="POST">
																			@csrf
																			<input type="hidden" name="user_id" value="{{$user->id}}">
																			<input type="hidden" name="event_id" value="{{$event->id}}">
																			<input type="hidden" name="name" value="{{$event->name}}">

																			<button type="submit" class="btn btn-breez btn-sm">Ես կգամ</button>
																	</form>
                              </td>
                            </tr>
                          </tbody>
												</table>
												@else 
												<div class="no-past-events" style="
												height: 110px !important;
												padding: 45px;
										">
											<span> Նոր իրադարձություններ չկան</span>
													
											</div>
												@endif
												

                        <div class="ui-block-title ui-block-title-small">
                          <h6 class="title">Վերջին գործողությունները</h6>
                        </div>

												@if(!isset($actions))

                        <div class="no-past-events">
                            <svg class="olymp-month-calendar-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-month-calendar-icon"></use></svg>
                            <span> Գործողություններ <br>չեն գտվնել</span>
												</div>
												@else 
												
												<ul class="notification-list">
																@foreach($actions as $action)
																<li>
																	<div class="author-thumb">
																		<img src="{{$user->avatar}}" alt="author" style="width: 40px;">
																	</div>
																	<div class="notification-event">
																	<a href="#" class="h6 notification-friend">{{$user->name}} {{$user->surname}}ը</a> կմասնակցի  {{ App\Event::where('id',$action->event_id)->get()->first()->date->format('d.m.Y H:m') }}-ին կայանալիք <a href="{{route('eventt',$action->event_id)}}" style="padding-left:0px;" class="notification-link">{{$action->name}}</a> իրադարձությանը։																		<span class="notification-date"><time class="entry-date updated">{{$action->created_at->format('d.m.Y H:m')}}</time></span>
																	</div>
																	<span class="notification-icon">
																							<svg class="olymp-comments-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
																						</span>
															
																	<div class="more">
																		<svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
																		<svg class="olymp-little-delete"><use xlink:href="svg-icons/sprites/icons.svg#olymp-little-delete"></use></svg>
																	</div>
																</li>
															@endforeach
															</ul>
												@endif

                      </div>
                    </div>
                  </div>
                </div>
					</div>
				

        </div>

       

        <div class="tab-pane" id="donate" role="tabpanel" aria-expanded="false">
			<div class="container">
					<div class="row">

					<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<div class="friend-item friend-groups create-group" data-mh="friend-groups-item" style="min-height: 326px;">

							<a href="#" class="full-block" data-toggle="modal" data-target="#create-friend-group-1"></a>
							<div class="content">

								<a href="#" class="  btn btn-control bg-green" data-toggle="modal" data-target="#project-don">
									<svg class="olymp-plus-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-plus-icon"></use></svg>
								</a>

								<div class="author-content">
									<a href="#" class="h5 author-name"> Առաջարկել նախագիծ </a>
									<div class="description">ձեր նախագիծը, <br>օգնեք կարքավորներին <br> խրախուսեք գաղափարը </div>
								</div>

							</div>

						</div>

					</div>

					<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<div class="ui-block" data-mh="friend-groups-item" style="max-height: 328px !important;">
							<div class="friend-item friend-groups">

								<div class="friend-item-content">

									<div class="more">
										<svg class="olymp-three-dots-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-three-dots-icon"></use></svg>
										<ul class="more-dropdown">
											<li>
												<a href="#">Բողոքել</a>
											</li>
											<li>
												<a href="#">Հեռացնել</a>
											</li>

										</ul>
									</div>
									<div class="friend-avatar">
										<div class="donate-thumb author-thumb">
											<img src="https://upload.wikimedia.org/wikipedia/commons/f/fe/Nor_Hachen%2C_Armenia%2C_Church_of_the_Holy_Saviour.jpg">
										</div>
										<div class="author-content">
											<a href="#" class="h5 author-name">EverTree</a>
											<div class="description">Խաղահրապարակի կառուցում Նոր ...</div>
										</div>
									</div>



									<div class="control-block-button">
										<a href="#" class="  btn btn-control bg-green" data-toggle="modal" data-target="#don-event">
											<svg class="olymp-happy-faces-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-happy-faces-icon"></use></svg>
										</a>

										<a href="#" class="btn btn-control btn-grey-lighter">
											<svg class="olymp-settings-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-settings-icon"></use></svg>
										</a>

									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<div class="ui-block" data-mh="friend-groups-item" style="max-height: 328px !important;">
							<div class="friend-item friend-groups">

								<div class="friend-item-content">

									<div class="more">
										<svg class="olymp-three-dots-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-three-dots-icon"></use></svg>
										<ul class="more-dropdown">
											<li>
												<a href="#">Բողոքել</a>
											</li>
											<li>
												<a href="#">Հեռացնել</a>
											</li>

										</ul>
									</div>
									<div class="friend-avatar">
										<div class="donate-thumb author-thumb">
											<img src="{{asset('/images/dontae.webp')}}">
										</div>
										<div class="author-content">
											<a href="#" class="h5 author-name">Կարեն Հովսեփյան</a>
											<div class="description">Օգնենք ընտանիքին և երեխաներին ...</div>
										</div>
									</div>



									<div class="control-block-button">
										<a href="#" class="  btn btn-control bg-green" data-toggle="modal" data-target="#don-event">
											<svg class="olymp-happy-faces-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-happy-faces-icon"></use></svg>
										</a>

										<a href="#" class="btn btn-control btn-grey-lighter">
											<svg class="olymp-settings-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-settings-icon"></use></svg>
										</a>

									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<div class="ui-block" data-mh="friend-groups-item" style="max-height: 328px !important;">
							<div class="friend-item friend-groups">

								<div class="friend-item-content">

									<div class="more">
										<svg class="olymp-three-dots-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-three-dots-icon"></use></svg>
										<ul class="more-dropdown">
											<li>
												<a href="#">Բողոքել</a>
											</li>
											<li>
												<a href="#">Հեռացնել</a>
											</li>

										</ul>
									</div>
									<div class="friend-avatar">
										<div class="donate-thumb author-thumb">
											<img src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_limit,f_auto,w_620/v1538412036/ws8jtipmbaxkn8npjqbx.jpg">
										</div>
										<div class="author-content">
											<a href="#" class="h5 author-name">Սարգիս Գևորգյան</a>
											<div class="description">Դիլիջանի ծառահատման ...</div>
										</div>
									</div>



									<div class="control-block-button">
										<a href="#" class="  btn btn-control bg-green" data-toggle="modal" data-target="#don-event">
											<svg class="olymp-happy-faces-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-happy-faces-icon"></use></svg>
										</a>

										<a href="#" class="btn btn-control btn-grey-lighter">
											<svg class="olymp-settings-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-settings-icon"></use></svg>
										</a>

									</div>
								</div>
							</div>
						</div>
					</div>

                  <div class="modal fade" id="create-friend-group-1">
											<div class="modal-dialog ui-block window-popup create-friend-group create-friend-group-1">
												<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
													<svg class="olymp-close-icon"><use xlink:href="icons/icons.svg#olymp-close-icon"></use></svg>
												</a>

											<div class="ui-block-title">
												<h6 class="title">Create Friend Group</h6>
											</div>

											<div class="ui-block-content">
												<form class="form-group label-floating">
													<label class="control-label">Group Name</label>
													<input class="form-control" placeholder="" value="Highschool Friends" type="text">
												</form>

												<form class="form-group with-button">
													<input class="form-control" placeholder="" value="Group Avatar (120x120px min)" type="text">

													<button class="bg-grey">
														<svg class="olymp-computer-icon"><use xlink:href="icons/icons.svg#olymp-computer-icon"></use></svg>
													</button>

												</form>

												<form class="form-group label-floating is-select">
													<svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>

													<select class="selectpicker form-control style-2 show-tick" multiple data-max-options="2" data-live-search="true" size="auto">
														<option title="Green Goo Rock" data-content='<div class="inline-items">
																				<div class="author-thumb">
																					<img src="img/avatar52-sm.jpg" alt="author">
																				</div>
																					<div class="h6 author-title">Green Goo Rock</div>

																				</div>'>
														</option>

														<option title="Mathilda Brinker" data-content='<div class="inline-items">
																					<div class="author-thumb">
																						<img src="img/avatar74-sm.jpg" alt="author">
																					</div>
																					<div class="h6 author-title">Mathilda Brinker</div>
																				</div>'>
														</option>

														<option title="Marina Valentine" data-content='<div class="inline-items">
																					<div class="author-thumb">
																						<img src="img/avatar48-sm.jpg" alt="author">
																					</div>
																					<div class="h6 author-title">Marina Valentine</div>
																				</div>'>
														</option>

														<option title="Dave Marinara" data-content='<div class="inline-items">
																					<div class="author-thumb">
																						<img src="img/avatar75-sm.jpg" alt="author">
																					</div>
																					<div class="h6 author-title">Dave Marinara</div>
																				</div>'>
														</option>

														<option title="Rachel Howlett" data-content='<div class="inline-items">
																					<div class="author-thumb">
																						<img src="img/avatar76-sm.jpg" alt="author">
																					</div>
																					<div class="h6 author-title">Rachel Howlett</div>
																				</div>'>
														</option>

													</select>
												</form>

												<a href="#" class="btn btn-blue btn-lg full-width">Create Group</a>
											</div>


										</div>
										</div>
									<!-- Window-popup Create Friends Group -->
<div class="modal fade" id="create-friend-group-1">
		<div class="modal-dialog ui-block window-popup create-friend-group create-friend-group-1">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="icons/icons.svg#olymp-close-icon"></use></svg>
			</a>

		<div class="ui-block-title">
			<h6 class="title">Create Friend Group</h6>
		</div>

		<div class="ui-block-content">
			<form class="form-group label-floating">
				<label class="control-label">Group Name</label>
				<input class="form-control" placeholder="" value="Highschool Friends" type="text">
			</form>

			<form class="form-group with-button">
				<input class="form-control" placeholder="" value="Group Avatar (120x120px min)" type="text">

				<button class="bg-grey">
					<svg class="olymp-computer-icon"><use xlink:href="icons/icons.svg#olymp-computer-icon"></use></svg>
				</button>

			</form>

			<form class="form-group label-floating is-select">
				<svg class="olymp-happy-face-icon"><use xlink:href="icons/icons.svg#olymp-happy-face-icon"></use></svg>

				<select class="selectpicker form-control style-2 show-tick" multiple data-max-options="2" data-live-search="true" size="auto">
					<option title="Green Goo Rock" data-content='<div class="inline-items">
											<div class="author-thumb">
												<img src="img/avatar52-sm.jpg" alt="author">
											</div>
												<div class="h6 author-title">Green Goo Rock</div>

											</div>'>
					</option>

					<option title="Mathilda Brinker" data-content='<div class="inline-items">
												<div class="author-thumb">
													<img src="img/avatar74-sm.jpg" alt="author">
												</div>
												<div class="h6 author-title">Mathilda Brinker</div>
											</div>'>
					</option>

					<option title="Marina Valentine" data-content='<div class="inline-items">
												<div class="author-thumb">
													<img src="img/avatar48-sm.jpg" alt="author">
												</div>
												<div class="h6 author-title">Marina Valentine</div>
											</div>'>
					</option>

					<option title="Dave Marinara" data-content='<div class="inline-items">
												<div class="author-thumb">
													<img src="img/avatar75-sm.jpg" alt="author">
												</div>
												<div class="h6 author-title">Dave Marinara</div>
											</div>'>
					</option>

					<option title="Rachel Howlett" data-content='<div class="inline-items">
												<div class="author-thumb">
													<img src="img/avatar76-sm.jpg" alt="author">
												</div>
												<div class="h6 author-title">Rachel Howlett</div>
											</div>'>
					</option>

				</select>
			</form>

			<a href="#" class="btn btn-blue btn-lg full-width">Create Group</a>
		</div>


	</div>
	</div>
	<!-- ... end Window-popup Create Friends Group -->




								</div>
							</div>


						</div>
			</div>
		</div>


<!-- Window-popup Event Private Public -->

<div class="modal fade" id="don-event" tabindex="-1" role="dialog" aria-labelledby="private-event" aria-hidden="true">
	<div class="modal-dialog window-popup event-private-public private-event" role="document">
		<div class="modal-content">
			<a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
				<svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
			</a>
			<div class="modal-body">
				<article class="hentry post has-post-thumbnail thumb-full-width private-event">

				<div class="private-event-head inline-items">
					<img src="img/avatar77-sm.jpg" alt="author">

					<div class="author-date">
						<a class="h3 event-title" href="#">Breakfast at the Agency</a>
						<div class="event__date">
							<time class="published" datetime="2017-03-24T18:18">
								Saturday at 9:00am
							</time>
						</div>
					</div>

					<div class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg>
						<ul class="more-dropdown">
							<li>
								<a href="#">Edit Event Settings</a>
							</li>
							<li>
								<a href="#">Mark as Completed</a>
							</li>
							<li>
								<a href="#">Delete Event</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="post-thumb">
					<img src="img/event-private.jpg" alt="photo">
				</div>

				<div class="row">
					<div class="col col-lg-7 col-md-7 col-sm-12 col-12">
						<div class="post__author author vcard inline-items">
							<img src="img/author-page.jpg" alt="author">

							<div class="author-date">
								<a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a> created the <a href="#">Event</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										March 11 at 9:52pm
									</time>
								</div>
							</div>

						</div>

						<p>
							Hi Guys! I propose to go a litle earlier at the agency to have breakfast and talk a little more about the
							new design project we have been working on. Cheers!
						</p>
					</div>
					<div class="col col-lg-5 col-md-5 col-sm-12 col-12">
						<div class="event-description">
							<h6 class="event-description-title">Private Event</h6>
							<div class="place inline-items">
								<svg class="olymp-add-a-place-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-add-a-place-icon"></use></svg>
								<span>Daydreamz Agency</span>
							</div>

							<div class="place inline-items">
								<svg class="olymp-small-calendar-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-small-calendar-icon"></use></svg>
								<span>Mar 26, 2016 at 9:00am UTC-8</span>
							</div>

							<ul class="friends-harmonic">
								<li>
									<a href="#">
										<img src="img/friend-harmonic5.jpg" alt="friend">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="img/friend-harmonic10.jpg" alt="friend">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="img/friend-harmonic7.jpg" alt="friend">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="img/friend-harmonic8.jpg" alt="friend">
									</a>
								</li>
								<li>
									<a href="#">
										<img src="img/friend-harmonic2.jpg" alt="friend">
									</a>
								</li>

								<li class="with-text">
									Will Assist
								</li>
							</ul>

							<a href="#" class="btn btn-blue btn-sm full-width">Invite Friends</a>
						</div>
					</div>
				</div>



				<div class="post-additional-info inline-items">

					<a href="#" class="post-add-icon inline-items">
						<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
						<span>8</span>
					</a>

					<ul class="friends-harmonic">
						<li>
							<a href="#">
								<img src="img/friend-harmonic1.jpg" alt="friend">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/friend-harmonic9.jpg" alt="friend">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/friend-harmonic7.jpg" alt="friend">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/friend-harmonic4.jpg" alt="friend">
							</a>
						</li>
						<li>
							<a href="#">
								<img src="img/friend-harmonic8.jpg" alt="friend">
							</a>
						</li>
					</ul>

					<div class="names-people-likes">
						<a href="#">Diana </a>, <a href="#">Nicholas</a> and
						<br>15 more liked this
					</div>


					<div class="comments-shared">
						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-speech-balloon-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-speech-balloon-icon"></use></svg>
							<span>16 Comments</span>
						</a>
					</div>


				</div>

				<div class="control-block-button post-control-button">

					<a href="#" class="btn btn-control">
						<svg class="olymp-like-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-like-post-icon"></use></svg>
					</a>

					<a href="#" class="btn btn-control">
						<svg class="olymp-comments-post-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-comments-post-icon"></use></svg>
					</a>

				</div>

			</article>

				<div class="mCustomScrollbar" data-mcs-theme="dark">

				<ul class="comments-list">
					<li class="comment-item">
						<div class="post__author author vcard inline-items">
							<img src="img/author-page.jpg" alt="author">

							<div class="author-date">
								<a class="h6 post__author-name fn" href="02-ProfilePage.html">James Spiegel</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										38 mins ago
									</time>
								</div>
							</div>

							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>

						</div>

						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium der doloremque laudantium.</p>

						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
							<span>3</span>
						</a>
						<a href="#" class="reply">Reply</a>
					</li>
					<li class="comment-item">
						<div class="post__author author vcard inline-items">
							<img src="img/avatar1-sm.jpg" alt="author">

							<div class="author-date">
								<a class="h6 post__author-name fn" href="#">Mathilda Brinker</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										1 hour ago
									</time>
								</div>
							</div>

							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>

						</div>

						<p>Ratione voluptatem sequi en lod nesciunt. Neque porro quisquam est, quinder dolorem ipsum
							quia dolor sit amet, consectetur adipisci velit en lorem ipsum duis aute irure dolor in reprehenderit in voluptate velit esse cillum.
						</p>

						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
							<span>8</span>
						</a>
						<a href="#" class="reply">Reply</a>
					</li>
					<li class="comment-item">
						<div class="post__author author vcard inline-items">
							<img src="img/avatar10-sm.jpg" alt="author">

							<div class="author-date">
								<a class="h6 post__author-name fn" href="#">Elaine Dreyfuss</a>
								<div class="post__date">
									<time class="published" datetime="2017-03-24T18:18">
										5 mins ago
									</time>
								</div>
							</div>

							<a href="#" class="more"><svg class="olymp-three-dots-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-three-dots-icon"></use></svg></a>

						</div>

						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium der doloremque laudantium.</p>

						<a href="#" class="post-add-icon inline-items">
							<svg class="olymp-heart-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-heart-icon"></use></svg>
							<span>8</span>
						</a>
						<a href="#" class="reply">Reply</a>
					</li>
				</ul>

			</div>

				<form class="comment-form inline-items">

			<div class="post__author author vcard inline-items">
				<img src="img/author-page.jpg" alt="author">

				<div class="form-group with-icon-right ">
					<textarea class="form-control" placeholder=""  ></textarea>
					<div class="add-options-message">
						<a href="#" class="options-message">
							<svg class="olymp-camera-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-camera-icon"></use></svg>
						</a>
					</div>
				</div>
			</div>

		</form>
			</div>
		</div>
	</div>
</div>

<!-- ... end Window-popup Event Private Public -->






  <div class="modal fade" id="project-don" tabindex="-1" role="dialog" aria-labelledby="create-event" aria-hidden="true">
    <div class="modal-dialog window-popup create-event" role="document">
      <div class="modal-content">
        <a href="#" class="close icon-close" data-dismiss="modal" aria-label="Close">
          <svg class="olymp-close-icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-close-icon"></use></svg>
        </a>
        <div class="modal-header">
          <h6 class="title">Create an Event</h6>
        </div>

        <div class="modal-body">
          <div class="form-group label-floating is-select">
            <label class="control-label">Personal Event</label>
            <select class="selectpicker form-control">
              <option value="MA">Private Event</option>
              <option value="FE">Personal Event</option>
            </select>
          </div>

          <div class="form-group label-floating">
            <label class="control-label">Event Name</label>
            <input class="form-control" placeholder="" value="Take Querty to the Veterinarian" type="text">
          </div>

          <div class="form-group label-floating is-empty">
            <label class="control-label">Event Location</label>
            <input class="form-control" placeholder="" value="" type="text">
          </div>

          <div class="form-group date-time-picker label-floating">
            <label class="control-label">Event Date</label>
            <input name="datetimepicker" value="26/03/2016">
            <span class="input-group-addon">
            <svg class="olymp-calendar-icon icon"><use xlink:href="svg-icons/sprites/icons.svg#olymp-calendar-icon"></use></svg>
          </span>
          </div>

          <div class="row">
            <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
              <div class="form-group label-floating">
                <label class="control-label">Event Time</label>
                <input class="form-control" placeholder="" value="09:00" type="text">
              </div>
            </div>
            <div class="col col-lg-3 col-md-3 col-sm-12 col-12">
              <div class="form-group label-floating is-select">
                <label class="control-label">AM-PM</label>
                <select class="selectpicker form-control">
                  <option value="MA">AM</option>
                  <option value="FE">PM</option>
                </select>
              </div>
            </div>
            <div class="col col-lg-6 col-md-6 col-sm-12 col-12">
              <div class="form-group label-floating is-select">
                <label class="control-label">Timezone</label>
                <select class="selectpicker form-control">
                  <option value="MA">US (UTC-8)</option>
                  <option value="FE">UK (UTC-0)</option>
                </select>
              </div>
            </div>

          </div>

          <div class="form-group label-floating">
            <label class="control-label">Event Description</label>
            <textarea class="form-control" placeholder="">I need to take Querty for a check up and ask the doctor if he needs a new tank.
            </textarea>
          </div>

          <form class="form-group label-floating is-select">
            <svg class="olymp-happy-face-icon">
              <use xlink:href="svg-icons/sprites/icons.svg#olymp-happy-face-icon"></use>
            </svg>

            <select class="selectpicker form-control style-2 show-tick" multiple data-live-search="true">
              <option title="Green Goo Rock" data-content='<div class="inline-items">
                      <div class="author-thumb">
                        <img src="img/avatar52-sm.jpg" alt="author">
                      </div>
                        <div class="h6 author-title">Green Goo Rock</div>

                      </div>'>Green Goo Rock
              </option>

              <option title="Mathilda Brinker" data-content='<div class="inline-items">
                        <div class="author-thumb">
                          <img src="img/avatar74-sm.jpg" alt="author">
                        </div>
                        <div class="h6 author-title">Mathilda Brinker</div>
                      </div>'>Mathilda Brinker
              </option>

              <option title="Marina Valentine" data-content='<div class="inline-items">
                        <div class="author-thumb">
                          <img src="img/avatar48-sm.jpg" alt="author">
                        </div>
                        <div class="h6 author-title">Marina Valentine</div>
                      </div>'>Marina Valentine
              </option>

              <option title="Dave Marinara" data-content='<div class="inline-items">
                        <div class="author-thumb">
                          <img src="img/avatar75-sm.jpg" alt="author">
                        </div>
                        <div class="h6 author-title">Dave Marinara</div>
                      </div>'>Dave Marinara
              </option>

              <option title="Rachel Howlett" data-content='<div class="inline-items">
                        <div class="author-thumb">
                          <img src="img/avatar76-sm.jpg" alt="author">
                        </div>
                        <div class="h6 author-title">Rachel Howlett</div>
                      </div>'>Rachel Howlett
              </option>

            </select>
          </form>

          <button class="btn btn-breez btn-lg full-width">Create Event</button>

        </div>
      </div>
    </div>
  </div>

  <!-- ... end Window-popup Create Event -->


@endsection

@section('footer')

<script src="https://html.crumina.net/html-olympus/js/jquery-3.2.1.js"></script>
<!-- JS Scripts --><script src="{{asset('js/main.js')}}"></script>
<script>
$('#fileUpload').on('change',function(){
  $('.avatarpic').removeClass('open');
});
$('.avatarpic').on('click',function(){
  $(this).addClass('open');
});
// added code to close the modal if you click outside
$('html').click(function() {
 $('.avatarpic').removeClass('open');
});

$('.avatarpic').click(function(event){
    event.stopPropagation();
});

document.getElementById("fileUpload").onchange = function() {
    document.getElementById("form").submit();
};
</script>


<script src="{{asset('js/theme-plugins.js')}}"></script>
<script src="https://html.crumina.net/html-olympus/js/jquery.appear.js"></script>
<script src="https://html.crumina.net/html-olympus/js/jquery.mousewheel.js"></script>
<script src="https://html.crumina.net/html-olympus/js/perfect-scrollbar.js"></script>
<script src="https://html.crumina.net/html-olympus/js/jquery.matchHeight.js"></script>
<script src="https://html.crumina.net/html-olympus/js/jquery.magnific-popup.js"></script>
<script src="https://html.crumina.net/html-olympus/Bootstrap/dist/js/bootstrap.bundle.js"></script>

@endsection

@extends('layouts.main')

@section('header')

<link rel="stylesheet" href="{{asset('webprofile/css/main.min.css')}}">
<link rel="stylesheet" href="{{asset('webprofile/css/fonts.min.css')}}" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('webprofile/css/blocks.css')}}" >
<link rel="stylesheet" href="{{asset('webprofile/css/bootstrap.css')}}" >
<link rel="stylesheet" href="{{asset('webprofile/css/bootstrap-grid.css')}}" >
<link rel="stylesheet" href="{{asset('webprofile/css/bootstrap-reboot.css')}}" >
<!-- Main Font -->
<script src="{{asset('webprofile/js/webfontloader.min.js')}}"></script>
<script>
  WebFont.load({
    google: {
      families: ['Roboto:300,400,500,700:latin']
    }
  });
</script>



<link rel="stylesheet" type="text/css" href="css/fonts.css">

<!-- Styles for plugins -->
<link rel="stylesheet" type="text/css" href="{{asset('webprofile/css/jquery.mCustomScrollbar.min.css')}}">
<link rel='stylesheet' href='{{asset('webprofile/css/fullcalendar.css')}}'/>
<link rel='stylesheet' href='{{asset('webprofile/css/simplecalendar.css')}}'/>
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

    <a style="text-decoration: none;" class="p-2 text-muted" href="/news">
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
@section('slider')
<div class="container">
	<div class="row">
     

		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="ui-block">
				<div class="top-header top-header-favorit">
            <div class="top-header-thumb content-bg-wrap bg-profile" style="height: 213px; background-image: url({{asset('webprofile/img/defcover.png')}});">						
              <div class="top-header-author">
							<div class="author-thumb">
								<img src="https://scontent-frx5-1.xx.fbcdn.net/v/t1.0-9/44091855_1735051296617076_8666010493015556096_n.jpg?_nc_cat=102&_nc_ht=scontent-frx5-1.xx&oh=70179141517d7efbe5bba0098a65be7f&oe=5C856A68" alt="author">
							</div>
							<div class="author-content">
								<a href="#" class="h3 author-name">Կարեն Հովսեփյան</a>
								<div class="country">Նոր Հաճն  |  MangoraWeb</div>
							</div>
						</div>
					</div>
					<div class="profile-section">
						<div class="row">
							<div class="col-xl-8 m-auto col-lg-8 col-md-12">
                  <ul class="widget w-personal-info item-block">
                      <li>
                        <span class="title">Իմ մասին:</span>
                    <span class="text">Բարև ։) Ես Կարենն եմ։ Ես և իմ թիմը ստեղծեցինք այս կայքը մի նպատակով. որպեսզի բացատրենք.որ ԹՈՒՂԹԸ ԱՂԲ ՉԷ։
                    </span>
                      </li>
                      
                    </ul>
							</div>
						</div>

						<div class="control-block-button">
							<a href="#" class="btn btn-control bg-primary">
								<svg class="olymp-star-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-star-icon"></use></svg>
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
              <img src="{{asset('webprofile/img/badge2.png')}}" alt="author">
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
              <div class="label-avatar bg-blue">1</div>
            </div>
            <div class="birthday-author-name">
              <a href="#" class="h6 author-name">EverTree կամավոր</a>
              <div class="birthday-date">Տրվում է կամավոր աշխատանքների <br> կատարման ժամանակ </div>
            </div>
  
            <div class="skills-item">
              <div class="skills-item-meter">
                <span class="skills-item-meter-active skills-animate" style="width: 52%; opacity: 1;"></span>
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
                <div class="count-stat">14.7
                  <span class="indicator positive"> + 14.207</span>
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
                <div class="count-stat">2
                  <span class="indicator negative"> - 2</span>
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
                <div class="count-stat">16 ETC
                  <span class="indicator positive"> + 1.056</span>
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
                <div class="count-stat">10 ETC
                  <span class="indicator positive"> + 2.847</span>
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
                  <a class="nav-link active" data-toggle="tab" href="#events" role="tab" aria-expanded="true">
                   Նորություններ
                  <div class="ripple-container"></div></a>
                </li>
    
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#notifications" role="tab" aria-expanded="false">
                    Իրադարձություններ <span class="items-round-little bg-breez">2</span>
                  <div class="ripple-container"></div></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#notifications" role="tab" aria-expanded="false">
                     Օգնություն կարիքավորներին <span class="items-round-little bg-breez">8</span>
                    <div class="ripple-container"></div></a>
                  </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#settings" role="tab" aria-expanded="false">
                      Կարգավորումներ 
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
                
                        <table class="event-item-table">
                
                          <tbody>
                            <tr class="event-item">
                
                              <td class="upcoming">
                                <div class="date-event">
                
                                  <svg class="olymp-small-calendar-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-small-calendar-icon"></use></svg>
                
                                  <span class="day">01</span>
                                  <span class="month">նոյ</span>
                                </div>
                              </td>
                              <td class="author">
                                <div class="event-author inline-items">
                                  <div class="author-thumb">
                                    <img src="{{asset('webprofile/img/badge14.png')}}" alt="author">
                                  </div>
                                  <div class="author-date">
                                    <a href="#" class="author-name h6">Ծառատունկ</a>
                                    <time class="published" datetime="2017-03-24T18:18">Կիրակի ժամը 15։00</time>
                                  </div>
                                </div>
                              </td>
                            
                              <td class="description">
                                <p class="description">
                                  Մասնակցեք առաջին ծառատունկին Նոր Հաճն քաղաքում։ Գնվել է 48 ծառ։
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
                
                                  <li class="with-text">
                                   EverTree
                                  </li>
                                </ul>
                              </td>
                              <td class="add-event">
                                <a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-breez btn-sm">Ես կգամ</a>
                              </td>
                
                            </tr>
                          </tbody>
                        </table>
                
                        <div class="ui-block-title ui-block-title-small">
                          <h6 class="title">Վերջին գործողությունները</h6>
                        </div>
                
                        <div class="pastnot">
                            <ul class="notification-list">
                                <li style="border-top: 1px solid #e6ecf5;">                                  
                                  <div class="author-thumb">
                                      <img style="width:40px" src="https://scontent-frx5-1.xx.fbcdn.net/v/t1.0-9/44091855_1735051296617076_8666010493015556096_n.jpg?_nc_cat=102&_nc_ht=scontent-frx5-1.xx&oh=70179141517d7efbe5bba0098a65be7f&oe=5C856A68" alt="author">
                                  </div>
                                  <div class="notification-event">
                                    <a href="#" class="h6 notification-friend">Կարեն Հովսեփյան</a>-ը որպես կամավոր կմասնակցի <a href="#" class="notification-link">Նոր Հաճն քաղաքի ծառատունկին</a>.
                                    <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 ժամ առաջ</time></span>
                                  </div>
                                  <span class="notification-icon">
                                              <svg class="olymp-comments-post-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-comments-post-icon"></use></svg>
                                            </span>
                              
                                  <div class="more">
                                    <svg class="olymp-three-dots-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-three-dots-icon"></use></svg>
                                    <svg class="olymp-little-delete"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-little-delete"></use></svg>
                                  </div>
                                </li>
                                <li>
                                    <div class="author-thumb">
                                      <img style="width:40px" src="https://scontent-frx5-1.xx.fbcdn.net/v/t1.0-9/44091855_1735051296617076_8666010493015556096_n.jpg?_nc_cat=102&_nc_ht=scontent-frx5-1.xx&oh=70179141517d7efbe5bba0098a65be7f&oe=5C856A68" alt="author">
                                    </div>
                                    <div class="notification-event">
                                      <a href="#" class="h6 notification-friend">Կարեն Հովսեփյան</a>-ը վերբեռնել է նոր<a href="#" class="notification-link">անձնական էջի նկար</a>.
                                      <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">4 ժամ առաջ</time></span>
                                    </div>
                                    <span class="notification-icon">
                                                <svg class="olymp-comments-post-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-comments-post-icon"></use></svg>
                                              </span>
                                
                                    <div class="more">
                                      <svg class="olymp-three-dots-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-three-dots-icon"></use></svg>
                                      <svg class="olymp-little-delete"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-little-delete"></use></svg>
                                    </div>
                                  </li>
                                <li>
                                  <div class="author-thumb">
                                      <img style="width:40px" src="https://scontent-frx5-1.xx.fbcdn.net/v/t1.0-9/44091855_1735051296617076_8666010493015556096_n.jpg?_nc_cat=102&_nc_ht=scontent-frx5-1.xx&oh=70179141517d7efbe5bba0098a65be7f&oe=5C856A68" alt="author">
                                  </div>
                                  <div class="notification-event">
                                   <a href="#" class="h6 notification-friend">Կարեն Հովսեփյան</a>-ը գրանցվեց համակարգում հանձնելով <a href="#" class="notification-link">7 կգ թուղթ</a>.
                                    <span class="notification-date"><time class="entry-date updated" datetime="2004-07-24T18:18">9 ժամ առաջ </time></span>
                                  </div>
                                  <span class="notification-icon">
                                              <svg class="olymp-happy-face-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-happy-face-icon"></use></svg>
                                            </span>
                              
                                  <div class="more">
                                    <svg class="olymp-three-dots-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-three-dots-icon"></use></svg>
                                    <svg class="olymp-little-delete"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-little-delete"></use></svg>
                                  </div>
                                </li>
                              
                               
                              </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
        </div>
      
        <div class="tab-pane" id="notifications" role="tabpanel" aria-expanded="false">
          <div class="container">
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="ui-block">
      
                    <table class="event-item-table event-item-table-fixed-width" style="color: #515365;">      
                    <thead>
      
                    <tr>
      
                      <th class="author">
                      Իրադարձությունը
                      </th>
      
                      <th class="location">
                        Վայրը
                      </th>
      
                      <th class="upcoming">
                       Ամսաթիվը
                      </th>
      
                      <th class="description">
                        Նկարագրությունը
                      </th>
      
                      <th class="users">
                        Կամավորներ
                      </th>
      
                      <th class="add-event">
      
                      </th>
                    </tr>
      
                    </thead>
      
                    <tbody>
                    <tr class="event-item">
                      <td class="author">
                        <div class="event-author inline-items">
                         
                          <div class="author-date">
                            <a href="#" class="author-name h6">Mathilda Brinker</a> invited you <br> to an event <a href="#">Reunion Dinner.</a>
                          </div>
                        </div>
                      </td>
                      <td class="location">
                        <div class="place inline-items">
                          <svg class="olymp-add-a-place-icon"><use xlink:href="#olymp-add-a-place-icon"></use></svg>
                          <span>Panucci Restaurant</span>
                        </div>
                      </td>
                      <td class="upcoming">
                        <div class="date-event inline-items align-left">
                          <svg class="olymp-small-calendar-icon"><use xlink:href="#olymp-small-calendar-icon"></use></svg>
      
                          <span class="month">Aug 14, 2016 at 7:00pm</span>
      
                        </div>
                      </td>
                      <td class="description">
                        <p class="description">Hey! I thought we could all get together and grab something to eat to remember old times!</p>
                      </td>
                      <td class="users">
                        <ul class="friends-harmonic">
                          <li>
                            <a href="#">
                                <img src="{{asset('webprofile/img/avatar.jpg')}}" alt="author">
                              </a>
                          </li>
                          <li>
                            <a href="#">
                                <img src="{{asset('webprofile/img/avatar.jpg')}}" alt="author">
                              </a>
                          </li>
               
                          <li>
                            <a href="#" class="all-users bg-breez">+24</a>
                          </li>
                        </ul>
                      </td>
                      <td class="add-event">
                        <a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-breez btn-sm">Add to Calendar</a>
                        <a href="#" class="btn btn-sm btn-border-think custom-color c-grey">Decline / Delete</a>
                      </td>
                    </tr>
                    <tr class="event-item">
                      <td class="author">
                        <div class="event-author inline-items">
                          <div class="author-thumb">
                            <img src="img/avatar78-sm.jpg" alt="author">
                          </div>
                          <div class="author-date">
                            <a href="#" class="author-name h6">Walter Havock </a>invited you to <br> an event <a href="#"> Daydreamz New <br> Year’s Party.</a>
                          </div>
                        </div>
                      </td>
                      <td class="location">
                        <div class="place inline-items">
                          <svg class="olymp-add-a-place-icon"><use xlink:href="#olymp-add-a-place-icon"></use></svg>
                          <span>Daydreamz Agency</span>
                        </div>
                      </td>
                      <td class="upcoming">
                        <div class="date-event inline-items align-left">
                          <svg class="olymp-small-calendar-icon"><use xlink:href="#olymp-small-calendar-icon"></use></svg>
      
                          <span class="month">Dec 29, 2016 at 7:00pm</span>
      
                        </div>
                      </td>
                      <td class="description">
                        <p class="description">Let’s celebrate the new year together! We are organizing a big party for all the agency...</p>
                      </td>
                      <td class="users">
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
      
                        </ul>
                      </td>
                      <td class="add-event">
                        <a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-breez btn-sm">Add to Calendar</a>
                        <a href="#" class="btn btn-sm btn-border-think custom-color c-grey">Decline / Delete</a>
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
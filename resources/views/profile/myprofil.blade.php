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
								<div class="description">Նոր Հաճն  |  MangoraWeb</div>
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
              <div class="label-avatar bg-green">1</div>
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
                  <a class="nav-link active " data-toggle="tab" href="#events" role="tab" aria-expanded="true">
                   Նորություններ
                  <div class="ripple-container"></div></a>
                </li>
    
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#notifications" role="tab" aria-expanded="false">
                    Իրադարձություններ <span class="items-round-little bg-breez">2</span>
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
                        Մասնակիցներ
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
                            <a href="#" class="author-name h6">Սուրեն Աբազյանը</a> հրավիրում է Ձեզ <br> մասնակցել <a href="#">սեմինարին</a>
                          </div>
                        </div>
                      </td>
                      <td class="location">
                        <div class="place inline-items">
                          <svg class="olymp-add-a-place-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-add-a-place-icon"></use></svg>
                          <span>LOFT</span>
                        </div>
                      </td>
                      <td class="upcoming">
                        <div class="date-event inline-items align-left">
                          <svg class="olymp-small-calendar-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-small-calendar-icon"></use></svg>
      
                          <span class="month">Դեկ 20,17:00pm</span>
      
                        </div>
                      </td>
                      <td class="description">
                        <p class="description">Հարգելի կամավորներ.եկեք ծանոթանանք իրար հետ։</p>
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
                            <a href="#"  class="all-users bg-breez">+8</a>
                          </li>
                        </ul>
                      </td>
                      <td class="add-event">
                        <a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-breez btn-sm">Ես կգամ</a>
                        <a href="#" class="btn btn-sm btn-border-think custom-color c-grey">Հեռացնել</a>
                      </td>
                    </tr>
                    <tr class="event-item">
                      <td class="author">
                        <div class="event-author inline-items">
                        
                          <div class="author-date">
                            <a href="#" class="author-name h6">Սարգիս Գևորգյանը </a>հրավիրում է<br>մասնակցել <a href="#"> «Օգնենք կարիքավորներին» նախագծին</a>
                          </div>
                        </div>
                      </td>
                      <td class="location">
                        <div class="place inline-items">
                          <svg class="olymp-add-a-place-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-add-a-place-icon"></use></svg>
                          <span>Նոր Գեղի</span>
                        </div>
                      </td>
                      <td class="upcoming">
                        <div class="date-event inline-items align-left">
                          <svg class="olymp-small-calendar-icon"><use xlink:href="{{asset('webprofile/icons/icons.svg')}}#olymp-small-calendar-icon"></use></svg>
      
                          <span class="month">Դեկ 29, 13:00pm</span>
      
                        </div>
                      </td>
                      <td class="description">
                        <p class="description">Միասին օգնենք մարդկանց.ովքեր ունեն դրա կարիքը...</p>
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
                            <a href="#"  class="all-users bg-breez">+18</a>
                          </li>
                        </ul>
                      </td>
                      <td class="add-event">
                        <a href="20-CalendarAndEvents-MonthlyCalendar.html" class="btn btn-breez btn-sm">Ես կգամ</a>
                        <a href="#" class="btn btn-sm btn-border-think custom-color c-grey">Հեռացնել</a>
                      </td>
                    </tr>
                    </tbody>
                  </table>
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

<script src="{{asset('js/theme-plugins.js')}}"></script>
<script src="https://html.crumina.net/html-olympus/js/jquery.appear.js"></script>
<script src="https://html.crumina.net/html-olympus/js/jquery.mousewheel.js"></script>
<script src="https://html.crumina.net/html-olympus/js/perfect-scrollbar.js"></script>
<script src="https://html.crumina.net/html-olympus/js/jquery.matchHeight.js"></script>
<script src="https://html.crumina.net/html-olympus/js/jquery.magnific-popup.js"></script>
<script src="https://html.crumina.net/html-olympus/Bootstrap/dist/js/bootstrap.bundle.js"></script>

@endsection
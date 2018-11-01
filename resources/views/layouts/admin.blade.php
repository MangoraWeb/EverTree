<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>EverTree Admin - Make the world greener</title>

    <!-- vendor css -->
    <link href="{{asset('/treeadmin/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('/treeadmin/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{asset('/treeadmin/lib/chartist/css/chartist.css')}}" rel="stylesheet">
    <link href="{{asset('/treeadmin/lib/rickshaw/css/rickshaw.min.css')}}" rel="stylesheet">

    @yield('header')
    <!-- Slim CSS -->
    <link rel="stylesheet" href="{{asset('/treeadmin/css/slim.css')}}">

  </head>
  <body>
    <div class="slim-header">
      <div class="container">
        <div class="slim-header-left">
          <h2 class="slim-logo"><a href="/admin">evertree<span>.</span></a></h2>

        
        </div><!-- slim-header-left -->
        <div class="slim-header-right">
          <div class="dropdown dropdown-a">
            <a href="" class="header-notification" data-toggle="dropdown">
              <i class="icon ion-ios-bolt-outline"></i>
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-menu-header">
                <h6 class="dropdown-menu-title">Activity Logs</h6>
                <div>
                  <a href="">Filter List</a>
                  <a href="">Settings</a>
                </div>
              </div><!-- dropdown-menu-header -->
              <div class="dropdown-activity-list">
                <div class="activity-label">Today, December 13, 2017</div>
                <div class="activity-item">
                  <div class="row no-gutters">
                    <div class="col-2 tx-right">10:15am</div>
                    <div class="col-2 tx-center"><span class="square-10 bg-success"></span></div>
                    <div class="col-8">Purchased christmas sale cloud storage</div>
                  </div><!-- row -->
                </div><!-- activity-item -->
                <div class="activity-item">
                  <div class="row no-gutters">
                    <div class="col-2 tx-right">9:48am</div>
                    <div class="col-2 tx-center"><span class="square-10 bg-danger"></span></div>
                    <div class="col-8">Login failure</div>
                  </div><!-- row -->
                </div><!-- activity-item -->
                <div class="activity-item">
                  <div class="row no-gutters">
                    <div class="col-2 tx-right">7:29am</div>
                    <div class="col-2 tx-center"><span class="square-10 bg-warning"></span></div>
                    <div class="col-8">(D:) Storage almost full</div>
                  </div><!-- row -->
                </div><!-- activity-item -->
                <div class="activity-item">
                  <div class="row no-gutters">
                    <div class="col-2 tx-right">3:21am</div>
                    <div class="col-2 tx-center"><span class="square-10 bg-success"></span></div>
                    <div class="col-8">1 item sold <strong>Christmas bundle</strong></div>
                  </div><!-- row -->
                </div><!-- activity-item -->
                <div class="activity-label">Yesterday, December 12, 2017</div>
                <div class="activity-item">
                  <div class="row no-gutters">
                    <div class="col-2 tx-right">6:57am</div>
                    <div class="col-2 tx-center"><span class="square-10 bg-success"></span></div>
                    <div class="col-8">Earn new badge <strong>Elite Author</strong></div>
                  </div><!-- row -->
                </div><!-- activity-item -->
              </div><!-- dropdown-activity-list -->
              <div class="dropdown-list-footer">
                <a href="page-activity.html"><i class="fa fa-angle-down"></i> Show All Activities</a>
              </div>
            </div><!-- dropdown-menu-right -->
          </div><!-- dropdown -->
          <div class="dropdown dropdown-b">
            <a href="" class="header-notification" data-toggle="dropdown">
              <i class="icon ion-ios-bell-outline"></i>
              <span class="indicator"></span>
            </a>
            <div class="dropdown-menu">
              <div class="dropdown-menu-header">
                <h6 class="dropdown-menu-title">Notifications</h6>
                <div>
                  <a href="">Mark All as Read</a>
                  <a href="">Settings</a>
                </div>
              </div><!-- dropdown-menu-header -->
              <div class="dropdown-list">
                <!-- loop starts here -->
                <a href="" class="dropdown-link">
                  <div class="media">
                    <img src="http://via.placeholder.com/500x500" alt="">
                    <div class="media-body">
                      <p><strong>Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                      <span>October 03, 2017 8:45am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <!-- loop ends here -->
                <a href="" class="dropdown-link">
                  <div class="media">
                    <img src="http://via.placeholder.com/500x500" alt="">
                    <div class="media-body">
                      <p><strong>Mellisa Brown</strong> appreciated your work <strong>The Social Network</strong></p>
                      <span>October 02, 2017 12:44am</span>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="" class="dropdown-link read">
                  <div class="media">
                    <img src="http://via.placeholder.com/500x500" alt="">
                    <div class="media-body">
                      <p>20+ new items added are for sale in your <strong>Sale Group</strong></p>
                      <span>October 01, 2017 10:20pm</span>
                    </div>
                  </div><!-- media -->
                </a>
                <a href="" class="dropdown-link read">
                  <div class="media">
                    <img src="http://via.placeholder.com/500x500" alt="">
                    <div class="media-body">
                      <p><strong>Julius Erving</strong> wants to connect with you on your conversation with <strong>Ronnie Mara</strong></p>
                      <span>October 01, 2017 6:08pm</span>
                    </div>
                  </div><!-- media -->
                </a>
                <div class="dropdown-list-footer">
                  <a href="page-notifications.html"><i class="fa fa-angle-down"></i> Show All Notifications</a>
                </div>
              </div><!-- dropdown-list -->
            </div><!-- dropdown-menu-right -->
          </div><!-- dropdown -->
          <div class="dropdown dropdown-c">
            <a href="#" class="logged-user" data-toggle="dropdown">
              <img src="{{$user->avatar}}" alt="">
              <span>{{$user->name}} {{$user->surname}}</span>
              <i class="fa fa-angle-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <nav class="nav">
                <a href="/profile/{{$user->id}}" class="nav-link"><i class="icon ion-person"></i>Գնալ պրոֆիլ</a>
                <a href="/profile/settings" class="nav-link"><i class="icon ion-compose"></i> Կարգավորումներ</a>
                <a href="/admin/administration" class="nav-link"><i class="icon ion-ios-bolt"></i> Ադմինիստրացիա</a>
                <a href="" class="nav-link"><i class="icon ion-forward"></i>Դուրս գալ</a>
              </nav>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </div><!-- header-right -->
      </div><!-- container -->
    </div><!-- slim-header -->

    <div class="slim-navbar">
      <div class="container">
        <ul class="nav">
          <li class="nav-item with-sub active">
            <a class="nav-link" href="#">
              <i class="icon ion-ios-home-outline"></i>
              <span>Վահանակ</span>
            </a>
           
          </li>
          <li class="nav-item with-sub mega-dropdown">
            <a class="nav-link" href="#">
              <i class="icon ion-ios-filing-outline"></i>
              <span>Ընդհանուր</span>
            </a>
            <div class="sub-item">
              <div class="row">
                <div class="col-lg-5">
                  <label class="section-label">Օգտատերեր</label>
                  <div class="row">
                    <div class="col">
                      <ul>
                        <li><a href="/admin/chatmessages">Հիմնական չաթի նամակներ</a></li>  
                      </ul>
                    </div><!-- col -->
                   
                  </div><!-- row -->
                </div><!-- col -->
                
                <div class="col-lg mg-t-30 mg-lg-t-0">
                  <label class="section-label">Բաժանորդներ</label>
                  <ul>
                      <li><a href="form-validation.html">Ընկերություններ</a></li>
                      <li><a href="form-wizards.html">Կամավորներ</a></li>
                      <li><a href="form-editor.html">Բաժանորդներ</a></li>
                  </ul>

                
              </div><!-- row --><div class="col-lg mg-t-30 mg-lg-t-0">
                  <label class="section-label">Ինֆորմացիա</label>
                  <ul>
                      <li><a href="form-validation.html">Կոնտակտային տվյալներ</a></li>
                      <li><a href="form-wizards.html">Բեյջեր</a></li>
                      <li><a href="form-editor.html">Սլայդեր</a></li>
                  </ul>

                
              </div><!-- row -->
            </div><!-- dropdown-menu -->
          </li>
          <li class="nav-item with-sub">
            <a class="nav-link" href="#">
              <i class="icon ion-ios-book-outline"></i>
              <span>Նորություններ</span>
            </a>
            <div class="sub-item">
              <ul>
                <li><a href="/admin/news">Բոլոր նորությունները</a></li>
                <li><a href="/admin/news/add">Ավելացնել նորություն</a></li>
                <li><a href="page-contact.html">Նշանակել լրագրող</a></li>
                <li class="sub-with-sub">
                  <a href="#">Վիդեո</a>
                  <ul>
                    <li><a href="page-pricing.html">Բոլոր վիդեոները</a></li>
                    <li><a href="page-pricing2.html">Ավելացնել վիդեո</a></li>
                    <li><a href="page-pricing3.html">Նշանակել լրագրող</a></li>
                  </ul>
                </li>
              </ul>
            </div><!-- dropdown-menu -->
          </li>
          <li class="nav-item with-sub">
            <a class="nav-link" href="#" data-toggle="dropdown">
              <i class="icon ion-ios-gear-outline"></i>
              <span>Կառավարում</span>
            </a>
            <div class="sub-item">
              <ul>
                <li><a href="form-elements.html">ETC արժեք</a></li>
                <li><a href="form-layouts.html">Խանութ</a></li>
                <li><a href="form-validation.html">Իրադարձություններ</a></li>
                <li><a href="form-wizards.html">Օգնություններ</a></li>
                <li><a href="form-editor.html">Գործողություններ</a></li>

              </ul>
            </div><!-- dropdown-menu -->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="page-messages.html">
              <i class="icon ion-ios-chatboxes-outline"></i>
              <span>Թղթի հանձնում</span>
              <span class="square-8"></span>
            </a>
          </li>
        
        </ul>
      </div><!-- container -->
    </div><!-- slim-navbar -->
    <div class="container">
@yield('content')
    </div>
    <script src="treeadmin/lib/jquery/js/jquery.js"></script>
    <script src="treeadmin/lib/popper.js/js/popper.js"></script>
    <script src="treeadmin/lib/bootstrap/js/bootstrap.js"></script>
    <script src="treeadmin/lib/jquery.cookie/js/jquery.cookie.js"></script>
    <script src="treeadmin/lib/chartist/js/chartist.js"></script>
    <script src="treeadmin/lib/d3/js/d3.js"></script>
    <script src="treeadmin/lib/rickshaw/js/rickshaw.min.js"></script>
    <script src="treeadmin/lib/jquery.sparkline.bower/js/jquery.sparkline.min.js"></script>

    <script src="treeadmin/js/ResizeSensor.js"></script>
    <script src="treeadmin/js/dashboard.js"></script>
    <script src="treeadmin/js/slim.js"></script>
    @yield('footer')
  </body>
</html>

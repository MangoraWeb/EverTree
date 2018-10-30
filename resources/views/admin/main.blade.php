@extends('layouts.admin')

@section('content')

<div class="slim-mainpanel">
        <div class="container">
          <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
              <li class="breadcrumb-item"><a href="#">Ադմին</a></li>
              <li class="breadcrumb-item active" aria-current="page">Վահանակ</li>
            </ol>
          <h6 class="slim-pagetitle"> {{$user->name}}, սկսե՞նք աշխատանքը </h6>
          </div><!-- slim-pageheader -->
  
          <div class="dash-headline">
            <div class="dash-headline-left">
              <div class="dash-headline-item-one">
                <div id="chartArea1" class="dash-chartist"></div>
                <div class="dash-item-overlay">
                  <h1>0 ETC</h1>
                  <p class="earning-label">Ընդհանուր միավորների քանակը կայքում</p>
                  <p class="earning-desc">Մշտապես հետևեք այս բալանսին հետագա խնդիրներից խուսափելու համար։ Ամեն ամիս համեմատեք միավորների քանակը առկա թղթի հետ...</p>
                  <a href="#" class="statement-link">Ստատիստիկա<i class="fa fa-angle-right mg-l-5"></i></a>
                </div>
              </div><!-- dash-headline-item-one -->
            </div><!-- dash-headline-left -->
  
            <div class="dash-headline-right">
              <div class="dash-headline-right-top">
                <div class="dash-headline-item-two">
                  <div id="chartMultiBar1" class="chart-rickshaw"></div>
                  <div class="dash-item-overlay">
                    <h4>0 կիլոգրամ</h4>
                    <p class="item-label">Ամսեկան հաշվետվություն</p>
                    <p class="item-desc">Այս ամիս հանձնված թղթի քանակը կիլոգրամներով</p>
                    <a href="#" class="report-link">Վիճակագրություն <i class="fa fa-angle-right mg-l-5"></i></a>
                  </div>
                </div><!-- dash-headline-item-two -->
              </div><!-- dash-headline-right-top -->
              <div class="dash-headline-right-bottom">
                <div class="dash-headline-right-bottom-left">
                  <div class="dash-headline-item-three">
                    <span id="sparkline3" class="sparkline wd-100p">1,4,4,7,5,9,10,5,4,4,7,5,9,10</span>
                    <div>
                      <h1>0</h1>
                      <p class="item-label">Արկղերի քանակը</p>
                      <p class="item-desc">Մշտապես հետևեք արկղերի գտնվելու վայրին նրանց չկորցնելու համար։</p>
                    </div>
                  </div><!-- dash-headline-item-three -->
                </div><!-- dash-headline-right-bottom-left -->
                <div class="dash-headline-right-bottom-right">
                  <div class="dash-headline-item-three">
                    <span id="sparkline4" class="sparkline wd-100p">1,4,4,7,5,7,4,3,4,4,6,5,9,7</span>
                    <div>
                      <h1>0</h1>
                      <p class="item-label">Ֆոնդ</p>
                      <p class="item-desc">Հանաքված ընդհանուր ֆոնդը բարեգործության համար։ Բոլոր ամիսների գումարը։</p>
                    </div>
                  </div><!-- dash-headline-item-three -->
                </div><!-- dash-headline-right-bottom-right -->
              </div><!-- dash-headline-right-bottom -->
            </div><!-- wd-50p -->
          </div><!-- d-flex ht-100v -->
  
          <div class="card card-dash-one mg-t-20">
            <div class="row no-gutters">
              <div class="col-lg-3">
                <i class="icon ion-ios-analytics-outline"></i>
                <div class="dash-content">
                  <label class="tx-primary">Բաժանորդներ</label>
                  <h2>0</h2>
                </div><!-- dash-content -->
              </div><!-- col-3 -->
              <div class="col-lg-3">
                <i class="icon ion-ios-pie-outline"></i>
                <div class="dash-content">
                  <label class="tx-success">Ընկերություններ</label>
                  <h2>0</h2>
                </div><!-- dash-content -->
              </div><!-- col-3 -->
              <div class="col-lg-3">
                <i class="icon ion-ios-stopwatch-outline"></i>
                <div class="dash-content">
                  <label class="tx-purple">Կամավորներ</label>
                  <h2>0</h2>
                </div><!-- dash-content -->
              </div><!-- col-3 -->
              <div class="col-lg-3">
                <i class="icon ion-ios-world-outline"></i>
                <div class="dash-content">
                  <label class="tx-danger">Ադմին</label>
                  <h2>3</h2>
                </div><!-- dash-content -->
              </div><!-- col-3 -->
            </div><!-- row -->
          </div><!-- card -->
  
          <div class="row row-sm mg-t-20">
            <div class="col-lg-6">
              <div class="card card-table">
                <div class="card-header">
                  <h6 class="slim-card-title">Բաժանորդների ծախսեր</h6>
                </div><!-- card-header -->
                <div class="table-responsive">
                  <table class="table mg-b-0 tx-13">
                    <thead>
                      <tr class="tx-10">
                        <th class="wd-10p pd-y-5">&nbsp;</th>
                        <th class="pd-y-5">Ապրանքը</th>
                        <th class="pd-y-5 tx-right">Գինը</th>
                        <th class="pd-y-5">Gain</th>
                        <th class="pd-y-5 tx-center">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="pd-l-20">
                          <img src="http://via.placeholder.com/800x533" class="wd-55" alt="Image">
                        </td>
                        <td>
                          <a href="" class="tx-inverse tx-14 tx-medium d-block">The Dothraki Shoes</a>
                          <span class="tx-11 d-block"><span class="square-8 bg-danger mg-r-5 rounded-circle"></span> 20 remaining</span>
                        </td>
                        <td class="valign-middle tx-right">3,345</td>
                        <td class="valign-middle"><span class="tx-success"><i class="icon ion-android-arrow-up mg-r-5"></i>33.34%</span> from last week</td>
                        <td class="valign-middle tx-center">
                          <a href="" class="tx-gray-600 tx-24"><i class="icon ion-android-more-horizontal"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td class="pd-l-20">
                          <img src="http://via.placeholder.com/800x533" class="wd-55" alt="Image">
                        </td>
                        <td>
                          <a href="" class="tx-inverse tx-14 tx-medium d-block">Westeros Sneaker</a>
                          <span class="tx-11 d-block"><span class="square-8 bg-success mg-r-5 rounded-circle"></span> In stock</span>
                        </td>
                        <td class="valign-middle tx-right">720</td>
                        <td class="valign-middle"><span class="tx-danger"><i class="icon ion-android-arrow-down mg-r-5"></i>21.20%</span> from last week</td>
                        <td class="valign-middle tx-center">
                          <a href="" class="tx-gray-600 tx-24"><i class="icon ion-android-more-horizontal"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td class="pd-l-20">
                          <img src="http://via.placeholder.com/800x533" class="wd-55" alt="Image">
                        </td>
                        <td>
                          <a href="" class="tx-inverse tx-14 tx-medium d-block">Selonian Hand Bag</a>
                          <span class="tx-11 d-block"><span class="square-8 bg-success mg-r-5 rounded-circle"></span> In stock</span>
                        </td>
                        <td class="valign-middle tx-right">1,445</td>
                        <td class="valign-middle"><span class="tx-success"><i class="icon ion-android-arrow-up mg-r-5"></i>23.34%</span> from last week</td>
                        <td class="valign-middle tx-center">
                          <a href="" class="tx-gray-600 tx-24"><i class="icon ion-android-more-horizontal"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td class="pd-l-20">
                          <img src="http://via.placeholder.com/800x533" class="wd-55" alt="Image">
                        </td>
                        <td>
                          <a href="" class="tx-inverse tx-14 tx-medium d-block">Kel Dor Sunglass</a>
                          <span class="tx-11 d-block"><span class="square-8 bg-warning mg-r-5 rounded-circle"></span> 45 remaining</span>
                        </td>
                        <td class="valign-middle tx-right">2,500</td>
                        <td class="valign-middle"><span class="tx-success"><i class="icon ion-android-arrow-up mg-r-5"></i>28.78%</span> from last week</td>
                        <td class="valign-middle tx-center">
                          <a href="" class="tx-gray-600 tx-24"><i class="icon ion-android-more-horizontal"></i></a>
                        </td>
                      </tr>
                      <tr>
                        <td class="pd-l-20">
                          <img src="http://via.placeholder.com/800x533" class="wd-55" alt="Image">
                        </td>
                        <td>
                          <a href="" class="tx-inverse tx-14 tx-medium d-block">Kubaz Sunglass</a>
                          <span class="tx-11 d-block"><span class="square-8 bg-success mg-r-5 rounded-circle"></span> In stock</span>
                        </td>
                        <td class="valign-middle tx-14 tx-right">223</td>
                        <td class="valign-middle"><span class="tx-danger"><i class="icon ion-android-arrow-down mg-r-5"></i>18.18%</span> from last week</td>
                        <td class="valign-middle tx-center">
                          <a href="" class="tx-gray-600 tx-24"><i class="icon ion-android-more-horizontal"></i></a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- table-responsive -->
                <div class="card-footer tx-12 pd-y-15 bg-transparent">
                  <a href=""><i class="fa fa-angle-down mg-r-5"></i>View All Products</a>
                </div><!-- card-footer -->
              </div><!-- card -->
            </div><!-- col-6 -->
            <div class="col-lg-6 mg-t-20 mg-lg-t-0">
              <div class="card card-table">
                <div class="card-header">
                  <h6 class="slim-card-title">User Transaction History</h6>
                </div><!-- card-header -->
                <div class="table-responsive">
                  <table class="table mg-b-0 tx-13">
                    <thead>
                      <tr class="tx-10">
                        <th class="wd-10p pd-y-5">&nbsp;</th>
                        <th class="pd-y-5">User</th>
                        <th class="pd-y-5">Type</th>
                        <th class="pd-y-5">Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="pd-l-20">
                          <img src="http://via.placeholder.com/500x500" class="wd-36 rounded-circle" alt="Image">
                        </td>
                        <td>
                          <a href="" class="tx-inverse tx-14 tx-medium d-block">Mark K. Peters</a>
                          <span class="tx-11 d-block">TRANSID: 1234567890</span>
                        </td>
                        <td class="tx-12">
                          <span class="square-8 bg-success mg-r-5 rounded-circle"></span> Email verified
                        </td>
                        <td>Just Now</td>
                      </tr>
                      <tr>
                        <td class="pd-l-20">
                          <img src="http://via.placeholder.com/500x500" class="wd-36 rounded-circle" alt="Image">
                        </td>
                        <td>
                          <a href="" class="tx-inverse tx-14 tx-medium d-block">Karmen F. Brown</a>
                          <span class="tx-11 d-block">TRANSID: 1234567890</span>
                        </td>
                        <td class="tx-12">
                          <span class="square-8 bg-warning mg-r-5 rounded-circle"></span> Pending verification
                        </td>
                        <td>Apr 21, 2017 8:34am</td>
                      </tr>
                      <tr>
                        <td class="pd-l-20">
                          <img src="http://via.placeholder.com/500x500" class="wd-36 rounded-circle" alt="Image">
                        </td>
                        <td>
                          <a href="" class="tx-inverse tx-14 tx-medium d-block">Gorgonio Magalpok</a>
                          <span class="tx-11 d-block">TRANSID: 1234567890</span>
                        </td>
                        <td class="tx-12">
                          <span class="square-8 bg-success mg-r-5 rounded-circle"></span> Purchased success
                        </td>
                        <td>Apr 10, 2017 4:40pm</td>
                      </tr>
                      <tr>
                        <td class="pd-l-20">
                          <img src="http://via.placeholder.com/500x500" class="wd-36 rounded-circle" alt="Image">
                        </td>
                        <td>
                          <a href="" class="tx-inverse tx-14 tx-medium d-block">Ariel T. Hall</a>
                          <span class="tx-11 d-block">TRANSID: 1234567890</span>
                        </td>
                        <td class="tx-12">
                          <span class="square-8 bg-warning mg-r-5 rounded-circle"></span> Payment on hold
                        </td>
                        <td>Apr 02, 2017 6:45pm</td>
                      </tr>
                      <tr>
                        <td class="pd-l-20">
                          <img src="http://via.placeholder.com/500x500" class="wd-36 rounded-circle" alt="Image">
                        </td>
                        <td>
                          <a href="" class="tx-inverse tx-14 tx-medium d-block">John L. Goulette</a>
                          <span class="tx-11 d-block">TRANSID: 1234567890</span>
                        </td>
                        <td class="tx-12">
                          <span class="square-8 bg-pink mg-r-5 rounded-circle"></span> Account deactivated
                        </td>
                        <td>Mar 30, 2017 10:30am</td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- table-responsive -->
                <div class="card-footer tx-12 pd-y-15 bg-transparent">
                  <a href=""><i class="fa fa-angle-down mg-r-5"></i>View All Transaction History</a>
                </div><!-- card-footer -->
              </div><!-- card -->
            </div><!-- col-6 -->
          </div><!-- row -->
  
          <div class="row row-sm mg-t-20">
            <div class="col-lg-4">
              <div class="card card-info">
                <div class="card-body pd-40">
                  <div class="d-flex justify-content-center mg-b-30">
                    <img src="treeadmin/img/icon1.svg" class="wd-100" alt="">
                  </div>
                  <h5 class="tx-inverse mg-b-20">Document Management</h5>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Even the all-powerful Pointing has no control about the blind texts.</p>
                  <a href="" class="btn btn-primary btn-block">Getting Started</a>
                </div><!-- card -->
              </div><!-- card -->
            </div><!-- col-4 -->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
              <div class="card card-info">
                <div class="card-body pd-40">
                  <div class="d-flex justify-content-center mg-b-30">
                    <img src="treeadmin/img/icon2.svg" class="wd-100" alt="">
                  </div>
                  <h5 class="tx-inverse mg-b-20">Time Management</h5>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. Even the all-powerful Pointing has no control about the blind texts.</p>
                  <a href="" class="btn btn-primary btn-block">Take a Tour</a>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col-4 -->
            <div class="col-lg-4 mg-t-20 mg-lg-t-0">
              <div class="card card-sales">
                <h6 class="slim-card-title tx-primary">Sales Report</h6>
                <div class="row">
                  <div class="col">
                    <label class="tx-12">Today</label>
                    <p>1,898</p>
                  </div><!-- col -->
                  <div class="col">
                    <label class="tx-12">This Week</label>
                    <p>32,112</p>
                  </div><!-- col -->
                  <div class="col">
                    <label class="tx-12">This Month</label>
                    <p>72,067</p>
                  </div><!-- col -->
                </div><!-- row -->
  
                <div class="progress mg-b-5">
                  <div class="progress-bar bg-primary wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                </div>
                <p class="tx-12 mg-b-0">Maecenas tempus, tellus eget conditum rhon.</p>
              </div><!-- card -->
  
              <div class="card card-impression mg-t-20">
                <div class="card-body pd-b-0">
                  <h6 class="slim-card-title tx-primary">Page Impressions</h6>
                  <h2 class="tx-lato tx-inverse">323,360</h2>
                  <p class="tx-12"><span class="tx-primary">2.5%</span> change from yesterday</p>
                </div><!-- card-body -->
                <div id="rs3" class="ht-50 ht-sm-70 mg-r--1"></div>
              </div><!-- card -->
            </div><!-- col-4 -->
          </div><!-- row -->
  
        </div><!-- container -->
      </div><!-- slim-mainpanel -->
      <div class="slim-footer">
        <div class="container">
          <p>Copyright 2018 &copy; All Rights Reserved. Slim Dashboard Template</p>
          <p>Designed by: <a href="">ThemePixels</a></p>
        </div><!-- container -->
      </div><!-- slim-footer -->

@endsection
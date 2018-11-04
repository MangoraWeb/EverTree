@extends('layouts.admin')


@section('content')

<div class="slim-pageheader">
        <ol class="breadcrumb slim-breadcrumb">
          <li class="breadcrumb-item"><a href="#">Ադմին</a></li>
          <li class="breadcrumb-item"><a href="#">Նորություններ</a></li>
          <li class="breadcrumb-item active" aria-current="page">Բոլոր նորությունները</li>
        </ol>
        <h6 class="slim-pagetitle">Նորություններ</h6>
      </div>

      <div class="section-wrapper">
            <label class="section-title">Բոլոր նորությունները</label>
            <p class="mg-b-20 mg-sm-b-40">Կարող եք կառավարել և ավելացնել նորություններ</p>
  
                
            <div class="table-responsive">
                    <table class="table mg-b-0 tx-12">
                      <thead>
                        <tr class="tx-10">
                          <th class="wd-10p pd-y-5">&nbsp;</th>
                          <th class="pd-y-5">Վերնագիրը</th>
                          <th class="pd-y-5">Կատեգորիա</th>
                          <th class="pd-y-5">Տեղադրվել է</th>

                          <th class="pd-y-5">փոփոխել</th>
                          <th class="pd-y-5">ջնջել</th>
                          <th class="pd-y-5">դիտել</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($handings as $hand)
                        <tr>
                          <td class="pd-l-20">
                          <img style="width: 100px;height: 70px;border-radius: 0 !important;" 
                            src="" class="wd-36 rounded-circle">
                          </td>
                          <td>
                            <a href="" class="tx-inverse tx-14 tx-medium d-block">{{$hand->title}}</a>
                          <span class="tx-11 d-block"></span>
                          </td>
                          <td class="tx-12">
                            <span class="square-8 bg-success mg-r-5 rounded-circle"></span>
                          </td>
                          <td></td>


                        <!-- Icons -->
                          <td style="padding: 5px;"><a href="" style="font-size: 20px;padding-left: 20px;">
                            <i class="icon ion-edit"></i></a>
                        </td>
                        <td style="padding: 5px;"><a href="#" style=" color:#f50057; font-size: 20px;    padding-left: 20px;">
                               <a href=""> <i class="fa fa-close"></i></a>
                            </td>
                            <td style="padding: 5px;"><a href="#" style="font-size: 20px;    padding-left: 20px;">
                                    <i class="fa fa-eye"></i></a>
                                </td>

                        </tr>
                    @endforeach
                      </tbody>
                    </table>
                  </div>
    </div>


@endsection


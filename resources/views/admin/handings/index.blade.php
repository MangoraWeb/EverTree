@extends('layouts.admin')


@section('content')

<div class="slim-pageheader">
        <ol class="breadcrumb slim-breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Ադմին</a></li>
          <li class="breadcrumb-item active" aria-current="page">Բոլոր հայտերը</li>
        </ol>
        <h6 class="slim-pagetitle"> Հայտեր </h6>
      </div>

      <div class="section-wrapper">
            <label class="section-title">Բոլոր հայտերը</label>
            <p class="mg-b-20 mg-sm-b-40">Կարող եք հաստատել և հեռացնել հայտերը</p>
  
                
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
                          <td>
                            @if($hand->userid == 'NULL')
                             @php $avatar = '/user/default.png' @endphp
                            @else 
                              ok
                            @endif
                            </td>
                          <td class="pd-l-20">
                          <img src="{{asset($avatar)}}" class="wd-36 rounded-circle">
                          </td>
                          <td>
                            <a href="" class="tx-inverse tx-14 tx-medium d-block">{{$hand->name}}   {{$hand->surname}} {{$hand->count}} կիլոգրամ</a>
                          <span class="tx-11 d-block">{{$hand->address}}</span>
                          </td>
                          <td class="tx-12">
                            <span class="square-8 bg-success mg-r-5 rounded-circle">
                            
                            </span>
                            {{$hand->created_at->format('d/m/y H:m')}}

                          </td>
                          <td>{{$hand->count}} կիլոգրամ</td>

                          <td>
                              {{$hand->tel}}
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


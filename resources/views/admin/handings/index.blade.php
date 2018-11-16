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
                          
                          <th class="pd-y-3"> </th>
                          <th class="pd-y-5">Կատեգորիա</th>
                          <th class="pd-y-5">հայտը</th>
                          <th class="pd-y-5">հեռ</th>
                          <th class="pd-y-5">Հաստատել</th>
                          <th class="pd-y-5">Մերժել</th>
                          <th class="pd-y-5">Ընդունել</th>
                          <th class="pd-y-5">Դիտել</th>


                        </tr>
                      </thead>
                      <tbody>
                          @foreach($handings as $hand)
                        <tr>
                            @if($hand->user_id)
                             <td class="pd-l-20">
                                <img src="{{asset('/users/default.png')}}" class="wd-36 rounded-circle">
                              </td>

                            @else 
                            <td class="pd-l-20">
                                <img src="{{asset('images/noavatarhand.png')}}" class="wd-36 rounded-circle">
                              </td>

                            @endif
                            @php 
                              $us = $hand->user('name')->get();
                            @endphp
  
    
                          <td>
                            <a href="" class="tx-inverse tx-14 tx-medium d-block">
                              @foreach ($us as $use) 
                              {{$use->name}} {{$use->surname}}  
                              @endforeach   
                              {{$hand->count}} 

                            @if($hand->unit == 'ton')
                                տոննա
                            @else 
                                կիլոգրամ
                            @endif 
                              
                          </a>
                          
                          <span class="tx-11 d-block">{{$hand->province_id}}, {{$hand->city}}, {{$hand->address}}</span>
                          </td>
                          <td class="tx-12">
                            <span class="square-8 bg-success mg-r-5 rounded-circle">
  
                            </span>
                            {{$hand->created_at->format('d/m/y H:m')}}
                          </td>
                          <td>{{$hand->telephone}}</td>

                        <td style="padding: 5px;">
                        <a href="{{route('admin.hand.accept',$hand->id)}}" style="color: #42ab5f;font-size: 20px;padding-left: 30px;">
                              <i title="Հաստատել և փոխանցել միավորները" class="fa fa-vote-yea"></i></a>
                            </td>

                            <td style="padding: 5px;"><a href="#" style="color:#e91e63;font-size:20px;padding-left: 20px;">
                                <i title="Հեռացնել" class="fa fa-user-times"></i></a>
                            </td>

                        <td style="padding: 5px;"><a href="#" style="color: #42ab5f;font-size: 20px;padding-left: 30px;">
                                    <i title="Հաստատել ընդունումը" class="fa fa-clipboard-check"></i></a>
                        </td>


                        <td style="padding: 5px;"><a href="#" style="color:#039be5;font-size: 20px;padding-left: 10px;">
                            <i class="fa fa-external-link-alt"></i></a>
                </td>

                        </tr>
                    @endforeach
                      </tbody>
                    </table>
                  </div>
    </div>


@endsection


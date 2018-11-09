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
            <label class="section-title">Հայտ համար {{$handing->id}}</label>
            <p class="mg-b-20 mg-sm-b-40">Ուշադիր կարդացեք բոլոր դաշտերը սխալներից խուսափելու համար։</p>
  
            <form action="{{route('admin.hand.accept.etc')}}" method="post">
              @csrf
            <div class="row">
                    <div class="col-md-4 order-md-2 mb-4">
                      <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Հաշվարկ</span>
                      <span class="badge badge-secondary badge-pill">USD <input type="text" name="usd" class="form-control" value="{{$usd}}" style="
                        background-color: #6c757d;
                        color: #fff;
                        border: 0;
                        width: 160px;
                        font-size: 17px;
                        padding: 0;
                        text-align: center;
                    "></span>
                      </h4>
                      <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                          <div>
                          <h6 class="my-0">Ընդունվել է (կգ)</h6>
                            <small class="text-muted">հանձնվել վերամշակողին</small>
                          </div>
                          <span class="text-muted">
                            <input type="text" name="count" class="form-control" value="@if($handing->unit == 'ton')@php $hands = $handing->count * 1000 @endphp {{$hands}} @endif @if($handing->unit == 'kilogram'){{$handing->count}}@endif " style="width: 103px;height: 33px;">
                          </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                          <div>
                            <h6 class="my-0">Հանձնվել է</h6>
                            <small class="text-muted">այս արժեքով (դր)</small>
                          </div>
                          <input type="number" class="form-control" name="paperPrice" placeholder="Արժեքը" value="40" style=" width: 103px;height: 33px;">
                        </li>

                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                          <div>
                            <h6 class="my-0">Ծախսվել է (դրամ)</h6>
                            <small class="text-muted">կհանվի ընդհանուրից</small>
                          </div>
                          <input type="number" name="expense" value="0" class="form-control" style=" width: 103px;height: 33px;">
                        </li>


                      </ul>
            
                    
                    </div>
                    <div class="col-md-8 order-md-1">
                      <form class="needs-validation" novalidate="">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <label for="firstName">Անուն Ազգանուն</label>
                             <input type="text" name="nameSurname"  class="form-control" id="firstName" value="{{$userDetail}}" required="">
                          </div>
                       
                        </div>
            @if(!$handing->user_id == 0)
                        <div class="mb-3">
                          <label for="username">User ID</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">EverTree</span>
                            </div>
                        <input type="text" name="user_id" class="form-control" id="username" value="{{$handing->user_id}}" required="">
                           
                          </div>
                        </div>
            @else
                        <div class="mb-3">
                          <label for="username">User ID</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">EverTree</span>
                            </div>
                        <input type="text" name="user_id" class="form-control" id="username" value="0" required="">
                           
                          </div>
                        </div>
            @endif
                        <div class="row">
                                <div class="col-md-6 mb-3">
                                  <label for="firstName">Հեռախոսահամար</label>
                                <input type="text" name="phoneNumber" class="form-control" id="firstName" placeholder="" value="{{$handing->telephone}}" required="">
                                </div>
                                <div class="col-md-6 mb-3">
                                  <label for="lastName">Հասցե</label>
                                  <input type="text" name="address" class="form-control" id="lastName" placeholder="" value="{{$handing->address}}" required="">
                                </div>
                              </div>

         
                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="country">Մարզը</label>
                            <select class="custom-select d-block w-100" name="province" id="country" required="">
                            <option value="{{$province}}">{{$province}}</option>
                            </select>
                           
                          </div>

                          <div class="col-md-6 mb-3">
                            <label for="state">Քաղաքը</label>
                            <input class="custom-select d-block w-100" value="{{$handing->city}}" name="city" id="state" required="">
                          </div>

                        
                        </div>

                        <hr class="mb-4">
                          @if(!$userReg)
                          <div class="custom-control custom-checkbox">

                            <label style="color:#d32f2f;" for="same-address">Չգրանցված բաժանորդ | </label>
                          </div>

                          @else 
                        
                          <div class="custom-control custom-checkbox">
                          
                          <label style="color:#4caf50;"  for="same-address">Գրանցված բաժանորդ | {{$userReg->email}}</label>
                        </div>
                          @endif
                       

                        <hr class="mb-4">
            
                        
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Հաստատել</button>
                      </form>
                    </div>
                  </div>
    </div>


@endsection


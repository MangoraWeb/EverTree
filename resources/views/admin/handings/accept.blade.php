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
  
            <div class="row">
                    <div class="col-md-4 order-md-2 mb-4">
                      <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Հաշվարկ</span>
                      <span class="badge badge-secondary badge-pill">USD = {{$usd}} դրամ</span>
                      </h4>
                      <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                          <div>
                            <h6 class="my-0">Product name</h6>
                            <small class="text-muted">Brief description</small>
                          </div>
                          <span class="text-muted">$12</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                          <div>
                            <h6 class="my-0">Second product</h6>
                            <small class="text-muted">Brief description</small>
                          </div>
                          <span class="text-muted">$8</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                          <div>
                            <h6 class="my-0">Third item</h6>
                            <small class="text-muted">Brief description</small>
                          </div>
                          <span class="text-muted">$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                          <div class="text-success">
                            <h6 class="my-0">Promo code</h6>
                            <small>EXAMPLECODE</small>
                          </div>
                          <span class="text-success">-$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                          <span>Total (USD)</span>
                          <strong>$20</strong>
                        </li>
                      </ul>
            
                      <form class="card p-2">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Promo code">
                          <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">Redeem</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">Հայտ համար {{$handing->id}}</h4>
                      <form class="needs-validation" novalidate="">
                        <div class="row">
                          <div class="col-md-12 mb-3">
                            <label for="firstName">Անուն Ազգանուն</label>
                          <input type="text" class="form-control" id="firstName" placeholder="{{$userDetail}}" value="{{$userDetail}}" required="">
                          </div>
                       
                        </div>
            @if(!$handing->user_id == 0)
                        <div class="mb-3">
                          <label for="username">Պրոֆիլի հասցեն</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text">EverTree</span>
                            </div>
                        <input type="text" class="form-control" id="username" value="{{route('profileUser',$handing->user_id)}}" required="">
                           
                          </div>
                        </div>
            @endif
                        <div class="row">
                                <div class="col-md-6 mb-3">
                                  <label for="firstName">Հեռախոսահամար</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="{{$handing->telephone}}" required="">
                                </div>
                                <div class="col-md-6 mb-3">
                                  <label for="lastName">Հասցե</label>
                                  <input type="text" class="form-control" id="lastName" placeholder="" value="{{$handing->address}}" required="">
                                </div>
                              </div>

                        <div class="col-12">
                                <div id="map"></div>
                        </div>
            
                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="country">Մարզը</label>
                            <select class="custom-select d-block w-100" id="country" required="">
                            <option value="{{$province}}">{{$province}}</option>
                            </select>
                           
                          </div>

                          <div class="col-md-6 mb-3">
                            <label for="state">Քաղաքը</label>
                            <select class="custom-select d-block w-100" id="state" required="">
                              <option value="">{{$handing->city}}</option>
                            </select>
                            <div class="invalid-feedback">
                              Please provide a valid state.
                            </div>
                          </div>

                        
                        </div>

                        <hr class="mb-4">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="same-address">
                          <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="save-info">
                          <label class="custom-control-label" for="save-info">Save this information for next time</label>
                        </div>
                        <hr class="mb-4">
            
                        <h4 class="mb-3">Payment</h4>
            
                        <div class="d-block my-3">
                          <div class="custom-control custom-radio">
                            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                            <label class="custom-control-label" for="credit">Credit card</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                            <label class="custom-control-label" for="debit">Debit card</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                            <label class="custom-control-label" for="paypal">PayPal</label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="cc-name">Name on card</label>
                            <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                            <small class="text-muted">Full name as displayed on card</small>
                            <div class="invalid-feedback">
                              Name on card is required
                            </div>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="cc-number">Credit card number</label>
                            <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                            <div class="invalid-feedback">
                              Credit card number is required
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-3 mb-3">
                            <label for="cc-expiration">Expiration</label>
                            <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                            <div class="invalid-feedback">
                              Expiration date required
                            </div>
                          </div>
                          <div class="col-md-3 mb-3">
                            <label for="cc-cvv">CVV</label>
                            <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                            <div class="invalid-feedback">
                              Security code required
                            </div>
                          </div>
                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
                      </form>
                    </div>
                  </div>
    </div>


@endsection


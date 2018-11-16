@extends('layouts.admin')

@section('header')

@endsection


@section('content')

<div class="slim-pageheader">
        <ol class="breadcrumb slim-breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Ադմին</a></li>
          <li class="breadcrumb-item active" aria-current="page">Բոլոր հայտերը</li>
        </ol>
        <h6 class="slim-pagetitle"> Իրադարձություններ </h6>
      </div>

      <div class="section-wrapper">
            <label class="section-title">Բոլոր Իրադարձություններ</label>
            <p class="mg-b-20 mg-sm-b-40">Կարող եք ավելացնել և հեռացնել իրադարձությունները</p>
            <form method="POST" action="{{route('admin.event.store')}}">
                @csrf
                      <div class="form-layout">
                        <div class="row mg-b-25">
                          <div class="col-lg-12">
                            <div class="form-group">
                              <label class="form-control-label">Տեսակը <span class="tx-danger">*</span></label> <br>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="inlineRadio1" value="Ծառատունկ">
                                <label class="form-check-label" for="inlineRadio1">Ծառատունկ</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="inlineRadio2" value="Հանդիպում">
                                <label class="form-check-label" for="inlineRadio2">Հանդիպում</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="inlineRadio3" value="Բարեգործություն">
                                <label class="form-check-label" for="inlineRadio3">Բարեգործություն</label>
                              </div>
                           
                            </div>
                            
                          </div>
                          
                          </div>    
                       <!-- col-4 -->
                       
                          <div class="col-lg-12">
                              <label class="form-control-label">Ամիսը օրը Տարին <span class="tx-danger">*</span></label> <br>

                              <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text">
                                      <i class="icon ion-calendar tx-16 lh-0 op-6"></i>
                                    </div>
                                  </div>
                                  <input type="text" name="date" class="form-control fc-datepicker hasDatepicker" value="2018-10-28 12:23:16">
                                </div><br>
                            <div class="form-group">
                              <label class="form-control-label">Կարճ նկարագրություն՝ <span class="tx-danger">*</span></label>
                              <textarea class="form-control" type="text" name="desc"  placeholder="Կարճ նկարագրություն"></textarea>
                            </div>
                          </div><!-- col-4 -->
        
        
                          <div class="col-lg-3">
                              <div class="form-group">
                                <label class="form-control-label">Օրն ու ժամը՝ <span class="tx-danger">*</span></label>
                                <textarea class="form-control" type="text" name="timetext" >Կիրակի ժամը 15։00</textarea>
                              </div>
                            </div><!-- col-4 -->
                          
                          <div class="col-lg-4">
                            <div class="form-group">
                              <label class="form-control-label">Տարբերանշանի հասցեն՝ <span class="tx-danger">*</span></label>
                              <input class="form-control" type="text" name="icon" value="/webprofile/img/badge14.png">
                            </div>
                          </div><!-- col-4 -->
                          <div class="col-lg-8">
                            <div class="form-group mg-b-10-force">
                              <label class="form-control-label">Company՝ <span class="tx-danger">*</span></label>
                              <input class="form-control" type="text" name="company" value="EverTree">
                            </div>
                          </div><!-- col-8 -->
                          
                         
        
                         
                        </div><!-- row -->
            
                        <div class="form-layout-footer">
                          <button type="submit" class="btn btn-primary bd-0">Հաստատել</button>
                        </div><!-- form-layout-footer -->
                      </div><!-- form-layout -->
              </form>
      </div>
    
      
@endsection

@section('footer')
<script src="treeadmin/lib/jquery/js/jquery.js"></script>
<script src="{{asset('/treeadmin/js/slim.js')}}"></script>

<script src="{{asset('/treeadmin/lib/popper.js/js/popper.js')}}"></script>
<script src="{{asset('/treeadmin/lib/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{asset('/treeadmin/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
<script src="{{asset('/treeadmin/lib/summernote/js/summernote-bs4.min.js')}}"></script>
<script src="{{asset('/treeadmin/lib/medium-editor/js/medium-editor.js')}}"></script>



<script>
$(function(){
  'use strict';

  // Inline editor
  var editor = new MediumEditor('.editable');

  // Summernote editor
  $('#summernote').summernote({
    height: 150,
    tooltip: false
  })
});
</script>
@endsection     


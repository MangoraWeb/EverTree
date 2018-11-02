@extends('layouts.admin')

@section('header')
    <!-- vendor css -->
    <link href="{{asset('/treeadmin/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('/treeadmin/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{asset('/treeadmin/lib/medium-editor/css/medium-editor.css')}}" rel="stylesheet">
    <link href="{{asset('/treeadmin/lib/medium-editor/css/default.css')}}" rel="stylesheet">
    <link href="{{asset('/treeadmin/lib/summernote/css/summernote-bs4.css')}}" rel="stylesheet">
@endsection

@section('content')

        <div class="slim-pageheader">
                <ol class="breadcrumb slim-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Ադմին</a></li>
                <li class="breadcrumb-item"><a href="#">Նորություններ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Խմբագրում</li>
                </ol>
                <h6 class="slim-pagetitle">Խմբագրում</h6>
        </div>


        <div class="section-wrapper">
                <label class="section-title">Նորության խմբագրում</label>
                <p class="mg-b-20 mg-sm-b-40">Կարող եք խմբագրել նորությունները</p>

        <form method="POST" enctype="multipart/form-data" action="{{route('admin.news.update', [$article->id])}}">
          @csrf
                <div class="form-layout">
                  <div class="row mg-b-25">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label">Վերնագիրը՝ <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="title" value="{{$article->title}}" placeholder="Վերնագիրը">
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-12">
                      <div class="form-group">
                        <label class="form-control-label">Կարճ նկարագրություն՝ <span class="tx-danger">*</span></label>
                        <textarea class="form-control" type="text" name="excerpt"  placeholder="Կարճ նկարագրություն">{{$article->excerpt}}</textarea>
                      </div>
                    </div><!-- col-4 -->


                    <div class="col-lg-12">
                        <div class="form-group">
                          <label class="form-control-label">Տեքստ՝ <span class="tx-danger">*</span></label>
                          <textarea class="form-control" type="text" name="body"  placeholder="Կոնտենտ">{!!$article->body!!}</textarea>
                        </div>
                      </div><!-- col-4 -->
                    
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Կատեգորիա՝ <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="category" value="{{$article->category}}" placeholder="Կատեգորիա">
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-8">
                      <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Slug՝ <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="slug" value="{{$article->slug}}" placeholder="Կարճ լինք">
                      </div>
                    </div><!-- col-8 -->
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label for="exampleFormControlFile1">Example file input</label>
                        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                      </div>
                  </div>

                    <div class="col-lg-4">
                      <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Ստատուս <span class="tx-danger">*</span></label>
                        <select class="form-control select2 select2-hidden-accessible" data-placeholder="Ընտրեք ստատուսը" tabindex="-1" aria-hidden="true">
                          <option label="Ընտրեք ստատուսը"></option>
                          <option value="PUBLISHED">Ակտիվ</option>
                          <option value="DRAFT">Չցուցադրվող</option>
                          <option value="PENDING">Սպասում է հաստատման</option>
                        </select>
                        <span class="select2 select2-container select2-container--default" dir="ltr" style="width: 323px;">
                          <span class="selection">
                            <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-333d-container">
                            <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span>
                            <span class="dropdown-wrapper" aria-hidden="true"></span></span>
                      </div>
                    </div><!-- col-4 -->
                  </div><!-- row -->
      
                  <div class="form-layout-footer">
                    <button type="submit" class="btn btn-primary bd-0">Հաստատել</button>
                    <button class="btn btn-secondary bd-0">Վերադառնալ ետ</button>
                  </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
        
@endsection

@section('footer')
<script src="treeadmin/lib/jquery/js/jquery.js"></script>
<script src="{{asset('/treeadmin/lib/popper.js/js/popper.js')}}"></script>
<script src="{{asset('/treeadmin/lib/bootstrap/js/bootstrap.js')}}"></script>
<script src="{{asset('/treeadmin/lib/jquery.cookie/js/jquery.cookie.js')}}"></script>
<script src="{{asset('/treeadmin/lib/summernote/js/summernote-bs4.min.js')}}"></script>
<script src="{{asset('/treeadmin/lib/medium-editor/js/medium-editor.js')}}"></script>


<script src="{{asset('/treeadmin/js/slim.js')}}"></script>
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

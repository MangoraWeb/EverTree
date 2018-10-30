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


                <div class="section-wrapper mg-t-20">
                        <label class="section-title">Summernote</label>
                        <p class="mg-b-20 mg-sm-b-40">A super simple WYSIWYG editor on Bootstrap.</p>
              
                        <div id="summernote">Hello, universe!</div>
                      </div><!-- section-wrapper -->
        
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

@extends('layouts.app')

@section('title')
@stop

@section('header')
<link rel="stylesheet" href="{{asset('cus/buall.css')}}">
<link rel="stylesheet" href="{{asset('cus/sidebar.css')}}">
<link href='//fonts.googleapis.com/css?family=Raleway:600,900,400|Roboto:300,700' rel='stylesheet'>



<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


@endsection
@section('content')


<div class="container">
    <div class="row profile">
        <div class="col-md-9">
            <div class="profile-content">
                  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('page')}}">الرئيسية</a></li>


  </ol>

    <!-- Go to www.addthis.com/dashboard to customize your tools -->

 <form method="POST" enctype="multipart/form-data" action="{{route('add') }}">
    @csrf

@include('admin.bu.form' , ['user'=>1])
</form>







  </div>








            </div>




@include('website.bu.advancedSearch')

    </div>
</div>
<br>
<br>

@endsection

@section('footer')

{{-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> --}}

@endsection

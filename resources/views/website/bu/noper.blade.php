@extends('layouts.app')

@section('title')

كل العقارات

@endsection

@section('header')

<link rel="stylesheet" href="{{asset('cus/buall.css')}}">
<link rel="stylesheet" href="{{asset('cus/sidebar.css')}}">


<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


@endsection
@section('content')

<style>

hr{
    margin-top:10px;
    margin-bottom:10px;
}
.dis{
    padding-bottom:10px;
    margin-bottom: 10px;
}
.itemsearch{
    margin-bottom: 15px;
}


</style>

<div class="container">
    <div class="row profile">
        <div class="col-md-9">
            <div class="profile-content">
                  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('page')}}">الرئيسية</a></li>
    <li class="breadcrumb-item"><a href="{{route('allBu')}}">كل العقارات</a></li>
    <li class="breadcrumb-item"><a href="{{route('singleshow',$bu->id)}}">{{$bu->bu_name}}</a></li>


  </ol>

  <div class="alert alert-danger">
      <b>
          تنبيه:
      </b>
      هذ العقار
      {{$bu->name}}
      لم يتم الموافقة عليه حتى الان من الادارة وسيتم الموافقة عليه فى  مده اقصاها
      24 ساعه
  </div>
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

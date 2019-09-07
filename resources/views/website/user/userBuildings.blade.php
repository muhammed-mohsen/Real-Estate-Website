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



<div class="container">
    <div class="row profile">
        <div class="col-md-9">
            <div class="profile-content">
                  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('page')}}">الرئيسية</a></li>
    <li class="breadcrumb-item"><a href="{{route('allBu')}}">كل العقارات</a></li>
    <li class="breadcrumb-item"><a href="{{route('user.buildings')}}">عقارات المستخدم
    {{Auth::user()->name}}
    </a></li>


  </ol>
    @include('website.bu.sharefile')

                <div class="text-center">
                    {{-- @if (isset($search)) --}}
                    {{$bus->appends(request()->input())->links()}}


            </div>
</div>

</div>

@include('website.bu.advancedSearch')

    </div>
    </div>
</div>
<br>
<br>










@endsection













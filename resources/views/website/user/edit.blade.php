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
    <li class="breadcrumb-item"><a href="{{route('allBu')}}">كل العقارات</a></li>
    <li class="breadcrumb-item"><a href="{{route('user.buildings')}}">عقارات المستخدم
    {{Auth::user()->name}}
    </a></li>


  </ol>
<form method="POST" action="{{route('update.user',$user->id) }}" >
    @csrf
    @method("PUT")
@include('website.user.form')
</form>



            <form method="POST" action="{{route('Password.user',$user->id) }}">
    @csrf
    @method('PUT')
                                  <div class="form-group">

                                <input id="password" type="password"
                                placeholder="  ادخل كلمة المرور القديمة"
                                class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                                  <div class="form-group">

                                <input id="password" type="password"
                                placeholder="ادخل كلمة المرور الجديدة"
                                class="form-control @error('password') is-invalid @enderror" name="newpassword" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('تغيير كلمة المرور ') }}
                                </button>
                            </div>
                        </div>
</form>


            </div>
        </div>

@include('website.bu.advancedSearch')

    </div>
</div>
<br>
<br>

    @stop

    @section('footer')

    @endsection
















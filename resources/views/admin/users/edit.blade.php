@extends('admin.layouts.layout')
@section('title')
اضافة عضو
@endsection

@section('header')

@endsection

@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       تعديل عضو
                  {{$user->name}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active"><a href="{{route('users.index')}}">التحكم فى الاعضاء</a></li>
        <li class="active"><a href="{{route('users.create')}}">تعديل عضو </a></li>

      </ol>
    </section>

     <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">تعديل عضو
                  {{$user->name}}
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
 <form method="POST" action="{{route('users.update',$user->id) }}">
    @csrf
    @method("PUT")
@include('admin.users.form')
</form>
                </div>
                </div>
                </div>
                </div>
     </section>
    </section>

     <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">تغيير كلمة المرور للعضو
                  {{$user->name}}
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
 <form method="POST" action="{{route('Password',$user->id) }}">
    @csrf
    @method('PUT')
                                  <div class="form-group">

                                <input id="password" type="password"
                                placeholder="ادخل كلمة المرور"
                                class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

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
  @if ($user->id != 1)
                    <a href="{{ route('delete', $user->id)}} " class="btn btn-danger btn-circle">حذف العضو</a>
                @endif
                </div>
                </div>
                </div>
                </div>
     </section>

    @stop

    @section('footer')

    @endsection

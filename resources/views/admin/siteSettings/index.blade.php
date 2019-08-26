@extends('admin.layouts.layout')
@section('title')
تعديل اعدادات الموقع
@endsection

@section('header')

@endsection

@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
     تعديل اعدادات الموقع

      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active"><a href="{{route('siteSetting')}}">تعديل اعدادات الموقع</a></li>

      </ol>
    </section>

     <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">تعديل اعدادات الموقع</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">



<form action="{{route('siteSetting.save')}}" method="POST">
@csrf
              @foreach ($siteSettings as $setting)
       {{-- {{dd($setting->value)}} --}}
           <div class="form-group">
<div class="col-md-9">
@if($setting->type == 0)


<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="{{$setting->namesetting}}" value="{{$setting->value}}"  required autocomplete="name" autofocus>
@else
<textarea id="name"  class="form-control @error('{{$setting->namesetting}}') is-invalid @enderror" name="{{$setting->namesetting}}"   required autocomplete="name" autofocus>
{{$setting->value}}
</textarea>
    @endif

                                @error('{{$setting->namesetting}}')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$setting->namesetting}}</strong>
                                    </span>
                                @enderror
                                </div>
                                <div class="col-lg-3">
    {{$setting->slug}}
</div>
<div class="clearfix"></div>
<br>
   @endforeach
</div>
<button class="btn btn-app " name="submit" type="submit">
        <i class="fa fa-save"> حفظ التغيرات</i>
    </button>

              </form>
                </div>
                </div>
                </div>
                </div>
     </section>

    @stop

    @section('footer')

    @endsection

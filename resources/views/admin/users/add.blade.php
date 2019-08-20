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
       اضافة عضو

      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active"><a href="{{route('users.index')}}">التحكم فى الاعضاء</a></li>
        <li class="active"><a href="{{route('users.create')}}">اضافة عضو جديد</a></li>

      </ol>
    </section>

     <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">اضف عضو جديد</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
 <form method="POST" action="{{ route('users.store') }}">
                @include('admin.users.form')
 </form>
                </div>
                </div>
                </div>
                </div>
     </section>

    @stop

    @section('footer')

    @endsection

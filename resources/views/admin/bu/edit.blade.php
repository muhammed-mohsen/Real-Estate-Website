@extends('admin.layouts.layout')
@section('title')
اضافة عقار
@endsection

@section('header')

@endsection

@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       تعديل عقار
                  {{$bu->name}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active"><a href="{{route('bu.index')}}">التحكم فى العقارات</a></li>
        <li class="active"><a href="{{route('bu.create')}}">تعديل عقار </a></li>

      </ol>
    </section>

     <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">تعديل عقار
                  {{$bu->name}}
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
 <form method="POST" action="{{route('bu.update',$bu->id) }}">
    @csrf
    @method("PUT")
@include('admin.bu.form')
</form>
                </div>
                </div>
                </div>
                </div>
     </section>




    @stop

    @section('footer')

    @endsection

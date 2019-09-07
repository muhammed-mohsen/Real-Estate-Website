@extends('admin.layouts.layout')
@section('title')
اضافة عقار
@endsection

@section('header')
<link href="{{asset('cus/css/select2.min.css')}}" rel="stylesheet"  >
@endsection

@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       اضافة عقار

      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active"><a href="{{route('bu.index')}}">التحكم فى العقارات</a></li>
        <li class="active"><a href="{{route('bu.create')}}">اضافة عقار جديد</a></li>

      </ol>
    </section>

     <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">اضف عقار جديد</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
 <form method="POST" enctype="multipart/form-data" action="{{ route('bu.store') }}">
                @include('admin.bu.form')
 </form>
                </div>
                </div>
                </div>
                </div>
     </section>

    @stop

    @section('footer')
<script src="{{asset('cus/js/select2.min.js')}}"></script>
<script>
$(document).ready(function() {
    $('.bu_place').select2({
        dir:'rtl'
    });
});
</script>
    @endsection

 @extends('admin.layouts.layout')
@section('title')
اضافة عقار
@endsection

@section('header')

@endsection

@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       تعديل عقار
                  {{$bu->name}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active"><a href="{{route('buindex')}}">التحكم فى العقارات</a></li>
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


         <div class="form-group">
              <div class="col-md-10">
@if ($user != '')
<p>
       اسم المستخدم:
          {{$user->name}}
        </p>
        <p>
          الايميل:
          {{$user->email}}
        </p>
        <p>
          صلاحيات العضو:
          {{bu_admin()[$user->admin]}}
        </p>
        <p>
            للمزيد:
          <a href="{{route('users.edit',$user->id)}}" class="text-info">اضغط هنا</a>

        </p>

@else
<p>
      هذا العضو : زائر
        </p>

@endif



        </div>
        <div class="col-md-2">
            <label for="bu_name">معلومات عن صاحب العقار</label>
        </div>

    </div>
 <div class="clearfix"></div>
    <br>



 <form method="POST" enctype="multipart/form-data" action="{{route('bu.update',$bu->id) }}">
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

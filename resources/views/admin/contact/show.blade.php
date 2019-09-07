 @extends('admin.layouts.layout')
@section('title')
مشاهدة الرسالة
@endsection

@section('header')

@endsection

@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1></h1>
مشاهدة رسالة
                  {{$con->contact_name}}
      </h1>

    </section>

     <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">
مشاهدة رسالة
                  {{$con->contact_name}}
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">


@include('admin.contact.form')

                </div>
                </div>
                </div>
                </div>
     </section>




    @stop

    @section('footer')

    @endsection

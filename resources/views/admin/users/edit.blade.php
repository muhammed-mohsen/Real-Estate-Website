@extends('admin.layouts.layout')
@section('title')
اضافة عضو
@endsection

@section('header')

<style>
.nav-tabs>li {
    float: right;
}
</style>

@endsection

@section('content')



        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                تعديل عضو
                {{$user->name}}
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{route('page')}}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
                <li><a href=""><i class="fa fa-dashboard"></i> {{$user->name}}</a></li>


      </ol>
    </section>
<div class="content">
<div class="row">

<div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">العقارات المفعلة</a></li>
              <li><a href="#timeline" data-toggle="tab">العقارات الغير مفعلة</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <table class="table table-bordered">
                    <tr>
                        <td>
                            اسم العقار
                        </td>
                        <td>
                            اضيف فى
                     </td>
                        <td>
                          حالة العقار
                     </td>
                        <td>
                          سعر العقار
                     </td>
                        <td>
                         نوع العقار
                     </td>
                        <td>
                        منطقة العقار
                        </td>
                    </tr>

                     @foreach ($actBu as $bu)


                    <tr>
                        <td>
                            <a href="{{route('bu.edit',$bu->id)}}">{{$bu->bu_name }}</a>
                        </td>
                        <td>
                            {{$bu->created_at}}
                     </td>
                       <td>
                           <a href="{{route('active.bu',[$bu->id,0])}}" class="btn btn-danger">  الغاء تفعيل العقار </a>
                     </td>
                       <td>
                         {{$bu->bu_price}}
                        </td>
                        <td>
                            {{bu_type()[$bu->bu_type]}}
                        </td>
                                                <td>
                                                    {{bu_place()[$bu->bu_place]}}
                                             </td>
                    </tr>
                     @endforeach
                </table>
                  <div class="text-center">
                     {{$actBu->appends(request()->input())->links()}}
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <table class="table table-bordered">
                    <tr>
                        <td>
                            اسم العقار
                        </td>
                        <td>
                            اضيف فى
                     </td>
                                             <td>
                          حالة العقار
                     </td>
                      <td>
                          سعر العقار
                     </td>
                        <td>
                         نوع العقار
                     </td>
                        <td>
                        منطقة العقار
                        </td>
                    </tr>

                     @foreach ($unactBu as $bu)


                    <tr>
                        <td>
                            <a href="{{route('bu.edit',$bu->id)}}">{{$bu->bu_name }}</a>
                        </td>
                        <td>
                            {{$bu->created_at}}
                     </td>
                        <td>
                           <a href="{{route('active.bu',[$bu->id,1])}}" class="btn btn-success"> تفعيل العقار</a>
                     </td>
                     <td>
                         {{$bu->bu_price}}
                        </td>
                        <td>
                            {{bu_type()[$bu->bu_type]}}
                        </td>
                                                <td>
                                                    {{bu_place()[$bu->bu_place]}}
                                             </td>
                    </tr>
                     @endforeach
                </table>

                <div class="text-center">
                     {{-- {{$unactBu->appends(request()->input())->links()}} --}}
                </div>

              </div>
              <!-- /.tab-pane -->


              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>

<div class="col-md-3">



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
                            <form method="POST" action="{{route('users.update',$user->id) }}" enctype="multipart/form-data"`>
                                    @csrf
                                    @method("PUT")
                                    @include('admin.users.form')
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <form method="POST" action="{{route('Password.user',$user->id) }}">
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
</div>
</div>



    @stop

    @section('footer')

    @endsection

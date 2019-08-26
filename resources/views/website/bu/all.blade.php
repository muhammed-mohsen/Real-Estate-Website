@extends('layouts.app')

@section('title')

كل العقارات

@stop

@section('header')
<link rel="stylesheet" href="{{asset('cus/buall.css')}}">
<link rel="stylesheet" href="{{asset('cus/sidebar.css')}}">


<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


@endsection
@section('content')

<style>

hr{
    margin-top:10px;
    margin-bottom:10px;
}
.dis{
    padding-bottom:10px;
    margin-bottom: 10px;
}
.itemsearch{
    margin-bottom: 15px;
}


</style>

<div class="container">
    <div class="row profile">
        <div class="col-md-9">
            <div class="profile-content">
                  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                @if (isset($array))
                @if (!empty($array))
                @foreach ($array as $key=>$value)



    <li class="breadcrumb-item"><a href="{{url('/search?'.$key .'=' .$value)}}">
        {{correct()[$key]}} =>
    @if ($key == 'bu_rent')
   {{bu_rent()[$value]}}

    @elseif($key == 'bu_type')
{{bu_type()[$value]}}
    @elseif($key == 'bu_place')
{{bu_place()[$value]}}

    @else
{{$value}}


    @endif

    </a></li>
@endforeach

                @endif

                @endif
  </ol>
                @include('website.bu.sharefile')
                <div class="text-center">
                    {{-- @if (isset($search)) --}}
                    {{$bus->appends(request()->input())->links()}}
                    {{-- {{$bus->render()}} --}}
                    {{-- @endif --}}

                </div>

            </div>
        </div>

        <div class="col-md-3">
            <div class="profile-sidebar">
                <h2 style="margin-right:10px">
                    البحث المتقدم
                </h2>

                <div class="profile-usermenu " style="padding:10px">
                    <ul class="nav" style="    margin-right: 0;
    padding-right: 0;">
    <form action="{{route('search')}}" method="GET" >
    <li class="itemsearch">

        <select class="form-control"    name="bu_type"   id="bu_type">
            <option value="" disabled selected>نوع العقار</option>

            {{-- <option value="{{bu_type()}}">{{bu_type()}}</option> --}}
            @for ($i = 0; $i <= 2; $i++)
            <option value="{{$i}}">{{bu_type()[$i]}}</option>
            @endfor

        </select>
    </li>

    <li class="itemsearch">
                            <input type="text" name="bu_price_from" class="form-control" placeholder=" سعر العقار من">
                        </li>
    <li class="itemsearch">
                            <input type="text" name="bu_price_to" class="form-control" placeholder=" سعر العقار الى">
                        </li>

                        <li class="itemsearch">

                            <select class="form-control" name="rooms" id="rooms">
                                <option value="" disabled selected>عدد الغرف</option>
                                @for ($i = 2; $i <= 40; $i++) <option value="{{$i}}">{{$i}}</option>
                                    @endfor

                            </select>

                        </li>
                        <li class="itemsearch">

                            <select class="form-control" name="bu_rent" id="bu_rent">
                                <option value="" disabled selected>نوع العملية</option>

                                {{-- <option value="{{bu_type()}}">{{bu_type()}}</option> --}}
                                @for ($i = 0; $i <= 1; $i++)
                                <option value="{{$i}}">{{bu_rent()[$i]}}</option>
                                @endfor

                            </select>
                                <li>
                        <li class="itemsearch">

                            <select class="form-control select2 " name="bu_place" id="bu_place">
                                <option value="" disabled selected>اختار المنطقة</option>

                                {{-- <option value="{{bu_type()}}">{{bu_type()}}</option> --}}
                                @foreach (bu_place() as $key=>$value)
                                     <option value="{{$key}}">{{$value}}</option>
                                @endforeach



                            </select>
                                <li class="itemsearch">

                            <input type="text" name="bu_square" class="form-control" placeholder="مساحة العقار">
                        </li>


                           <li class="itemsearch">
                            <input type="submit"  class="form-control banner_btn" value="ابحث">
                        </li>

                        </form>

                    </ul>
                </div>
                <!-- END MENU -->
            </div>


            <div class="profile-sidebar">
                <h2 style="margin-right:10px">
                    خيارات العقار
                </h2>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->

                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav" style="    margin-right: 0;
    padding-right: 0;">
                        <li class="active">

                            <a href="{{route('allBu')}}">
                                <i class="glyphicon glyphicon-home"></i>
                                كل العقارات </a>
                        </li>
                        <li>
                            <a href="{{route('forRent')}}">
                                <i class="glyphicon glyphicon-user"></i>
                                عقارات للايجار </a>
                        </li>
                        <li>
                            <a href="{{route('showByType',0)}}" target="_blank">
                                <i class="glyphicon glyphicon-ok"></i>
                                شقق</a>
                        </li>
                        <li>
                        <li>
                            <a href="{{route('showByType',1)}}" target="_blank">
                                <i class="glyphicon glyphicon-ok"></i>
                                فلل</a>
                        </li>
                        <li>
                        <li>
                            <a href="{{route('showByType',2)}}" target="_blank">
                                <i class="glyphicon glyphicon-ok"></i>
                                شاليهات</a>
                        </li>
                        <li>

                        <li>
                            <a href="#">
                                <i class="glyphicon glyphicon-flag"></i>
                                Help </a>
                        </li>
                    </ul>
                </div>

                <!-- END MENU -->
            </div>
        </div>

    </div>
</div>
<br>
<br>










@endsection

@section('footer')

<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


</div>
@endsection

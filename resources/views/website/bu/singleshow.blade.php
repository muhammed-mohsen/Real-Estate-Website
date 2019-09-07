@extends('layouts.app')

@section('title')

عقار
{{$bu->bu_name}}
@stop

@section('header')
<link rel="stylesheet" href="{{asset('cus/buall.css')}}">
<link rel="stylesheet" href="{{asset('cus/sidebar.css')}}">
<link href='//fonts.googleapis.com/css?family=Raleway:600,900,400|Roboto:300,700' rel='stylesheet'>



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

 #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

</style>

<div class="container">
    <div class="row profile">
        <div class="col-md-9">
            <div class="profile-content">
                  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('page')}}">الرئيسية</a></li>
    <li class="breadcrumb-item"><a href="{{route('allBu')}}">كل العقارات</a></li>
    <li class="breadcrumb-item"><a href="{{route('singleshow',$bu->id)}}">{{$bu->bu_name}}</a></li>

  </ol>
  <hr>

  <div class="btn-group" role="group">

    <a href="{{url('search?bu_price='.$bu->bu_price)}}" class="btn btn-default">
    السعر :
    {{$bu->bu_price}}
    </a>
    <a href="{{url('search?bu_square='.$bu->bu_square)}}" class="btn btn-default">
    المساحة:
    {{$bu->bu_square}}
    </a>
    <a href="{{url('search?bu_place='.$bu->bu_place)}}" class="btn btn-default">
    المنطقة :
    {{bu_place()[$bu->bu_place]}}
    </a>
    <a href="{{url('search?rooms='.$bu->rooms)}}" class="btn btn-default">
    عدد الغرف :
    {{$bu->rooms}}
    </a>
    <a href="{{url('search?bu_rent='.$bu->bu_rent)}}" class="btn btn-default">
    نوع العملية:
    {{
    bu_rent()[$bu->bu_rent]
    }}
    </a>
    <a href="{{url('search?bu_type='.$bu->bu_type)}}" class="btn btn-default">
    نوع العقار :
    {{
    bu_type()[$bu->bu_type]
    }}
    </a>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->




  </div>
  <hr>
  <div class="clearfix"></div>
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d66a4b4df74f39e"></script>



                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox">


                </div>
   <hr>
   <img src="{{asset('storage/'.$bu->image)}}" class="img">
   <p>
        {{$bu->bu_large_dis}}
    </p>





            </div>
             <div class="profile-content">
                 <h3>
                     عقارات اخري قد تهمك
                 </h3>
                @include('website.bu.sharefile',['bus'=>$same_rent,
                ])
                @include('website.bu.sharefile',['bus'=>$same_type,
                ])

             </div>

        </div>

@include('website.bu.advancedSearch')

    </div>
</div>
<br>
<br>




{{$bu->bu_latitude}},{{$bu->bu_longitude}}





@endsection

@section('footer')

{{-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> --}}

@endsection

@if(count($bus)>0)


@foreach ($bus as $key=>$bu)

    <div class="col-md-4">
  <div class="productbox">

<img src="{{image($bu->image)}}" class="img-responsive">

    {{-- <img src="http://lorempixel.com/460/250/" class="img-responsive"> --}}
    <div class="producttitle">{{$bu->bu_name}}</div>
    <p class="text-justify dis">{{str_limit($bu->bu_small_dis, 70)}}.</p>
    <div class="productprice">
       <span class="pull-right">
المساحة:
        {{$bu->bu_square}}

       </span>
       <span class="pull-left">
            نوع العملية:
                   {{bu_rent()[$bu->bu_rent]}}
       </span>
       <span class="pull-right">
نوع العقار:
        {{bu_type()[$bu->bu_type]}}

       </span>
       <span class="pull-left">
            المنطقة:
                   {{bu_place()[$bu->bu_place]}}

       </span>
       <div class="clearfix"></div>

        <hr>
        <div class="pull-left">
           @if ($bu->bu_status == 0)
               <a href="{{route('singleshow',$bu->id)}}" class="btn btn-danger btm-sm" role="button">فى انتظار الرد <span class="fa fa-arrow-circle-o-right" style="color: #ffffff"></span></a>
               @else

            <a href="{{route('singleshow',$bu->id)}}" class="btn btn-primary btm-sm" role="button">اظهر التفاصيل <span class="fa fa-arrow-circle-o-right" style="color: #ffffff"></span></a>
            @endif
            </div>
            <div class="pricetext">{{$bu->bu_price}} €</div></div>

  </div>
</div>
@if (($key+1)%3 == 0 && $key !=0)
<div class="clearfix"></div>

@endif
@endforeach
<div class="clearfix"></div>
<br>

@else

<div class="alert-danger">
    لايوجد اى عقارات
</div>

@endif


    @extends('layouts.app')
  @section('title')

اهلا بك

@stop

@section('header')
	<link rel="stylesheet" href="{{asset('product/css/reset.css')}}"> <!-- reset style -->
	<link rel="stylesheet" href="{{asset('product/css/style.css')}}"> <!-- Resource style -->
	<script src="{{asset('product/js/modernizr.js')}}"></script> <!-- Modernizr -->


<style>

body{
    background-color:  red;
}

</style>

@stop


        <!-- Fonts -->
@section('content')


<div class="banner text-center" style="background:url({{asset('storage/'.getSetting('main_slider'))}}) " no-repeat center>
  <div class="container">
    <div class="banner-info">
      <h1>
        اهلا بك فى
        {{getSetting()}}
        </h1>
      <p>
 <form action="{{route('search')}}" method="GET" >

    <div class="row">
        <div class="col-lg-3">
<select class="form-control"    name="bu_type"   id="bu_type">
            <option value="" disabled selected>نوع العقار</option>

            {{-- <option value="{{bu_type()}}">{{bu_type()}}</option> --}}
            @for ($i = 0; $i <= 2; $i++)
            <option value="{{$i}}">{{bu_type()[$i]}}</option>
            @endfor

        </select>
</div>
        <div class="col-lg-3">


                            <input type="text" name="bu_price_from" class="form-control" placeholder=" سعر العقار من">
</div>
<div class="col-lg-3">

                            <input type="text" name="bu_price_to" class="form-control" placeholder=" سعر العقار الى">


</div>
<div class="col-lg-3">
                            <select class="form-control select2" name="rooms" id="rooms">
                                <option value="" disabled selected>عدد الغرف</option>
                                @for ($i = 2; $i <= 40; $i++) <option value="{{$i}}">{{$i}}</option>
                                    @endfor

                            </select>






        </div>
    </div>
<br>
    <div class="row">
        <div class="col-lg-3">

    <input type="submit"  class="form-control btn-success" value="ابحث">

    </div>
        <div class="col-lg-3">

                            <select class="form-control" name="bu_rent" id="bu_rent">
                                <option value="" disabled selected>نوع العملية</option>

                                {{-- <option value="{{bu_type()}}">{{bu_type()}}</option> --}}
                                @for ($i = 0; $i <= 1; $i++)
                                <option value="{{$i}}">{{bu_rent()[$i]}}</option>
                                @endfor

                            </select>
                             </div>
<div class="col-lg-3">
                            <select class="form-control select2 " name="bu_place" id="bu_place">
                                <option value="" disabled selected>اختار المنطقة</option>

                                {{-- <option value="{{bu_type()}}">{{bu_type()}}</option> --}}
                                @foreach (bu_place() as $key=>$value)
                                     <option value="{{$key}}">{{$value}}</option>
                                @endforeach



                            </select>
</div>
<div class="col-lg-3">
                            <input type="text" name="bu_square" class="form-control" placeholder="مساحة العقار">

</div>

    </div>
                        </form>

      </p>
      <a class="banner_btn" href="{{route('add.bu')}}">اضافة عقار مجانا</a> </div>

 </div>
</div>

<div class="main">



      <ul class="cd-items cd-container">
				{{-- {{dd(\App\Bu::where('bu_status',1)->get() )}} --}}
			@foreach (\App\Bu::where('bu_status',1)->get() as $bu)
     {{-- {{dd(asset('sotrage/'.$bu->image))}} --}}
			<li class="cd-item effect8">
				<img src="{{image($bu->image)}}" alt="{{$bu->name}}" title="{{$bu->name}}">
				<a href="#0" data-id="{{$bu->id}}" class="cd-trigger">نبذة سريعة</a>
			</li> <!-- cd-item -->
			@endforeach


	</ul> <!-- cd-items -->

	<div class="cd-quick-view">
		<div class="cd-slider-wrapper">
			<ul class="cd-slider">
				<li ><img class="imagebox img-responsive" src=""  alt="Product 1"></li>

			</ul> <!-- cd-slider -->

		<!-- cd-slider-navigation -->
		</div> <!-- cd-slider-wrapper -->

		<div class="cd-item-info">
<h2 class="titlebox">

</h2>
			<p class="disbox">

            </p>

			<ul class="cd-item-action">
				<li><a href="" class="add-to-cart pricebox"></a></li>
				<li><a href="" class="morebox">مشاهدة العقار</a></li>
			</ul> <!-- cd-item-action -->
		</div> <!-- cd-item-info -->
		<a href="#0" class="cd-close">Close</a>
	</div> <!-- cd-quick-view -->


</div>



@endsection

@section('footer')
<script src="{{asset('product/js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('product/js/velocity.min.js')}}"></script>
<script>

function urlHome()
{
    return '{{Request::root()}}';
}
function no_imageurl()
{
    return '{{getSetting('no_image')}}';
}

</script>
<script src="{{asset('product/js/main.js')}}"></script>

@endsection

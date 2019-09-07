@extends('layouts.app')

@section('title')

كل العقارات

@endsection

@section('header')

<link rel="stylesheet" href="{{asset('cus/buall.css')}}">
<link rel="stylesheet" href="{{asset('cus/sidebar.css')}}">


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
    <li class="breadcrumb-item"><a href="{{route('page')}}">الرئيسية</a></li>
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

@include('website.bu.advancedSearch')

    </div>
</div>
</div>
<br>
<br>









@endsection



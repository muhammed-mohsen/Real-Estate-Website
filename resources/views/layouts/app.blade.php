<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{getSetting('sitename')}}
|
        @yield('title')

    </title>

@yield('header')

    <!-- Styles -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <link href="{{asset("website/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
<link href="{{asset("website/css/flexslider.css")}}" rel="stylesheet" />

<link href="{{asset("website/css/style.css")}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset("website/css/font-awesome.min.css")}}"/>
<script src="{{asset("website/js/jquery.min.js")}}"></script>
<link href="{{asset('cus/css/select2.min.css')}}" rel="stylesheet"  >
<link href="https://fonts.googleapis.com/css?family=Markazi+Text:400,500,600,700&amp;subset=arabic,latin-ext,vietnamese" rel="stylesheet">
<style>
*{
font-family: 'Markazi Text', serif;
}
</style>



<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>



</head>
<body id="app-laravel" style="direction:rtl">
    <div class="header">
        <script type="text/javascript" src="{{asset("website/js/responsive-nav.js")}}"></script>

  <div class="container "> <a class="navbar-brand" href="{{route('page')}}"><i class="fa fa-paper-plane"></i> عقارات</a>
    <div class="menu pull-left"> <a class="toggleMenu" href="#"><img src="{{asset("website/images/nav_icon.png")}}" alt="image" /> </a>
      <ul class="nav" id="nav">
        <li class="{{setActive(['home'],'current')}}"><a href="{{route('page')}}">رئيسية</a></li>
        <li  class="{{setActive(['showallbuilding'],'current')}}"><a href="{{route('allBu')}}">عرض العقارات</a></li>

               <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" v-pre>
                                              ايجار <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right text-right" aria-labelledby="navbarDropdown">
                                    @foreach (bu_type() as $key=>$value)
                                        <a class="dropdown-item" href="{{ url('/search?bu_rent=1&&bu_type='.$key)}}"
                                       >
                                    {{$value}}
                                    </a>
                                     @endforeach
                                </div>
                            </li>
               <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" v-pre>
                                               تمليك <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right text-right" aria-labelledby="navbarDropdown">
                                    @foreach (bu_type() as $key=>$value)
                                        <a class="dropdown-item" href="{{ url('/search?bu_rent=0&&bu_type='.$key)}}"
                                       >
                                    {{$value}}
                                    </a>
                                     @endforeach
                                </div>
                            </li>
        <li class="{{setActive(['contact_us'],'current')}}"><a href="{{route('contact_us')}}">اتصل بنا</a></li>
        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('تسجيل دخول') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('انشاء حساب') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>






                                <div class="dropdown-menu dropdown-menu-right text-right" aria-labelledby="navbarDropdown">



                            <a href="{{route('edit.user')}}" class="{{setActive(['edituser'])}}">
                                <i class="glyphicon glyphicon-user"></i>
                               معلوماتى الشخصية</a>


                                       <a href="{{route('user.buildings')}}   "class="{{setActive(['userBuildings'])}}"  target="_blank">
                                           <i class="glyphicon glyphicon-ok"></i>
                                           عقاراتي</a>


                            <a href="{{route('add.bu')}}" class="{{setActive(['addbu'])}}">
                                <i class="glyphicon glyphicon-ok"></i>
                                اضافة عقار </a>


                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('تسجيل الخروج') }}
                                    </a>
                                    {{-- <a class="dropdown-item" href="{{ route('users.edit-profile') }}"
                                    >
                                      My profile
                                    </a> --}}

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                             <li class="{{setActive(['contact_us'],'current')}}"><a href="{{route('admin')}}">ادارة الموقع</a></li>
                        @endguest
        <div class="clear"></div>
      </ul>

    </div>
  </div>
</div>



{{-- {{dd(asset("public/website/js"))}} --}}

            @yield('content')


<script src="{{asset("website/js/bootstrap.min.js")}}"></script>
<script src="{{asset("website/js/jquery.flexslider.js")}}"></script>


{{-- {{Html::script('website/js/responsive-nav.js')}} --}}

{{-- <script type="text/javascript" src="{{asset("website/js/responsive-nav.js")}}"></script> --}}
{{-- <script src="JavaScript/jquery.js" /> </script> --}}
{{-- <script src="{{asset("website/>js/jquery-min.js")}}" />  </script> --}}



    <footer>
        <div class="footer">
  <div class="footer_bottom">
    <div class="follow-us"> <a class="fa fa-facebook social-icon" href="{{getSetting('facebook')}}"></a> <a class="fa fa-linkedin social-icon" href="{{getSetting('linkedin')}}"></a> <a class="fa fa-youtube social-icon" href="{{getSetting('youtube')}}"></a> </div>
    <div class="copy">
      <p>{{getSetting('footer')}} &copy; {{date('Y')}}  <a href="https://www.linkedin.com/in/muhammed-mohsen98/" rel="nofollow">Muhammed Mohsen</a></p>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script src="{{asset('cus/js/select2.min.js')}}"></script>
<script>
$(document).ready(function() {
    $('.select2').select2({
        dir:'rtl'
    });
});
</script>
 <script>

    @if(Session::has('success'))

     toastr.success('{{Session::get('success')}}')

    @endif
    @if(Session::has('error'))

     toastr.error('{{Session::get('error')}}')

    @endif

    </script>

            @yield('footer')
</footer>

</body>
</html>

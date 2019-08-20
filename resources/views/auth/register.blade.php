@extends('layouts.app')
@section('title')

انشاء حساب

@stop
@section('content')


<div class="container">
<hr>
<h3>انشاء عضوية جديدة</h3>
<hr>
    <div class="contact_bottom">
 <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">



                                <input id="name" type="text" placeholder="أدخل اسمك" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

</div>




                            <div class="form-group">

                                <input id="email" type="email" placeholder="ادخل حسابك " class="form-control pr-0 @error('email') is-invalid @enderror" name="email" placeholder="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


 </div>


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
   <div class="form-group ">



                                <input id="password-confirm" placeholder="ادخل تأكيد كلمة المرور" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('انشاء حساب ') }}
                                </button>
                            </div>
                        </div>
                    </form>
</div>
                </div>

@endsection

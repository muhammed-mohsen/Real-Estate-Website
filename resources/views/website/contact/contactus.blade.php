@extends('layouts.app')

@section('title')

تواصل معنا

@endsection

@section('header')
<link rel="stylesheet" href="{{asset('cus/css/contect-us.css')}}">

@stop



@section('content')


<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    تواصل معنا  <small>بأريحية</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">

                <div class="row">
                       <div class="col-md-6">
                            <form action="{{route('contact.store')}}" method="post">
                                @csrf
                        <div class="form-group">

                            <label for="name">
                                الرسالة</label>
                            <textarea name="contact_message" id="contact_message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="contact_name">
                                الاسم</label>
                            <input type="text" class="form-control" id="contact_name" placeholder="Enter name"
                            name="contact_name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                البريد الالكترونى</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="contact_email" placeholder="Enter email" required="required" name ='contact_email' /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                عنوان الرسالة</label>
                            <select id="contact_subject" name="contact_subject" class="form-control" required="required">
                                @foreach (address() as $key=>$value)
<option value="{{$key}}" selected="">{{$value}}</option>
                                @endforeach


                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            ارسال الرسالة</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><i class="fa fa-outdent"></i>مكتبنا</legend>
            <address>

                {{nl2br(getSetting('address'))}}<br>
                <abbr title="Phone">
                    P:</abbr>
               {{nl2br(getSetting('mobile'))}}
            </address>
            <address>
                <strong>{{nl2br(getSetting('sitename'))}}</strong><br>
                <a href="mailto:#">first.last@example.com</a>
            </address>
            </form>
        </div>
    </div>
</div>

@endsection

@section('footer')




{{-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> --}}



@endsection

<div class="contact_bottom">


    <div class="form-group">

        <div class="col-md-10">
           <textarea id="bu_small_dis"  class="form-control @error('bu_small_dis') is-invalid @enderror"   required autocomplete="bu_small_dis" autofocus>
          {{$con->contact_message}}
</textarea>

        </div>
             <div class="col-md-2">
    <label for="bu_small_dis">نص الرسالة</label>
 </div>
    </div>
        <div class="clearfix"></div>
    <br>
 <div class="form-group">


        <div class="col-md-10">
            <input id="bu_longtitude" type="text"
                class="form-control  name="bu_longtitude"
                value=" {{$con->contact_name}}"
              >

        </div>
        <div class="col-md-2">
            <label for="bu_longtitude"> اسم المرسل </label>
        </div>
    </div>

    <div class="clearfix"></div>
    <br>

    {{-- {{dd($con)}} --}}
 <div class="form-group">


        <div class="col-md-10">
            <input id="bu_longtitude" type="text"
                class="form-control  name="bu_longtitude"
                value="{{address()[$con->contact_subject]}}"
              >


        </div>
        <div class="col-md-2">
            <label for="bu_longtitude"> نوع الرسالة </label>
        </div>
    </div>

    <div class="clearfix"></div>
    <br>
 <div class="form-group">


        <div class="col-md-10">
            <input id="bu_longtitude" type="text"
                class="form-control  name="bu_longtitude"
                value="{{$con->contact_email}}"
              >

        </div>
        <div class="col-md-2">
            <label for="bu_longtitude">البريد الالكترونى</label>
        </div>
    </div>

    <div class="clearfix"></div>
    <br>





</div>

<div class="contact_bottom">

    @csrf

    <div class="form-group">


        <div class="col-md-10">
            <input id="bu_name" type="text"
                class="form-control @error('bu_name') is-invalid @enderror" name="bu_name"
                value="{{isset($bu)? $bu->bu_name:''}}" required autocomplete="name" autofocus>

            @error('bu_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="col-md-2">
            <label for="bu_name">اسم العقار</label>
        </div>

    </div>
 <div class="clearfix"></div>
    <br>
    <div class="form-group">


        <div class="col-md-10">
                <select class="form-control select2" name="rooms" id="rooms">
                                <option value="" disabled selected>عدد الغرف</option>
                                @for ($i = 2; $i <= 40; $i++) <option value="{{$i}}">{{$i}}</option>
                                    @endfor

                            </select>

            @error('rooms')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="col-md-2">
            <label for="bu_name">عدد الغرف</label>
        </div>
    </div>
  <div class="clearfix"></div>
    <br>
    <div class="form-group">


        <div class="col-md-10">
            <input id="bu_price" type="text"
                class="form-control @error('bu_price') is-invalid @enderror" name="bu_price"
                value="{{isset($bu)? $bu->bu_price:''}}" required autocomplete="bu_price" autofocus>

            @error('bu_price')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="col-md-2">
            <label for="bu_name">سعر العقار</label>
        </div>
    </div>
<div class="clearfix"></div>
    <br>
    <div class="form-group">

        <div class="col-md-10">

            <select id="bu_rent" type="text" class="form-control @error('bu_rent') is-invalid @enderror" name="bu_rent"
                required autocomplete="name" autofocus>

                <option value="0">{{bu_rent()[0]}}</option>
                <option value="1">{{bu_rent()[1]}}</option>



            </select>

            @error('bu_rent')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="col-md-2">
            <label for="bu_rent">نوع العملية</label>
        </div>

    </div>
<div class="clearfix"></div>
    <br>
    <div class="form-group">


        <div class="col-md-10">
            <input id="bu_square" type="text"
                class="form-control @error('bu_square') is-invalid @enderror" name="bu_square"
                value="{{isset($bu)? $bu->bu_square:''}}" required autocomplete="bu_square" autofocus>

            @error('bu_square')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="col-md-2">
            <label for="bu_square">مساحة العقار</label> </div>
    </div>
  <div class="clearfix"></div>
    <br>
    <div class="form-group">
        <div class="col-md-10">
            <select id="bu_type" type="text" class="form-control @error('bu_type') is-invalid @enderror" name="bu_type"
                required autocomplete="bu_type" autofocus>

                <option value="0">{{bu_type()[0]}}</option>
                <option value="1">{{bu_type()[1]}}</option>
                <option value="2">{{bu_type()[2]}}</option>


            </select>
        </div>



        <div class="col-md-2">
            <label for="bu_type">نوع العقار</label>
        </div>

    </div>
      <div class="clearfix"></div>
    <br>

    <div class="form-group">
        <div class="col-md-10">

               <select class="form-control bu_place " name="bu_place" id="bu_place">
                                <option value="" disabled selected>اختار المنطقة</option>

                                {{-- <option value="{{bu_type()}}">{{bu_type()}}</option> --}}
                                @foreach (bu_place() as $key=>$value)
                                     <option value="{{$key}}">{{$value}}</option>
                                @endforeach



                            </select>
  </div>
    <div class="col-md-2">
            <label for="bu_place">المنطقة</label>
        </div>
    </div>

  <div class="clearfix"></div>
    <br>
    @if (!isset($user))
     <div class="form-group">

        <div class="col-md-10">



            <select id="bu_status" type="text" class="form-control @error('bu_status') is-invalid @enderror" name="bu_status"
                required autocomplete="name" autofocus>

                <option value="0">{{bu_status()[0]}}</option>
                <option value="1">{{bu_status()[1]}}</option>


            </select>

            @error('bu_status')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="col-md-2">
            <label for="bu_rent">نوع العملية</label>
        </div>


    </div>
    <div class="clearfix"></div>
    <br>
    @endif
    @if (isset($bu))
        @if ($bu->image != '')
               <div class="form-group">

        <div class="col-md-10">

          <img src="{{asset('storage/'.$bu->image)}}" width="100" class="img-responsive">


        </div>
        <div class="col-md-2">
            <label for="bu_rent">صورة العقار</label>
        </div>

    </div>
    <div class="clearfix"></div>
    <br>
        @endif
    @endif


     <div class="form-group">


        <div class="col-md-10">
            <input id="image" type="file"
                class="form-control @error('image') is-invalid @enderror" name="image"
                value="{{isset($bu)? $bu->image:''}}" required autocomplete="image" autofocus>

            @error('image')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="col-md-2">
            <label for="image"> رفع صورة للعقار</label>
        </div>
    </div>
    <div class="clearfix"></div>
    <br>





    <div class="form-group">
        <div class="col-md-10"> <input id="bu_meta" type="text"
                class="form-control @error('bu_meta') is-invalid @enderror" name="bu_meta"
                value="{{isset($bu)? $bu->bu_meta:''}}" required autocomplete="bu_meta" autofocus> @error('bu_meta')
            <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong> </span> @enderror </div>
        <div class="col-md-2"> <label for="bu_meta">الكلمات الدلالية</label> </div>
    </div>
    @if (!isset($user))
    <div class="form-group">
        <div class="col-md-2">
    <label for="bu_small_dis">وصف العقار لمحركات البحث</label>
 </div>
        <div class="col-md-10">
           <textarea id="bu_small_dis"  class="form-control @error('bu_small_dis') is-invalid @enderror" name="bu_small_dis"   required autocomplete="bu_small_dis" autofocus>
          {{isset($bu)? $bu->bu_small_dis:''}}
</textarea>
 @error('bu_small_dis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>bu_small_dis</strong>
                                    </span>
                                @enderror
<br>
<div class="clearfix"></div>
<div class="alert alert-warning">
لايمكن ادخال اكثر من 160 حرف على حسب معايير جوجل
</div>

        </div>
    </div>
        <div class="clearfix"></div>
    <br>
    @endif
 <div class="form-group">


        <div class="col-md-10">
            <input id="bu_longtitude" type="text"
                class="form-control @error('bu_longtitude') is-invalid @enderror" name="bu_longtitude"
                value="{{isset($bu)? $bu->bu_longtitude:''}}" required autocomplete="bu_longtitude" autofocus>

            @error('bu_longtitude')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="col-md-2">
            <label for="bu_longtitude"> خط الطول</label>
        </div>
    </div>
    <div class="clearfix"></div>
    <br>



     <div class="form-group">


        <div class="col-md-10">
            <input id="bu_latitude" type="text"
                class="form-control @error('bu_latitude') is-invalid @enderror" name="bu_latitude"
                value="{{isset($bu)? $bu->bu_latitude:''}}" required autocomplete="bu_latitude" autofocus>

            @error('bu_latitude')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="col-md-2">
            <label for="bu_latitude">دئرة العرض</label>
        </div>
    </div>



    <div class="clearfix"></div>
    <br>
    <div class="form-group">


        <div class="col-md-10">
           <textarea id="bu_large_dis"  class="form-control @error('bu_large_dis') is-invalid @enderror" name="bu_large_dis"   required autocomplete="bu_large_dis" autofocus>
            {{isset($bu)? $bu->bu_large_dis:''}}

</textarea>

  @error('bu_large_dis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

     </div>

        <div class="col-md-2">
    <label  for="bu_large_dis">وصف مطور للعقار</label>

    </div>
    </div>
<div class="clearfix"></div>
<br>
     <div class="form-group row mb-0">
        <div class="col-md-12"> <button type="submit" class="btn btn-primary">
                {{ isset($bu)?__(' تعديل العقار '):__('اضافة عقار ') }} </button> </div>
    </div>
</div>

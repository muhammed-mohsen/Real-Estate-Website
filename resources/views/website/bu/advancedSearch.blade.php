        <div class="col-md-3">
@if (Auth::user())


            <div class="profile-sidebar">
                <h2 style="margin-right:10px">
                    خيارات العضو
                </h2>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->

                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">

                    <ul class="nav" style="    margin-right: 0;
    padding-right: 0;">
                        <li class="{{setActive(['edituser'])}}">

                            <a href="{{route('edit.user')}}">
                                <i class="fa fa-edit"></i>
                               معلوماتى الشخصية</a>
                            </li>
                                   <li class="{{setActive(['userBuildings'])}}">
                                       <a href="{{route('user.buildings')}}" target="_blank">
                                           <i class="fa fa-check"></i>
                                      عقاراتي
                               <label class="label label-default pull-left">({{mybuildings()}})</label>
                            </a>
                            </li>
                        <li class="{{setActive(['addbu'])}}">
                            <a href="{{route('add.bu')}}">
                                <i class="fa fa-plus"></i>
                                اضافة عقار </a>
                        </li>


                    </ul>
                </div>
@endif
                <!-- END MENU -->
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
                        <li class="{{setActive(['showallbuilding'])}}">

                            <a href="{{route('allBu')}}">
                                <i class="fa fa-building"></i>
                                كل العقارات </a>
                        </li>
                        <li class="{{setActive(['forRent'])}}">
                            <a href="{{route('forRent')}}">
                                <i class="fa fa-calendar"></i>
                                عقارات للايجار </a>
                        </li>
                        <li class="{{setActive(['showByType','0'])}}">
                            <a href="{{route('showByType',0)}}" target="_blank">
                                <i  class="fa fa-home"></i>
                                شقق</a>
                        </li>

                        <li class="{{setActive(['showByType','1'])}}">
                            <a href="{{route('showByType',1)}}" target="_blank">
                                <i class="fa fa-home"></i>
                                فلل</a>
                        </li>

                        <li class="{{setActive(['showByType','2'])}}">
                            <a href="{{route('showByType',2)}}" target="_blank">
                                <i class="fa fa-home"></i>
                                شاليهات</a>
                        </li>



                    </ul>
                </div>

                <!-- END MENU -->
            </div>

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
        </div>

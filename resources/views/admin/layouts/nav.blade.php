 <li class="active"><a href="{{route('admin')}}"><i class="fa fa-gears"></i> <span>رئيسية التحكم</span></a></li>
 <li class="active"><a href="{{route('siteSetting.save')}}"><i class="fa fa-home"></i> <span>اعدادات الرشيسية</span></a></li>


        {{-- {{users}} --}}
         <li class=" treeview">
          <a href="#">
            <i class="fa fa-users "></i>
             <span >لوحة تحكم فى الاعضاء</span>

              <i class="fa fa-angle-right pull-left"></i>
              <div class="clearfix"></div>
          </a>
          <ul class="treeview-menu">
              <li><a href="{{route('users.index')}}"><i class="fa fa-circle-o"></i> <span>كل الاعضاء</span></a></li>
            <li class="active"><a href="{{route('users.create')}}"><i class="fa fa-circle-o"></i><span>اضافة عضو</span> </a></li>
          </ul>
        </li>

        {{-- bu --}}
         <li class=" treeview">
          <a href="#">
            <i class="fa fa-building "></i>
             <span>لوحة تحكم فى العقارات</span>

              <i class="fa fa-angle-right pull-left"></i>
              <div class="clearfix"></div>
          </a>
          <ul class="treeview-menu">
              <li><a href="{{route('buindex')}}"><i class="fa fa-circle-o"></i> <span>كل العقارات</span></a></li>
              <li class="active"><a href="{{route('bu.create')}}"><i class="fa fa-circle-o"></i><span>اضافة عقار</span> </a></li>
          </ul>

        </li>
          <li><a href="{{route('contact.index')}}"><i class="fa fa-envelope-o"></i>
            <span> كل الرسائل</span>
            </a></li>


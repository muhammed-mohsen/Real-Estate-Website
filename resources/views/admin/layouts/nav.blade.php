

        {{-- users --}}
 <li class=" treeview">
          <a href="#">
            <i class="fa fa-dashboard pull-right"></i>
             <span style="margin-right:25px">اعدادت الموقع</span>

              <i class="fa fa-angle-right pull-left"></i>
              <div class="clearfix"></div>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{route('siteSetting.save')}}"><i class="fa fa-circle-o"></i> اعدادات الرشيسية</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> اعدادات اخري </a></li>
          </ul>
        </li>

        {{-- {{users}} --}}
         <li class=" treeview">
          <a href="#">
            <i class="fa fa-users pull-right"></i>
             <span style="margin-right:25px">لوحة تحكم فى الاعضاء</span>

              <i class="fa fa-angle-right pull-left"></i>
              <div class="clearfix"></div>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{route('users.create')}}"><i class="fa fa-circle-o"></i>اضافة عضو </a></li>
            <li><a href="{{route('users.index')}}"><i class="fa fa-circle-o"></i> كل الاعضاء</a></li>
          </ul>
        </li>

        {{-- bu --}}
         <li class=" treeview">
          <a href="#">
            <i class="fa fa-users pull-right"></i>
             <span style="margin-right:25px">لوحة تحكم فى العقارات</span>

              <i class="fa fa-angle-right pull-left"></i>
              <div class="clearfix"></div>
          </a>
          <ul class="treeview-menu">
              <li><a href="{{route('bu.index')}}"><i class="fa fa-circle-o"></i> كل الاعضاء</a></li>
              <li class="active"><a href="{{route('bu.create')}}"><i class="fa fa-circle-o"></i>اضافة عقار </a></li>
          </ul>

        </li>

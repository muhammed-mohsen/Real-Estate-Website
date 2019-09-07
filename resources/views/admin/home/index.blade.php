@extends('admin.layouts.layout')

@section('header')
    <style>

    .users-list>li {
    width: 25%;
    float: right;
    padding: 10px;
    text-align: center;
}

    </style>
@endsection


@section('content')

{{-- {{dd($charts->counting)}} --}}


    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        لوحة التحكم الرئيسية

      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>

      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
       <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">عدد رسائل الموقع</span>
              <span class="info-box-number">{{$contactCount}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-building"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">عدد العقارات الغير مفعلة</span>
              <span class="info-box-number">{{$unActBuCount}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-building-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">عدد العقارات المفعلة</span>
              <span class="info-box-number">{{$actBuCount}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">عدد اعضاء الموقع</span>
              <span class="info-box-number">{{$userCount}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>

      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">العقارات خلال السنة الحالية </h3>

              <div class="box-tools pull-left">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-wrench"></i></button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-12">
                  <p class="text-center">
                    <strong>رسم بيانى يوضح اضافة العقارات خلال السنة </strong>
                  </p>

                  <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <canvas id="salesChart" style="height: 180px;"></canvas>
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->

                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- ./box-body -->

            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <div class="col-md-8">
          <!-- MAP & BOX PANE -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">اماكن العقارات</h3>

              <div class="box-tools pull-left">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="row">
                <div class="col-md-9 col-sm-8">
                  <div class="pad">
                    <!-- Map will be created here -->
                    <div id="world-map-markers" style="height: 325px;"></div>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-4">
                  <div class="pad box-pane-left bg-green" style="min-height: 280px">
                    <div class="description-block margin-bottom">
    <h5 class="description-header">{{buCounter(0)}}</h5>
                      <span class="description-text">العقارات الغير مفعلة</span>
                    </div>
                    <!-- /.description-block -->
                    <div class="description-block margin-bottom">
    <h5 class="description-header">{{buCounter(1)}}</h5>
                      <span class="description-text">العقارات المفعلة</span>
                    </div>
                    <!-- /.description-block -->
                    <div class="description-block">
                      <h5 class="description-header">{{buCounter(1)+buCounter(0)}}</h5>
                      <span class="description-text">كل العقارات</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <div class="row">

            <!-- /.col -->
{{-- latest_ORDER --}}

<div class="col-md-6">
 <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Latest Orders</h3>

              <div class="box-tools pull-left">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>سم الرسالة</th>
                    <th>البريد اللكترون</th>
                    <th>المشاهدة</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach ($latestContact as $contact)


                  <tr>
                      <td> {{$contact->id}}</td>
                    <td><a href="{{route('show',$contact->id)}}">{{str_limit($contact->contact_name,10)}}</a></td>
                    <td><span class="label label-success">{{str_limit($contact->contact_email,18)}}</span></td>

                    <td>

                        {!!$contact->view == 0 ?'<i class="btn btn-warning fa fa-eye"></i>':'<i class="btn btn-danger fa fa-eye"></i>'!!}
                    </td>
                  </tr>
                  @endforeach

                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="{{route('contact.index')}}" class="btn btn-sm btn-info btn-flat pull-left">كل الرسائل</a>

            </div>
            <!-- /.box-footer -->
          </div>
          </div>



<div class="col-md-6">
              <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">اخر الاعضاء</h3>

                  <div class="box-tools pull-left">
                    <span class="label label-danger">8 اعضاء جدد</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                      @foreach ($latestUser as $user)


                    <li>
                      <img src="{{asset('storage/'.$user->image)}}" alt="User Image">
                      <a class="users-list-name" href="{{route('users.edit',$user->id)}}">{{$user->name}}</a>
                      <span class="users-list-date">{{$user->created_at}}</span>
                    </li>
  @endforeach
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="{{route('users.index')}}" class="uppercase">كل الاعضاء</a>
                </div>
                <!-- /.box-footer -->
              </div>
              <!--/.box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          <!-- TABLE: LATEST ORDERS -->

          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-4">
          <!-- Info Boxes Style 2 -->

          <!-- /.box -->

          <!-- PRODUCT LIST -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">اخر عقارات مضافة</h3>

              <div class="box-tools pull-left">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->



            <div class="box-body">
              <ul class="products-list product-list-in-box">
                  @foreach ($latestBu as $bu)
                <li class="item">
                  <div class="product-img">
                    <img src="{{asset('storage/'.$bu->image)}}" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">{{$bu->name}}
                      <span class="label label-warning pull-left">${{$bu->bu_price}}</span></a>
                    <span class="product-description">
                          {{str_limit($bu->bu_small_dis,50)}}.
                        </span>
                  </div>
                </li>
                @endforeach

                <!-- /.item -->
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="javascript:void(0)" class="uppercase">View All Products</a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </>

@endsection



@section('footer')
    <script>

     var salesChartCanvas = $('#salesChart').get(0).getContext('2d');
  // This will get the first returned node in the jQuery collection.
  var salesChart       = new Chart(salesChartCanvas);

  var salesChartData = {
    labels  : ['يناير','فبراير','مارس','ابريل','مايو','يونيو','يوليو','اغسطس','سبتمبر','اكتوبر','نوفمبر','ديسمبر',],
    datasets: [

 {
        label               : 'Digital Goods',
        fillColor           : 'rgba(60,141,188,0.9)',
        strokeColor         : 'rgba(60,141,188,0.8)',
        pointColor          : '#3b8bba',
        pointStrokeColor    : 'rgba(60,141,188,1)',
        pointHighlightFill  : '#fff',
        pointHighlightStroke: 'rgba(60,141,188,1)',
        data                :

        [
             @foreach ($charts as $chart)
            {{$chart->counting}},

 @endforeach
        ]

      }

    ]
  };












    /* jVector Maps
     * ------------
     * Create a world map with markers
     */
 $('#world-map-markers').vectorMap({
        map: 'world_mill_en',
        normalizeFunction: 'polynomial',
        hoverOpacity: 0.7,
        hoverColor: false,
        backgroundColor: 'transparent',
        regionStyle: {
            initial: {
                fill: 'rgba(210, 214, 222, 1)',
                'fill-opacity': 1,
                stroke: 'none',
                'stroke-width': 0,
                'stroke-opacity': 1
            },
            hover: {
                'fill-opacity': 0.7,
                cursor: 'pointer'
            },
            selected: {
                fill: 'yellow'
            },
            selectedHover: {}
        },
        markerStyle: {
            initial: {
                fill: '#00a65a',
                stroke: '#111'
            }
        },
        markers: [
        @foreach ($maps as $map)


        {
                latLng: [{{$map->bu_longtitude}}, {{$map->bu_latitude}}],
                name: ' {{$map->bu_name}}'
            },
            @endforeach

        ]
    });

    /* SPARKLINE CHARTS
     * ----------------
     * Create a inline charts with spark line
     */


    </script>
@endsection









































@extends('admin.layouts.layout')


@section('title')
 التحكم فى العقارات
@endsection

@section('header')
      <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

@endsection

@section('content')

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       التحكم فى العقارات

      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('admin')}}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active"><a href="{{route('users.index')}}">التحكم فى العقارات</a></li>

      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">التحكم فى العضارات</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="data" class="table table-bordered table-hover">
                <thead>
                <tr>
            <th>#</th>
            <th>اسم العقار</th>
            <th>السعر</th>
            <th>النوع</th>
            <th>اضيف فى</th>
            <th>الحالة</th>
            <th>التحكم</th>

                </tr>
                </thead>
                <tbody>
 {{-- @foreach ($users as $user) --}}
                {{-- <tr>
                         <td>{{$user->id}}</td>
                         <td>{{$user->name}}</td>
                         <td>{{$user->email}}</td>
                         <td>{{$user->admin ==1 ? 'مدير':"عضو"}}</td>
                         <td>{{$user->created_at}}</td>
                         <td><a href="{{route('users.edit',$user->id)}}" class="btn btn-success"> تعديل</a></td>
                         <td>
                             <form action="{{route('users.destroy',$user->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                            <button class="btn btn-danger">حذف</button>
                        </form></td>


                </tr> --}}
 {{-- @endforeach --}}
            </tbody>
                <tfoot>
                <tr>
              <th>#</th>
            <th>اسم العقار</th>
            <th>السعر</th>
            <th>النوع</th>
            <th>اضيف فى</th>
            <th>الحالة</th>
            <th>التحكم</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>


@endsection

@section('footer')
    <script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript">
//    var lastTdx = null;
//    $('#data thead th').each(function () {
//        if($(this).index() < 5 && $(this).index() != 2 && $(this).index() != 3)
//        {
//            var classname = $(this).index == 6 ?'data' : 'dataslash';
//            var title = $(this).html();
//            $(this).html('<input type="text"'+classname + '"data-value"' + $(this).index()+'"placeholder =" البحث' +title + '"/>');
//        }else if($(this).index() == 2){
//            $(this).html('<select> <option value="0">مفعل</option> <option value="1">غير مفعل</option></select>'
// );
//        }
//        }else if($(this).index() == 3){
//            $(this).html('<select> <option value="0">كتب</option> <option value="1">مدونة</option></select>'
// );
//        }


//    });

       var lastIdx = null;

        $('#data thead th').each( function () {
            if($(this).index()  < 5 && $(this).index()!=3){
                var classname = $(this).index() == 6  ?  'date' : 'dateslash';
                var title = $(this).html();
                $(this).html( '<input type="text" class="' + classname + '" data-value="'+ $(this).index() +'" placeholder=" البحث '+title+'" />' );
            }
            else if($(this).index() == 3){

                $(this).html( '<select>'+
'<option value="0"> شقة </option><option value="1"> فيلا </option><option value="2"> شاليه </option>'
  +
                '</select>' );
            }
            else if($(this).index() == 5){
                $(this).html('<select>'+
'<option value="0"> غير مفعل </option><option value="1"> مفعل </option>'
              +
                '</select>'  );
            }

//                 @foreach(bu_type() as $key=>$bu)

//                ' <option value="{{$key}}"> {{$bu}} </option>'
//   @endforeach

        } );

        var table = $('#data').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url('/adminpanel/bu/data') }}',
            columns: [
                {data: 'id', name: 'id'},
                {data: 'bu_name', name: 'bu_name'},
                {data: 'bu_price', name: 'bu_price'},
                {data: 'bu_type', name: 'bu_type'},
                {data: 'created_at', name: 'created_at'},
                {data: 'bu_status', name: 'bu_status'},
              //  {data: 'exame', name: 'exame'},
                {data: 'control', name: 'control'}
            ],
            "language": {
                "url": "{{ Request::root()  }}/admin/cus/Arabic.json"
            },
            "stateSave": false,
            "responsive": true,
            "order": [[0, 'desc']],
            "pagingType": "full_numbers",
            aLengthMenu: [
                [25, 50, 100, 200, -1],
                [25, 50, 100, 200, "All"]
            ],
            iDisplayLength: 25,
            fixedHeader: true,

            "oTableTools": {
                "aButtons": [


                    {
                        "sExtends": "csv",
                        "sButtonText": "ملف اكسل",
                        "sCharSet": "utf16le"
                    },
                    {
                        "sExtends": "copy",
                        "sButtonText": "نسخ المعلومات",
                    },
                    {
                        "sExtends": "print",
                        "sButtonText": "طباعة",
                        "mColumns": "visible",


                    }
                ],

                "sSwfPath": "{{ Request::root()  }}/admin/cus/copy_csv_xls_pdf.swf"
            },

            "dom": '<"pull-left text-left" T><"pullright" i><"clearfix"><"pull-right text-right col-lg-6" f > <"pull-left text-left" l><"clearfix">rt<"pull-right text-right col-lg-6" pi > <"pull-left text-left" l><"clearfix"> '
            ,initComplete: function ()
            {
                var r = $('#data tfoot tr');
                r.find('th').each(function(){
                    $(this).css('padding', 8);
                });
                $('#data thead').append(r);
                $('#search_0').css('text-align', 'center');
            }

        });

        table.columns().eq(0).each(function(colIdx) {
            $('input', table.column(colIdx).header()).on('keyup change', function() {
                table
                        .column(colIdx)
                        .search(this.value)
                        .draw();
            });




        });



        table.columns().eq(0).each(function(colIdx) {
            $('select', table.column(colIdx).header()).on('change', function() {
                table
                        .column(colIdx)
                        .search(this.value)
                        .draw();
            });

            $('select', table.column(colIdx).header()).on('click', function(e) {
                e.stopPropagation();
            });
        });


        $('#data tbody')
                .on( 'mouseover', 'td', function () {
                    var colIdx = table.cell(this).index().column;

                    if ( colIdx !== lastIdx ) {
                        $( table.cells().nodes() ).removeClass( 'highlight' );
                        $( table.column( colIdx ).nodes() ).addClass( 'highlight' );
                    }
                } )
                .on( 'mouseleave', function () {
                    $( table.cells().nodes() ).removeClass( 'highlight' );
                } );



//  $('#example2').DataTable({
//       'paging'      : true,
//       'lengthChange': true,
//       'searching'   : true,
//       'ordering'    : true,
//       'info'        : true,
//       'autoWidth'   : false
//     })
</script>
@endsection

@extends("admin/layouts.app")

@section("HeadSection")
  <link rel="stylesheet" href="/admin/../../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/admin/../../plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/admin/../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/admin/../../dist/css/skins/_all-skins.min.css">
@endsection

@section("mine-content")

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Tags</h3>
          <a href="{{route('tag.create')}}" class="col-lg-offset-5 btn btn-success" >Add New Tag </a>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.NO</th>
                  <th>Tag Name</th>
                  <th>Tag Slug</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tags as $tag) 
                <tr>
                  <td>{{$loop->index+1}}</td>
                  <td>{{$tag['name']}}</td>
                  <td>{{$tag['slug']}}</td>
                  <td><a href="{{route('tag.edit',$tag->id)}}"><span class="glyphicon glyphicon-edit"></span></a></td>
                  <td>
                   <form id="delete-form-{{$tag->id}}" method="post" action="{{route('tag.destroy',$tag->id)}}" style="display: none;">
                     {{csrf_field()}}
                     {{method_field('DELETE')}}
                   </form>
                    <a href="" onclick="
                    if(confirm('Are you sure')){
                    event.preventDefault();document.getElementById('delete-form-{{$tag->id}}').submit();}
                    else{
                      event.preventDefault();
                    }
                    ">

                    <span class="glyphicon glyphicon-trash"></span></a>
                  </td>
                </tr>
                @endforeach
              </tbody>
               <tfoot>
                  <tr>
                  <th>S.NO</th>
                  <th>Tag Name</th>
                  <th>Tag Slug</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
               </tfoot>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
@endsection

@section("footersection")
  <script src="/admin/../../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/admin/../../bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="/admin/../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/admin/../../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="/admin/../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/admin/../../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/admin/../../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/admin/../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
@endsection
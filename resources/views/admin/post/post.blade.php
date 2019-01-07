@extends("admin.layouts.app")
@section("HeadSection")
  <link rel="stylesheet" href="../../plugins/select2/select2.min.css">
@endsection
@section("mine-content")
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Text Editors
        <small>Advanced form element</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12">

        	<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Title</h3>
            </div>
           @include("includes.messages")
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{route('post.store')}}" method="post" enctype="multipart/form-data">	
              {{csrf_field()}}
             <div class="box-body">
              	<div class="col-md-6">
	            	<div class="form-group">
	                  <label for="title">Վերնագիր</label>
	                  <input type="text" class="form-control" id="title" placeholder="Վերնագիր" name="title">
	              </div>

	                <div class="form-group">
	                  <label for="subtitle">Ենթավերնագիր</label>
	                  <input type="text" class="form-control" id="subtitle" placeholder="Ենթավերնագիր" name="subtitle">
	                </div>

	                <div class="form-group">
	                  <label for="slug">Post Slug</label>
	                  <input type="text" class="form-control" id="slug" placeholder="slug" name="slug">
	                </div>
            	</div>
                <div class="col-md-6">
                	<div class="form-group">
                	  <label for="exampleInputFile">Նկար</label>
                  	  <input type="file" id="exampleInputFile" name="image" >
                    </div>
                	<div class="checkbox">
                  	  <label>
                        <input type="checkbox" name="status" value="1"> Հրպարակել
                      </label>
                      <label>
                        <input type="checkbox" name="author" value="1"> Հեղինակի Ընտրանին
                      </label>
                	</div>
                   <div class="form-group">
                    <label>Category</label>
                    <select class="form-control select2" multiple="" data-placeholder="Select a State" style="width: 100%;" name="categories[]">
                      @foreach( $categories as $category)
                         <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                  </div>
                   <div class="form-group">
                    <label>Tag</label>
                    <select class="form-control select2" multiple="" data-placeholder="Select a State" style="width: 100%;" name="tags[]">
                      @foreach( $tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                      @endforeach
                    </select>
                  </div>
              </div>	
               
                <div class="box">
                   <div class="box-header">
                     <h3 class="box-title">Bootstrap WYSIHTML5
                     <small>Simple and fast</small>
              </h3>
              <!-- tools box -->
                  <div class="pull-right box-tools">
                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fa fa-minus"></i></button>
                   </div>
              <!-- /. tools -->
                </div>

            <!-- /.box-header -->
            <div class="box-body pad">
                <textarea class="textarea" id="editor1" name="body" placeholder="Place some text here" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" ></textarea> 
            </div>
                 <div class="box-footer">
                    <button type="submit" class="btn btn-primary" name="send">Submit</button>
                    <a href="{{route('post.index')}}" class="btn btn-warning">Back</a>
                </div> 
                </div>   
       </div>
     </form>
  </div>

          </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>


@endsection


@section("footersection")
<script src="/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>

<script src="/admin/plugins/select2/select2.full.min.js"></script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();
  });
</script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>
@endsection
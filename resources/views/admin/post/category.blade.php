@extends("admin.layouts.app")

@section("mine-content")
<div class="content-wrapper">
    <section class="content">
      <div class="row">
      	<div class="col-md-3"></div>
        <div class="col-md-6">
        	<div class="box box-primary">

            <div class="box-header with-border">
              <h3 class="box-title">Category</h3>
            </div>
            @include("includes.messages")
            <form role="form" action="{{route('category.store')}}" method="post" >
            	{{csrf_field()}}
              <div class="box-body">
            
	            	<div class="form-group">
	                  <label for="catname">Category Name</label>
	                  <input type="text" class="form-control" id="catname" placeholder="Category Name" name="name">
	                </div>

	                <div class="form-group">
	                  <label for="catslug">Category Slug</label>
	                  <input type="text" class="form-control" id="catslug" placeholder="Category Slug" name="slug">
	                </div>
	            </div>
	             <div class="box-footer">
                	<button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{route('category.index')}}" class="btn btn-warning">Back</a>
              	</div>
            </form>
          </div>
      </div>
      <div class="col-md-3"></div>
  </div>
   </section>
</div>



@endsection
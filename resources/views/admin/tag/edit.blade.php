@extends("admin.layouts.app")

@section("mine-content")
<div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <div class="box box-primary">

            <div class="box-header with-border">
              <h3 class="box-title">Tag Title</h3>
            </div>
            @include("includes.messages")
            <form role="form" action="{{route('tag.update',$tag->id)}}" method="post">
               {{csrf_field()}}
               {{method_field("PUT")}}
              <div class="box-body">
            
                <div class="form-group">
                    <label for="tag">Tag Title</label>
                    <input type="text" class="form-control" id="tag" placeholder="Tag Title" name="name" value="{{$tag->name}}">
                  </div>

                  <div class="form-group">
                    <label for="tagslug">Tag Slug</label>
                    <input type="text" class="form-control" id="tagslug" placeholder="Tag Slug" name="slug" value="{{$tag->slug}}">
                  </div>
              </div>
               <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{route('tag.index')}}" class="btn btn-warning">Back</a>
              </div>
            </form>
          </div>
      </div>
      <div class="col-md-3"></div>
  </div>
   </section>
</div>

@endsection
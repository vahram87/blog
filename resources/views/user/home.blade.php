@extends("user.app")
@section("bg-img","user/img/home-bg.jpg")
@section("title","Clean Blog")
@section("subtitle","A Blog Theme by Start Bootstrap")
@section("mine-content")


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="container">
      <div class="row first-row">
        <div class="col-md-12">
    @foreach($posts->take(5) as $post)
    <div class="carousel-item @if($loop->first)active @endif">
      <img src="{{Storage::disk('local')->url($post->image)}} " alt="Los Angeles" width="1100" height="500" id="home-slide">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    
    @endforeach
    </div>
    </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<hr>
 <!-- Page Content -->
<div class="container-fluid">
      <div class="row home-row" >
        <div class="col-md-1 "></div>
        <div class="col-md-8 home-col" >
          @foreach($posts as $post)
          <div class="post-preview">
            
              <h2 class="home-title">
                {{$post->title}}
              </h2>
                
              <img src="{{Storage::disk('local')->url($post->image)}}" class="home-image">
              <h5 class="home-subtitle">
                {{$post->subtitle}}
              </h5>
              <p class="home-body">
                {!! htmlspecialchars_decode(str_limit($post->body, $limit = 150, $end = '...')) !!}
              </p>
            
            <p class="post-meta home-time" >Posted
              {{$post->created_at->diffForHumans()}}
            </p>
            <p  align="right" class="home-cat">
              @foreach($post->categories as $category)
                    <a href="{{ route('category', $category->slug) }}">{{ $category->name }}</a>
               @endforeach
             </p>  
          </div>
          <a href="{{route('post',$post->slug)}}" class="btn btn-success">Կարդալ Ավելին </a>
          <hr>
           @endforeach

           <ul class="pager">
             <li class="next" style="list-style: none;">
                {{ $posts->links()}}
             </li>
           </ul>
        </div>
         <div class="col-md-3 ">
          <h6 style="text-align: center;">Հեղինակի Ընտրանին</h6>
           @foreach($posts as $post)
            @if($post->author == 1)
              <p>{{$post->title}}</p>
              <p>{!! htmlspecialchars_decode(str_limit($post->body, $limit = 120, $end = '...')) !!}</p>
              <a href="{{route('post',$post->slug)}}" class=" btn-danger author_button ">Կարդալ</a>
              <hr>
             @endif 
           @endforeach
         </div>
       
      </div>
    </div>
    @endsection
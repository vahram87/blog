@extends("user.app")
@section("bg-img","user/img/home-bg.jpg")
@section("title","Clean Blog")
@section("subtitle","A Blog Theme by Start Bootstrap")
@section("mine-content")


<div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          @foreach($posts as $post)
          @foreach($post->categories as $category)
          @if($category['name'] == "Քննադատություն")
          <div class="post-preview">
            <a href="{{route('post',$post->slug)}}">
              <h2 class="post-title">
                {{$post->title}}
              </h2>
              <h3 class="post-subtitle">
                {{$post->subtitle}}
              </h3>
            </a>
            <p class="post-meta">Posted
              {{$post->created_at->diffForHumans()}}</p>
          </div>
          @endif
           @endforeach
           @endforeach
           <hr>

           <ul class="pager">
             <li class="next" style="list-style: none;">
                {{ $posts->links()}}
             </li>
           </ul>
        </div>
       
      </div>
    </div>
    @endsection
@extends("user/app")
@section("bg-img",Storage::disk('local')->url($post->image))
@section("title",$post->title)
@section("subtitle",$post->subtitle)
@section("mine-content")
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
 
	<article>
    <div class="overlay"></div>
    <div class="container">
   <div class="row post-row">
      <div class="col-md-2"></div>
     <div class="col-md-8">
       <h1 class="post-title">@yield("title")</h1>
       <img src="@yield('bg-img')" class="post-image">
       <h4 class="post-subtitle">@yield("subtitle")</h4
     </div>
  <div class="col-md-2"></div>
   </div>
 </div>
      <div class="container">
        <div class="row" >
          <div class="col-lg-8 col-md-10 mx-auto">
            <small>{{$post->created_at->diffForHumans()}}</small>
            @foreach($post->categories as $category)
              
                <small class="pull-right">
                  <a href="{{ route('category', $category->slug) }}">{{ $category->name }}</a>
                </small>
  
            @endforeach
            {!! htmlspecialchars_decode($post->body)  !!}
            <div class="fb-comments" data-href="{{Request::url()}}" data-numposts="5"></div>
          </div>
          
        </div>

      </div>
    </article>
@endsection
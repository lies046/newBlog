@extends('template_blog.content')
@section('content')

  @foreach($data as $content_post)
  <div id="post-header" class="page-header">
			<div class="page-header-bg" style="background-image: url({{asset($content_post->image)}});" data-stellar-background-ratio="0.5"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="post-category">
							<a href="category.html">{{ $content_post->category->name }}</a>
						</div>
						<h1>{{ $content_post->title }}</h1>
						<ul class="post-meta">
							<li><a href="author.html">{{ $content_post->users->name }}</a></li>
							<li>{{ $content_post->created_at }}</li>
							<!-- <li><i class="fa fa-eye"></i> 807</li> -->
						</ul>
					</div>
				</div>
			</div>
    </div>
    <br>
  <div class="section-row">
    {{ $content_post->content }}
  </div> 
  @endforeach
@endsection

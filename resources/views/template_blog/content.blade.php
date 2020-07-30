<!-- SECTION -->
@include('template_blog.head')
  <div class="section">
    <!-- container -->
    <div class="container">
      			<!-- row -->
			<div id="hot-post" class="row hot-post">
				
      @yield('content')
      @include('template_blog.widget')
</div>
    </div>
  </div>
  @include('template_blog.footer')
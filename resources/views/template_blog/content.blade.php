<!-- SECTION -->
@include('template_blog.head')
  <div class="section">
    <!-- container -->
    <div class="container">
      @yield('isi')
    </div>
  </div>
  @include('template_blog.widget')
  @include('template_blog.footer')
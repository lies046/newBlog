<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="index.html">Stisla</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        
        <li class="active"><a class="nav-link" href="{{ route('home')}}"><i class="fas fa-fire"></i> <span>Dash Board</span></a></li>
        
        <li class="menu-header">Starter</li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-book-open"></i> <span>Post</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('post.index')}}">List Post</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="far fa-clipboard"></i> <span>Category</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('category.index')}}">List Category</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-bookmark"></i> <span>Tag</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="{{ route('tag.index')}}">List tag</a></li>
          </ul>
        </li>
  </aside>
</div>
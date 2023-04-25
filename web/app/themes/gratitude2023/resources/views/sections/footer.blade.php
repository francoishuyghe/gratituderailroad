<footer class="content-info">
  <div class="primary">
    <div class="row">
      <div class="col-md-2 col-left">
        Logo
      </div>
      <div class="col-md-8 col-center">
        <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
        </nav>
      </div>
      <div class="col-md-2 col-right">
        Newsletter 
      </div>
    </div>
  </div>
  <div class="secondary">
    <div class="copyright">
      {{ the_time('Y') }} {!! $siteName !!}. All rights reserved.
    </div>
    <div class="menu">
      <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      </nav>
    </div>
  </div>
</footer>

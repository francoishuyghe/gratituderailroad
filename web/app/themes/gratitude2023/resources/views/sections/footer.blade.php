<footer class="content-info">
  <div class="primary">
    <div class="row">
      <div class="col-md-2 col-left">
        <h5>{!! $siteName !!}</h5>
        <img src="@asset('images/gratitude-logo-g-black.svg')" />
      </div>
      <div class="col-md-8 col-center">
        <nav class="nav-footer" aria-label="{{ wp_get_nav_menu_name('footer_navigation') }}">
          {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
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
      <nav class="nav-subfooter" aria-label="{{ wp_get_nav_menu_name('subfooter_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'subfooter_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      </nav>
    </div>
  </div>
  <div class="secondary">
    <div class="copyright">
      {{ the_time('Y') }} {!! $siteName !!}. All rights reserved.
    </div>
    <div class="menu">
      @php(dynamic_sidebar('sidebar-secondary-footer'))
    </div>
  </div>

</footer>

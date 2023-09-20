<footer class="content-info">
  <div class="primary">
    <div class="row">
      <div class="col col-left">
        <h5>{!! $siteName !!}</h5>
        <img src="@asset('images/gratitude-logo-g-black.svg')" />
      </div>
      <div class="col col-center">
        <nav class="nav-footer" aria-label="{{ wp_get_nav_menu_name('footer_navigation') }}">
          {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
        </nav>
      </div>
      <div class="col col-right">
        <h6>{{ the_field('footer_newsletter_title', 'options')}}</h6>
        @include('partials.newsletter-signup')
        @include('partials.social-links')
      </div>
    </div>
  </div>
  <div class="secondary">
    <div class="copyright">
      ©{{ the_time('Y') }} {!! $siteName !!}. All rights reserved.
    </div>
    <div class="menu">
      <nav class="nav-subfooter" aria-label="{{ wp_get_nav_menu_name('subfooter_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'subfooter_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      </nav>
    </div>
  </div>

</footer>

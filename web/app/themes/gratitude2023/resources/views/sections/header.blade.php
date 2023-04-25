<header class="banner">
  <a class="brand" href="{{ home_url('/') }}">
    <img src="@asset('../../images/gratitude_logo.svg')" alt="{!! $siteName !!}" />
  </a>

  <button type="button" id="navbarToggle" class="collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      <div class="social">
        Social Icons
      </div>
      <div class="legal">
        Legal Menu
      </div>
      <div class="copyright">
        {{ the_time('Y') }} {!! $siteName !!}. All rights reserved.
      </div>
      <a class="login-link" href="http://loginlink.com">
        Login
        <img src="@asset('images/arrow.svg')" class="arrow"/>
      </a>
    </nav>
  @endif
</header>

<header class="banner">
  <a class="brand" href="{{ home_url('/') }}">
    <img src="@asset('../../images/logo/gratitude_logo.svg')" alt="{!! $siteName !!}" />
  </a>

  <button class="hamburger hamburger--arrow" id="navbarToggle" type="button" aria-expanded="false" aria-controls="navbar">
    <span class="hamburger-box">
      <span class="hamburger-inner"></span>
    </span>
  </button>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      @include('partials.social-links')
      <div class="legal">
        {!! wp_nav_menu(['theme_location' => 'subfooter_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      </div>
      <div class="copyright">
        {{ the_time('Y') }} {!! $siteName !!}. All rights reserved.
      </div>
      <a class="login-link" href="http://loginlink.com" target="_blank">
        Login
        <img src="@asset('../../images/arrow.svg')" class="arrow"/>
      </a>
    </nav>
  @endif
</header>

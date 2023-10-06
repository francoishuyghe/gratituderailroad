<footer class="content-info">
  <div class="primary">
    <div class="row">
      <div class="col col-left">
        <img src="@asset('images/logo/gratitude_logomark_white.svg')" />
      </div>
      <div class="col col-center">
        <nav class="nav-footer" aria-label="{{ wp_get_nav_menu_name('footer_navigation') }}">
          {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
        </nav>
      </div>
      <img src="@asset('../../images/B-Corp-Logo.svg')" class="bcorp"/>
      <div class="col col-right">
        <h6>{{ the_field('footer_newsletter_title', 'options')}}</h6>
        @include('partials.newsletter-signup', array(
          'placeholder' => get_field('newsletter_cta_placeholder', 'options'),
          'submit' => "►"
      ))
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

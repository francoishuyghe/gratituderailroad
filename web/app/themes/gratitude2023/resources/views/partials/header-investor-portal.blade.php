@php global $post @endphp


<header id="portalHeader">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Welcome to the Gratitude Investor Portal</h1>
            </div>
            <div class="col-md-2">
                {!! do_shortcode('[custom_logout]') !!}
            </div>
        </div>
        {!! wp_nav_menu([
            'theme_location' => 'investor_portal_navigation',
            'menu_class' => 'investor-nav',
            'echo' => false,
        ]) !!}
    </div>
</header>

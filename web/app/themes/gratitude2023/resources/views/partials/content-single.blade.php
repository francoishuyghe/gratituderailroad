<article @php(post_class('h-entry'))>
  <header id="articleHeader">
    <div class="container">
      <a href="/insights" class="back">Back</a>
      @php( $cats = get_the_category())
          {{ $cats[0]->name }}
    <h1 class="p-name">
      {!! $title !!}
    </h1>
    <p>{{ get_the_excerpt() }}</p>
    <h3>{{ the_field('custom_author') }}</h3>
    </div>
  </header>

  <div class="container">
  <div class="e-content">
    <div class="hero rounded">
      {!! the_post_thumbnail( 'large' );  !!}
    </div>

    @php(the_content())
  </div>

  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  </div>

</article>

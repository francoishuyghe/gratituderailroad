@php global $post @endphp

<article @php(post_class('h-entry'))>
  <header id="articleHeader">
    <div class="container">
      <a href="/insights" class="back">Back</a>
      <div class="category">
        @php( $cats = get_the_category())
            {{ $cats[0]->name }}
      </div>
    <h1 class="p-name">
      {!! $title !!}
    </h1>

    <div class="excerpt">{{ get_the_excerpt() }}</div>

    @php( $author = get_field('custom_author') )
    @if( $author )
      <h3>by {{ $author }}</h3>
    @endif
    </div>
  </header>

  <div class="e-content">
    <div class="container">
      <div class="hero rounded">
        {!! the_post_thumbnail( 'large' );  !!}
      </div>
      @php(the_content())
    </div>
  </div>
  
  <section id="relatedPosts">
    <div class="container">
      <h3>Related Posts</h3>
      <div class="row">
        @foreach ($relatedPosts as $post)
        <div class="col-md-4">
          @php( setup_postdata( $post ) )
          @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
          @php( wp_reset_postdata() )
        </div>
        @endforeach
      </div>
    </div>

  </section>

</article>

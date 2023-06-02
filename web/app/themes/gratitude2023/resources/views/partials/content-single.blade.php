@php global $post @endphp

<article @php(post_class('h-entry'))>
  <header id="articleHeader">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <a href="/insights" class="back round-button orange"><i class="fa-light fa-arrow-left"></i> Back</a>
        </div>
        <div class="col-md-8">
          <div class="category">
            @php( $cats = get_the_category())
                {{ $cats[0]->name }}
          </div>
        </div>
      </div>
    <h1 class="p-name">
      {!! $title !!}
    </h1>

    <div class="excerpt">{!! get_the_excerpt() !!}</div>

    @php( $author = get_field('custom_author') )
    @if( $author && $author != ' ' )
      <h3>by {{ $author }}</h3>
    @endif
    </div>
  </header>

  <section class="hero">
    <div class="container">
      <div class="rounded">
        {!! the_post_thumbnail( 'large' );  !!}
      </div>
    </div>
  </section>

  <div class="e-content">
      @php(the_content())
  </div>
  
  <section id="relatedPosts">
    <div class="container">
      <header>
        <h3>Related Posts</h3>
        <a class="round-button orange" href="/insights">See All</a>
      </header>
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

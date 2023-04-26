<article @php(post_class('post-card'))>
  <a href="{{ get_permalink() }}">
    <div class="thumbnail rounded">
      {!! the_post_thumbnail( 'medium' );  !!}
    </div>
    <h5 class="entry-title">
        {!! $title !!}
      </h5>
  </a>

  @php( $cats = get_the_category())
  @foreach ($cats as $cat)
      {{ $cat->name }}
  @endforeach
  
</article>

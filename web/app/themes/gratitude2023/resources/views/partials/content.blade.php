<article @php(post_class())>
  <div class="thumbnail rounded">
    <a href="{{ get_permalink() }}">
      {!! the_post_thumbnail( 'medium' );  !!}
    </a>
  </div>
  <a href="{{ get_permalink() }}">
    <h4 class="entry-title">
        {!! $title !!}
      </h4>
  </a>
  {{ the_excerpt() }}
  <a href="{{ get_permalink() }}" class="readmore">Read more</a>
</article>

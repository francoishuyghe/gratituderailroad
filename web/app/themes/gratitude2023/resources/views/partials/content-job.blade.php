<article @php(post_class())>
  <a href="{{ get_permalink() }}">
    <h3 class="entry-title">
      {!! $title !!}
    </h3>
  </a>
  {{ the_excerpt() }}
  <a href="{{ get_permalink() }}" class="more">More</a>
</article>

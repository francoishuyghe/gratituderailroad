<article @php(post_class())>
  <div class="thumbnail">
    <a href="{{ get_permalink() }}">
      {!! the_post_thumbnail( 'medium' );  !!}
    </a>
  </div>
    <h4 class="entry-title">
      <a href="{{ get_permalink() }}">
        {!! $title !!}
      </a>
    </h4>
</article>

<article @php(post_class('post-card'))>
  <a href="{{ the_permalink() }}">
    <div class="thumbnail">
        {!! the_post_thumbnail( 'medium' );  !!}
    </div>
  </a>
  <a href="{{ the_permalink() }}">
      <h3>{{ the_title() }}</h3>
  </a>
</article>
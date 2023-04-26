<article @php(post_class('post-card'))>
  <div class="thumbnail">
    {!! the_post_thumbnail( 'thumbnail', []);  !!}
  </div>
  <header>
    <h4 class="entry-title">
      <a href="{{ get_permalink() }}">
        {!! $title !!}
      </a>
    </h4>
  </header>
</article>

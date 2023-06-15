<article @php(post_class('post-card'))>
  <a href="{{ get_permalink() }}">
  <div class="thumbnail">
    {!! the_post_thumbnail( 'large', ['sizes' => '(max-width: 767px) 100vw, 25vw']);  !!}
  </div>
  </a>
  <header>
    <h4 class="entry-title">
      <a href="{{ get_permalink() }}">
        {!! $title !!}
      </a>
    </h4>
  </header>
</article>

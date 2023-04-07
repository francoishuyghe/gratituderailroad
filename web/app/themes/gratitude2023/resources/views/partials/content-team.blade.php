<article @php(post_class())>
  <header>
    <h4 class="entry-title">
      <a href="{{ get_permalink() }}">
        {!! $title !!}
      </a>
    </h4>
  </header>

  <div class="entry-summary">
    @php(the_excerpt())
  </div>
</article>

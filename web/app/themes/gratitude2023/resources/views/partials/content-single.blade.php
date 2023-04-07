<article @php(post_class('h-entry'))>
  <header>
    <div class="container">
      <a href="/insights">Back</a>
    <h1 class="p-name">
      {!! $title !!}
    </h1>

    @include('partials.entry-meta')
    </div>
  </header>

  <div class="container">
  <div class="e-content">
    @php(the_content())
  </div>

  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  </div>

</article>

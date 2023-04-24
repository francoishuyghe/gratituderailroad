<article @php(post_class('h-entry'))>
  <header id="articleHeader">
    <div class="container">
      <a href="/jobs" class="back">Back</a>
      <h1 class="p-name">
        {!! $title !!}
      </h1>
    </div>
  </header>

  <div class="e-content">
    <div class="container">
      @php(the_content())
    </div>
  </div>

</article>

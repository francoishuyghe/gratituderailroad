<article @php(post_class('h-entry'))>
  <div class="container">
  <header>
    <div class="row">
      <div class="col-md-6">
        <div class="thumbnail">
          {!! the_post_thumbnail( 'large' );  !!}
        </div>
      </div>
      <div class="col-md-6">
        <div class="tags">
          <span class="tag">{{ $type }}</span>
        </div>
        <div class="cats">
          @if($founders)
            @foreach($founders as $founder)
              <span class="{{ $founder["value"] }}">{{ $founder["label"] }}</span>
            @endforeach
          @endif

          @php( $cats =  get_terms( 'portfolio-category'))
          @foreach($cats as $cat)
            <span>{{ $cat->name }}</span>
          @endforeach
        </div>
        <h1 class="p-name">
          {!! $title !!}
        </h1>
        <div class="excerpt">{{ get_the_excerpt() }}</div>
        <div class="links">
          <a href="{{ $website }}" class="button">Website</a>
          @if($website)
          <a href="{{ $website }}" class="button">Website</a>
          @endif
        </div>
      </div>
    </div>
  </header>

  <div class="e-content">
    <a class="back" href="/portfolio">Back</a>
    @php(the_content())
  </div>
  </div>
</article>

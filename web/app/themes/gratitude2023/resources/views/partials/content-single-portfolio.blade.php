<article @php(post_class('h-entry'))>
  <div class="container-fluid">
  <section class="header">
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
          @foreach($founders as $founder)
            <span class="founder">{{ $founder["label"] }}</span>
          @endforeach

          @foreach($cats as $cat)
            <span class="cat">{{ $cat->name }}</span>
          @endforeach
        </div>
          <img class="logo" src="{{ esc_url($logo['sizes']['logo']) }}" alt="{{ esc_attr($logo['alt']) }}" />
          <h1 class="p-name">
            {!! $title !!}
          </h1>
        <div class="excerpt">{{ get_the_excerpt() }}</div>
        <div class="links">
          @if($website)
          <a href="{{ $website }}" class="button">Website</a>
          @endif
        </div>
      </div>
    </div>
  </section>

  <section class="e-content">
    <a class="back" href="/portfolio">Back</a>
    @php(the_content())
  </section>

  <section class="more">
    <div class="row">
      <div class="col-md-6">
        <div class="wp-block-image stacked">
          <img src="{{ $learnmore_image['sizes']['medium'] }}" alt="{{ $learnmore_image['alt'] }}" />
        </div>
      </div>
      <div class="col-md-6">
        <h3>{{ $learnmore_title }}</h3>
        <p>{{ $learnmore_text }}</p>
        <a class="button" href="{{ $learnmore_link }}">{{ $learnmore_button }}</a>
      </div>
    </div>
  </section>
  </div>
</article>

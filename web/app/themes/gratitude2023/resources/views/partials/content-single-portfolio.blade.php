<article @php(post_class('h-entry'))>
  <section class="header">
    <div class="container-md">
    <div class="row">
      <div class="col-md-6">
        <div class="thumbnail">
          {!! the_post_thumbnail( 'large' );  !!}
        </div>
      </div>
      <div class="col-md-6 info">
        <div class="tags">
          <span class="tag">{!! $type !!}</span>
        </div>
        <div class="cats">
          @foreach($founders as $founder)
            <span class="founder">{{ $founder["label"] }}</span>
          @endforeach

          @foreach($cats as $cat)
            <span class="cat">{!! $cat->name !!}</span>
          @endforeach 
        </div>
          @if($logo)
            <img class="logo" src="{{ esc_url($logo['sizes']['logo']) }}" alt="{{ esc_attr($logo['alt']) }}" />
          @endif
          <h1 class="p-name">
            {!! $title !!}
          </h1>
        <div class="excerpt">{!! get_the_excerpt() !!}</div>
        <div class="links">
          @if($website)
          <a href="{{ $website }}" target="_blank" class="button">Website</a>
          @endif
        </div>
      </div>
    </div>
    </div>
  </section>

  <section class="e-content">
    <div class="container">
      <div class="row">
      <div class="col-md-2 hidden-sm">
          <a class="back round-button orange" href="/portfolio">Back</a>
        </span>
      </div>
      <div class="col-md-8">
        @php(the_content())
      </div>
    </div>
  </div>
  </section>

  <section id="more">
    <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="wp-block-image stacked">
          @if($learnmore_image)
          <img src="{{ $learnmore_image['sizes']['large'] }}" alt="{{ $learnmore_image['alt'] }}" />
          @endif
        </div>
      </div>
      <div class="col-md-6">
        <h3>{{ $learnmore_title }}</h3>
        <p>{{ $learnmore_text }}</p>
        @if($learnmore_link)
        <a class="button" href="{{ $learnmore_link }}">{{ $learnmore_button }}</a>
        @endif
      </div>
    </div>
  </div>
  </section>
</article>

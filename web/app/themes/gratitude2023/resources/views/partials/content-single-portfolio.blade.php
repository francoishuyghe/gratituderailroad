<article @php(post_class('h-entry'))>
  <section class="top">
    <div class="container">
    <a class="back orange" href="/portfolio">{!! __('Back', 'sage') !!}</a>
    </div>
  </section>

    <section class="e-content">
    <div class="container-md">
    <div class="row">
      <div class="col-md-6">
        <div class="thumbnail">
          <div class="tags">
            <span class="tag">{!! $type !!}</span>
          </div>
          {!! the_post_thumbnail( 'large' );  !!}
        </div>
      </div>

      <div class="col-md-6 info">
        <header>
          <div class="title">
            <h1 class="p-name">
              {!! $title !!}
            </h1>
            <div class="cats">
              @foreach($founders as $founder)
              <span class="founder">{{ $founder["label"] }}</span>
              @endforeach
              
              @foreach($cats as $cat)
              <span class="cat">{!! $cat->name !!}</span>
              @endforeach 
            </div>
          </div>
          {{-- @if($logo)
          <div class="logo-wrap">
          <img class="logo" src="{{ esc_url($logo['sizes']['medium']) }}" alt="{{ esc_attr($logo['alt']) }}" />
          </div>
          @endif --}}
        </header>
        @php(the_content())
        <div class="excerpt">{!! get_the_excerpt() !!}</div>
        <div class="links">
          @if($website)
          <a href="{{ $website }}" target="_blank" class="button">{!! __('Website', 'sage') !!}</a> 
          @endif
        </div>
      </div>
    </div>
    </div>
  </section>

  <section id="more">
      <div class="more__wrap">
        <h3>{{ $learnmore_title }}</h3>
        <p>{{ $learnmore_text }}</p>
        @if($learnmore_link)
        <a class="button orange" href="{{ $learnmore_link }}">{{ $learnmore_button }}</a>
        @endif
    </div>
  </section>
</article>

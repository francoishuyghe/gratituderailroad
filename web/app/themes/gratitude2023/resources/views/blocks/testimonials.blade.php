<div class="{{ $block->classes }} swiper-container" data-slides="1">
  <div class="container">
  @if ($quotes)
    <div class="quotes swiper-wrapper">
      @foreach ($quotes as $quote)
        <div class="swiper-slide">
        <div class="quote-wrap">
        <div class="quote">
          {{ $quote['quote'] }}
        </div>
        <div class="details">
          <h6>
            <span class="name">{{ $quote['name'] }}, </span>
            <span class="company">{{ $quote['company'] }}</span>
          </h6>
          <div class="title">
            {{ $quote['title'] }}
          </div>
          </div>
        </div>
        </div>
      @endforeach
    </div>
  @endif
  </div>
</div>

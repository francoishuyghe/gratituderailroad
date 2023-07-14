<div class="{{ $block->classes }}">
  <div class="container swiper-container" data-slides="1" data-name="testimonials">
    @if ($quotes)
      <div class="swiper-wrapper">
        @foreach ($quotes as $quote)
          <div class="swiper-slide">
            @include('partials.slide-testimonial')
          </div>
        @endforeach
      </div>
          <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

      <!-- If we need navigation buttons -->
      <div class="button-prev">
        <img src="@asset('../../images/arrow-minimal.svg')" class="arrow"/>
      </div>
      <div class="button-next">
        <img src="@asset('../../images/arrow-minimal.svg')" class="arrow"/>
      </div>
    @endif
  </div>
</div>

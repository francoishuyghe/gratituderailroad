@php global $post; @endphp

<div class="{{ $block->classes }}">
  <div class="container swiper-container" data-slides="4">
    <div class="row">
      <div class="col-lg-8 text">
        {{-- <h3>{{ $title }}</h3> --}}
        <h2>{{ $tagline }}</h2>
        @if($paragraph)
          <p>{{ $paragraph }}</p>
        @endif
      </div>
      <div class="col-lg-4 link">
        <a href="/portfolio" class="round-button">Full Portfolio</a>
      </div>
    </div>
  @if ($items)
    <div class="swiper-wrapper">
      @foreach ($items as $post)
        @php setup_postdata($post) @endphp
        <div class="swiper-slide">
          @include('partials.content-portfolio')
        </div>
        @php wp_reset_postdata() @endphp
      @endforeach
    </div>
  @else
    <p>{{ $block->preview ? 'Add an item...' : 'No items found!' }}</p>
  @endif
</div>
</div>

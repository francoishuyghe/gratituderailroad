@php global $post; @endphp

<div class="{{ $block->classes }}">
  <div class="container swiper-container" data-slides="3">
    <header>
      <h3>{{ $title }}</h3>
      <a class="round-button orange" href="/insights">All News</a>
    </header>
      <div class="swiper-wrapper">
      @if(!empty($news))
        @foreach ($news as $post)
          @php setup_postdata($post) @endphp
          <div class="swiper-slide">
            @include('partials.content')
          </div>
          @php wp_reset_postdata() @endphp
        @endforeach
      @endif
    </div>
  </div>
</div>
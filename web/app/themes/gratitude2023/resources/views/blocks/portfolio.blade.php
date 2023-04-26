@php global $post; @endphp

<div class="{{ $block->classes }}">
  <div class="container">
  <div class="row">
    <div class="col-md-2">
      Filters
    </div>
    <div class="col-md-10">
      <div class="row">
      @if(!empty($portfolio))
        @foreach ($portfolio as $post)
          @php setup_postdata($post) @endphp
          <div class="col-md-4">
            @include('partials.content-portfolio')
          </div>
          @php wp_reset_postdata() @endphp
        @endforeach
      @endif
      </div>
    </div>
    </div>
  </div>
</div>

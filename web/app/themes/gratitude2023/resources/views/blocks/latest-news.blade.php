@php global $post; @endphp

<div class="{{ $block->classes }}">
  <div class="container">
    <h3>{{ $title }}</h3>
      <div class="row">
      @if(!empty($news))
        @foreach ($news as $post)
          @php setup_postdata($post) @endphp
          <div class="col-md-4">
            @include('partials.content')
          </div>
          @php wp_reset_postdata() @endphp
        @endforeach
      @endif
    </div>
  </div>
</div>
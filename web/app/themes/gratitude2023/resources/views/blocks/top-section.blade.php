<div class="{{ $block->classes }}">
  <div class="row">
    <div class="col-md-6 image">
      @if( !empty( $image ) )
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
      @endif
    </div>
    <div class="col-md-6 text">
        <h1>{{ $title }}</h1>
        <p>{{ $paragraph }}</p>
        @if($buttonText)
          <a class="button" href="{{ $link }}">{{ $buttonText }}</a>
        @endif
    </div>
  </div>
</div>

<div class="{{ $block->classes }}">
  <div class="row">
    <div class="col-md-6 image">
      @if( !empty( $image ) )
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
      @endif
    </div>
    <div class="col-md-6 text">
      <div class="inner">
        <h1>{{ $title }}</h1>
        <p>{{ $paragraph }}</p>
        <a class="button" href="{{ $link }}">{{ $buttonText }}</a>
      </div>
    </div>
  </div>
</div>

<div class="{{ $block->classes }}">
  <div class="container">
  <div class="row">
    <div class="col-lg-6 image">
      @if($image)
      <div class="wp-block-image with-border">
        {!! wp_get_attachment_image( $image['ID'], 'medium', ""); !!}
      </div>
      @endif
    </div>
    <div class="col-lg-6 text">
      <h3>{{ $title }}</h3>
      <p>{{ $text }}</p>
      <a class="button" href="{{ $button_link }}" target="_blank">{{ $button_text }}</a>
    </div>
  </div>
</div>
</div>

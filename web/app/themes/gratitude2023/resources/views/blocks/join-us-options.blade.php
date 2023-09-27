<div class="{{ $block->classes }}">
  <div class="container">
  <div class="row">
    @if ($boxes)
      @foreach ($boxes as $box)
          <div class="col-6 col-md-6 col-lg-3">
            <a href="#{{ $box['link'] }}">
              <div class="box {{ $box['link'] }}">
                <div class="box__inner">
                    @php $image = $box['image'] @endphp
                      @if( !empty( $image ) )
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    @endif
                  {{ $box['title'] }}
                </div>
              </div>
            </a>
          </div>
      @endforeach
    @endif
  </div>
</div>
</div>

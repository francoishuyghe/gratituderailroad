<div class="{{ $block->classes }}">
  <div class="container">
    @if ($slides)
        @foreach ($slides as $slide)
          <div class="slide">
            <div class="row">
              <div class="col-md-6 image">
                @php $image = $slide['image'] @endphp
                @if( !empty( $image ) )
                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                @endif
              </div>
              <div class="col-md-6 text">
                <div class="quote">
                  "{{ $slide['quote'] }}"
                </div>
              <p>
                <span class="name">{{ $slide['name'] }}</span>
                @if ($slide['company'])
                <span class="company">{{ $slide['company'] }}</span>      
                @endif
              </p>
              </div>
            </div>
          </div>
        @endforeach
    @else
      <p>{{ $block->preview ? 'Add an item...' : 'No items found!' }}</p>
    @endif
  </div>
</div>
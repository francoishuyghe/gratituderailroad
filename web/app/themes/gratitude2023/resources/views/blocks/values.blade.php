<div class="{{ $block->classes }}">
  <div class="container">
  @if ($values)
    <div class="row justify-content-md-center">
      @foreach ($values as $value)
      <div class="value col-md-4">
        @php $image = $value['image'] @endphp
        @if( !empty( $image ) )
          <img src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        @endif
        <h3>{{ $value['name'] }}</h3>
        <p>{{ $value['description'] }}</p>
      </div>
      @endforeach
    </div>
  @else
    <p>{{ $block->preview ? 'Add an item...' : 'No items found!' }}</p>
  @endif
  </div>
</div>

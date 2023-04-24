<div class="{{ $block->classes }}">
  <div class="container">
  @if ($values)
    <div class="row">
      @foreach ($values as $value)
      <div class="col-md-4">
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

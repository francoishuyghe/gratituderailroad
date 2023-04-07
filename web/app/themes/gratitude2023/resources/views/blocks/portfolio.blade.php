<div class="{{ $block->classes }}">
  <div class="container">
  <div class="row">
    <div class="col-md-2">
      Filters
    </div>
    <div class="col-md-10">
      <div class="row">
      @if(!empty($portfolio))
        @foreach ($portfolio as $item)
            @include('partials.portfolio-item')
        @endforeach
      @endif
      </div>
    </div>
    </div>
  </div>
</div>

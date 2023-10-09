@php
  $images = [
    asset('images/numbers/years.svg'),
    asset('images/numbers/dollars.svg'),
    asset('images/numbers/companies.svg'),
    asset('images/numbers/funds.svg'),
  ]    
@endphp
<div class="{{ $block->classes }}">
  <div class="container">
  @if ($columns)
    <div class="row">
      @foreach ($columns as $column)
      <div class="col-md-3 col-6">
        <img src="{{ $images[$loop->index] }}"/>
        {!! $column['text'] !!}
      </div>
      @endforeach
    </div>
  @endif
</div>
</div>

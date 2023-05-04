<div class="{{ $block->classes }} " id="{{ $idName }}">
  <div class="container">
    <InnerBlocks />
  </div>
  @if($idName == 'manifesto')
    <div class="arrow-wrap">
      <a href="#areas">
        <img src="@asset('images/arrow.svg')" class="arrow"/>
      </a>
    </div>
  @endif
</div>

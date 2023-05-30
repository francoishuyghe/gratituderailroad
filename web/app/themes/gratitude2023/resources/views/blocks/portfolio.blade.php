@php global $post; @endphp

<div class="{{ $block->classes }}">
  <div class="container">
  <div class="row">
    <div class="col-md-2">
      <div id="portfolioFilters">
        <select>
          <option default value="">Impact Areas</option>
          <optgroup label="Categories">
            @foreach ($categories as $cat)
            <option value=".portfolio-category-{{ $cat->slug }}">{{ $cat->name }}</option>
            @endforeach
          </optgroup>
          
          <optgroup label="Founders">
            <option value=".bipoc">BIPOC Founder</option>
            <option value=".female">Female Founder</option>
          </optgroup>
          
          <optgroup label="Types">
            <option value=".fund">Fund</option>
            <option value=".company">Early-stage Company</option>
          </optgroup>
        </select>
        <div class="desktop">
          <h4>Impact Areas</h4>
          <h5>Categories</h5>
            @foreach ($categories as $cat)
              <button data-filter=".portfolio-category-{{ $cat->slug }}">{{ $cat->name }}</button>
            @endforeach
          <h5>Founders</h5>
          <button data-filter=".bipoc">BIPOC Founder</button>
          <button data-filter=".female">Female Founder</button>
          <h5>Types</h5>
            <button data-filter=".fund">Fund</button>
            <button data-filter=".company">Early-stage Company</button>
      </div>
    </div>
    </div>
    <div class="col-md-10" id="allPortfolio">
      <div class="grid-sizer"></div>
      @if(!empty($portfolio))
        @foreach ($portfolio as $post)
          @php setup_postdata($post) @endphp
            @include('partials.content-portfolio')
          @php wp_reset_postdata() @endphp
        @endforeach
      @endif
    </div>
    </div>
  </div>
</div>

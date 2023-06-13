@php global $post; @endphp

<div class="{{ $block->classes }}">
  <div class="container">
  <div class="row">
    <div class="col-md-2">
      <div id="portfolioFilters">
        <select>
          <option default value="">{!! __('IMPACT AREAS', 'sage') !!}</option>
          <optgroup label="Categories">
            @foreach ($categories as $cat)
            <option value=".portfolio-category-{{ $cat->slug }}">{{ $cat->name }}</option>
            @endforeach
          </optgroup>
          
          <optgroup label="Founders">
            <option value=".bipoc">{!! __('BIPOC Founder', 'sage') !!}</option>
            <option value=".female">{!! __('Female Founder', 'sage') !!}</option>
          </optgroup>
          
          <optgroup label="Types">
            <option value=".fund">{!! __('Fund', 'sage') !!}</option>
            <option value=".company">{!! __('Company', 'sage') !!}</option>
          </optgroup>
        </select>
        <div class="desktop">
          <h4>{!! __('Filters', 'sage') !!}</h4>
          <h5>{!! __('Impact Areas', 'sage') !!}</h5>
            @foreach ($categories as $cat)
              <button data-filter=".portfolio-category-{{ $cat->slug }}">{{ $cat->name }}</button>
            @endforeach
          <h5>{!! __('Founders', 'sage') !!}</h5>
          <button data-filter=".bipoc">{!! __('BIPOC Founder', 'sage') !!}</button>
          <button data-filter=".female">{!! __('Female Founder', 'sage') !!}</button>
          <h5>{!! __('Types', 'sage') !!}</h5>
            <button class="tag fund" data-filter=".fund">{!! __('Fund', 'sage') !!}</button>
            <button class="tag company" data-filter=".company">{!! __('Company', 'sage') !!}</button>
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

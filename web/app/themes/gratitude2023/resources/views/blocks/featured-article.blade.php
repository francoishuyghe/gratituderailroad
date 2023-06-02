@if($feature)
<div class="{{ $block->classes }}">
    <div class="container">
    <div class="row">
      <div class="col-lg-6 thumbnail">
        <div class="wp-block-image stacked single-stack">
          {!! get_the_post_thumbnail( $feature->ID, 'large' ) !!}
        </div>
      </div>
      <div class="col-lg-6 text">
        <h2>
        <a href="{{ the_permalink($feature->ID) }}">
          {{ $feature->post_title}}
        </a>
      </h2>
        {{ the_excerpt($feature->ID) }}
        <a class="readmore dot" href="{{ the_permalink($feature->ID) }}">Read More</a>
      </div>
    </div>
  </div>
</div>
@endif

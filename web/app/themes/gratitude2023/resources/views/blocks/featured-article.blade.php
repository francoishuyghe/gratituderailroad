@if($feature)
<div class="{{ $block->classes }}">
    <div class="container">
    <div class="row">
      <div class="col-md-6 thumbnail flex-center">
        <div class="wp-block-image stacked">
          {!! get_the_post_thumbnail( $feature->ID, 'medium', []);  !!}
        </div>
      </div>
      <div class="col-md-6 text flex-center">
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

<div class="{{ $block->classes }}">
  @if($feature)
    <div class="row">
      <div class="col-md-6 thumbnail flex-center">
        <div class="wp-block-image stacked">
          {!! get_the_post_thumbnail( $feature->ID, 'medium', []);  !!}
        </div>
      </div>
      <div class="col-md-6 text flex-center">
        <a href="{{ the_permalink($feature->ID) }}">
          <h2>{{ $feature->post_title}}</h2>
        </a>
        <p>{{ the_excerpt($feature->ID) }}</p>
        <a class="readmore dot" href="{{ the_permalink($feature->ID) }}">Read More</a>
      </div>
    </div>
  @else
    No post selected
  @endif
</div>

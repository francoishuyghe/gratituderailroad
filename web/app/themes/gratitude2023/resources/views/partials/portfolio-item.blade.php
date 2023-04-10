<div class="portfolio-item col-md-4">
    <a href="{{ the_permalink($item->ID) }}">
        <div class="thumbnail">
            {!! the_post_thumbnail( 'medium' );  !!}
        </div>
    </a>
    <a href="{{ the_permalink($item->ID) }}">
        <h3>{{ $item->post_title}}</h3>
    </a>
        <h6>Tags</h6>
</div>
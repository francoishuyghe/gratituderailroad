@php 
  $type = get_field('type_select', $post->ID);
  $founders = get_field('founder_select', $post->ID);
  $exited = get_field('exited', $post->ID);
  $classes = ['post-card'];
  $founderTags = [];
  foreach ($founders as $founder) {
    array_push($classes, $founder["value"]);
    array_push($founderTags, $founder["label"]);
  }
  if( $exited ){
    array_push($classes, 'exited');
  }
  array_push($classes, $type );
@endphp


<article @php(post_class($classes))>
  <a href="{{ the_permalink() }}">
    <div class="thumbnail">
      <div class="tags">
        <span class="tag">
          @if($type == 'company') 
            {!! __('Company', 'sage') !!} 
          @else 
            {!! __('Fund', 'sage') !!} 
          @endif
        </span>
      @if($exited) <span class="tag exited"> {!! __('Exited', 'sage') !!} </span> @endif
    </div>
        {!! the_post_thumbnail( 'large' );  !!}
    </div>
  </a>
  <a href="{{ the_permalink() }}">
    <h3>{{ the_title() }}</h3>
  </a>
  <div class="cats">
    @php( $cats = get_the_terms( $post->ID, 'portfolio-category') )
    @if ($cats)
      @foreach ($cats as $cat)
          <span>{{ $cat->name }}</span>
    @endforeach
    @foreach ($founderTags as $tag)
        <span>{{ $tag }}</span>
    @endforeach
    @endif
  </div>
</article>
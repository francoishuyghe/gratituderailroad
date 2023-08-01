@php global $post @endphp
@php( $cats = get_terms(array(
            'taxonomy'   => 'team-category',
            'hide_empty' => true,
            'order' => 'desc'
        )))

<article @php(post_class('h-entry'))>
  <header id="articleHeader">
    <div class="container">
      <div class="row">
        <div class="col-md-2 back-wrap">
          <a href="/team" class="back round-button orange"><i class="fa-light fa-arrow-left"></i> Back</a>
        </div>
      </div>
    
    <div class="row">
      <div class="col-md-6">
        {!! the_post_thumbnail( 'large' );  !!}
      </div>
      <div class="col-md-6">
        <div class="category">
            @if(isset($cats[0]))
              {{ $cats[0]->name }}
            @endif
        </div>
        <h1 class="p-name">
          {!! $title !!}
        </h1>
        <h4>{{ the_field('title') }}</h4>
      </div>
    </div>
    
    </div>
  </header>

  <div class="e-content">
      @php(the_content())
  </div>
</article>

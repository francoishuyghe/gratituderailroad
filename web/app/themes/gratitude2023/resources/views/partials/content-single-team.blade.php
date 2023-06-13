@php global $post @endphp

<article @php(post_class('h-entry'))>
  <header id="articleHeader">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <a href="/team" class="back round-button orange"><i class="fa-light fa-arrow-left"></i> Back</a>
        </div>
        <div class="col-md-8">
          <div class="category">
            @php( $cats = get_terms(array(
              'taxonomy'   => 'team-category',
              'hide_empty' => true,
              'order' => 'desc'
          )))
              @if(isset($cats[0]))
                {{ $cats[0]->name }}
              @endif
          </div>
        </div>
      </div>
    
    <div class="row">
      <div class="col-md-6">
        {!! the_post_thumbnail( 'large' );  !!}
      </div>
      <div class="col-md-6">
        <h1 class="p-name">
          {!! $title !!}
        </h1>
      </div>
    </div>
    
    </div>
  </header>

  <div class="e-content">
      @php(the_content())
  </div>
</article>

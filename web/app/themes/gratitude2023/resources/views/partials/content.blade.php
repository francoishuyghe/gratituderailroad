<article @php(post_class('post-card'))>
  <a href="{{ get_permalink() }}">
    <div class="thumbnail rounded">
      {!! the_post_thumbnail() !!}
    </div>
  </a>
    <div class="cats">
      @php( $cats = get_the_category())
      @foreach ($cats as $cat)
      <span class="cat">{!! $cat->name !!}</span>
      @endforeach
    </div>
  <a href="{{ get_permalink() }}">
    <h4 class="entry-title">
        {!! $title !!}
      </h4>
  </a>

  
</article>

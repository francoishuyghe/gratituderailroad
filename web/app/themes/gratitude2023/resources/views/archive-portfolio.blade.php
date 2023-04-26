@extends('layouts.app')

@section('content')
  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>
  @endif


</section>

<section id="allPosts">
  <div class="container">
  <div class="row">
  @while(have_posts()) @php(the_post())
    <div class="col-md-4">
      @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
    </div>
  @endwhile
    </div>
  </div>
</section>

  {!! get_the_posts_navigation() !!}
@endsection

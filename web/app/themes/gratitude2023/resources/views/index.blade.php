@extends('layouts.app')

@section('content')
  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif

  @php 
  $page_for_posts_id = get_option( 'page_for_posts' );
  echo apply_filters( 'the_content', get_post_field( 'post_content', $page_for_posts_id ) );
  @endphp

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

@section('sidebar')
  @include('sections.sidebar')
@endsection

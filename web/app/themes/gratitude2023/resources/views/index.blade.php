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

<section id="filters">
  <h3>Categories</h3>

@php
$categories = get_categories( array(
	'orderby' => 'name',
	'order'   => 'ASC'
) );
@endphp

<ul>
@foreach( $categories as $category )
@php $category_link = sprintf( 
		'<a href="%1$s" alt="%2$s">%3$s</a>',
		esc_url( get_category_link( $category->term_id ) ),
		esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
		esc_html( $category->name )
	);
@endphp
  <li> {!! $category_link !!}</li>
@endforeach
</ul>

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

@section('sidebar')
  @include('sections.sidebar')
@endsection

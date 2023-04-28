@extends('layouts.app')

@section('content')
  @if (! have_posts())
    <x-alert type="warning">
      {!! __('Sorry, no results were found.', 'sage') !!}
    </x-alert>
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
		'<button class="filter-toggle" alt="%1$s" data-cat="%2$s">%3$s</button>',
		esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
		esc_html( $category->slug ),
		esc_html( $category->name )
	);
@endphp
  <li> {!! $category_link !!}</li>
@endforeach
</ul>

</section>

<section id="allPosts" class="loading">
  <div class="container">
    <div class="row">
      {{-- Posts go here --}}
    </div>
    <button id="loadMore">Load More</button> 
  </div>
</section>

  {!! get_the_posts_navigation() !!}
@endsection

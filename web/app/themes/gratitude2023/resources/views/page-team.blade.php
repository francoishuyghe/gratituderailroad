@extends('layouts.app')

@section('content')
@php global $post @endphp
  <div class="container">
    <section id="top">
        @php 
          $page = get_page_by_path( 'team' );
          echo apply_filters( 'the_content', get_post_field( 'post_content', $page ) );
        @endphp
    </section>

    <div id="allTeam">
    <div class="row">
      <div class="col-md-2">
        <ul id="filter">
        @php $categories = get_terms('team-category'); @endphp
        @foreach ($categories as $category)
        <li>
          <a href="#{{ $category->slug }}">{{ $category->name }}</a>
        </li>
        @endforeach
        </ul>
      </div>
      <div class="col-md-10">
          @foreach ($categories as $category)
            <section id="{{ $category->slug }}">
              <h2>{{ $category->name }}</h2>
              <div class="row">
            @php $teamMembers = App\View\Composers\PageTeam::teamByTerm($category->slug) @endphp
            @foreach ($teamMembers as $post)
              <div class="col-md-4">
                @php setup_postdata( $post ) @endphp
                @include('partials.content-team')
                @php wp_reset_postdata() @endphp
              </div>
              @endforeach
            </div>
            </section>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  </div>
@endsection

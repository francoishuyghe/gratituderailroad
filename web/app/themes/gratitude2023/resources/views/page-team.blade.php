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
        @php $teamMembers = App\View\Composers\PageTeam::allTeam() @endphp
        @foreach ($teamMembers as $post)
          <div class="col-6 col-md-6 col-lg-4">
            @php setup_postdata( $post ) @endphp
            @include('partials.content-team')
            @php wp_reset_postdata() @endphp
          </div>
          @endforeach
      </div>
    </div>
  </div>
  </div>
@endsection

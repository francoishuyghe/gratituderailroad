{{--
  Template Name: Full width page Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-page-fullwidth')
  @endwhile
@endsection

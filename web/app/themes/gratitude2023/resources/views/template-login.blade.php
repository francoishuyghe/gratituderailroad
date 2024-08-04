{{--
  Template Name: Investor Login
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-investor-login')
  @endwhile
@endsection

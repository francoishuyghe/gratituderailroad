{{--
  Template Name: Investor Portal Tab
--}}

@extends('layouts.app')

@section('content')
    @while (have_posts())
        @php(the_post())
        @include('partials.header-investor-portal')
        @include('partials.content-investor-portal')
    @endwhile
@endsection

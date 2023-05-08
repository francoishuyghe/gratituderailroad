@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.content-page')
    {{-- @includeFirst(['partials.content-page-about', 'partials.content']) --}}
  @endwhile
@endsection

@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (! have_posts())
  <div class="container">
    <x-alert type="warning">
      {!! __('Sorry, but the page you are trying to view does not exist.', 'sage') !!}
    </x-alert>
    <a href="/" class="button orange">Back</a>
  </div>
  @endif
@endsection

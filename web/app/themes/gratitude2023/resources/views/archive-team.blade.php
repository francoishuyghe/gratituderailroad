@extends('layouts.app')

@section('content')
  <div class="container">
  <h1>Team</h1>

    <div class="row">
      <div class="col-md-2">
        <ul>
        @php $categories = get_terms('team-category'); @endphp
        @foreach ($categories as $category)
        <li>
          <a data-cat={{ $category->slug }}>{{ $category->name }}</a>
        </li>
        @endforeach
        </ul>
      </div>
      <div class="col-md-10">
        <div class="row">
        @while(have_posts()) @php(the_post())
          <div class="col-md-4">
            @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
          </div>
          @endwhile
        </div>
      </div>
    </div>
  </div>
@endsection

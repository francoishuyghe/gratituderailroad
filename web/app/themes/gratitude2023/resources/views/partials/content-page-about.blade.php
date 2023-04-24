@php global $post @endphp

@php(the_content())

@if($jobs)
<section id="jobs">
    <div class="container">
        <h3>Jobs</h3>
        <h2>Join our amazing team</h2>
        <div class="row">
            @foreach ($jobs as $post)
                @php( setup_postdata($post))
                <div class="col-md-4">
                @include('partials.content-job') 
                </div>
                @php( wp_reset_postdata() )
            @endforeach
        </div>
    </div>
</section>
@endif
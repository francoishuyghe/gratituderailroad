@php global $post @endphp

@php(the_content())

<section id="jobs">
    <div class="container">
        @if($jobs)
        <div class="row">
            @foreach ($jobs as $post)
                @php( setup_postdata($post))
                <div class="job col-md-4">
                @include('partials.content-job') 
                </div>
                @php( wp_reset_postdata() )
            @endforeach
        </div>
        @else
        <p>There are currently no openings. If interested, please contact us directly at <a href="mailto:info@gratituderailroad.com">info@gratituderailroad.com</a>.
        @endif
    </div>
</section>
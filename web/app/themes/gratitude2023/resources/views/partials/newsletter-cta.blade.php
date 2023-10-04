<section id="newsletterCTA">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text">
                <h2>{{ the_field('newsletter_cta_title', 'options') }}</h2>
                <p>{{ the_field('newsletter_cta_paragraph', 'options') }}</p>
                @include('partials.newsletter-signup', array(
                    'placeholder' => get_field('newsletter_cta_placeholder', 'options'),
                    'submit' => get_field('newsletter_cta_submit', 'options')
                ))
            </div>
            <div class="col-md-6 image">
                <img src="@asset('images/newsletter-cta-illustration.webp')" />
            </div>
        </div>
    </div>
</section>
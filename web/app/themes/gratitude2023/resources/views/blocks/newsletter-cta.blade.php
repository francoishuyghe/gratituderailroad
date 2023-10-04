<div class="{{ $block->classes }}">
  @include('partials.newsletter-signup'array(
    'placeholder' => get_field('newsletter_cta_placeholder', 'options'),
    'submit' => "►"
))
</div>

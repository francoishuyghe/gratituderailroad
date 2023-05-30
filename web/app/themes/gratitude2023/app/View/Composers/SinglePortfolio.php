<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class SinglePortfolio extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-single-portfolio',
    ];

    public function with()
    {
        return [
            'type' => get_field('type_select'),
            'founders' => get_field('founder_select'), 
            'website' => get_field('website'),
            'logo' => get_field('logo'),
            'cats' =>  get_terms('portfolio-category'),
            'learnmore_title' => get_field('learnmore_title', 'options'),
            'learnmore_text' => get_field('learnmore_text', 'options'),
            'learnmore_button' => get_field('learnmore_button', 'options'),
            'learnmore_link' => get_field('learnmore_link', 'options'),
            'learnmore_image' => get_field('learnmore_image', 'options'),
        ];
    }
}

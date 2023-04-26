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
        ];
    }
}

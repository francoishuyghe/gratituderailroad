<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class PageTeam extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [

    ];

    public function with()
    {
        return [
            'test' => 'The test',
        ];
    }

    public static function teamByTerm($slug) {
        $args = array(
            'post_type' => 'team',
            'orderby' => 'title',
		    'order' => 'ASC',
            'showposts' => -1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'team-category',
                    'field' => 'slug',
                    'terms' => array( $slug ),
                    'operator' => 'IN'
                )
            )
            
	    );
	    $the_query = new WP_Query( $args );
	    return $the_query->posts;
    }
}

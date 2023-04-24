<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class PageAbout extends Composer
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
            'jobs' => $this->getJobs(),
        ];
    }

    public static function getJobs() {
        $args = array(
            'post_type' => 'jobs',
		    'order' => 'ASC',
            'showposts' => 4,
            
	    );
	    $the_query = new WP_Query( $args );
	    return $the_query->posts;
    }
}

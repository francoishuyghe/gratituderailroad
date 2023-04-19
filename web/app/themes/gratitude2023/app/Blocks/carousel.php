<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class carousel extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Carousel';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Carousel.';

    /**
     * The block category.
     *
     * @var string
     */
    public $category = 'formatting';

    /**
     * The block icon.
     *
     * @var string|array
     */
    public $icon = 'editor-ul';

    /**
     * The block keywords.
     *
     * @var array
     */
    public $keywords = [];

    /**
     * The block post type allow list.
     *
     * @var array
     */
    public $post_types = [];

    /**
     * The parent block type allow list.
     *
     * @var array
     */
    public $parent = [];

    /**
     * The default block mode.
     *
     * @var string
     */
    public $mode = 'preview';

    /**
     * The default block alignment.
     *
     * @var string
     */
    public $align = '';

    /**
     * The default block text alignment.
     *
     * @var string
     */
    public $align_text = '';

    /**
     * The default block content alignment.
     *
     * @var string
     */
    public $align_content = '';

    /**
     * The supported block features.
     *
     * @var array
     */
    public $supports = [
        'align' => false,
        'align_text' => false,
        'align_content' => false,
        'full_height' => false,
        'anchor' => false,
        'mode' => false,
        'multiple' => true,
        'jsx' => true,
    ];

    /**
     * The block preview example data.
     *
     * @var array
     */
    public $example = [
        'slides' => [
            ['quote' => 'A quote'],
            ['name' => 'A Name'],
            ['company' => 'A company'],
        ],
    ];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'slides' => $this->slides(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $carousel = new FieldsBuilder('carousel');

        $carousel
            ->addRepeater('slides', [
                'layout' => 'block'
            ])
                ->addTextarea('quote')
                ->addText('name')
                ->addText('company')
                ->addImage('image')
            ->endRepeater();

        return $carousel->build();
    }

    /**
     * Return the slides field.
     *
     * @return array
     */
    public function slides()
    {
        return get_field('slides') ?: $this->example['slides'];
    }

    /**
     * Assets to be enqueued when rendering the block.
     *
     * @return void
     */
    public function enqueue()
    {
        //
    }
}

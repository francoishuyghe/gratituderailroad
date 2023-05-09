<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class testimonials extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Testimonials';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A Testimonials block.';

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
        'align' => true,
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
        'quotes' => [
        [
            'quote' => 'The quote text',
            'name' => 'First name Last name',
            'company' => 'Company',
            'title' => 'Title'
        ],
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
            'quotes' => $this->quotes(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $testimonials = new FieldsBuilder('testimonials');

        $testimonials
            ->addRepeater('quotes', [
                'layout' => 'block'
            ])
                ->addTextarea('quote')
                ->addText('name')
                ->addText('company')
                ->addText('title')
            ->endRepeater();

        return $testimonials->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function quotes()
    {
        return get_field('quotes') ?: $this->example['quotes'];
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

<?php

class SMARTA_Testimonials extends FLBuilderModule{
    public function __construct(){
        parent::__construct(array(
            'name' => __('Testimonials Menu', SMARTA_SLUG),
            'description' => __('Add a nice testimonials widget where you can advertise your testimonials as a little menu', SMARTA_SLUG),
            'group' => __('Sorin Marta', SMARTA_SLUG),
            'category' => __('Sorin Marta', SMARTA_SLUG),
            'dir' => SMARTA_MODULES . '/testimonials/',
            'url' => SMARTA_LINK_MODULES . '/testimonials/'
        ));
    }
}

FLBuilder::register_module( 'SMARTA_Testimonials', array(
    'testimonial-content'      => array(
        'title'    => __( 'Testimonials Content', SMARTA_SLUG ),
        'sections' => array(
            'first-testimonial' => array(
                'title' => __('First Testimonial', SMARTA_SLUG),
                'fields' => array(
                    'one_customer_name' => array(
                        'type' => 'text',
                        'label' => __('Customer Name', SMARTA_SLUG)
                    ),
                    'one_logo' => array(
                        'type' => 'photo',
                        'label' => __('Logo', SMARTA_SLUG)
                    ),
                    'one_content_heading' => array(
                        'type' => 'text',
                        'label' => __('Content Heading', SMARTA_SLUG)
                    ),
                    'one_content_text' => array(
                        'type' => 'editor',
                        'label' => __('Content Text', SMARTA_SLUG),
                        'media_buttons' => false,
                        'wpautop'       => true
                    )
                )
            ),
            'second-testimonial' => array(
                'title' => __('Second Testimonial', SMARTA_SLUG),
                'fields' => array(
                    'two_customer_name' => array(
                        'type' => 'text',
                        'label' => __('Customer Name', SMARTA_SLUG)
                    ),
                    'two_logo' => array(
                        'type' => 'photo',
                        'label' => __('Logo', SMARTA_SLUG)
                    ),
                    'two_content_heading' => array(
                        'type' => 'text',
                        'label' => __('Content Heading', SMARTA_SLUG)
                    ),
                    'two_content_text' => array(
                        'type' => 'editor',
                        'label' => __('Content Text', SMARTA_SLUG),
                        'media_buttons' => false
                    )
                )
            ),
            'third-testimonial' => array(
                'title' => __('Third Testimonial', SMARTA_SLUG),
                'fields' => array(
                    'three_customer_name' => array(
                        'type' => 'text',
                        'label' => __('Customer Name', SMARTA_SLUG)
                    ),
                    'three_logo' => array(
                        'type' => 'photo',
                        'label' => __('Logo', SMARTA_SLUG)
                    ),
                    'three_content_heading' => array(
                        'type' => 'text',
                        'label' => __('Content Heading', SMARTA_SLUG)
                    ),
                    'three_content_text' => array(
                        'type' => 'editor',
                        'label' => __('Content Text', SMARTA_SLUG),
                        'media_buttons' => false
                    )
                )
            ),
            'fourth-testimonial' => array(
                'title' => __('Fourth Testimonial', SMARTA_SLUG),
                'fields' => array(
                    'four_customer_name' => array(
                        'type' => 'text',
                        'label' => __('Customer Name', SMARTA_SLUG)
                    ),
                    'four_logo' => array(
                        'type' => 'photo',
                        'label' => __('Logo', SMARTA_SLUG)
                    ),
                    'four_content_heading' => array(
                        'type' => 'text',
                        'label' => __('Content Heading', SMARTA_SLUG)
                    ),
                    'four_content_text' => array(
                        'type' => 'editor',
                        'label' => __('Content Text', SMARTA_SLUG),
                        'media_buttons' => false
                    )
                )
            )
        )
    )
  ) );
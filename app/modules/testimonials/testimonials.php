<?php

class SMARTA_Testimonials extends FLBuilderModule{
    public function __construct(){
        parent::__construct(array(
            'name' => __('Testimonials', SMARTA_SLUG),
            'description' => __('Add a nice testimonials widget where you can advertise your testimonials', SMARTA_SLUG),
            'group' => __('Sorin Marta', SMARTA_SLUG),
            'category' => __('Sorin Marta', SMARTA_SLUG),
            'dir' => SMARTA_MODULES . '/testimonials/',
            'url' => SMARTA_LINK_MODULES . '/testimonials/'
        ));
    }
}

FLBuilder::register_module( 'SMARTA_Testimonials', array(
    'first-testimonial'      => array(
        'title'    => __( 'Testimonials Content', SMARTA_SLUG ),
        'sections' => array(
            'first-testimonial' => array(
                'title' => __('First Testimonial', SMARTA_SLUG),
                'fields' => array(
                    'heading' => array(
                        'type' => 'text',
                        'label' => __('Customer Name', SMARTA_SLUG)
                    ),
                    'logo' => array(
                        'type' => 'photo',
                        'label' => __('Logo', SMARTA_SLUG)
                    ),
                    'content-heading' => array(
                        'type' => 'text',
                        'label' => __('Content Heading', SMARTA_SLUG)
                    ),
                    'content-text' => array(
                        'type' => 'editor',
                        'label' => __('Content Text', SMARTA_SLUG),
                        'media_buttons' => false
                    )
                )
            ),
            'second-testimonial' => array(
                'title' => __('Second Testimonial', SMARTA_SLUG),
                'fields' => array(
                    'heading' => array(
                        'type' => 'text',
                        'label' => __('Customer Name', SMARTA_SLUG)
                    ),
                    'logo' => array(
                        'type' => 'photo',
                        'label' => __('Logo', SMARTA_SLUG)
                    ),
                    'content-heading' => array(
                        'type' => 'text',
                        'label' => __('Content Heading', SMARTA_SLUG)
                    ),
                    'content-text' => array(
                        'type' => 'editor',
                        'label' => __('Content Text', SMARTA_SLUG),
                        'media_buttons' => false
                    )
                )
            ),
            'third-testimonial' => array(
                'title' => __('Third Testimonial', SMARTA_SLUG),
                'fields' => array(
                    'heading' => array(
                        'type' => 'text',
                        'label' => __('Customer Name', SMARTA_SLUG)
                    ),
                    'logo' => array(
                        'type' => 'photo',
                        'label' => __('Logo', SMARTA_SLUG)
                    ),
                    'content-heading' => array(
                        'type' => 'text',
                        'label' => __('Content Heading', SMARTA_SLUG)
                    ),
                    'content-text' => array(
                        'type' => 'editor',
                        'label' => __('Content Text', SMARTA_SLUG),
                        'media_buttons' => false
                    )
                )
            ),
            'fourth-testimonial' => array(
                'title' => __('Fourth Testimonial', SMARTA_SLUG),
                'fields' => array(
                    'heading' => array(
                        'type' => 'text',
                        'label' => __('Customer Name', SMARTA_SLUG)
                    ),
                    'logo' => array(
                        'type' => 'photo',
                        'label' => __('Logo', SMARTA_SLUG)
                    ),
                    'content-heading' => array(
                        'type' => 'text',
                        'label' => __('Content Heading', SMARTA_SLUG)
                    ),
                    'content-text' => array(
                        'type' => 'editor',
                        'label' => __('Content Text', SMARTA_SLUG),
                        'media_buttons' => false
                    )
                )
            ),
        )
    )
  ) );

new SMARTA_Testimonials();
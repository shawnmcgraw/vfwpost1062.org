<?php

  function posttheme_custoize_register($wp_customize){

    // Section carousel 1
    $wp_customize->add_section('carousel1', array(
      'title'   => __('Carousel 1', 'posttheme'),
      'description' => sprintf(__('Options for carousel panel 1', 'posttheme')),
      'priority'  => 130
    ));
    // carousel 1 image setting
    $wp_customize->add_setting('carousel1_image', array(
      'default'   => get_bloginfo('template_directory').'/media/hstflighdeckwashdown-cropped1.jpg',
      'type'      => 'theme_mod'
    ));
    // carousel 1 image control
    $wp_customize->add_control(new WP_Customize_Image_control($wp_customize, 'carousel1_image', array(
      'label' => __('Carousel 1 Image - Crop to 1300x600', 'posttheme'),
      'section' => 'carousel1',
      'settings' => 'carousel1_image',
      'priority' => 1
    )));
    // carousel 1 heading setting
    $wp_customize->add_setting('carousel1_heading', array(
      'default'   => _x('Join Us!', 'posttheme'),
      'type'      => 'theme_mod'
    ));
    // carousel 1 heading control
    $wp_customize->add_control('carousel1_heading', array(
      'label'     => __('Heading', 'posttheme'),
      'section'   => 'carousel1',
      'priority'  => 2
    ));
    // carousel 1 text setting
    $wp_customize->add_setting('carousel1_text', array(
      'default'   => _x('No one does more for veterans.', 'posttheme'),
      'type'      => 'theme_mod'
    ));
    // carousel 1 text control
    $wp_customize->add_control('carousel1_text', array(
      'label'     => __('Text', 'posttheme'),
      'section'   => 'carousel1',
      'priority'  => 3
    ));
    // carousel 1 button url setting
    $wp_customize->add_setting('carousel1_btn_url', array(
      'default'   => _x('https://vfw.org/join', 'posttheme'),
      'type'      => 'theme_mod'
    ));
    // carousel 1 button url control
    $wp_customize->add_control('carousel1_btn_url', array(
      'label'     => __('Button URL', 'posttheme'),
      'section'   => 'carousel1',
      'priority'  => 4
    ));
    // carousel 1 button text setting
    $wp_customize->add_setting('carousel1_btn_text', array(
      'default'   => _x('Join', 'posttheme'),
      'type'      => 'theme_mod'
    ));
    // carousel 1 button text control
    $wp_customize->add_control('carousel1_btn_text', array(
      'label'     => __('Button Text', 'posttheme'),
      'section'   => 'carousel1',
      'priority'  => 5
    ));

    
    // Section carousel 2
    $wp_customize->add_section('carousel2', array(
      'title'   => __('Carousel 2', 'posttheme'),
      'description' => sprintf(__('Options for carousel panel 2', 'posttheme')),
      'priority'  => 131
    ));
    // carousel 2 image setting
    $wp_customize->add_setting('carousel2_image', array(
      'default'   => get_bloginfo('template_directory').'/media/us-army-aricraft-crop1.jpg',
      'type'      => 'theme_mod'
    ));
    // carousel 2 image control
    $wp_customize->add_control(new WP_Customize_Image_control($wp_customize, 'carousel2_image', array(
      'label' => __('Carousel 2 Image - Crop to 1300x600', 'posttheme'),
      'section' => 'carousel2',
      'settings' => 'carousel2_image',
      'priority' => 1
    )));
    // carousel 2 heading setting
    $wp_customize->add_setting('carousel2_heading', array(
      'default'   => _x('Help Us Keep the Doors Open', 'posttheme'),
      'type'      => 'theme_mod'
    ));
    // carousel 2 heading control
    $wp_customize->add_control('carousel2_heading', array(
      'label'     => __('Heading', 'posttheme'),
      'section'   => 'carousel2',
      'priority'  => 2
    ));
    // carousel 2 text setting
    $wp_customize->add_setting('carousel2_text', array(
      'default'   => _x('We need help to re-pave our parking lot', 'posttheme'),
      'type'      => 'theme_mod'
    ));
    // carousel 2 text control
    $wp_customize->add_control('carousel2_text', array(
      'label'     => __('Text', 'posttheme'),
      'section'   => 'carousel2',
      'priority'  => 3
    ));
    // carousel 2 button url setting
    $wp_customize->add_setting('carousel2_btn_url', array(
      'default'   => _x('https://vfw.org/join', 'posttheme'),
      'type'      => 'theme_mod'
    ));
    // carousel 2 button url control
    $wp_customize->add_control('carousel2_btn_url', array(
      'label'     => __('Button URL', 'posttheme'),
      'section'   => 'carousel2',
      'priority'  => 4
    ));
    // carousel 2 button text setting
    $wp_customize->add_setting('carousel2_btn_text', array(
      'default'   => _x('Donate', 'posttheme'),
      'type'      => 'theme_mod'
    ));
    // carousel 2 button text control
    $wp_customize->add_control('carousel2_btn_text', array(
      'label'     => __('Button Text', 'posttheme'),
      'section'   => 'carousel2',
      'priority'  => 5
    ));


    // Section carousel 3
    $wp_customize->add_section('carousel3', array(
      'title'   => __('Carousel 3', 'posttheme'),
      'description' => sprintf(__('Options for carousel panel 3', 'posttheme')),
      'priority'  => 131
    ));
    // carousel 3 image setting
    $wp_customize->add_setting('carousel3_image', array(
      'default'   => get_bloginfo('template_directory').'/media/USFlag-cropped1.jpeg',
      'type'      => 'theme_mod'
    ));
    // carousel 3 image control
    $wp_customize->add_control(new WP_Customize_Image_control($wp_customize, 'carousel3_image', array(
      'label' => __('Carousel 3 Image - Crop to 1300x600', 'posttheme'),
      'section' => 'carousel3',
      'settings' => 'carousel3_image',
      'priority' => 1
    )));
    // carousel 3 heading setting
    $wp_customize->add_setting('carousel3_heading', array(
      'default'   => _x('Contact Us', 'posttheme'),
      'type'      => 'theme_mod'
    ));
    // carousel 3 heading control
    $wp_customize->add_control('carousel3_heading', array(
      'label'     => __('Heading', 'posttheme'),
      'section'   => 'carousel3',
      'priority'  => 2
    ));
    // carousel 3 text setting
    $wp_customize->add_setting('carousel3_text', array(
      'default'   => _x('Need help with, or just want more information? Click below.', 'posttheme'),
      'type'      => 'theme_mod'
    ));
    // carousel 3 text control
    $wp_customize->add_control('carousel3_text', array(
      'label'     => __('Text', 'posttheme'),
      'section'   => 'carousel3',
      'priority'  => 3
    ));
    // carousel 3 button url setting
    $wp_customize->add_setting('carousel3_btn_url', array(
      'default'   => _x('https://vfwpost1062.org/contact', 'posttheme'),
      'type'      => 'theme_mod'
    ));
    // carousel 3 button url control
    $wp_customize->add_control('carousel3_btn_url', array(
      'label'     => __('Button URL', 'posttheme'),
      'section'   => 'carousel3',
      'priority'  => 4
    ));
    // carousel 3 button text setting
    $wp_customize->add_setting('carousel3_btn_text', array(
      'default'   => _x('Contact Us', 'posttheme'),
      'type'      => 'theme_mod'
    ));
    // carousel 3 button text control
    $wp_customize->add_control('carousel3_btn_text', array(
      'label'     => __('Button Text', 'posttheme'),
      'section'   => 'carousel3',
      'priority'  => 5
    ));
    

    // Section card 1
    $wp_customize->add_section('card1', array(
      'title'   => __('Card 1', 'posttheme'),
      'description' => sprintf(__('Options for card 1', 'posttheme')),
      'priority'  => 131
    ));
    // card 1 image setting
    $wp_customize->add_setting('card1_image', array(
      'default'   => get_bloginfo('template_directory').'/media/postplaque-cropped.jpg',
      'type'      => 'theme_mod'
    ));
    // card 1 image control
    $wp_customize->add_control(new WP_Customize_Image_control($wp_customize, 'card1_image', array(
      'label' => __('Card 1 Image', 'posttheme'),
      'section' => 'card1',
      'settings' => 'card1_image',
      'priority' => 1
    )));
    // card 1 heading setting
    $wp_customize->add_setting('card1_heading', array(
      'default'   => _x('Card One', 'posttheme'),
      'type'      => 'theme_mod'
    ));
    // card 1 heading control
    $wp_customize->add_control('card1_heading', array(
      'label'     => __('Heading', 'posttheme'),
      'section'   => 'card1',
      'priority'  => 2
    ));
    // card 1 text setting
    $wp_customize->add_setting('card1_text', array(
      'default'   => _x('Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'posttheme'),
      'type'      => 'theme_mod'
    ));
    // card 1 text control
    $wp_customize->add_control('card1_text', array(
      'label'     => __('Text', 'posttheme'),
      'section'   => 'card1',
      'priority'  => 3
    ));
    // card 1 button url setting
    $wp_customize->add_setting('card1_btn_url', array(
      'default'   => _x('https://vfwpost1062.org/contact', 'posttheme'),
      'type'      => 'theme_mod'
    ));
    // card 1 button url control
    $wp_customize->add_control('card1_btn_url', array(
      'label'     => __('Button URL', 'posttheme'),
      'section'   => 'card1',
      'priority'  => 4
    ));
    // card 1 button text setting
    $wp_customize->add_setting('card1_btn_text', array(
      'default'   => _x('CTA 1', 'posttheme'),
      'type'      => 'theme_mod'
    ));
    // card 1 button text control
    $wp_customize->add_control('card1_btn_text', array(
      'label'     => __('Button Text', 'posttheme'),
      'type'      => 'textarea',
      'section'   => 'card1',
      'priority'  => 5
    ));


    // Section card 2
    $wp_customize->add_section('card2', array(
      'title'   => __('Card 2', 'posttheme'),
      'description' => sprintf(__('Options for card 2', 'posttheme')),
      'priority'  => 131
    ));
    // card 2 image setting
    $wp_customize->add_setting('card2_image', array(
      'default'   => get_bloginfo('template_directory').'/media/postplaque-cropped.jpg',
      'type'      => 'theme_mod'
    ));
    // card 2 image control
    $wp_customize->add_control(new WP_Customize_Image_control($wp_customize, 'card2_image', array(
      'label' => __('Card 2 Image', 'posttheme'),
      'section' => 'card2',
      'settings' => 'card2_image',
      'priority' => 1
    )));
    // card 2 heading setting
    $wp_customize->add_setting('card2_heading', array(
      'default'   => _x('Card Two', 'posttheme'),
      'type'      => 'theme_mod'
    ));
    // card 2 heading control
    $wp_customize->add_control('card2_heading', array(
      'label'     => __('Heading', 'posttheme'),
      'section'   => 'card2',
      'priority'  => 2
    ));
    // card 2 text setting
    $wp_customize->add_setting('card2_text', array(
      'default'   => _x('Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'posttheme'),
      'type'      => 'theme_mod'
    ));
    // card 2 text control
    $wp_customize->add_control('card2_text', array(
      'label'     => __('Text', 'posttheme'),
      'section'   => 'card2',
      'priority'  => 3
    ));
    // card 2 button url setting
    $wp_customize->add_setting('card2_btn_url', array(
      'default'   => _x('https://vfwpost1062.org/contact', 'posttheme'),
      'type'      => 'theme_mod'
    ));
    // card 2 button url control
    $wp_customize->add_control('card2_btn_url', array(
      'label'     => __('Button URL', 'posttheme'),
      'section'   => 'card2',
      'priority'  => 4
    ));
    // card 2 button text setting
    $wp_customize->add_setting('card2_btn_text', array(
      'default'   => _x('CTA 2', 'posttheme'),
      'type'      => 'theme_mod'
    ));
    // card 2 button text control
    $wp_customize->add_control('card2_btn_text', array(
      'label'     => __('Button Text', 'posttheme'),
      'type'      => 'textarea',
      'section'   => 'card2',
      'priority'  => 5
    ));


    // Section card 3
    $wp_customize->add_section('card3', array(
      'title'   => __('Card 3', 'posttheme'),
      'description' => sprintf(__('Options for card 3', 'posttheme')),
      'priority'  => 131
    ));
    // card 3 image setting
    $wp_customize->add_setting('card3_image', array(
      'default'   => get_bloginfo('template_directory').'/media/postplaque-cropped.jpg',
      'type'      => 'theme_mod'
    ));
    // card 3 image control
    $wp_customize->add_control(new WP_Customize_Image_control($wp_customize, 'card3_image', array(
      'label' => __('Card 3 Image', 'posttheme'),
      'section' => 'card3',
      'settings' => 'card3_image',
      'priority' => 1
    )));
    // card 3 heading setting
    $wp_customize->add_setting('card3_heading', array(
      'default'   => _x('Card Three', 'posttheme'),
      'type'      => 'theme_mod'
    ));
    // card 3 heading control
    $wp_customize->add_control('card3_heading', array(
      'label'     => __('Heading', 'posttheme'),
      'section'   => 'card3',
      'priority'  => 2
    ));
    // card 3 text setting
    $wp_customize->add_setting('card3_text', array(
      'default'   => _x('Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'posttheme'),
      'type'      => 'theme_mod'
    ));
    // card 3 text control
    $wp_customize->add_control('card3_text', array(
      'label'     => __('Text', 'posttheme'),
      'section'   => 'card3',
      'priority'  => 3
    ));
    // card 3 button url setting
    $wp_customize->add_setting('card3_btn_url', array(
      'default'   => _x('https://vfwpost1062.org/contact', 'posttheme'),
      'type'      => 'theme_mod'
    ));
    // card 3 button url control
    $wp_customize->add_control('card3_btn_url', array(
      'label'     => __('Button URL', 'posttheme'),
      'section'   => 'card3',
      'priority'  => 4
    ));
    // card 3 button text setting
    $wp_customize->add_setting('card3_btn_text', array(
      'default'   => _x('CTA 3', 'posttheme'),
      'type'      => 'theme_mod'
    ));
    // card 3 button text control
    $wp_customize->add_control('card3_btn_text', array(
      'label'     => __('Button Text', 'posttheme'),
      'type'      => 'textarea',
      'section'   => 'card3',
      'priority'  => 5
    ));


    // Section featurette 1
    $wp_customize->add_section('feat1', array(
      'title'     => __('Featurette 1', 'posttheme'),
      'description' => sprintf(__('Options for Featurette 1', 'posttheme')),
      'priority'  => 131
    ));
    // feat1 image setting
    $wp_customize->add_setting('feat1_image', array(
      'default'   => get_bloginfo('template_directory').'/media/tablesetting.jpeg',
      'type'      => 'theme_mod'
    ));
    // feat1 image control
    $wp_customize->add_control(new WP_Customize_Image_control($wp_customize, 'feat1_image', array(
      'label'     => __('Featurette 1 Image', 'posttheme'),
      'section'   => 'feat1',
      'settings'  => 'feat1_image',
      'priority'  => 1
    )));
    // feat1 heading setting
    $wp_customize->add_setting('feat1_heading', array(
      'default'   => _x('First Featurette Heading', 'posttheme'),
      'type'      => 'theme_mod'
    ));
    // feat1 heading control
    $wp_customize->add_control('feat1_heading', array(
      'label'     => __('Heading', 'posttheme'),
      'section'   => 'feat1',
      'priority'  => 2
    ));
    // feat1 subheading setting
    $wp_customize->add_setting('feat1_subheading', array(
      'default'   => _x('Mind Blowing', 'posttheme'),
      'type'      => 'theme_mod'
    ));
    // feat1 subheading control
    $wp_customize->add_control('feat1_subheading', array(
      'label'     => __('Subheading', 'posttheme'),
      'section'   => 'feat1',
      'priority'  => 3
    ));
    // feat1 text setting
    $wp_customize->add_setting('feat1_text', array(
      'default'   => _x('Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores provident laborum fugit molestiae quas labore repellendus ratione eligendi nam. Debitis.', 'posttheme'),
      'type'      => 'theme_mod'
    ));
    // feat1 text control
    $wp_customize->add_control('feat1_text', array(
      'label'     => __('Text', 'posttheme'),
      'type'      => 'textarea',
      'section'   => 'feat1',
      'priority'  => 4
    ));

    // Section featurette 2
    $wp_customize->add_section('feat2', array(
      'title'     => __('Featurette 2', 'posttheme'),
      'description' => sprintf(__('Options for Featurette 2', 'posttheme')),
      'priority'  => 131
    ));
    // feat2 image setting
    $wp_customize->add_setting('feat2_image', array(
      'default'   => get_bloginfo('template_directory').'/media/tablesetting.jpeg',
      'type'      => 'theme_mod'
    ));
    // feat2 image control
    $wp_customize->add_control(new WP_Customize_Image_control($wp_customize, 'feat2_image', array(
      'label'     => __('Featurette 2 Image', 'posttheme'),
      'section'   => 'feat2',
      'settings'  => 'feat2_image',
      'priority'  => 1
    )));
    // feat2 heading setting
    $wp_customize->add_setting('feat2_heading', array(
      'default'   => _x('Second Featurette Heading', 'posttheme'),
      'type'      => 'theme_mod'
    ));
    // feat2 heading control
    $wp_customize->add_control('feat2_heading', array(
      'label'     => __('Heading', 'posttheme'),
      'section'   => 'feat2',
      'priority'  => 2
    ));
    // feat2 subheading setting
    $wp_customize->add_setting('feat2_subheading', array(
      'default'   => _x('More mind Blowing', 'posttheme'),
      'type'      => 'theme_mod'
    ));
    // feat2 subheading control
    $wp_customize->add_control('feat2_subheading', array(
      'label'     => __('Subheading', 'posttheme'),
      'section'   => 'feat2',
      'priority'  => 3
    ));
    // feat2 text setting
    $wp_customize->add_setting('feat2_text', array(
      'default'   => _x('Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores provident laborum fugit molestiae quas labore repellendus ratione eligendi nam. Debitis.', 'posttheme'),
      'type'      => 'theme_mod'
    ));
    // feat2 text control
    $wp_customize->add_control('feat2_text', array(
      'label'     => __('Text', 'posttheme'),
      'type'      => 'textarea',
      'section'   => 'feat2',
      'priority'  => 4
    ));

    // Section featurette 3
    $wp_customize->add_section('feat3', array(
      'title'     => __('Featurette 3', 'posttheme'),
      'description' => sprintf(__('Options for Featurette 3', 'posttheme')),
      'priority'  => 131
    ));
    // feat3 image setting
    $wp_customize->add_setting('feat3_image', array(
      'default'   => get_bloginfo('template_directory').'/media/tablesetting.jpeg',
      'type'      => 'theme_mod'
    ));
    // feat3 image control
    $wp_customize->add_control(new WP_Customize_Image_control($wp_customize, 'feat3_image', array(
      'label'     => __('Featurette 3 Image', 'posttheme'),
      'section'   => 'feat3',
      'settings'  => 'feat3_image',
      'priority'  => 1
    )));
    // feat3 heading setting
    $wp_customize->add_setting('feat3_heading', array(
      'default'   => _x('Third Featurette Heading', 'posttheme'),
      'type'      => 'theme_mod'
    ));
    // feat3 heading control
    $wp_customize->add_control('feat3_heading', array(
      'label'     => __('Heading', 'posttheme'),
      'section'   => 'feat3',
      'priority'  => 2
    ));
    // feat3 subheading setting
    $wp_customize->add_setting('feat3_subheading', array(
      'default'   => _x('Incredibly mind Blowing', 'posttheme'),
      'type'      => 'theme_mod'
    ));
    // feat3 subheading control
    $wp_customize->add_control('feat3_subheading', array(
      'label'     => __('Subheading', 'posttheme'),
      'section'   => 'feat3',
      'priority'  => 3
    ));
    // feat3 text setting
    $wp_customize->add_setting('feat3_text', array(
      'default'   => _x('Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores provident laborum fugit molestiae quas labore repellendus ratione eligendi nam. Debitis.', 'posttheme'),
      'type'      => 'theme_mod'
    ));
    // feat3 text control
    $wp_customize->add_control('feat3_text', array(
      'label'     => __('Text', 'posttheme'),
      'type'      => 'textarea',
      'section'   => 'feat3',
      'priority'  => 4
    ));

    // Section officer cards
    $wp_customize->add_section('officer_cards', array(
      'title'     => __('Officer Cards', 'posttheme'),
      'description' => sprintf(__('Options for Officer Cards', 'posttheme')),
      'priority'  => 131
    ));
    // setting card cdr
    $wp_customize->add_setting('card_cdr', array(
      'default'   => __('Zeus Almighty', 'posttheme'),
      'type'      => 'theme_mod' 
    ));
    //  control card cdr
    $wp_customize->add_control('card_cdr', array(
      'label'     => __('Commander', 'posttheme'),
      'section'   => 'officer_cards',
      'priority'  => 1
    ));
    // setting card srv
    $wp_customize->add_setting('card_srv', array(
      'default'   => __('Poseidon Earth-Shaker', 'posttheme'),
      'type'      => 'theme_mod' 
    ));
    //  control card srv
    $wp_customize->add_control('card_srv', array(
      'label'     => __('Sr. Vice', 'posttheme'),
      'section'   => 'officer_cards',
      'priority'  => 2
    ));
    // setting card jrv
    $wp_customize->add_setting('card_jrv', array(
      'default'   => __('Hades Plouton', 'posttheme'),
      'type'      => 'theme_mod' 
    ));
    //  control card jrv
    $wp_customize->add_control('card_jrv', array(
      'label'     => __('Jr. Vice', 'posttheme'),
      'section'   => 'officer_cards',
      'priority'  => 3
    ));
    // setting card qm
    $wp_customize->add_setting('card_qm', array(
      'default'   => __('Omar Bradley', 'posttheme'),
      'type'      => 'theme_mod' 
    ));
    //  control card qm
    $wp_customize->add_control('card_qm', array(
      'label'     => __('Quartermaster', 'posttheme'),
      'section'   => 'officer_cards',
      'priority'  => 4
    ));
    // setting card ch
    $wp_customize->add_setting('card_ch', array(
      'default'   => __('John Paul II', 'posttheme'),
      'type'      => 'theme_mod' 
    ));
    //  control card ch
    $wp_customize->add_control('card_ch', array(
      'label'     => __('Chaplain', 'posttheme'),
      'section'   => 'officer_cards',
      'priority'  => 5
    ));
    // setting card ja
    $wp_customize->add_setting('card_ja', array(
      'default'   => __('John Jay', 'posttheme'),
      'type'      => 'theme_mod' 
    ));
    //  control card ja
    $wp_customize->add_control('card_ja', array(
      'label'     => __('Judge Advocate/Adjutant', 'posttheme'),
      'section'   => 'officer_cards',
      'priority'  => 6
    ));
    // setting card sg
    $wp_customize->add_setting('card_sg', array(
      'default'   => __('Christiaan Barnard', 'posttheme'),
      'type'      => 'theme_mod' 
    ));
    //  control card sg
    $wp_customize->add_control('card_sg', array(
      'label'     => __('Surgion', 'posttheme'),
      'section'   => 'officer_cards',
      'priority'  => 7
    ));
    // setting card t1
    $wp_customize->add_setting('card_t1', array(
      'default'   => __('John Rockefeller', 'posttheme'),
      'type'      => 'theme_mod' 
    ));
    //  control card t1
    $wp_customize->add_control('card_t1', array(
      'label'     => __('1 Year Trustee', 'posttheme'),
      'section'   => 'officer_cards',
      'priority'  => 8
    ));
    // setting card t2
    $wp_customize->add_setting('card_t2', array(
      'default'   => __('Andrew Carnegie', 'posttheme'),
      'type'      => 'theme_mod' 
    ));
    //  control card t2
    $wp_customize->add_control('card_t2', array(
      'label'     => __('2 Year Trustee', 'posttheme'),
      'section'   => 'officer_cards',
      'priority'  => 9
    ));
    // setting card t3
    $wp_customize->add_setting('card_t3', array(
      'default'   => __('Cornelius Vanderbilt', 'posttheme'),
      'type'      => 'theme_mod' 
    ));
    //  control card t3
    $wp_customize->add_control('card_t3', array(
      'label'     => __('3 Year Trustee', 'posttheme'),
      'section'   => 'officer_cards',
      'priority'  => 10
    ));


  } 
  
  add_action('customize_register', 'posttheme_custoize_register');

?>
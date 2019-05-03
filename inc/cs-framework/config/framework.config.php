<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Theme Option',
  'menu_type'       => 'Theme', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'neuron-framework',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'neuron theme <small>by RRF</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------

// Logo carowsle uses
$options[]      = array(
  'name'        => 'global',
  'title'       => 'Logo Option',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(

    // begin: a field
    array(
      'id'      => 'logos',
        'type'    => 'gallery',
        'title'   => 'company Logo',
        'desc'   => 'upload company logo here.',

    ),
  ), // end: fields
);




$options[]      = array(
  'name'        => 'homepage',
  'title'       => 'Home Page',
  'icon'        => 'fa fa-home',

  // begin: fields
  'fields'      => array(

   //swichter Add
   array(
        'id'      => 'enable_homepage_promo',
        'type'    => 'switcher',
        'title'   => 'Enable Promo area',
        'default'   => true,
        'desc'   => 'If you want to select promo area,  yes',

      ),

    // begin: a field
    array(
      'id'      => 'promo_title',
      'type'    => 'text',
      'title'   => 'Promo Title',
      'default'   => 'Promo Title',
      'desc'   => 'Type Promo area Title',
      'dependency'   => array( 'enable_homepage_promo', '==', 'true' ),
    ),

   array(
      'id'      => 'promo_content', 
      'type'    => 'textarea',
      'title'   => 'Promo Content area',
      'default'   => 'Promo Content area',
      'desc'   => 'Type Promo area content',
      'dependency'   => array( 'enable_homepage_promo', '==', 'true' ),
    ),



   //swichter Add  
   array(
        'id'      => 'enable_promo_content',
        'type'    => 'switcher',
        'title'   => 'Enable Promo Content area',
        'default'   => true,
        'desc'   => 'If you want to select promo area,  yes',

      ),


 array(
      'id'      => 'promo_content_title',
      'type'    => 'text',
      'title'   => 'Promo Content Title',
      'default'   => 'Promo Content Title',
      'dependency'   => array( 'enable_promo_content', '==', 'true' ),

    ),

   array(
      'id'      => 'promo_text', 
      'type'    => 'textarea',
      'title'   => 'Promo text area',
      'dependency'   => array( 'enable_promo_content', '==', 'true' ),
    ),

   array(
        'id'      => 'promo_text_img', 
        'type'    => 'image',
        'title'   => 'Promo text area Image',
        'dependency'   => array( 'enable_promo_content', '==', 'true' ),
      ),




  ), // end: fields
);

//Service section
$options[]      = array(
  'name'        => 'service',
  'title'       => 'Services Page',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(

    // begin: a field
    array(
      'id'      => 'service_title',
      'type'    => 'text',
      'title'   => 'Services Title',
      'desc'   => 'Type Services area Title',

    ),
  ), // end: fields
);




//About Us Image And text section
$options[]      = array(
  'name'        => 'about_us',
  'title'       => 'About Us Page',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(


   //ABout US nable section


      // begin: a field
      array(
        'id'      => 'about_title',
        'type'    => 'text',
        'title'   => 'About Us Title',
        'desc'   => 'Type About Us area Title',
        'default' => 'It is the only tool for you to work with colors.',
      
        ),

    array(
        'id'      => 'about_content',
        'type'    => 'textarea',
        'title'   => 'About Us Content',
        'desc'   => 'Type About Us area Content',
       'default' => 'Pixie is a utility made especially for webmasters and designers. It is a color picker with few extra goodies.',
    

      ),

     array(
          'id'      => 'about_text_img', 
          'type'    => 'image',
          'title'   => 'About text area Image',
        
        ),



  ), // end: fields
);



// Faq section  option

$options[]      = array(
  'name'        => 'about',
  'title'       => 'About Faq Page',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(

    // begin: a field
     array(
      'id'              => 'faqs',
      'type'            => 'group',
      'title'           => 'Faq Field',
      'button_title'    => 'Add New',
      'accordion_title' => 'Add New Faq',
      'fields'          => array(
        array(
          'id'    => 'title',
          'type'  => 'text',
          'title' => 'Faq Title',
        ),
        array(
          'id'    => 'content',
          'type'  => 'textarea',
          'title' => 'Faq Content',
        ),

      ),
    ),
  ), // end: fields
);


//
CSFramework::instance( $settings, $options );

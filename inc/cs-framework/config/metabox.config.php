<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();

// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'neuron_work_meta',
  'title'     => 'work Options',
  'post_type' => 'work',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'work_meta_section_1',
      'fields' => array(

        array(
          'id'    => 'sub_title',
          'type'  => 'text',
          'title' => 'Sub Title',
          'desc' => 'Type work sub title',
        ),

        array(
          'id'    => 'big_preview',
          'type'  => 'image',
          'title' => 'Big Preview Image',
          'desc' => 'Upload your Image',
        ),

       array(
          'id'    => 'link_text',
          'type'  => 'text',
          'title' => 'Link Text',
          'desc' => 'Type Your Link Text',
          'default' => 'visit website',
        ),

      array(
          'id'    => 'link_url',
          'type'  => 'text',
          'title' => 'Link',

        ),


      array(
        'id'              => 'informations',
        'type'            => 'group',
        'title'           => 'work informations',
        'button_title'    => 'Add New',
        'accordion_title' => 'Add New Information',
        'fields'          => array(
          array(
            'id'    => 'title',
            'type'  => 'text',
            'title' => 'Information Title',
          ),
          array(
            'id'    => 'value',
            'type'  => 'text',
            'title' => 'Information Value',
          ),
 
        ),
      ),

  

      ),
    ),

  ),
);

CSFramework_Metabox::instance( $options );

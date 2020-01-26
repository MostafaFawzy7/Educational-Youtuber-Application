<?php 

  require_once  __DIR__ . '/init.php';

  //////////////////////////////////////////

  // cmb2_get_term_options

  //////////////////////////////////////////

  function cmb2_get_term_options( $field ) {

    $args = $field->args( 'get_terms_args' );

    $args = is_array( $args ) ? $args : array();

    $args = wp_parse_args( $args, array( 'taxonomy' => 'category' ) );

    $taxonomy = $args['taxonomy'];

    $terms = (array) cmb2_utils()->wp_at_least( '4.5.0' ) ? get_terms( $args ) : get_terms( $taxonomy, $args );

    // Initate an empty array

    $term_options = array();

    if ( ! empty( $terms ) ) {

      foreach ( $terms as $term ) {

        $term_options[ $term->term_id ] = $term->name;

      }

    }

    return $term_options;

  }

  //////////////////////////////////////////

  // metabox of product slider

  //////////////////////////////////////////

  add_action( 'cmb2_admin_init', 'cmb2_sample_metaboxes' );

   function cmb2_sample_metaboxes() {

        $prefix = '';

        $cmb = new_cmb2_box( array(

            'id'            => 'ExtractOptions',

            'title'         => __( 'اعدادات عامة', 'YourColor' ),

            'object_types'  => array( 'post','page' ), // Post type

            'context'       => 'normal',

            'priority'      => 'high',

            'show_names'    => true, // Show field names on the left

        ) );

       $cmb->add_field( array(

          'name'    => 'مثبت',
          'id'      => 'fixed',
          'type'    => 'checkbox',

        ) );
       $cmb->add_field( array(

          'name'    => 'فيديو',
          'id'      => 'video',
          'type'    => 'textarea_code',

        ) );
      $group_field_id = $cmb->add_field( array(
        'id'          => 'downloads',
        'type'        => 'group',
        'options'     => array(
          'group_title'       => __( 'رابط جديد{#}', 'cmb2' ), 
          'add_button'        => __( 'أضف رابط جديد', 'cmb2' ),
          'remove_button'     => __( 'إحذف الرابط ', 'cmb2' ),
          'sortable'          => true,
        ),
      ) );

        $cmb->add_group_field( $group_field_id, array(
          'name' => 'الاسم',
          'id'   => 'name',
          'type' => 'text',
        ) );
        $cmb->add_group_field( $group_field_id, array(
          'name' => 'ملحوظة',
          'id'   => 'note',
          'type' => 'text',
        ) );
        $cmb->add_group_field( $group_field_id, array(
          'name' => 'حجم',
          'id'   => 'size',
          'type' => 'text',
        ) );
        $cmb->add_group_field( $group_field_id, array(
          'name' => 'رابط التحميل',
          'id'   => 'link',
          'type' => 'text',
        ) );


 }


  add_action( 'cmb2_admin_init', 'terms_function' );

   function terms_function() {

        $prefix = '';

        $cmb = new_cmb2_box( array(

            'id'            => 'termOptID',

            'title'         => __( 'اعدادات عامة', 'YourColor' ),

            'object_types'  => array( 'term' ), // Post type
            'context'       => 'normal',
            'taxonomies'    => array('category'),
            'priority'      => 'high',

            'show_names'    => true, // Show field names on the left

        ) );

       $cmb->add_field( array(

          'name'    => 'صورة',
          'id'      => 'imageCat',
          'type'    => 'file',

        ) );
    



 }

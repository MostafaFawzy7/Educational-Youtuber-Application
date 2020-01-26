<?
if ( ! function_exists( 'YC_Menus' ) ) :
function YC_Menus() {
	register_nav_menus( array(

		'mainMenu'   => __( 'القائمة الاساسية', 'YourColor' ),
		'mobileMenu'   => __( 'قائمة الموبايل', 'YourColor' ),

	) );
}
endif;
add_action( 'after_setup_theme', 'YC_Menus' );
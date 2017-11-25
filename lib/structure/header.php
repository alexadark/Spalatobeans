<?php
add_action( 'wp', 'wst_set_up_header_structure' );
/**
 * Set up header structure
 *
 * @since 1.0.0
 *
 * @return void
 */
function wst_set_up_header_structure() {

	beans_remove_action( 'beans_site_title_tag' );

	//sticky header
	beans_add_attribute( 'beans_header', 'data-uk-sticky', "{top:-300, animation:'uk-animation-slide-top'}" );

//	beans_wrap_markup( 'beans_header', 'beans_header_wrapper', 'div', array(
//		'class' => 'tm-header-wrapper uk-cover-background',
//	) );

	add_action( 'beans_header_after_markup', 'wst_display_hero_area' );
	function wst_display_hero_area() {
		$context   = Timber::get_context();
		$templates = array( 'hero.twig' );
		Timber::render( $templates, $context );


	}

	// Breadcrumb
	beans_remove_action( 'beans_breadcrumb' );

}
<?php
beans_add_smart_action('wp','wst_set_up_header_structure');
function wst_set_up_header_structure() {

	beans_remove_action( 'beans_site_title_tag' );

	//sticky header
	beans_add_attribute( 'beans_header', 'data-uk-sticky', "{top:-300, animation:'uk-animation-slide-top'}" );

	beans_wrap_markup( 'beans_header', 'beans_header_wrapper', 'div', array(
		'class' => 'tm-header-wrapper uk-cover-background',
	) );

	// Breadcrumb
	beans_remove_action( 'beans_breadcrumb' );

}
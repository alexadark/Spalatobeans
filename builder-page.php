<?php
//Template Name: Builder Page

 //To be used with any kind of builder, beaver builder, elementor or others

// Remove layout control.
add_filter( 'beans_layout', '__return_false' );

// Remove all main div and their hooks.
beans_remove_markup( 'beans_fixed_wrap[_main]', true );
beans_remove_markup( 'beans_main_grid', true );
beans_remove_markup( 'beans_primary', true );

// Adjust attributes.
beans_remove_attribute( 'beans_main', 'class', 'uk-block' );

// Modify the loop with only the_content which fires Beaver.
beans_modify_action_callback( 'beans_loop_template', 'wst_basic_loop' );


function wst_basic_loop() {

	if ( have_posts() ) :

		while ( have_posts() ) : the_post();

			the_content();

		endwhile;

	endif;

}

beans_load_document();


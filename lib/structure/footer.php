<?php
add_action( 'wp', 'wst_set_up_footer_structure' );
/**
 * Set up footer structure
 *
 * @since 1.0.0
 *
 * @return void
 */
function wst_set_up_footer_structure() {
	beans_wrap_markup( 'beans_footer', 'beans_footer_wrapper', 'div', array( 'class' => 'tm-footer-wrapper' ) );

	//FAT FOOTER
	beans_add_smart_action( 'beans_footer_wrapper_prepend_markup', 'wst_display_fat_footer' );
	function wst_display_fat_footer() {
		?>
		<div class="tm-fat-footer uk-block">
			<div class="uk-container uk-container-center">
				<?php echo beans_widget_area( 'fat-footer' ); ?>
			</div>
		</div>

	<?php }
}

// Overwrite the Footer content

beans_modify_action_callback( 'beans_footer_content', 'beans_child_footer_content' );

function beans_child_footer_content() {
	$context                = Timber::get_context(); //what is default role of this template ?
	$context['year']        = date( 'Y' );
	$templates              = array( 'footer.twig' );
	Timber::render( $templates, $context ); //make ingredients ($context) available to this template
}
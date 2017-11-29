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
	add_action( 'beans_header_before_markup', 'wst_display_top_bar' );
	function wst_display_top_bar(){
	 if(!is_active_sidebar('top-bar')){
	 	return;
	 } ?>
		<div class="top-bar">
			<div class="uk-container uk-container-center">
				<?php echo beans_widget_area( 'top-bar' ); ?>
			</div>
		</div>
<?php }

	beans_remove_action( 'beans_site_title_tag' );

	//sticky header
	beans_add_attribute( 'beans_header', 'data-uk-sticky', "{top:-300, animation:'uk-animation-slide-top'}" );

	add_action( 'beans_header_after_markup', 'wst_display_hero_area' );
	function wst_display_hero_area() {
		if(is_home()||is_archive()){
			return;
		}
		$context   = Timber::get_context();
		$templates = array( 'hero.twig' );
		Timber::render( $templates, $context );


	}

	// Breadcrumb
	beans_remove_action( 'beans_breadcrumb' );

	//top bar
    beans_remove_attribute('beans_widget_panel_top-bar','class','uk-panel-box');
    beans_add_attribute('beans_widget_panel_top-bar','class','uk-hidden-small');

}
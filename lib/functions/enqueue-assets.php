<?php



//remove_theme_support( 'beans-default-styling' );

$css_dev_styles = carbon_get_theme_option('crb_css_dev_mode');
//Dev css
if($css_dev_styles){
add_action( 'wp_enqueue_scripts', 'wst_enqueue_dev_styles' );
} else {
//Prod css, autocompile
	add_action( 'beans_uikit_enqueue_scripts', 'wst_enqueue_styles', 5 );
}
/**
 * enqueue styles when we are in css dev mode
 *
 * @since 1.0.0
 *
 * @return void
 */

function wst_enqueue_dev_styles() {
	//dev css mode: available to css injection and source maps trough codekit, gulp or grunt

		wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/assets/less/css/style.css' );

}

/**
 * Enqueue styles in prod
 *
 * @since 1.0.0
 *
 * @return void
 */

function wst_enqueue_styles(){
//	Prod css mode: autocompile

//	 Enqueue uikit overwrite theme folder
		beans_uikit_enqueue_theme( 'beans_child', CHILD_URL . '/assets/less/initial-theme' );
//Add the theme style as a uikit fragment to have access to all the variables
		beans_compiler_add_fragment( 'uikit', array(
			CHILD_URL . '/assets/less/partials/fonts.less',
			CHILD_URL . '/assets/less/mymixins.less',
			CHILD_URL . '/assets/less/partials/default.less',
			CHILD_URL . '/assets/less/partials/typo.less',
			CHILD_URL . '/assets/less/partials/header.less',
			CHILD_URL . '/assets/less/partials/footer.less',
			CHILD_URL . '/assets/less/partials/nav.less',
			CHILD_URL . '/assets/less/partials/sidebar.less',
			CHILD_URL . '/assets/less/partials/widgets.less',
			CHILD_URL . '/assets/less/partials/content.less',
			CHILD_URL . '/assets/less/partials/pages.less',

		), 'less' );


}
beans_add_smart_action( 'beans_uikit_enqueue_scripts', 'wst_enqueue_uikit_assets', 5 );

function wst_enqueue_uikit_assets() {

	beans_compiler_add_fragment( 'uikit', array(
		CHILD_URL . '/assets/js/animatedtext.js',
		CHILD_URL . '/assets/js/theme.js'
	), 'js' );


	beans_uikit_enqueue_components( array(
		'contrast',
		'cover',
		'animation',
		'modal',
		'overlay',
		'column',
		'switcher',
		'scrollspy'
	) );
	beans_uikit_enqueue_components( array(
		'sticky',
		'slideshow',
		'slider',
		'lightbox',
		'grid',
		'parallax',
		'dotnav',
		'slidenav'
	),
		'add-ons' );

}

//google fonts
add_action( 'wp_enqueue_scripts', 'wst_add_google_fonts' );
/**
 * Enqueue google fonts
 *
 * @since 1.0.0
 *
 * @return void
 */
function wst_add_google_fonts() {

	wp_enqueue_style( 'wst-google-fonts', 'https://fonts.googleapis.com/css?family=Oswald:300,400,500|Raleway:300,300i,400,400i,600', false );
}


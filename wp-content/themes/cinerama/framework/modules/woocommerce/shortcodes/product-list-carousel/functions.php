<?php

if ( ! function_exists( 'cinerama_edge_add_product_list_carousel_shortcode' ) ) {
	function cinerama_edge_add_product_list_carousel_shortcode( $shortcodes_class_name ) {
		$shortcodes = array(
			'CineramaCore\CPT\Shortcodes\ProductListCarousel\ProductListCarousel',
		);
		
		$shortcodes_class_name = array_merge( $shortcodes_class_name, $shortcodes );
		
		return $shortcodes_class_name;
	}
	
	if ( cinerama_edge_core_plugin_installed() ) {
		add_filter( 'cinerama_core_filter_add_vc_shortcode', 'cinerama_edge_add_product_list_carousel_shortcode' );
	}
}

if ( ! function_exists( 'cinerama_edge_add_product_list_carousel_into_shortcodes_list' ) ) {
	function cinerama_edge_add_product_list_carousel_into_shortcodes_list( $woocommerce_shortcodes ) {
		$woocommerce_shortcodes[] = 'edgtf_product_list_carousel';
		
		return $woocommerce_shortcodes;
	}
	
	add_filter( 'cinerama_edge_filter_woocommerce_shortcodes_list', 'cinerama_edge_add_product_list_carousel_into_shortcodes_list' );
}
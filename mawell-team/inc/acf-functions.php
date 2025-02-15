<?php

/**
 * @param $field
 *
 * @return mixed
 * Kreiranje funkcije koja vraca svve menije kreirane u appearance i vezuje se moje selekt polje
 */
function maxwell_acf_load_menu_choices( $field ): mixed {
//	maxxwell_log( sprintf( "%s", print_r( $field, true ) ), 'w' );
	// Get all menus
	$menus = get_terms( array(
		'taxonomy' => 'nav_menu',
		'hide_empty' => false,
	) );

	// Reset choices
	$field['choices'] = array();

	// Loop through menus and add them to the choices
	if ( !empty($menus) ) {
		foreach ( $menus as $menu ) {
			$field['choices'][ $menu->term_id ] = $menu->name;
		}
	}

	return $field;
}
add_filter('acf/load_field/name=footer_1_menu_1', 'maxwell_acf_load_menu_choices');
add_filter('acf/load_field/name=footer_1_menu_2', 'maxwell_acf_load_menu_choices');


/** funkcija za dodavanje podataka u blok data */
//add_filter(
//	'acf/pre_save_block',
//	function( $attributes ) {
//
//		error_log( print_r( $attributes, true ) );
//
//		if ( empty( $attributes['data']['clb-custom-anchor'] ) ) {
//			$attributes['data']['clb-custom-anchor'] = 'acf-block-' . uniqid();
//		}
//		error_log( print_r( $attributes, true ) );
//		return $attributes;
//	}
//);
<?php
/**
 * Deprecated functions.
 *
 * @package BuddyPress
 * @deprecated 11.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Catch the arguments for buttons
 *
 * @since 3.0.0
 * @deprecated 11.0.0
 *
 * @param array $buttons The arguments of the button that BuddyPress is about to create.
 *
 * @return array An empty array to stop the button creation process.
 */
function bp_nouveau_members_catch_button_args( $button = array() ) {
	_deprecated_function( __FUNCTION__, '11.0.0' );

	/*
	 * Globalize the arguments so that we can use it
	 * in bp_nouveau_get_member_header_buttons().
	 */
	bp_nouveau()->members->button_args = $button;

	// return an empty array to stop the button creation process
	return array();
}

/**
 * Catch the arguments for buttons
 *
 * @since 3.0.0
 * @deprecated 11.0.0
 *
 * @param array $button The arguments of the button that BuddyPress is about to create.
 *
 * @return array An empty array to stop the button creation process.
 */
function bp_nouveau_groups_catch_button_args( $button = array() ) {
	_deprecated_function( __FUNCTION__, '11.0.0' );

	/**
	 * Globalize the arguments so that we can use it
	 * in bp_nouveau_get_groups_buttons().
	 */
	bp_nouveau()->groups->button_args = $button;

	// return an empty array to stop the button creation process
	return array();
}

/**
 * Catch the arguments for buttons
 *
 * @since 3.0.0
 * @deprecated 11.0.0
 *
 * @param array $buttons The arguments of the button that BuddyPress is about to create.
 *
 * @return array An empty array to stop the button creation process.
 */
function bp_nouveau_blogs_catch_button_args( $button = array() ) {
	_deprecated_function( __FUNCTION__, '11.0.0' );

	// Globalize the arguments so that we can use it  in bp_nouveau_get_blogs_buttons().
	bp_nouveau()->blogs->button_args = $button;

	// return an empty array to stop the button creation process
	return array();
}

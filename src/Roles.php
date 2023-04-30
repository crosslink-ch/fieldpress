<?php

namespace FieldPress;

class Roles {
	function init() {
		add_action( 'init', array( $this, 'add_dau_role' ) );
		add_filter( 'use_block_editor_for_post', array( $this, 'disable_gutenberg' ), 10 );
	}

	function add_dau_role() {
		$admin_role = get_role( 'administrator' );
		add_role( 'dau', 'DAU', $admin_role->capabilities );
	}

	function disable_gutenberg() {
		$user = get_user_by( 'id', get_current_user_id() );
		$post = get_post();
		if ( ! empty( $post ) && $post->post_type === 'acf-field-group' ) {
			return false;
		}

		if ( empty( $user ) || is_wp_error( $user ) ) {
			return false;
		}

		return ! in_array( 'dau', $user->roles, 'true' );
	}
}

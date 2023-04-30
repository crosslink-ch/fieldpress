<?php

namespace FieldPress;

class DynamicData {

	function init() {
		add_filter( 'render_block_data', array( $this, 'render_block_data' ), 15 );
	}

	function render_block_data( array $block ) {
		$post_id = get_the_ID();

		if ( empty( $post_id ) ) {
			return $block;
		}

		// TODO Handle reusable blocks
		if ( $block['blockName'] === 'core/block' ) {
			return $block;
		}

		$callback = function( $matches ) use ( $post_id ) {
			$field = trim( $matches['field'] );
			if ( get_field( $field, $post_id ) ) {
				return get_field( $field, $post_id );
			}
			return $matches[0];
		};

		if ( ! empty( $block['innerHTML'] ) ) {
			$block['innerHTML'] = preg_replace_callback(
				'@{{{\s*?(?<field>[^}]+?)\s*?}}}@',
				$callback,
				$block['innerHTML']
			);
		}

		if ( ! empty( $block['innerContent'] ) && is_array( $block['innerContent'] ) ) {
			foreach ( $block['innerContent'] as $key => $content ) {
				if ( empty( $content ) ) {
					continue;
				}
				$block['innerContent'][ $key ] = preg_replace_callback(
					'@{{{\s*?(?<field>[^}]+?)\s*?}}}@',
					$callback,
					$block['innerContent'][ $key ]
				);
			}
		}

		if ( ! empty( $block['innerBlocks'] ) ) {
			foreach ( $block['innerBlocks'] as $key => $inner_block ) {
				$block['innerBlocks'][ $key ] = $this->render_block_data( $inner_block );
			}
		}

		return $block;
	}
}

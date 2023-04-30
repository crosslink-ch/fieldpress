<?php

namespace FieldPress;

class AcfGroups {

	function init() {
		add_action( 'acf/init', array( $this, 'add_fields' ) );
	}

	function add_fields() {
		acf_add_local_field_group(
			array(
				'key'                   => 'group_644ecd088a265',
				'title'                 => 'Block props',
				'fields'                => array(
					array(
						'key'               => 'field_644ecd08341fe',
						'label'             => 'Block',
						'name'              => 'block',
						'aria-label'        => '',
						'type'              => 'repeater',
						'instructions'      => '',
						'required'          => 0,
						'conditional_logic' => 0,
						'wrapper'           => array(
							'width' => '',
							'class' => '',
							'id'    => '',
						),
						'layout'            => 'table',
						'pagination'        => 0,
						'min'               => 0,
						'max'               => 0,
						'collapsed'         => '',
						'button_label'      => 'Add Row',
						'rows_per_page'     => 20,
						'sub_fields'        => array(
							array(
								'key'               => 'field_644ecd4c341ff',
								'label'             => 'Block ID',
								'name'              => 'block_id',
								'aria-label'        => '',
								'type'              => 'text',
								'instructions'      => '',
								'required'          => 1,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'default_value'     => '',
								'maxlength'         => '',
								'placeholder'       => '',
								'prepend'           => '',
								'append'            => '',
								'parent_repeater'   => 'field_644ecd08341fe',
							),
							array(
								'key'               => 'field_644ecd5d34200',
								'label'             => 'Props',
								'name'              => 'props',
								'aria-label'        => '',
								'type'              => 'repeater',
								'instructions'      => '',
								'required'          => 0,
								'conditional_logic' => 0,
								'wrapper'           => array(
									'width' => '',
									'class' => '',
									'id'    => '',
								),
								'layout'            => 'table',
								'pagination'        => 0,
								'min'               => 0,
								'max'               => 0,
								'collapsed'         => '',
								'button_label'      => 'Add Row',
								'rows_per_page'     => 20,
								'sub_fields'        => array(
									array(
										'key'             => 'field_644ecd7534201',
										'label'           => 'Prop type',
										'name'            => 'prop_type',
										'aria-label'      => '',
										'type'            => 'select',
										'instructions'    => '',
										'required'        => 0,
										'conditional_logic' => 0,
										'wrapper'         => array(
											'width' => '',
											'class' => '',
											'id'    => '',
										),
										'choices'         => array(
											'image' => 'Image',
											'color' => 'Color',
										),
										'default_value'   => false,
										'return_format'   => 'value',
										'multiple'        => 0,
										'allow_null'      => 0,
										'ui'              => 1,
										'ajax'            => 0,
										'placeholder'     => '',
										'parent_repeater' => 'field_644ecd5d34200',
									),
									array(
										'key'             => 'field_644ecdbf34202',
										'label'           => 'Prop name',
										'name'            => 'prop_name',
										'aria-label'      => '',
										'type'            => 'text',
										'instructions'    => '',
										'required'        => 0,
										'conditional_logic' => 0,
										'wrapper'         => array(
											'width' => '',
											'class' => '',
											'id'    => '',
										),
										'default_value'   => '',
										'maxlength'       => '',
										'placeholder'     => '',
										'prepend'         => '',
										'append'          => '',
										'parent_repeater' => 'field_644ecd5d34200',
									),
									array(
										'key'             => 'field_644ecdcf34203',
										'label'           => 'Prop value',
										'name'            => 'prop_value_image',
										'aria-label'      => '',
										'type'            => 'image',
										'instructions'    => '',
										'required'        => 0,
										'conditional_logic' => array(
											array(
												array(
													'field'    => 'field_644ecd7534201',
													'operator' => '==',
													'value'    => 'image',
												),
											),
										),
										'wrapper'         => array(
											'width' => '',
											'class' => '',
											'id'    => '',
										),
										'return_format'   => 'array',
										'library'         => 'all',
										'min_width'       => '',
										'min_height'      => '',
										'min_size'        => '',
										'max_width'       => '',
										'max_height'      => '',
										'max_size'        => '',
										'mime_types'      => '',
										'preview_size'    => 'medium',
										'parent_repeater' => 'field_644ecd5d34200',
									),
									array(
										'key'             => 'field_644ece0734204',
										'label'           => 'Prop value',
										'name'            => 'prop_value_color',
										'aria-label'      => '',
										'type'            => 'color_picker',
										'instructions'    => '',
										'required'        => 0,
										'conditional_logic' => array(
											array(
												array(
													'field'    => 'field_644ecd7534201',
													'operator' => '==',
													'value'    => 'color',
												),
											),
										),
										'wrapper'         => array(
											'width' => '',
											'class' => '',
											'id'    => '',
										),
										'default_value'   => '',
										'enable_opacity'  => 0,
										'return_format'   => 'string',
										'parent_repeater' => 'field_644ecd5d34200',
									),
								),
								'parent_repeater'   => 'field_644ecd08341fe',
							),
						),
					),
				),
				'location'              => array(
					array(
						array(
							'param'    => 'post_type',
							'operator' => '==',
							'value'    => 'post',
						),
						array(
							'param'    => 'post_type',
							'operator' => '==',
							'value'    => 'page',
						),
					),
				),
				'menu_order'            => 0,
				'position'              => 'normal',
				'style'                 => 'default',
				'label_placement'       => 'top',
				'instruction_placement' => 'label',
				'hide_on_screen'        => '',
				'active'                => true,
				'description'           => '',
				'show_in_rest'          => 0,
			)
		);

	}

}

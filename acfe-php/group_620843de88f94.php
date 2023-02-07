<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_620843de88f94',
	'title' => 'List a Puppy',
	'fields' => array(
		array(
			'show_column_filter' => false,
			'allow_bulkedit' => 1,
			'allow_quickedit' => 1,
			'show_column' => 1,
			'show_column_weight' => 1000,
			'show_column_sortable' => 1,
			'key' => 'field_62520768016dd',
			'label' => 'Coloring',
			'name' => 'coloring',
			'aria-label' => '',
			'type' => 'radio',
			'instructions' => 'Choose the puppy’s coloring.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'Black' => 'Black',
				'Black & White' => 'Black & White',
				'Merle' => 'Merle',
				'Tricolor' => 'Tricolor',
				'Sable' => 'Sable',
				'Chocolate' => 'Chocolate',
				'Tan' => 'Tan',
			),
			'allow_null' => 1,
			'other_choice' => 1,
			'save_other_choice' => 1,
			'default_value' => '',
			'layout' => 'horizontal',
			'return_format' => 'label',
		),
		array(
			'show_column_filter' => false,
			'allow_bulkedit' => 1,
			'allow_quickedit' => 1,
			'show_column' => 1,
			'show_column_weight' => 1000,
			'show_column_sortable' => 1,
			'key' => 'field_625207c8016de',
			'label' => 'Gender',
			'name' => 'gender',
			'aria-label' => '',
			'type' => 'button_group',
			'instructions' => 'Choose male or female.',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'Male' => 'Male',
				'Female' => 'Female',
			),
			'allow_null' => 0,
			'default_value' => '',
			'layout' => 'horizontal',
			'return_format' => 'label',
		),
		array(
			'show_column_filter' => false,
			'allow_bulkedit' => 1,
			'allow_quickedit' => 1,
			'show_column' => 1,
			'show_column_weight' => 1000,
			'show_column_sortable' => false,
			'key' => 'field_62520865016df',
			'label' => 'Photo',
			'name' => 'photo',
			'aria-label' => '',
			'type' => 'image',
			'instructions' => 'Upload a photo of the puppy.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'id',
			'preview_size' => 'custom-image-big-square-puppy',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
			'uploader' => '',
			'acfe_thumbnail' => 0,
		),
		array(
			'show_column_filter' => false,
			'allow_bulkedit' => 1,
			'allow_quickedit' => 1,
			'show_column' => 1,
			'show_column_weight' => 1000,
			'show_column_sortable' => false,
			'key' => 'field_62520cc29358d',
			'label' => 'Litter Chooser',
			'name' => 'litter_chooser',
			'aria-label' => '',
			'type' => 'taxonomy',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'taxonomy' => 'litter',
			'field_type' => 'radio',
			'allow_null' => 1,
			'add_term' => 1,
			'save_terms' => 1,
			'load_terms' => 1,
			'return_format' => 'object',
			'acfe_bidirectional' => array(
				'acfe_bidirectional_enabled' => '0',
			),
			'multiple' => 0,
		),
		array(
			'show_column_filter' => false,
			'allow_bulkedit' => 1,
			'allow_quickedit' => 1,
			'show_column' => 1,
			'show_column_weight' => 1000,
			'show_column_sortable' => false,
			'key' => 'field_62afada56dc3f',
			'label' => 'Breed Chooser',
			'name' => 'breed_chooser',
			'aria-label' => '',
			'type' => 'taxonomy',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'taxonomy' => 'breed',
			'field_type' => 'radio',
			'allow_null' => 1,
			'add_term' => 0,
			'save_terms' => 1,
			'load_terms' => 1,
			'return_format' => 'object',
			'acfe_bidirectional' => array(
				'acfe_bidirectional_enabled' => '0',
			),
			'multiple' => 0,
		),
		array(
			'show_column_filter' => false,
			'allow_bulkedit' => 1,
			'allow_quickedit' => 1,
			'show_column' => 1,
			'show_column_weight' => 1000,
			'show_column_sortable' => 1,
			'key' => 'field_62ae34cffb6aa',
			'label' => 'Collar Color',
			'name' => 'collar_color',
			'aria-label' => '',
			'type' => 'color_picker',
			'instructions' => 'Pick the collar color for identification.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'enable_opacity' => 0,
			'return_format' => 'string',
		),
		array(
			'show_column_filter' => false,
			'allow_bulkedit' => false,
			'allow_quickedit' => false,
			'show_column' => 0,
			'show_column_weight' => 1000,
			'show_column_sortable' => false,
			'key' => 'field_63cb5b3133883',
			'label' => 'Puppy Gallery',
			'name' => 'puppy_gallery',
			'aria-label' => '',
			'type' => 'gallery',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'library' => 'all',
			'min' => '',
			'max' => '',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
			'insert' => 'append',
			'preview_size' => 'medium',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'puppies',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'the_content',
		1 => 'discussion',
		2 => 'comments',
		3 => 'slug',
		4 => 'author',
		5 => 'featured_image',
	),
	'active' => true,
	'description' => '',
	'show_in_rest' => 1,
	'acfe_display_title' => '',
	'acfe_autosync' => array(
		0 => 'php',
		1 => 'json',
	),
	'acfe_form' => 0,
	'acfe_meta' => '',
	'acfe_note' => '',
	'modified' => 1674271744,
));

endif;
<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_6251fb73b7e21',
	'title' => 'Litter Details',
	'fields' => array(
		array(
			'key' => 'field_6251fe2c07241',
			'label' => 'Mom',
			'name' => 'mom',
			'type' => 'radio',
			'instructions' => 'Choose the mother of the litter.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'penny' => 'Penny',
				'lucy' => 'Lucy',
				'Ember' => 'Ember',
				'Beauty' => 'Beauty',
				'Delilah' => 'Delilah',
			),
			'allow_null' => 1,
			'other_choice' => 1,
			'save_other_choice' => 1,
			'default_value' => '',
			'layout' => 'horizontal',
			'return_format' => 'label',
			'show_column' => 1,
			'show_column_sortable' => 1,
			'show_column_weight' => 1000,
			'allow_quickedit' => 1,
			'allow_bulkedit' => 1,
		),
		array(
			'key' => 'field_6252003807242',
			'label' => 'Dad',
			'name' => 'dad',
			'type' => 'radio',
			'instructions' => 'Choose the father of the litter.',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'max' => 'Max',
				'lucado' => 'Lucado',
				'Peter' => 'Peter',
				'Leroy' => 'Leroy',
				'Bubby' => 'Bubby',
			),
			'allow_null' => 0,
			'other_choice' => 1,
			'save_other_choice' => 1,
			'default_value' => '',
			'layout' => 'horizontal',
			'return_format' => 'label',
			'show_column' => 1,
			'show_column_sortable' => 1,
			'show_column_weight' => 1000,
			'allow_quickedit' => 1,
			'allow_bulkedit' => 1,
		),
		array(
			'key' => 'field_6252014407244',
			'label' => 'Breed Size',
			'name' => 'breed_size',
			'type' => 'true_false',
			'instructions' => 'Setting this button to "Yes" will mark the above breed as a miniature breed.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'Is this a miniature breed?',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
			'show_column' => 1,
			'show_column_sortable' => 1,
			'show_column_weight' => 1000,
			'allow_quickedit' => 1,
			'allow_bulkedit' => 1,
		),
		array(
			'key' => 'field_62ae290f83743',
			'label' => 'Birth Month',
			'name' => 'birth_month',
			'type' => 'date_picker',
			'instructions' => 'Could be an expected birth date.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'm/d/Y',
			'return_format' => 'F Y',
			'first_day' => 0,
			'show_column' => 1,
			'show_column_sortable' => 1,
			'show_column_weight' => 1000,
			'allow_quickedit' => 1,
			'allow_bulkedit' => 1,
		),
		array(
			'key' => 'field_62ae29ec83744',
			'label' => 'Expected Adult Weight',
			'name' => 'expected_adult_weight',
			'type' => 'text',
			'instructions' => 'Provide just the number for the weight. "lb" will be added to the page.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Example: 25-30',
			'prepend' => '',
			'append' => '.lbs',
			'maxlength' => '',
			'show_column' => 1,
			'show_column_sortable' => 1,
			'show_column_weight' => 1000,
			'allow_quickedit' => 1,
			'allow_bulkedit' => 1,
		),
		array(
			'key' => 'field_62ae2aa183745',
			'label' => 'Generation',
			'name' => 'generation',
			'type' => 'button_group',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'f1' => 'F1',
				'f1b' => 'F1b',
				'f2' => 'F2',
				'multigen' => 'Multigen',
			),
			'allow_null' => 1,
			'default_value' => '',
			'layout' => 'horizontal',
			'return_format' => 'label',
			'show_column' => 1,
			'show_column_sortable' => 1,
			'show_column_weight' => 1000,
			'allow_quickedit' => 1,
			'allow_bulkedit' => 1,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'taxonomy',
				'operator' => '==',
				'value' => 'litter',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'left',
	'instruction_placement' => 'field',
	'hide_on_screen' => '',
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
	'modified' => 1655680823,
));

endif;
<?php
/**
 * Custom functions
 */

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_surgery-types',
		'title' => 'Surgery Types',
		'fields' => array (
			array (
				'key' => 'field_5321f97413d9f',
				'label' => 'Left Surgery Image',
				'name' => 'left_surgery_image',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'full',
				'library' => 'all',
			),
			array (
				'key' => 'field_5321fa5813da0',
				'label' => 'Left Surgery Title',
				'name' => 'left_surgery_title',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'Cardiac Surgery',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5321face13da1',
				'label' => 'Left Surgery Sub Title',
				'name' => 'left_surgery_sub_title',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'Comprehensive Surgery...',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5321fbb113da2',
				'label' => 'Left Surgery Text',
				'name' => 'left_surgery_text',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'Comprehensive surgical care is provided by...',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5321fd5bca516',
				'label' => 'Right Surgery Image',
				'name' => 'right_surgery_image',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'full',
				'library' => 'all',
			),
			array (
				'key' => 'field_5321fd75ca517',
				'label' => 'Right Surgery Title',
				'name' => 'right_surgery_title',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'Cardiac Surgery',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5321fd8dca518',
				'label' => 'Right Surgery Sub Title',
				'name' => 'right_surgery_sub_title',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'Comprehensive Surgery...',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5321fda8ca519',
				'label' => 'Right Surgery Text',
				'name' => 'right_surgery_text',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => 'Comprehensive surgical care is provided by...',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page',
					'operator' => '==',
					'value' => '79',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

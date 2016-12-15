<?php

/**
 * Создаем страницу настроек плагина
 */
add_action('admin_menu', 'add_plugin_page');
function add_plugin_page(){
	// add_options_page( 'Настройки Primer', 'Primer', 'manage_options', 'primer_slug', 'primer_options_page_output' );
    add_menu_page( 'Дополнительные настройки сайта', 'Пульт', 'manage_options', 'site-options', 'primer_options_page_output', '', 4 );
}

function primer_options_page_output(){
	?>
	<div class="wrap">
		<h2><?php echo get_admin_page_title() ?></h2>

		<form action="options.php" method="POST">
			<?php
				settings_fields( 'option_group' );     // скрытые защитные поля
				do_settings_sections( 'primer_page' ); // секции с настройками (опциями). У нас она всего одна 'section_id'
				submit_button();
			?>
		</form>
	</div>
	<?php
}
add_filter('widget_text', 'do_shortcode');
/**
 * Регистрируем настройки.
 * Настройки будут храниться в массиве, а не одна настройка = одна опция.
 */
add_action('admin_init', 'plugin_settings');
function plugin_settings(){
	// параметры: $option_group, $option_name, $sanitize_callback
	register_setting( 'option_group', 'option_name', 'sanitize_callback' );

	// параметры: $id, $title, $callback, $page
	add_settings_section( 'section_id', 'Основные настройки', '', 'primer_page' ); 

	// параметры: $id, $title, $callback, $page, $section, $args
	add_settings_field('primer_phone', 'Телефон:', 'primer_phone', 'primer_page', 'section_id' );
	add_settings_field('primer_mail', 'Почта:', 'primer_mail', 'primer_page', 'section_id' );
	add_settings_field('primer_adress', 'Адрес:', 'primer_adress', 'primer_page', 'section_id' );
	add_settings_field('primer_requvisites', 'Реквизиты:', 'primer_requvisites', 'primer_page', 'section_id' );
}

## Заполняем опцию 1
function primer_phone(){
	$val = get_option('option_name');
	$val = $val['phone']; ?>
	<input type="text" name="option_name[phone]" value="<?php echo esc_attr( $val ) ?>" />
	<?php
}

function primer_mail(){
	$val = get_option('option_name');
	$val = $val['mail']; ?>
	<input type="text" name="option_name[mail]" value="<?php echo esc_attr( $val ) ?>" />
	<?php
}

function primer_adress(){
	$val = get_option('option_name');
	$val = $val['adress']; ?>
		<!--<input type="text" name="option_name[adress]" value="<?php echo esc_attr( $val ) ?>" />-->
	<?php
    
    $settings = array(
    'wpautop'       => false,
	'media_buttons' => 0,
	'textarea_name' => 'option_name[adress]', //нужно указывать!
	'textarea_rows' => 10,
	'tabindex'      => null,
	'editor_css'    => '',
	'editor_class'  => '',
	'teeny'         => 0,
	'dfw'           => 0,
	'tinymce'       => 1,
	'quicktags'     => array('buttons' => 'strong,em,link,block,del,ins,img,ul,ol,li,code,more,close,fullscreen'),
	'drag_drop_upload' => false);    
        
    echo wp_editor( $val, 'option_adress', $settings);    
        
}
function primer_requvisites(){
	$val = get_option('option_name');
	$val = $val['requvisites'];     
    $settings = array(
    'wpautop'       => 1,
	'media_buttons' => 0,
	'textarea_name' => 'option_name[requvisites]', //нужно указывать!
	'textarea_rows' => 10,
	'tabindex'      => null,
	'editor_css'    => '',
	'editor_class'  => '',
	'teeny'         => 0,
	'dfw'           => 0,
	'tinymce'       => 1,
	'quicktags'     => array('buttons' => 'strong,em,link,block,del,ins,img,ul,ol,li,code,more,close,fullscreen'),
	'drag_drop_upload' => false);    
        
    echo wp_editor( $val, 'option_requvisites', $settings);    
        
}



## Очистка данных
function sanitize_callback( $options ){ 
	// очищаем
	foreach( $options as $name => & $val ){
		if( $name == 'input' )
			$val = strip_tags( $val );

		if( $name == 'checkbox' )
			$val = intval( $val );
	}

	//die(print_r( $options )); // Array ( [input] => aaaa [checkbox] => 1 )

	return $options;
}
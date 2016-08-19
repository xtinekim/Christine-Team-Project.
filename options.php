<?php
/**
* ckim-assignment1
*/

/**
 * Adding submenu item. This Code has been done with help from the Lecture slides 
* and https://codex.wordpress.org/Creating_Options_Pages.
 */	

/**
*Adding submenu section
*/
function ck_add_submenu() {
       add_submenu_page( 'themes.php', 'CK Wedding and Special Occassion Events', 'CK Theme Options', 'manage_options', 'theme_options', 'ck_theme_options_page');

	}
  add_action( 'admin_menu', 'ck_add_submenu' );

function ck_settings_init() { 
	     register_setting( 'ck_theme_options', 'ck_options_settings' );
	
/**
* Adding settings section
*/	
	add_settings_section('ck_options_page_section','Customize the Theme','ck_options_page_section_callckk','ck_theme_options');
	
	
/**
* Description of the section.
*/
	function ck_options_page_section_callckk() { 
		echo 'Enjoy Customizing';
	     }
	
/**
*This section is for changing the background color
*/
	add_settings_field('ck_radio_field', 'Change the Background Color', 'ck_radio_field_render', 'ck_theme_options', 'ck_options_page_section' );
	
/**
*Background color options
*/
	function ck_radio_field_render() { 
		$options = get_option( 'ck_options_settings' );
		?>
		<input type="radio" name="ck_options_settings[ck_radio_field]" <?php if (isset($options['ck_radio_field'])) checked( $options['ck_radio_field'], "Purple" ); ?> value="#4d0066" /> <label>Purple</label>
		<br />
		<input type="radio" name="ck_options_settings[ck_radio_field]" <?php if (isset($options['ck_radio_field'])) checked( $options['ck_radio_field'], "Red" ); ?> value="#ff0000" /> <label>Red</label>
		<br />
		<input type="radio" name="ck_options_settings[ck_radio_field]" <?php if (isset($options['ck_radio_field'])) checked( $options['ck_radio_field'], "Green" ); ?> value="#006622" /> <label>Green</label>
		<?php
	}

/**
*This section is for changing the font color
*/
	add_settings_field('ck_select_field', 'Choose Font Color','ck_select_field_render','ck_theme_options','ck_options_page_section' );
		
	add_settings_field('ck_font_field', 'Choose Font Color','ck_font_field_render','ck_theme_options','ck_options_page_section' );	

/**
*Font color options
*/
	function ck_select_field_render() { 
		$options = get_option( 'ck_options_settings' );
		?>
		<select name="ck_options_settings[ck_select_field]">
			<option value="#000066" <?php if (isset($options['ck_select_field'])) selected( $options['ck_select_field'], "Dark Blue" ); ?>>Dark Blue
			</option>
			<option value="#003300" <?php if (isset($options['ck_select_field'])) selected( $options['ck_select_field'], "white" ); ?>>Dark Green
			</option>
			<option value="#660022" <?php if (isset($options['ck_select_field'])) selected( $options['ck_select_field'], "Dark Pink" ); ?>>Dark Pink
			</option>
			<option value="#000000" <?php if (isset($options['ck_select_field'])) selected( $options['ck_select_field'], "Black" ); ?>>Black
			</option>
		</select>
	<?php
	}

/**
*This section is for changing the font size
*/
	function ck_font_field_render() { 
		$options = get_option( 'ck_options_settings' );
		?>
		<select name="ck_options_settings[ck_font_field]">
			<option value="10px" <?php if (isset($options['ck_font_field'])) selected( $options['ck_font_field'], "Dark Blue" ); ?>>S font size</option>
			<option value="20px" <?php if (isset($options['ck_font_field'])) selected( $options['ck_font_field'], "white" ); ?>>M font size</option>
			<option value="30px" <?php if (isset($options['ck_font_field'])) selected( $options['ck_font_field'], "Dark Pink" ); ?>>L font size</option>
			<option value="40px" <?php if (isset($options['ck_font_field'])) selected( $options['ck_font_field'], "Black" ); ?>>XL font size</option>
		</select>
	<?php
	}

/**
*Font size options
*/
	function ck_theme_options_page(){ 
		?>
		
		<?php settings_errors (); ?>
		
		<form action="options.php" method="post">
			<h2>My Options Page</h2>
			<?php
			settings_fields( 'ck_theme_options' );
			do_settings_sections( 'ck_theme_options' );
			submit_button();
			?>
		</form>
		<?php
	}

}
/**
*To activate the plugin
*/
add_action( 'admin_init', 'ck_settings_init' );

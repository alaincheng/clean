<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
	register_setting( 'clean_options', 'clean_theme_options', 'theme_options_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
	add_theme_page( __( 'Theme Options', 'cleantheme' ), __( 'Theme Options', 'cleantheme' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}

/**
 * Create arrays for our select and radio options
 */
$select_options = array(
	'0' => array(
		'value' =>	'0',
		'label' => __( 'Zero', 'cleantheme' )
),
	'1' => array(
		'value' =>	'1',
		'label' => __( 'One', 'cleantheme' )
),
	'2' => array(
		'value' => '2',
		'label' => __( 'Two', 'cleantheme' )
),
	'3' => array(
		'value' => '3',
		'label' => __( 'Three', 'cleantheme' )
),
	'4' => array(
		'value' => '4',
		'label' => __( 'Four', 'cleantheme' )
),
	'5' => array(
		'value' => '3',
		'label' => __( 'Five', 'cleantheme' )
)
);

$radio_options = array(
	'yes' => array(
		'value' => 'yes',
		'label' => __( 'Yes', 'cleantheme' )
),
	'no' => array(
		'value' => 'no',
		'label' => __( 'No', 'cleantheme' )
),
	'maybe' => array(
		'value' => 'maybe',
		'label' => __( 'Maybe', 'cleantheme' )
)
);

/**
 * Create the options page
 */
function theme_options_do_page() {
	global $select_options, $radio_options;

	if ( ! isset( $_REQUEST['settings-updated'] ) )
	$_REQUEST['settings-updated'] = false;

	?>
<div class="wrap">
<?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Theme Options', 'cleantheme' ) . "</h2>"; ?>

<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
	<div class="updated fade">
		<p>
			<strong><?php _e( 'Options saved', 'cleantheme' ); ?> </strong>
		</p>
	</div>
	<?php endif; ?>

	<form method="post" action="options.php">
	<?php settings_fields( 'clean_options' ); ?>
	<?php $options = get_option( 'clean_theme_options' ); ?>

		<table class="form-table">
			<tr valign="top">
				<th scope="row"><?php _e( 'Title Left', 'cleantheme' ); ?></th>
				<td><input id="clean_theme_options[titleleft]" class="regular-text"
					type="text" name="clean_theme_options[titleleft]"
					value="<?php esc_attr_e( $options['titleleft'] ); ?>" /> <label
					class="description" for="clean_theme_options[titleleft]">
				</label>
				</td>
			</tr>

			<tr valign="top">
				<th scope="row"><?php _e( 'Content left', 'cleantheme' ); ?></th>
				<td><textarea id="clean_theme_options[contentleft]"
						class="large-text" cols="50" rows="10"
						name="clean_theme_options[contentleft]"><?php echo esc_textarea( $options['contentleft'] ); ?>
					</textarea> <label class="description"
					for="clean_theme_options[contentleft]">
				</label>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><?php _e( 'Title middle', 'cleantheme' ); ?></th>
				<td><input id="clean_theme_options[titlemiddle]" class="regular-text"
					type="text" name="clean_theme_options[titlemiddle]"
					value="<?php esc_attr_e( $options['titlemiddle'] ); ?>" /> <label
					class="description" for="clean_theme_options[titlemiddle]">
				</label>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><?php _e( 'Content middle', 'cleantheme' ); ?></th>
				<td><textarea id="clean_theme_options[contentmiddle]"
						class="large-text" cols="50" rows="10"
						name="clean_theme_options[contentmiddle]"><?php echo esc_textarea( $options['contentmiddle'] ); ?>
					</textarea> <label class="description"
					for="clean_theme_options[contentmiddle]">
				</label>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><?php _e( 'Title right', 'cleantheme' ); ?></th>
				<td><input id="clean_theme_options[titleright]" class="regular-text"
					type="text" name="clean_theme_options[titleright]"
					value="<?php esc_attr_e( $options['titleright'] ); ?>" /> <label
					class="description" for="clean_theme_options[titleright]">
				</label>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row"><?php _e( 'Content right', 'cleantheme' ); ?></th>
				<td><textarea id="clean_theme_options[contentright]"
						class="large-text" cols="50" rows="10"
						name="clean_theme_options[contentright]"><?php echo esc_textarea( $options['contentright'] ); ?>
					</textarea> <label class="description"
					for="clean_theme_options[contentright]">
				</label>
				</td>
			</tr>
		</table>

		<p class="submit">
			<input type="submit" class="button-primary"
				value="<?php _e( 'Save Options', 'cleantheme' ); ?>" />
		</p>
	</form>
</div>
						<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_options_validate( $input ) {
	global $select_options, $radio_options;

	// Our checkbox value is either 0 or 1
	if ( ! isset( $input['option1'] ) )
	$input['option1'] = null;
	$input['option1'] = ( $input['option1'] == 1 ? 1 : 0 );

	// Say our text option must be safe text with no HTML tags
	$input['sometext'] = wp_filter_nohtml_kses( $input['sometext'] );

	// Our select option must actually be in our array of select options
	if ( ! array_key_exists( $input['selectinput'], $select_options ) )
	$input['selectinput'] = null;

	// Our radio option must actually be in our array of radio options
	if ( ! isset( $input['radioinput'] ) )
	$input['radioinput'] = null;
	if ( ! array_key_exists( $input['radioinput'], $radio_options ) )
	$input['radioinput'] = null;

	// Say our textarea option must be safe text with the allowed tags for posts
	$input['sometextarea'] = wp_filter_post_kses( $input['sometextarea'] );

	return $input;
}

// adapted from http://planetozh.com/blog/2009/05/handling-plugins-options-in-wordpress-28-with-register_setting/
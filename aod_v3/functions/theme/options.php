<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
  register_setting( 'aod_options', 'aod_theme_options', 'theme_options_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
  add_theme_page( __( 'AoD Options', 'aod' ), __( 'AoD Options', 'aod' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}

/**
 * Create the options page
 */
function theme_options_do_page() {
  global $select_options, $radio_options;

  if ( ! isset( $_REQUEST['settings-updated'] ) )
    $_REQUEST['settings-updated'] = false;

  ?>
  <div class="wrap">
    <?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Options', 'aod' ) . "</h2>"; ?>

    <?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
    <div class="updated fade"><p><strong><?php _e( 'Options saved', 'aod' ); ?></strong></p></div>
    <?php endif; ?>

    <form method="post" action="options.php">
      <?php settings_fields( 'aod_options' ); ?>
      <?php $options = get_option( 'aod_theme_options' ); ?>

      <table class="form-table">



        <?php
        /**
         * Notification Checkbox
         */
        ?>
        <tr valign="top"><th scope="row"><?php _e( 'Notification', 'aod' ); ?></th>
          <td>
            <input id="aod_theme_options[noti]" name="aod_theme_options[noti]" type="checkbox" value="1" <?php checked( '1', $options['noti'] ); ?> />
            <label class="description" for="aod_theme_options[noti]"><?php _e( 'Check to enable site-wide notification.', 'aod' ); ?></label>
          </td>
        </tr>



        <?php
        /**
         * Notification Text.
         */
        ?>
        <tr valign="top"><th scope="row"><?php _e( 'Notification Text', 'aod' ); ?></th>
          <td>
            <input id="aod_theme_options[noti_text]" class="regular-text" type="text" name="aod_theme_options[noti_text]" value="<?php esc_attr_e( $options['noti_text'] ); ?>" />
            <label class="description" for="aod_theme_options[noti_text]"><?php _e( 'Content that will show up on the notification.', 'aod' ); ?></label>
          </td>
        </tr>


        <?php
        /**
         * Call To Action Checkbox
         */
        ?>
        <tr valign="top"><th scope="row"><?php _e( 'Call To Action', 'aod' ); ?></th>
          <td>
            <input id="aod_theme_options[cta]" name="aod_theme_options[cta]" type="checkbox" value="1" <?php checked( '1', $options['cta'] ); ?> />
            <label class="description" for="aod_theme_options[cta]"><?php _e( 'Check to enable header call to action button.', 'aod' ); ?></label>
          </td>
        </tr>



        <?php
        /**
         * Call To Action Text & URL.
         */
        ?>
        <tr valign="top"><th scope="row"><?php _e( 'Call To Action Text', 'aod' ); ?></th>
          <td>
            <input id="aod_theme_options[cta_text]" class="regular-text" type="text" name="aod_theme_options[cta_text]" value="<?php esc_attr_e( $options['cta_text'] ); ?>" />
            <label class="description" for="aod_theme_options[cta_text]"><?php _e( 'Content that will show up on the call to action.', 'aod' ); ?></label>
          </td>
        </tr>
        <tr valign="top"><th scope="row"><?php _e( 'Call To Action URL', 'aod' ); ?></th>
          <td>
            <input id="aod_theme_options[cta_url]" class="regular-text" type="text" name="aod_theme_options[cta_url]" value="<?php esc_attr_e( $options['cta_url'] ); ?>" />
            <label class="description" for="aod_theme_options[cta_url]"><?php _e( 'http://...', 'aod' ); ?></label>
          </td>
        </tr>

      </table>

      <p class="submit">
        <input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'aod' ); ?>" />
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
  if ( ! isset( $input['noti'] ) )
    $input['noti'] = null;
  $input['noti'] = ( $input['noti'] == 1 ? 1 : 0 );

  // Our checkbox value is either 0 or 1
  if ( ! isset( $input['cta'] ) )
    $input['cta'] = null;
  $input['cta'] = ( $input['cta'] == 1 ? 1 : 0 );

  // Say our text option must be safe text with no HTML tags
  $input['noti_text'] = wp_filter_nohtml_kses( $input['noti_text'] );
  $input['cta_text'] = wp_filter_nohtml_kses( $input['cta_text'] );

  return $input;
}
<div class="wrap">
    <h1>Google Map (CN) Options</h1>

    <form method="post" action="options.php">
        <?php settings_fields('gmapcn_settings-group'); ?>
        <?php do_settings_sections('gmapcn_settings-group'); ?>
        <table class="form-table">
            <tbody>
            <tr>
                <th scope="row"><label for="gmapcn_api_key"><?php echo __('API Key', 'gmapcn') ?>: </label></th>
                <td><input id="gmapcn_api_key" class="regular-text code"
                           type="text" name="gmapcn_api_key"
                           value="<?php echo esc_attr( get_option('gmapcn_api_key') ) ?>"
                    /></td>
            </tr>
            </tbody>
        </table>
        <?php submit_button(); ?>
    </form>
</div>
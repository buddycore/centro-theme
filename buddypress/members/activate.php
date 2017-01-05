<?php do_action('bp_before_activation_page'); ?>

    <?php do_action('bp_before_activate_content'); ?>

    <?php if(bp_account_was_activated()) : ?>

        <div class="message activated">
            <p>
        <?php if(isset($_GET['e'])) : ?>
            <?php _e('Your account was activated successfully! Your account details have been sent to you in a separate email.', 'buddypress'); ?>
        <?php else : ?>
            <?php printf(__('Your account was activated successfully! You can now <a href="%s">log in</a> with the username and password you provided when you signed up.', 'buddypress'), wp_login_url(bp_get_root_domain())); ?>
        <?php endif; ?>
            </p>
        </div>

    <?php else : ?>

        <form action="" method="get" class="standardise single" id="activation-form">
            <fieldset>
                <h4>Activate Account<a href="<?php echo home_url(BP_REGISTER_SLUG); ?>">Create an Account</a></h4>
                <div class="row">
                    <div class="column">
                        <input placeholder="<?php _e('Activation Key:', 'buddypress'); ?>" type="text" name="key" id="key" value="" />
                    </div>
                </div>

                <div class="submit">
                 <button type="submit" name="submit"><?php esc_attr_e('Activate', 'buddypress'); ?></button>
                </div>
            </fieldset>
        </form>

    <?php endif; ?>

    <?php do_action('bp_after_activate_content'); ?>

<?php do_action('bp_after_activation_page'); ?>
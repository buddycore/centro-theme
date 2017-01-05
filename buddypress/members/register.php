<?php if(!get_option('users_can_register')) : wp_redirect(home_url('/')); endif; ?>

<?php do_action('bp_before_register_page'); ?>

<div class="register">
<form action="" name="signup_form" id="signup_form" class="standardise register" method="post" enctype="multipart/form-data">
    <fieldset>
        <h4>Register Account<a href="<?php echo home_url('/login/'); ?>">Proceed to Login</a></h4>

        <?php if('registration-disabled' == bp_get_current_signup_step()) : ?>
            
            <?php do_action('template_notices'); ?>
            <?php do_action('bp_before_registration_disabled'); ?>

            <div id="message" class="info no-margin-bottom"><?php _e('User registration is currently not allowed.', 'buddypress'); ?></div>

            <?php do_action('bp_after_registration_disabled'); ?>

        <?php endif; // registration-disabled signup step ?>

        <?php if('request-details' == bp_get_current_signup_step()) : ?>

            <?php do_action('template_notices'); ?>

            <?php do_action('bp_before_account_details_fields'); ?>

            <div class="basic-details">

            <h6>Account Details</h6>

            <div class="row">
                <div class="column">
                    <label><?php _e( 'Email Address', 'buddypress' ); ?><span>*</span></label>
                    <?php do_action('bp_signup_email_errors'); ?>
                    <input type="email" name="signup_email" id="signup_email" value="<?php bp_signup_email_value(); ?>" <?php bp_form_field_attributes( 'email' ); ?>/>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label><?php _e( 'Username', 'buddypress' ); ?><span>*</span></label>
                    <?php do_action('bp_signup_username_errors'); ?>
                    <input type="text" name="signup_username" id="signup_username" value="<?php bp_signup_username_value(); ?>" <?php bp_form_field_attributes( 'username' ); ?>/>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label><?php _e( 'Choose a Password', 'buddypress' ); ?><span>*</span></label>
                    <?php do_action('bp_signup_password_errors'); ?>
                    <input type="password" name="signup_password" id="signup_password" value="" class="password-entry" <?php bp_form_field_attributes( 'password' ); ?>/>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label><?php _e( 'Confirm Password', 'buddypress' ); ?><span>*</span></label>
                    <?php do_action('bp_signup_password_confirm_errors'); ?> 
                    <input type="password" name="signup_password_confirm" id="signup_password_confirm" value="" class="password-entry-confirm" <?php bp_form_field_attributes( 'password' ); ?>/>   
                </div>
            </div>

            <div class="pass-strength">
                <div id="pass-strength-result"></div>
            </div>

            <?php do_action('bp_account_details_fields'); ?>

            </div><!-- BASIC DETAILS -->

            <?php do_action('bp_after_account_details_fields'); ?>

            <?php if(bp_is_active('xprofile')) : ?>

                <?php do_action('bp_before_signup_profile_fields'); ?>

                <div class="profile-details">

                    <h6>Profile Details</h6>
                    
                    <?php if(bp_is_active('xprofile')) : ?>

                        <?php if(bp_has_profile(array('profile_group_id' => 1, 'fetch_field_data' => false))) : ?>
                        
                            <?php while(bp_profile_groups()) : bp_the_profile_group(); ?>

                                <?php while(bp_profile_fields()) : bp_the_profile_field(); ?>

                                    <div class="row">

                                        <div class="column">

                                            <div<?php bp_field_css_class('editfield'); ?>>

                                                <?php
                                                $field_type = bp_xprofile_create_field_type(bp_get_the_profile_field_type());
                                                $field_type->edit_field_html();
                                                ?>

                                                <p class="description"><?php bp_the_profile_field_description(); ?></p>

                                                <?php do_action('bp_custom_profile_edit_fields_pre_visibility'); ?>

                                                <?php if(bp_current_user_can('bp_xprofile_change_field_visibility')) : ?>

                                                    <p class="field-visibility-settings-toggle" id="field-visibility-settings-toggle-<?php bp_the_profile_field_id() ?>">
                                                        <?php printf(__( 'This field can be seen by: %s', 'buddypress'), '<span class="current-visibility-level">' . bp_get_the_profile_field_visibility_level_label() . '</span>'); ?>
                                                        <a href="#" class="visibility-toggle-link"><?php _ex('Change', 'Change profile field visibility level', 'buddypress'); ?></a>
                                                    </p>
                                                    <div class="field-visibility-settings" id="field-visibility-settings-<?php bp_the_profile_field_id() ?>">
                                                        <fieldset>
                                                            <legend><?php _e('Who can see this field?', 'buddypress') ?></legend>
                                                            <?php bp_profile_visibility_radio_buttons() ?>
                                                        </fieldset>
                                                        <a class="field-visibility-settings-close" href="#"><?php _e('Close', 'buddypress') ?></a>
                                                    </div>

                                                <?php else : ?>

                                                    <p class="field-visibility-settings-notoggle" id="field-visibility-settings-toggle-<?php bp_the_profile_field_id() ?>">
                                                        <?php printf(__('This field can be seen by: %s', 'buddypress'), '<span class="current-visibility-level">' . bp_get_the_profile_field_visibility_level_label() . '</span>'); ?>
                                                    </p>

                                                <?php endif ?>

                                                <?php do_action('bp_custom_profile_edit_fields'); ?>

                                            </div><!-- EDITFIELD -->

                                        </div><!-- COLUMN -->

                                    </div><!-- ROW -->

                                <?php endwhile; ?>

                                <input type="hidden" name="signup_profile_field_ids" id="signup_profile_field_ids" value="<?php bp_the_profile_field_ids(); ?>" />

                            <?php endwhile; ?> 

                        <?php endif; ?>

                    <?php endif; ?>

                    <?php do_action('bp_signup_profile_fields'); ?>

                </div><!-- PROFILE DETAILS -->

            <?php do_action('bp_after_signup_profile_fields'); ?>

            <?php endif; ?>

        <?php if ( bp_get_blog_signup_allowed() ) : ?>

            <?php do_action('bp_before_blog_details_fields'); ?>

            <div class="blog-details" id="blog-details-section">

                <div class="row">
                    <div class="column">
                        <div class="editfield checkbox">
                            <label for="signup_with_blog"><input type="checkbox" name="signup_with_blog" id="signup_with_blog" value="1"<?php if ( (int) bp_get_signup_with_blog_value() ) : ?> checked="checked"<?php endif; ?> /> <?php _e( 'Yes, I\'d like to create a new site', 'buddypress' ); ?></label>
                        </div>
                    </div>
                </div>

                <div id="blog-details"<?php if ( (int) bp_get_signup_with_blog_value() ) : ?>class="show"<?php endif; ?>>

                    <div class="row">
                        <div class="column one-half">
                            <div class="editfield">
                                <label for="signup_blog_url"><?php _e('Blog URL', 'buddypress'); ?> <?php _e('(required)', 'buddypress'); ?></label>
                                <?php do_action('bp_signup_blog_url_errors'); ?>
                                <?php if(is_subdomain_install() ) : ?>
                                <input placeholder="http://" type="text" name="signup_blog_url" id="signup_blog_url" value="<?php bp_signup_blog_url_value(); ?>" /> .<?php bp_signup_subdomain_base(); ?>
                                <?php else : ?>
                                <input placeholder="<?php echo get_site_url(''); ?>/{your-url}" type="text" name="signup_blog_url" id="signup_blog_url" value="<?php bp_signup_blog_url_value(); ?>" />
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="column one-half">
                            <div class="editfield">
                                <label for="signup_blog_title"><?php _e( 'Site Title', 'buddypress' ); ?> <?php _e( '(required)', 'buddypress' ); ?></label>
                                <?php do_action('bp_signup_blog_title_errors'); ?>
                                <input type="text" name="signup_blog_title" id="signup_blog_title" value="<?php bp_signup_blog_title_value(); ?>" />
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="column">
                            <div class="editfield field_radio-buttons">
                            <fieldset>
                                <legend><?php _e( 'Site Public?', 'buddypress' ); ?></legend>
                                <div class="input-options">
                                    <label for="signup_blog_privacy_public"><input type="radio" name="signup_blog_privacy" id="signup_blog_privacy_public" value="public"<?php if ( 'public' == bp_get_signup_blog_privacy_value() || !bp_get_signup_blog_privacy_value() ) : ?> checked="checked"<?php endif; ?> /> <?php _e( 'Yes', 'buddypress' ); ?></label>
                                    <label for="signup_blog_privacy_private"><input type="radio" name="signup_blog_privacy" id="signup_blog_privacy_private" value="private"<?php if ( 'private' == bp_get_signup_blog_privacy_value() ) : ?> checked="checked"<?php endif; ?> /> <?php _e( 'No', 'buddypress' ); ?></label>
                                </div>
                            </fieldset>
                            <?php do_action('bp_signup_blog_privacy_errors'); ?>
                            </div>
                        </div>
                    </div>
                    <?php do_action('bp_blog_details_fields'); ?>

                </div>

            </div><!-- #blog-details-section -->

            <?php do_action('bp_after_blog_details_fields'); ?>

        <?php endif; ?>

        <?php do_action('bp_before_registration_submit_buttons'); ?>
        
        <div class="submit">
            <button type="submit" name="signup_submit" id="signup_submit"><?php esc_attr_e('Complete Sign Up', 'buddypress'); ?></button>
        </div>

        <?php endif; ?>

        <?php do_action('bp_after_registration_submit_buttons'); ?>

        <?php wp_nonce_field('bp_new_signup'); ?>

        <?php if('completed-confirmation' == bp_get_current_signup_step()) : ?>

            <?php do_action('template_notices'); ?>
            <?php do_action('bp_before_registration_confirmed'); ?>

            <div class="standardise confirmed">

            <?php if(bp_registration_needs_activation()) : ?>

                <p><?php _e('You have successfully created your account! To begin using this site you will need to activate your account via the email we have just sent to your address.', 'buddypress'); ?></p>
            
            <?php else : ?>
            
                <p><?php _e('You have successfully created your account! Please log in using the username and password you have just created.', 'buddypress'); ?></p>
            
            <?php endif; ?>

            </div>

            <?php do_action('bp_after_registration_confirmed'); ?>

        <?php endif; ?>

        <?php do_action('bp_custom_signup_steps'); ?>

    </fieldset>
</form>
</div><!-- REGISTER -->
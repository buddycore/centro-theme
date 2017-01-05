<?php locate_template('templates/partial/filter/nav.member.php', true, true); ?>

<div class="padder">

	<?php do_action('template_notices'); ?>

    <div class="container">

    	<div id="buddypress">

			<?php do_action('bp_before_member_home_content'); ?>

			<div id="item-body">

				<?php

				do_action('bp_before_member_body');

				if(bp_is_user_front()) :

					if(bp_displayed_user_use_cover_image_header()) :
						bp_get_template_part('members/single/cover-image-header');
					else :
						bp_get_template_part('members/single/member-header');
					endif;

					bp_displayed_user_front_template_part();

				elseif(bp_is_user_blogs()) :

					if(bp_displayed_user_use_cover_image_header()) :
						bp_get_template_part('members/single/cover-image-header');
					else :
						bp_get_template_part('members/single/member-header');
					endif;

					bp_get_template_part('members/single/blogs');

				elseif(bp_is_user_activity()) :

					if(bp_displayed_user_use_cover_image_header()) :
						bp_get_template_part('members/single/cover-image-header');
					else :
						bp_get_template_part('members/single/member-header');
					endif;

					bp_get_template_part('members/single/activity');

				elseif(bp_is_user_friends()) :

					if(bp_displayed_user_use_cover_image_header()) :
						bp_get_template_part('members/single/cover-image-header');
					else :
						bp_get_template_part('members/single/member-header');
					endif;

					bp_get_template_part('members/single/friends');

				elseif(bp_is_user_groups()) :

					if(bp_displayed_user_use_cover_image_header()) :
						bp_get_template_part('members/single/cover-image-header');
					else :
						bp_get_template_part('members/single/member-header');
					endif;

					bp_get_template_part('members/single/groups');

				elseif(bp_is_user_messages()) :

					if(bp_displayed_user_use_cover_image_header()) :
						bp_get_template_part('members/single/cover-image-header');
					else :
						bp_get_template_part('members/single/member-header');
					endif;

					bp_get_template_part('members/single/messages');

				elseif(bp_is_user_profile()) :

					if(bp_displayed_user_use_cover_image_header()) :
						bp_get_template_part('members/single/cover-image-header');
					else :
						bp_get_template_part('members/single/member-header');
					endif;

					bp_get_template_part('members/single/profile');

				elseif(bp_is_user_notifications()) :

					if(bp_displayed_user_use_cover_image_header()) :
						bp_get_template_part('members/single/cover-image-header');
					else :
						bp_get_template_part('members/single/member-header');
					endif;

					bp_get_template_part('members/single/notifications');

				elseif(bp_is_user_settings()) :

					if(bp_displayed_user_use_cover_image_header()) :
						bp_get_template_part('members/single/cover-image-header');
					else :
						bp_get_template_part('members/single/member-header');
					endif;

					bp_get_template_part('members/single/settings');

				// If nothing sticks, load a generic template
				else :

					if(bp_displayed_user_use_cover_image_header()) :
						bp_get_template_part('members/single/cover-image-header');
					else :
						bp_get_template_part('members/single/member-header');
					endif;

					bp_get_template_part('members/single/plugins');

				endif;

				do_action('bp_after_member_body'); 
				?>

			</div><!-- #item-body -->

			<?php do_action('bp_after_member_home_content'); ?>

		</div><!-- BUDDYPRESS -->

	</div><!-- CONTAINER -->

</div><!-- PADDER -->
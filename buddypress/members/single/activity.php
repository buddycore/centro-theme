<?php global $bp; ?>
<nav class="filter-inner">
	<div class="links">
		<div class="item-list-tabs no-ajax" id="subnav" role="navigation">
			<ul>
				<?php bp_get_options_nav(); ?>
			</ul>
		</div><!-- .item-list-tabs -->
	</div>
	<div class="other">
		<div class="item-list-tabs filter">
			<ul>
				<li id="activity-filter-select" class="last">
					<select id="activity-filter-by">
						<option value="-1"><?php _e('Show: Everything', 'buddypress'); ?></option>
						<?php bp_activity_show_filters(); ?>
						<?php do_action('bp_member_activity_filter_options'); ?>
					</select>
				</li>
			</ul>
		</div>
	</div>
</nav><!-- NAVIGATION TABS -->

<nav class="filter-inner-responsive">
	<div class="links">
		<div class="item-list-tabs no-ajax" id="subnav" role="navigation">
			<ul>
				<li><button class="toggle-sub"><span>Toggle Menu</span></button>
					<ul class="sub-nav">
						<?php bp_get_options_nav(); ?>
						<li id="activity-filter-select" class="last">
							<select id="activity-filter-by">
								<option value="-1"><?php _e('Show: Everything', 'buddypress'); ?></option>
								<?php bp_activity_show_filters(); ?>
								<?php do_action('bp_member_activity_filter_options'); ?>
							</select>
						</li>
					</ul>
				</li>
			</ul>
		</div><!-- ITEM LIST TABS -->
	</div>

	<div class="other">
		<h1>
		<?php 
		if($bp->current_action === 'just-me') :
			echo $bp->displayed_user->userdata->user_nicename;
		else :
			echo $bp->current_action; 
		endif;
		?>			
		</h1>
	</div>	
</nav><!-- RESPoNSIVE NAV -->

<?php do_action('bp_before_member_activity_post_form'); ?>

<?php if(is_user_logged_in() && bp_is_my_profile() && (!bp_current_action() || bp_is_current_action('just-me'))) : ?>

	<?php bp_get_template_part('activity/post-form'); ?>

<?php endif; ?>

<?php do_action('bp_after_member_activity_post_form'); ?>

<?php do_action('bp_before_member_activity_content'); ?>

<div class="activity"><?php bp_get_template_part('activity/activity-loop') ?></div><!-- .activity -->

<?php do_action('bp_after_member_activity_content'); ?>

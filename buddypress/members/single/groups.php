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
				<?php if(!bp_is_current_action('invites')) : ?>

					<li id="groups-order-select" class="last filter">
						<select id="groups-order-by">
							<option value="active"><?php _e('Last Active', 'buddypress'); ?></option>
							<option value="popular"><?php _e('Most Members', 'buddypress'); ?></option>
							<option value="newest"><?php _e('Newly Created', 'buddypress'); ?></option>
							<option value="alphabetical"><?php _e('Alphabetical', 'buddypress'); ?></option>
							<?php do_action('bp_member_group_order_options'); ?>
						</select>
					</li>

				<?php endif; ?>
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
					</ul>
				</li>
			</ul>
		</div><!-- ITEM LIST TABS -->
	</div>
	<div class="other">
		<div class="item-list-tabs filter" id="subnav" role="navigation">
			<ul>
				<?php if(!bp_is_current_action('invites')) : ?>

					<li id="groups-order-select" class="last filter">
						<select id="groups-order-by">
							<option value="active"><?php _e('Last Active', 'buddypress'); ?></option>
							<option value="popular"><?php _e('Most Members', 'buddypress'); ?></option>
							<option value="newest"><?php _e('Newly Created', 'buddypress'); ?></option>
							<option value="alphabetical"><?php _e('Alphabetical', 'buddypress'); ?></option>
							<?php do_action('bp_member_group_order_options'); ?>
						</select>
					</li>

				<?php endif; ?>
			</ul>
		</div><!-- ITEM LIST TABS -->	
	</div>
</nav><!-- RESPoNSIVE NAV -->

<?php
switch(bp_current_action()) :

	// Home/My Groups
	case 'my-groups' :

		do_action('bp_before_member_groups_content'); ?>

		<div class="groups mygroups"><?php bp_get_template_part('groups/my-groups-loop'); ?></div>

		<?php do_action('bp_after_member_groups_content');

	break;

	// Group Invitations
	case 'invites' :

		bp_get_template_part('members/single/groups/invites');

	break;

	// Any other
	default :

		bp_get_template_part('members/single/plugins');
	
	break;

endswitch;

<nav class="filter-inner">
	<div class="links">
		<div class="item-list-tabs no-ajax" id="subnav" role="navigation">
			<ul>
				<?php bp_get_options_nav(); ?>
			</ul>
		</div><!-- .item-list-tabs -->
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
</nav><!-- RESPoNSIVE NAV -->

<div class="padder-inner">

<?php
switch(bp_current_action()) :

	// Inbox/Sentbox
	case 'inbox'   :

	case 'sentbox' :

		do_action('bp_before_member_messages_content'); ?>

		<div class="messages"><?php bp_get_template_part('members/single/messages/messages-loop'); ?></div><!-- .messages -->

		<?php do_action('bp_after_member_messages_content');
		
	break;

	// Single Message View
	case 'view' :
		
		bp_get_template_part('members/single/messages/single');

	break;

	// Compose
	case 'compose' :
		
		bp_get_template_part('members/single/messages/compose');
	
	break;

	// Sitewide Notices
	case 'notices' :

		do_action('bp_before_member_messages_content'); ?>

		<div class="messages"><?php bp_get_template_part('members/single/messages/notices-loop'); ?></div><!-- .messages -->

		<?php do_action('bp_after_member_messages_content');
	
	break;

	// Any other
	default : ?>
		
		<div class="messages"><?php bp_get_template_part('members/single/plugins'); ?></div>
	
	<?php break;
	
endswitch;

?>
</div><!-- PADDER -->
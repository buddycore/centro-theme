<?php do_action('bp_before_member_friend_requests_content'); ?>

<?php if(bp_has_members('type=alphabetical&include=' . bp_get_friendship_requests())) : ?>

	<ul id="friend-list" class="friend-requests">
		<?php while(bp_members()) : bp_the_member(); ?>

			<li id="friendship-<?php bp_friend_friendship_id(); ?>">
				<div class="inner">
					<div class="table">
						<div class="table-cell avatar">
							<a href="<?php bp_member_permalink(); ?>"><?php bp_member_avatar('type=full&width=50'); ?></a>
						</div>
						<div class="table-cell detail">
							<h3><a href="<?php bp_member_permalink(); ?>"><?php bp_member_name(); ?></a></h3>
							<p><?php bp_member_last_active(); ?></p>
							<?php do_action('bp_directory_members_item'); ?>
						</div>
					</div>
					<?php do_action('bp_friend_requests_item');	?>
					<ul class="action">
						<li><a class="button accept" href="<?php bp_friend_accept_request_link(); ?>"><?php _e('Accept', 'buddypress'); ?></a></li>
						<li><a class="button reject" href="<?php bp_friend_reject_request_link(); ?>"><?php _e('Reject', 'buddypress'); ?></a></li>
						<?php do_action('bp_friend_requests_item_action'); ?>
					</ul><!-- ACTION -->
				</div>
			</li>

		<?php endwhile; ?>
	</ul>

	<?php do_action('bp_friend_requests_content'); ?>

	<div id="pag-bottom" class="bp-pagination no-ajax">
		<div class="pag-count" id="member-dir-count-bottom"><?php bp_members_pagination_count(); ?></div>
		<div class="pag-links" id="member-dir-pag-bottom"><?php bp_members_pagination_links(); ?></div>
	</div><!-- PAGINATION -->

<?php else: ?>

	<div id="message" class="info no-margin-bottom">
		<p><?php _e('You have no pending friendship requests.', 'buddypress'); ?></p>
	</div>

<?php endif;?>

<?php do_action('bp_after_member_friend_requests_content'); ?>

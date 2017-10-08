<?php get_header();?>

<div class="container ale_events_page">

	<h2 class="page_title"><?php _e('Events','aletheme'); ?></h2>

	<div class="events_categories">
		<div class="taxlist wrapper">
			<ul>
			<?php $wcatTerms = get_terms('events-category', array('hide_empty' => 0, 'parent' =>0));
			foreach($wcatTerms as $wcatTerm) : ?>

				<li><a href="<?php echo get_term_link( $wcatTerm->slug, $wcatTerm->taxonomy );?>" class="event_category_link"><?php echo $wcatTerm->name;?></a></li>

			<?php endforeach; ?>
			</ul>
		</div>
	</div>

	<div class="wrapper">
		<div class="events_list cf">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article class="item_event">

					<h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
					<span class="post_date">
						<?php echo get_the_date(); ?>
					</span>

				</article>
			<?php endwhile; endif; ?>
		</div>

		<?php global $wp_query;
		if($wp_query->max_num_pages > 1) {
			?>
			<div class="pagination">
				<div class="left_arrow">
					<?php
					if(get_previous_posts_link()){
						echo get_previous_posts_link('<i class="fa fa-angle-left" aria-hidden="true"></i>');
					} else {
						echo '<i class="fa fa-angle-left" aria-hidden="true"></i>';
					} ?>
				</div>
				<div class="paginate_items">
					<?php ale_page_links(); ?>
				</div>
				<div class="right_arrow">
					<?php
					if(get_next_posts_link()){
						echo get_next_posts_link('<i class="fa fa-angle-right" aria-hidden="true"></i>');
					} else {
						echo '<i class="fa fa-angle-right" aria-hidden="true"></i>';
					} ?>
				</div>
			</div>
		<?php } ?>

	</div>
</div>

<?php get_footer(); ?>
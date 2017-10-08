<?php
/**
 * Template Name: Template About
 */
get_header(); ?>
<div class="container ale_about_page">

	<h2 class="page_title"><?php the_title(); ?></h2>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="about_container">

			<section class="content wrapper">
				<?php the_content(); ?>
			</section>

			<?php if(ale_get_meta('info_display') == 'show'){ ?>
				<section class="info_box" data-type="background" <?php if(ale_get_meta('info_bg')){ echo 'style="background-image:url('.ale_get_meta('info_bg').');"'; } ?>>
					<div class="center_block">
						<h3 class="info_title"><?php echo ale_get_meta('info_title'); ?></h3>
						<span class="description"><?php echo ale_get_meta('info_text'); ?></span>
						<div class="divider"></div>
					</div>
				</section>
			<?php } ?>

			<?php if(ale_get_meta('services_display') == 'show'){ ?>
				<section class="services_items">
					<div class="wrapper">
						<div class="services_list">
							<div class="serv_item">
								<?php if(ale_get_meta('service_icon1')){ ?>
									<div class="icon_box">
										<img src="<?php echo ale_get_meta('service_icon1') ?>" alt=""/>
									</div>
								<?php } ?>
								<?php if(ale_get_meta('service_text1')){ ?>
									<p>
										<?php echo ale_get_meta('service_text1') ?>
									</p>
								<?php } ?>
							</div>

							<div class="serv_item">
								<?php if(ale_get_meta('service_icon2')){ ?>
									<div class="icon_box">
										<img src="<?php echo ale_get_meta('service_icon2') ?>" alt=""/>
									</div>
								<?php } ?>
								<?php if(ale_get_meta('service_text2')){ ?>
									<p>
										<?php echo ale_get_meta('service_text2') ?>
									</p>
								<?php } ?>
							</div>

							<div class="serv_item">
								<?php if(ale_get_meta('service_icon3')){ ?>
									<div class="icon_box">
										<img src="<?php echo ale_get_meta('service_icon3') ?>" alt=""/>
									</div>
								<?php } ?>
								<?php if(ale_get_meta('service_text3')){ ?>
									<p>
										<?php echo ale_get_meta('service_text3') ?>
									</p>
								<?php } ?>
							</div>

							<div class="serv_item">
								<?php if(ale_get_meta('service_icon4')){ ?>
									<div class="icon_box">
										<img src="<?php echo ale_get_meta('service_icon4') ?>" alt=""/>
									</div>
								<?php } ?>
								<?php if(ale_get_meta('service_text4')){ ?>
									<p>
										<?php echo ale_get_meta('service_text4') ?>
									</p>
								<?php } ?>
							</div>
						</div>
					</div>
				</section>
			<?php } ?>

			<?php if(ale_get_meta('people_display') == 'show'){?>
				<section class="our_people" >
					<div class="bg_people_mask" <?php if(ale_get_meta('people_bg')){ echo 'style="background-image:url('.ale_get_meta('people_bg').');"'; } ?>></div>
					<div class="wrapper">
						<div class="top_titles">
							<div class="left_arrow">
								<span class="left">
									<i class="fa fa-angle-left" aria-hidden="true"></i>
								</span>
							</div>
							<div class="center_info">
								<?php if(ale_get_meta('people_title')){ ?><h3 class="people_title"><?php echo ale_get_meta('people_title'); ?></h3><?php } ?>
								<?php if(ale_get_meta('people_text')){ ?><span class="people_desc"><?php echo ale_get_meta('people_text'); ?></span><?php } ?>
							</div>
							<div class="right_arrow">
								<span class="right">
									<i class="fa fa-angle-right" aria-hidden="true"></i>
								</span>
							</div>
						</div>
						<div class="peoples_list">

							<?php

							$args = array(
								'post_type' => 'people',
								'posts_per_page' => -1
							);

							$our_people = new WP_Query($args);

							if ($our_people->have_posts()) : while ($our_people->have_posts()) : $our_people->the_post(); ?>

								<div class="item_people">
									<div class="mask_hover">
										<div class="image_people">
											<?php echo get_the_post_thumbnail($post->ID, 'people-user'); ?>
										</div>
										<div class="people_info">
											<h4 class="name"><?php the_title(); ?></h4>
											<?php if(ale_get_meta('people_post')){ ?>
												<span class="post"><?php echo ale_get_meta('people_post') ?></span>
											<?php } ?>
										</div>
									</div>
								</div>

							<?php endwhile;  endif;?>


						</div>
					</div>
				</section>
			<?php } ?>

		</div>

	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
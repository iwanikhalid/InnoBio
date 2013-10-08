<?php
/* Template Name: Success Stories */
get_header(); ?>

<div id="standardPage" class="content">	
	<div class="rightContent">
		<?php //printBreadcrumbs(); ?>
		<?php the_post(); ?>
		<?php if (!empty($post->post_parent)): ?><h1 id="pageTitle"><?php the_title(); ?><a target="_blank" href="<?php bloginfo('url'); ?>/feed/?post_type=success-story"><img src="<?php bloginfo('template_url'); ?>/images/ico_rss.png" alt="RSS Feed" /></a></h1><?php endif; ?>
		
		<?php if (has_post_thumbnail()): ?>
			<p class="pageBanner"><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail($post->ID, 'page-banner', array('title'=>get_the_title(), 'alt'=>get_the_title())); ?></a></p>
		<?php endif; ?>
		
		<?php the_content();
		
		$query=new WP_Query(array(
			'post_type'	=> 'success-story',
			'paged'	=> $paged,
			'posts_per_page' => get_option('aien_page_success_stories_max_posts_per_page'),
		));
		
		echo '<ul class="successStories">';
		while ($query->have_posts()): $query->the_post(); ?>		
			<li class="grid2_4<?php if ($query->current_post>0 && ($query->current_post-1)%2==0) echo ' last'; ?>">
				<?php if (has_post_thumbnail()): ?>
					<p><a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(get_the_ID(), 'image-thumbnail', array('title'=>get_the_title(), 'alt'=>get_the_title())); ?></a></p>
				<?php endif; ?>
				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<?php the_excerpt(); ?>
				<p><a class="more" href="<?php the_permalink(); ?>">More</a></p>
			</li>
		<?php endwhile;
		echo '</ul>'; ?>
		
		<div class="clear"></div>
		
		<?php pagination($query->max_num_pages); wp_reset_query(); ?>
		
	</div>

	<div class="leftContent">
		<?php get_sidebar(); ?>
	</div>
	
	<div class="clear"></div>
</div>

<?php get_footer(); ?>
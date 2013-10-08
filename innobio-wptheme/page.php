<?php get_header(); ?>

<div class="breadcrumb">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

<div class="mainContent clearfix">
	<?php get_sidebar(); ?>	

	<div id="post-<?php the_ID(); ?>" class="main">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<h1 class="pagetitle"><?php the_title(); ?></h1>
		<?php the_content(); ?>
		
		<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>	
		
		<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
		
		<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	</div>

		
	<?php endwhile; endif; ?>

</div>
<?php get_footer(); ?>

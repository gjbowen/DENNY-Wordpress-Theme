<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="main">
	<div id="content">
		<?php  	// IP Address Check Feature. To disable, use 2 slashes to comment 
				//out the next line, and update the sidebar.php 'Quick Links' page link to the CRM 
			if (get_the_title()=="Preflight Network Check"){include "IPcheck.php";}
		?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<p>
				<?php the_content(__('(more...)')); ?>
			</p>
		<?php endwhile; else: ?>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>
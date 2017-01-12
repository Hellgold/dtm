<?php
/*
Template Name: Full Width Page
*/
 get_header(); ?>
<!-- start left sidebar -->
<?php //include("leftsidebar.php"); ?>
<!-- end leftsidebar  -->
	<div class="contentmain1">
	<div id="content" class="widecolumn">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<!--<h1 class="title"><?php // the_title(); ?></h1>-->
			<div class="post" id="post-<?php the_ID(); ?>">
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; endif; ?>
		<div class="info"><?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?></div>
		
	</div>
	</div>
<!-- start right sidebar -->
<?php //get_sidebar(); ?>
<!-- end right sidebar -->
<?php get_footer(); ?>
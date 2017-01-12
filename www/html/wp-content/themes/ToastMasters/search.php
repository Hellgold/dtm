<?php get_header(); ?>
<!-- start left sidebar -->
<?php include("leftsidebar.php"); ?>
<!-- end leftsidebar  -->
<!-- start content -->
<div class="contentmain">
<div id="content">
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
        
	<div class="post" id="post-<?php the_ID(); ?>">
		<h1 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
		<div class="entry">
			<?php the_excerpt(); ?>
		</div>
	</div>
    <?php endwhile; ?>
    	<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
<?php else : ?>
	<h2 class="center">Not Found</h2>
	<p class="center">Sorry, but you are looking for something that isn't here.</p>
	<?php include (TEMPLATEPATH . "/searchform.php"); ?>
<?php endif; ?>
</div>
</div>
<!-- end content -->
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
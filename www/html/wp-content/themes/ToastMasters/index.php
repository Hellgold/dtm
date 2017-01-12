<?php get_header(); ?>

	<div id="slider">
	<div class="slider_wrapper">
        <div class="rslides_container">
        <?php query_posts('post_type=slider&order=ASC'); ?>
          <ul class="rslides" id="slider4">
          <?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
            <li>
              <?php the_post_thumbnail('slider'); ?>
              <div class="cap_wrap">
              <p class="caption"><?php the_title(); ?></p>
              <div class="sub-cap"><?php the_content(); ?></div>
              </div>
            </li>
            <?php endwhile; ?>
	      <?php endif; ?>
          </ul>
        </div>
        <div class="slogan-box">
			<p class="slogan">So begeistern Sie <span style="color:#ffa500;">Ihr Publikum!</span></p>
		</div>
    </div><!-- wrapper -->
    </div>
    <div class="clear"></div>
	<div class="contentmain">
    <div id="content">
     <?php query_posts('page_id=70'); ?>
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
   <div class="post" id="post-<?php the_ID(); ?>">
		<h1 class="title">
		<?php the_title(); ?>
        </h1>
		<div class="entry">
			<?php the_content('Read the rest of this entry &raquo;'); ?>
		</div>
	</div>
   
    <?php endwhile; ?>
	<?php endif; ?>
    </div>
    </div>
     <?php include("leftsidebar.php"); ?>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
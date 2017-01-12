<div style="clear: both;">&nbsp;</div>
</div>

<hr />

<div id="footer">
   <div id="menu">
   <?php  wp_nav_menu(array('theme_location'=>'footer_menu','container'=>'','items_wrap' => '%3$s')); ?>
</div>
	<div class="footer_copy">&copy; <?php echo date('Y') ?> <?php bloginfo('name')?></div> 
 
</div>

<?php wp_footer() ?>
 </body>
</html>
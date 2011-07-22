<?php get_header(); ?>
  <div id="bd" class="yui-navset">
	    <div class="blog">
    <div id="yui-main">
		<div class="yui-b" >
			<div class="yui-g">

<!-- item -->
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="item entry grid_9" id="post-<?php the_ID(); ?>">
				 <div class="itemhead">
				          <h3><?php the_title(); ?></h3>
				 </div>
				 <div class="storycontent">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
<!-- end item -->

		<?php endwhile; ?>
	<?php endif; ?>
<!-- end content -->
<!-- 2nd sidebar -->

<!-- end 2nd sidebar -->
			</div>
		</div>
	</div></div>
	<div class="yui-b grid_3" id="secondary">

<?php get_sidebar(); ?>

	</div>
  </div>

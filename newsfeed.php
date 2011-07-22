<?php $_postcounter = 0; ?>
<?php query_posts('category_name=Design&showposts=1'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


 <!-- If the post is in the category we want to exclude, we simply pass to the next post. -->
 <?php if (!in_category('Design')) continue; ?>
 <?php $_postcounter++; ?>
 <?php if ($_postcounter > 1) continue; ?>
 
                                
                                <h3><a href="<?php the_permalink(); ?>"><?php echo substr(get_the_title(),0,50); ?></a></h3>
                            <p><?php echo substr(get_the_excerpt(),0,300) ?> [ <a href="<?php the_permalink(); ?>">read more</a> ]</p>



 <?php endwhile; else: ?>

 <?php endif; ?>
 
				
                           
                            <p>Click <a href="http://belinkddesign.com/blog" title='Website Design Posts'>here</a> to read more posts</p>

<?php wp_reset_query(); ?>

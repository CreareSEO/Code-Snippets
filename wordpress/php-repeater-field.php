<?php if( have_rows('products-grid') ): while ( have_rows('products-grid') ) : the_row(); ?>
 <?php echo '<li>'; ?>
 <a href="/get-in-touch" data-title="<?php the_sub_field('title'); ?>"  data-description="<?php the_sub_field('description'); ?>" >  
 <?php $image = get_sub_field('thumb-image'); ?> <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
   <?php echo '<p class="grid-title">'; the_sub_field('grid-title'); echo '</p>'; ?>
   </a> <?php echo '</li>'; ?>
   <?php endwhile; else : endif; ?>   

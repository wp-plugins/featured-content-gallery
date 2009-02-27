<div id="featured">
	<script type="text/javascript">
        function startGallery() {
            var myGallery = new gallery($('myGallery'), {
                timed: true
            });
        }
        window.addEvent('domready',startGallery);
    </script>

    <style type="text/css">
	
	.jdGallery .slideInfoZone
	{
		height: <?php echo get_option('gallery-info'); ?>px;
	}
	</style>
    
    <div id="myGallery">
    <?php 
    if (get_option('gallery-way') == 'new')	{//new way
			 $arr = split(",",get_option('gallery-items-pages'));
			 foreach ($arr as $post_or_page_id)   
			 { 
				 get_a_post($post_or_page_id); ?>
				 <div class="imageElement">
					 <h2><?php the_title() ?></h2>
					 <?php 
						if(get_option('gallery-use-featured-content')) {?>
					     <p><?php $key="featuredtext"; echo get_post_meta($post->ID, $key, true); ?></p>
					  <?php 
					  } else {
					  ?>
					     <p><?php the_content_rss('', 0, '', 100); ?></p>
					  <?php
						}
						$imgthumb = get_option('gallery-use-thumb-image') ? "thumbnailimg" : "articleimg";
						?>
					  <a href="<?php the_permalink() ?>" title="Read More" class="open"></a>
					  <img src="<?php $key="articleimg"; echo get_post_meta($post->ID, $key, true); ?>" alt="<?php $key="alttext"; echo get_post_meta($post->ID, $key, true); ?>" class="full" />
					  <img src="<?php $key=$imgthumb; echo get_post_meta($post->ID, $key, true); ?>" alt="<?php $key="alttext"; echo get_post_meta($post->ID, $key, true); ?>" class="thumbnail" />
				  </div>
			 <?php 
			 } ?>
	     </div>
	     <?php
	  }
	  else { ?>
	    <?php $temp_query = $wp_query; ?>
	    <?php query_posts('category_name=' . get_option('gallery-category') . '&showposts=' . get_option('gallery-items')); ?>
	    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	       <div class="imageElement">
	         <h2><?php the_title() ?></h2>
	         <?php 
						if(get_option('gallery-use-featured-content')) {?>
					     <p><?php $key="featuredtext"; echo get_post_meta($post->ID, $key, true); ?></p>
					  <?php 
					  } else {
					  ?>
					     <p><?php the_content_rss('', 0, '', 100); ?></p>
					  <?php
						}
						$imgthumb = get_option('gallery-use-thumb-image') ? "thumbnailimg" : "articleimg";
						?>
					  <a href="<?php the_permalink() ?>" title="Read More" class="open"></a>
					  <img src="<?php $key="articleimg"; echo get_post_meta($post->ID, $key, true); ?>" alt="<?php $key="alttext"; echo get_post_meta($post->ID, $key, true); ?>" class="full" />
					  <img src="<?php $key=$imgthumb; echo get_post_meta($post->ID, $key, true); ?>" alt="<?php $key="alttext"; echo get_post_meta($post->ID, $key, true); ?>" class="thumbnail" />
	      </div>
	      <?php endwhile; else: ?>
	      <?php endif; ?>
	      <?php $wp_query = $temp_query; ?>
    	</div>
	  <?php
	  }?>
    
</div>




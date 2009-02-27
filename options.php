<?php
$location = $options_page; // Form Action URI
?>

<div class="wrap">
	<h2>Featured Content Gallery Configuration</h2>
	<p>Use the fields below to customize your gallery width, height, text overlay height, gallery colors, and to select the category, post or page IDs to feature in the gallery.<br /> 
    Visit the <a href="http://www.featuredcontentgallery.com">Featured Content Gallery Plugin</a> website for more information.</p>
	
    <div style="margin-left:0px;">
    <form method="post" action="options.php"><?php wp_nonce_field('update-options'); ?>
		<fieldset name="general_options" class="options">

        Gallery Width in Pixels:<br />
		<div style="margin:0;padding:0;">
        <input name="gallery-width" id="gallery-width" size="25" value="<?php echo get_option('gallery-width'); ?>"></input>
        </div><br />
        
        Gallery Height in Pixels:<br />
		<div style="margin:0;padding:0;">
        <input name="gallery-height" id="gallery-height" size="25" value="<?php echo get_option('gallery-height'); ?>"></input> 
        </div><br />
        
        Text Overlay Height in Pixels:<br />
		<div style="margin:0;padding:0;">
        <input name="gallery-info" id="gallery-info" size="25" value="<?php echo get_option('gallery-info'); ?>"></input> 
        </div><br />
        
        <?php  $galleryoldway = (get_option('gallery-way') == 'old' || get_option('gallery-way') == '') ? "checked" : ""; 
        		   $gallerynewway = get_option('gallery-way') == 'new' ? "checked" : ""; 
        ?>
        <u><strong>Featured Content Selection</strong></u> - Select either a blog category or individual post/page IDs for your featured content:<br />
        <div style="padding-top: 10px"></div><div>
        <table width="688" border="1" cellpadding="0">
<tr>
    			<td width="325">
    <input type="radio" name="gallery-way" id="gallery-way" size="25" value="old"  <?php print $galleryoldway; ?>>
        			Select here to use category selection<br />
        <span class="style1">(the original gallery option)</span>		</td>
  		  <td width="351">
<input type="radio" name="gallery-way" id="gallery-way" size="25" value="new"  <?php print $gallerynewway; ?>>
        			Select here to use individual post or page IDs<br />
        <span class="style1">(the new gallery option)</span>        </td>
		  </tr>
  			<tr>
    			<td>
                    <div style="padding-top: 7px"></div><div>
                	Category Name:<br />
        			<input name="gallery-category" id="gallery-category" size="25" value="<?php echo get_option('gallery-category'); ?>"></input> 
                </td>
    			<td>
                    <div style="padding-top: 7px"></div>
                    <div>
          Post or Page IDs <span class="style1">(comma separated no spaces)</span>:<br />
                    <input name="gallery-items-pages" id="gallery-items-pages" size="25" value="<?php echo get_option('gallery-items-pages'); ?>"></input>
                </td>
  			</tr>
  			<tr>
    			<td>
                    <div style="padding-top: 5px"></div><div>
                	Number of Items to Display:<br />
        			<input name="gallery-items" id="gallery-items" size="25" value="<?php echo get_option('gallery-items'); ?>"></input> 
                </td>
    			<td>&nbsp;
                	
                </td>
  			</tr>
		</table>
        
        <p><strong>Custom Field</strong><br />
        For each post or page you want to display in your gallery, regardless of your selection above, you must include a custom field. Use the key <strong>articleimg</strong> and the url of your image in the value.<br /><br />
        
        <strong>Featured Content Gallery Code</strong><br />
        If not already included, add the following code anywhere within your theme files where you want the content gallery to be displayed:<br />
		
        <blockquote>&lt;&#63;php include &#40;ABSPATH &#46; '/wp-content/plugins/featured-content-gallery/gallery.php'&#41;&#59; &#63;&#62;</blockquote>
        <div style="padding-top: 8px"></div>
        <strong><u>Advanced Options</u></strong><br />
        By default, the gallery will display:<br />
        - The image specified in the <strong>articleimg</strong> custom field that you define for each post or page<br />
        - The post/page title and a few lines of content in the form of white text on a black background<br />
        - An auto-thumbnail image at the top, resized and cropped from the main custom field image<br /><br />
        
        To customize your gallery, you can add additional custom fields on each post/page or specify custom colors below.<br />
        For more information, please visit  <a href="http://www.featuredcontentgallery.com/install-setup">Featured Content Gallery Install & Setup</a>.<br />
        <br />
        
        <strong>Advanced Custom Fields</strong><br /></p>
				<?php $checked1 = get_option('gallery-use-featured-content') ? "checked" : ""; ?>
        <div style="margin:0;padding:0;">
        <input type="checkbox" name="gallery-use-featured-content" id="gallery-use-featured-content" <?php print $checked1 ?>> 
        Check here if you want to use custom text under the post/page title.<br />
        Key: <strong>featuredtext</strong> - Insert custom text in the value. HTML is allowed.
        </div><br />
        
        <?php $checked2 = get_option('gallery-use-thumb-image') ? "checked" : ""; ?>
		<div style="margin:0;padding:0;">
        <input type="checkbox" name="gallery-use-thumb-image" id="gallery-use-thumb-image" <?php print $checked2 ?>> 
        Check here if you want to use a custom thumbnail image in your gallery.<br />
        Key: <strong>thumbnailimg</strong> - Insert the url of the image in the value.
        </div>
		<p>If you would like to add alt text for the images you display in your gallery, use the custom field key <strong>alttext</strong> on each post/page and enter in your custom alt text in the value.<br />
	    </p>
		<p><strong>Custom Gallery Colors</strong><br />
        Customize the look of the gallery by adding custom colors here. Default is white text on a black background with black borders, and a little transparency.</p>
        Gallery Border Color <span class="style1">(use #hex or specify color name)</span><br />
		<div style="margin:0;padding:0;">
        <input name="gallery-border-color" id="gallery-border-color" size="25" value="<?php echo get_option('gallery-border-color'); ?>"></input>   
        </div><br />
        
        Gallery Background Color <span class="style1">(use #hex or specify color name)</span><br />
		<div style="margin:0;padding:0;">
        <input name="gallery-bg-color" id="gallery-bg-color" size="25" value="<?php echo get_option('gallery-bg-color'); ?>"></input>   
        </div><br />
       
        Gallery Text Color <span class="style1">(use #hex or specify color name)</span><br />
		<div style="margin:0;padding:0;">
        <input name="gallery-text-color" id="gallery-text-color" size="25" value="<?php echo get_option('gallery-text-color'); ?>"></input>   
        </div><br />
                
        <input type="hidden" name="action" value="update" />
        <input type="hidden" name="page_options" value="gallery-width,gallery-height,gallery-info,gallery-items,gallery-border-color,gallery-bg-color,gallery-text-color,gallery-use-featured-content,gallery-use-thumb-image,gallery-way,gallery-items-pages,gallery-category" />

		</fieldset>
		<p class="submit"><input type="submit" name="Submit" value="<?php _e('Update Options') ?>" /></p>
        <p><em>Featured Content Gallery WordPress Plugin v3.1.1 by <a href="http://www.ieplexus.com">iePlexus</a></em></p>
	</form>      
</div>
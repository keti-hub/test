<?php 

/*
* Template Name: Blog
*/

get_header();

$allPosts = get_posts();

?>


<div class="blog">
	<div class="container">
		<div class="row">
			<?php foreach ($allPosts as $key => $value) {?>


				<?php $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $value->ID ), "Full"); ?>
			    <div class="blog-post col-md-6 col-lg-4">
			    	<img class="blog-post-image" src="<?php echo $imgsrc[0];?>" alt="">
			    	<div class="blog-post-about">
			    		<p>
			    			<?php echo $value -> post_date;?>
			    		</p>


			            <h2 class="blog-post-title">
			            	<a href="<?php echo get_permalink($value -> ID) ?>">
				            	<?php echo $value -> post_title; ?>
				            </a>
				        </h2>

		                <div class="blog-pst-text">
		                	<?php 
		                	$x = $value -> post_content;
		                	$x = strip_tags($x);
		                	$x = substr($x, 0, 50);
			                	echo $x; 
		                	?>
		                </div>
			    	</div>
			    </div>

		    <?php } ?>
		</div>
	</div>
	

</div>

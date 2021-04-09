<?php 

/*
* Template Name: Home Page
*/

get_header();


$args = [
    'post_type' => 'services'
];

$allPosts = get_posts($args);

$args2 = [
    'post_type' => 'agents',
    'numberposts' => 3
];

$agents = get_posts($args2);


$page = get_post();

?>

<div class="hero-img">
	<img src="<?php echo get_template_directory_uri();?>/assets/img/hero-img.jpg">
</div>


<div class="services">
	<div class="container">
		<div class="services-head">
			<h2>Services We Provide</h2>
			<p>COVERED IN THESE AREAS</p>
		</div>
		<div class="services-body">
			<div class="row">
				<?php foreach ($allPosts as $key => $value) {?>

					<?php $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $value->ID ), "Full"); ?>
				    <div class="each-post col-md-6 col-lg-4">
				    	<img class="each-post-image" src="<?php echo $imgsrc[0];?>" alt="">
				    	<div class="each-post-about">

				            <h2 class="each-post-title">
				            	<a href="<?php echo get_permalink($value -> ID) ?>">
					            	<?php echo $value -> post_title; ?>
					            </a>
					        </h2>

			                <div class="each-pst-text">
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
	
</div>



<div class="video-div">
	<div class="container">
		<div class="inner-video-container">
			<div class="row">
				<div class="col-md-6">
					<div class="video">
						<iframe width="1280" height="720" src="https://www.youtube.com/embed/9E6b3swbnWg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>

				<div class="col-md-6">
					<div class="video-about">
						<h1><?php echo get_post_meta($page -> ID, 'video-name', 1);?></h1>
						<div class="video-inside">
							<?php 
								$video_txt= get_post_meta($page -> ID, 'video-txt', 1);
								echo wpautop($video_txt);
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="agents">
	<div class="container">
		<div class="agents-head">
			<h2>Meet Our Agents</h2>
			<p>AWESOME PEOPLE</p>
		</div>
		<div class="agents-body">
			<div class="row">

				<?php foreach ($agents as $key => $agent) {?>

					<?php $agent_img = wp_get_attachment_image_src( get_post_thumbnail_id( $agent->ID ), "Full"); ?>
				    <div class="each-agent col-md-6 col-lg-4">
				    	<img class="each-agent-image" src="<?php echo $agent_img[0];?>" alt="">
				    	<div class="each-agent-about">

				            <h2 class="each-agent-title">
				            	<a href="<?php echo get_permalink($agent -> ID) ?>">
					            	<?php echo $agent -> post_title; ?>
					            </a>
					        </h2>

			                <div class="each-agent-text">
			                	<?php 
			                	$x = $agent -> post_content;
			                	$x = strip_tags($x);
			                	$x = substr($x, 0, 50);
				                	echo $x; 
			                	?>
			                </div>
				    	</div>
				    </div>

			    <?php }; ?>
			</div>
		</div>
		
	</div>
</div>



<?php get_footer();?>
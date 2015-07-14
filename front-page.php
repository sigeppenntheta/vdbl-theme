<?php
/**
*
*	Index.php
*	Defines the main logic for the VDBL Theme
*
*/
get_header();
?>
<?php
	$search_args = array(
		'posts_per_page' => 1,
		'category_name' => 'featured',
		'order' => 'DESC',
		'post_status' => 'publish'
	);
	$posts_array = get_posts( $search_args );
	$featured_post;
	if( count($posts_array) > 0): 
		$featured_post = $posts_array[0];
		$featured_thumbail = get_the_post_thumbnail( $featured_post->ID, 'full' , array('class' => 'hero-image'));
?>
<div class="hero-content">
	<div class="hero-caption-container">
		<div class="hero-caption">
			<h1><?php echo $featured_post->post_title; ?></h1>
		</div>
	</div>
	<?php echo $featured_thumbail; ?>
</div>

<?php endif; ?>
<div class="latest-posts pure-g">
	<?php
	
	$front_page_posts = 0;
	while (have_posts() && $front_page_posts < 3): the_post();
		/*
			Below prints out the article preview
		*/
	?>
	<div class="pure-u-1 pure-u-sm-1 pure-u-md-1-2 pure-u-lg-1-3">
		<div class="article-preview">
			<?php
				$thumbnail = get_the_post_thumbnail( $post->ID, 'medium');

				if ($thumbnail !== ""):
					// Set to shorter excerpt
					vdbl_set_shorter_excerpt();
			?>
				<div class="article-preview-image">
					<?php echo $thumbnail ?>
				</div>
			<?php 
				else:
					// Give a longer excerpt if no image
					vdbl_set_longer_excerpt();
				endif; 
			?>

			<div class="article-preview-content">
				<div class="article-preview-title"> 
					<h2><?php the_title(); ?></h2>
				</div>
				<div class="article-preview-text">
					<p><?php the_excerpt(); ?></p>
					<p><a href="<?php echo get_permalink(); ?>">Read More</a></p>
				</div>
			</div>
		</div>
	</div>
	<?php
	$front_page_posts++;
	endwhile; 
	?>

	<div class="pure-u-1 more-posts">
		<a href="">More News...</a>
	</div>
</div>
<div class="about-us pure-g">
	<div class="house-pic pure-u-1 pure-u-md-1-2 pure-u-sm-1">
	</div>
	<div class="house-desc pure-u-1 pure-u-md-1-2 pure-u-sm-1">
		<div class="house-desc-text">
			<h2>About Our Brotherhood</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
			</p>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
			</p>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
			</p>
		</div>
	</div>
</div>
<div class="social-media">
	<h3>Follow Us On Social Media!</h3>
</div>

<?php get_footer(); ?>
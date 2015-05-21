<?php
/**
*
*	Index.php
*	Defines the main logic for the VDBL Theme
*
*/
get_header();
?>

<div class="hero-content">
	<img src="" alt="" class="hero-image">
	<div class="hero-caption">
		<p>We do cool stuff!</p>
	</div>
</div>
<div class="latest-posts pure-g">
	<?php
	
	$front_page_posts = 0;
	while (have_posts() && $front_page_posts < 4): the_post();
		/*
			Below prints out the article preview
		*/
	?>
	<div class="pure-u-1 pure-u-sm-1 pure-u-md-1-2 pure-u-lg-1-4">
		<div class="article-preview">
			<?php
				$thumbnail = get_the_post_thumbnail();
				global $vdbl_excerpt_length;

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
				</div>
			</div>
		</div>
	</div>
	<?php
	$front_page_posts++;
	endwhile; 
	?>
</div>
<div class="about-us pure-g">
	<div class="pure-u-1 pure-u-md-1-2">
		<p>Picture of our house!</p>
	</div>
	<div class="pure-u-1 pure-u-md-1-2">
		<p>Description of our house!</p>
	</div>
</div>
<div class="social-media">
	<p>Social Media</p>
</div>

<?php get_footer(); ?>
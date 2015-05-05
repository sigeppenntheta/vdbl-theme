<?php
/**
*
*	Index.php
*	Defines the main logic for the VDBL Theme
*
*/
get_header();
?>

<div class="posts">
	<?php if (have_posts()) : ?>

			<?php 
			while(have_posts()) : 
				the_post();
				get_template_part('content', get_post_format());
			endwhile;

		else:
			get_template_part('content', 'none');

		endif; 
	?>
</div>

<?php get_footer(); ?>
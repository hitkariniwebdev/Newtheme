<?php 

/* 
Template name: About
*/ 
get_header();
if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
		<article class="post page">
			<h2><?php the_title(); ?></h2>

			<!-- info-box -->
			<div class="info-box">
				<h4>Disclaimer</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam inventore, earum autem quos pariatur itaque fugit assumenda repellat! Necessitatibus iste sit perspiciatis minus blanditiis beatae, cupiditate ducimus excepturi amet fuga.</p>
			</div>
			<!-- info-box -->
			<p><?php the_content(); ?></p>
		</article>
	<?php endwhile;

	else :
		echo '<p> No content found</p>';
	endif;
get_footer();
?>



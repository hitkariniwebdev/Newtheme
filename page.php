<?php 
get_header();
if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
		<article class="post page">
		<?php (has_children() OR $post->post_parent  > 0)?>
		<nav class="site-nav children-links clearfix">
		<span class="parent_link"><a href="<?php get_the_permalink(get_top_id()); ?>"><?php echo get_the_title(get_top_id()); ?></a></span>
		<ul>
			<?php 
				$args = array(
					'child_of' => get_top_id(),
					'title_li' => ''
					);

			 ?>
			<?php wp_list_pages($args); ?>
			</ul>
		</nav>
			<h2><?php the_title(); ?></h2>
			<p><?php the_content(); ?></p>
			?>} 	
		</article>
	<?php endwhile;

	else :
		echo '<p> No content found</p>';
	endif;
get_footer();
?>


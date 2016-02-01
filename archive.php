<?php 
get_header();
if (have_posts()) :
	?>
	

<h2> <?php 
if (is_category()) {
			# code...
	single_cat_title();
}elseif (is_tag()) {
	# code...
	single_tag_title();
}elseif (is_author()) {
	# code...
	the_post();
	echo 'Author Archives: ' .get_the_author();
	rewind_posts();
} elseif (is_day()) {
	# code...
	echo 'Daily Archives:'.get_the_date();
}elseif (is_month()) {
	# code...
	echo 'Monthly Archives:'.get_the_date('F Y');
}elseif(is_year()){
	echo 'Yearly Archives:'.get_the_date('Y');
}else{
	echo "archive:";
}
?> </h2>
<?php 
	while (have_posts()) : the_post(); 
	
	get_template_part('content');
	endwhile;

	else :
		echo '<p> No content found</p>';
	endif;
get_footer();
?>


<?php 
//require_once($_SERVER['DOCUMENT_ROOT'] . '/howtogardner/inc/config.php');

$section = 'blog';
$pageTitle = 'Blog | How to Gardner';

include('header.php'); 
 
?>
<div class='wrapper'>
   
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <h1><?php the_title(); ?></h1>
            

        <?php endwhile; endif; ?>

</div>
 
<?php get_footer(); ?>

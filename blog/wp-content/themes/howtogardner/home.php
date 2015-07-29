<?php 
//require_once($_SERVER['DOCUMENT_ROOT'] . '/inc/config.php');

$section = 'blog';
$pageTitle = 'Blog | How to Gardner';

include('header.php'); 
 
?>
<div class='wrapper'>
    
    <!-- Primary Column -->
    <div class='primary'>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
            <article class='post'>
                <h1><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h1>
                <h2><?php the_excerpt(); ?></h2>
            </article>
                
        <?php endwhile; endif; ?>

    </div>
    
    <?php get_sidebar(); ?>
    
</div>    
    
<?php get_footer(); ?>

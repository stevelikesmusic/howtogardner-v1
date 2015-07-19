<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '/howtogardner/inc/config.php');

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
                <?php if (get_the_post_thumbnail()) : ?>
                    <div class='img-container'>
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>
                <?php the_content(); ?>
                <div class='meta-container'>
                    <p class='article-date'>Written for your reading enjoyment on <?php the_time('F j, Y'); ?></p>
                    <p>and stashed away in <?php the_category(' | '); ?></p>
                </div>
                <?php comments_template(); ?>
            </article>
                
        <?php endwhile; endif; ?>

    </div>
    
    <?php get_sidebar(); ?>
    
</div>    
    
<?php get_footer(); ?>








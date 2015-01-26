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
                <h2><?php the_excerpt(); ?></h2>
            </article>
                
        <?php endwhile; endif; ?>

    </div>
    
    <!-- Secondary Column -->
    <div class='secondary'>
        <h1>Sidebar</h1>
    </div>
</div>    
    
<?php get_footer(); ?>

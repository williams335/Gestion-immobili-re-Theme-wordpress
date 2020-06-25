<?php get_header(); ?>
    	
        <?php while(have_posts()) : the_post(); ?>
        <article>
            <?php the_post_thumbnail('medium'); ?>
            <a title="Voir l'article" href="<?php the_permalink(); ?>">
                <h2><?php the_title(); ?></h2>
            </a>
        <?php the_content(); ?>
 
        </article>
        <?php endwhile; ?>
 
<?php get_footer(); ?>
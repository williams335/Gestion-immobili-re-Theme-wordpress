<?php get_header(); ?>
<div id="main" class="row">
    
    <div id="content" class="col-sm-9">
        <h1>Résultats pour <?php the_search_query();?></h1>
              <!-- Nous recuperons les trois derniers articles. -->
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        
        <article class="row">
            <figure class="col-sm-3">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?> </a>      
            </figure>
            <div class="textuel col-sm-9">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <div class="chapo">
                    <p><?php the_field('description'); ?></p>       
                </div>
            </div>

        </article

            

        
        <?php endwhile;?>
        <?php endif; ?>
</div>
</div>
</div>
<?php get_footer(); ?>
<?php get_header(); ?>
<div id="main" class="row">
    
    <div id="content" class="col-sm-9">
        <h1> </h1>
        <p><?php the_category(' / '); ?></p>
        <?php 
            $cat=0;
            foreach((get_the_category()) as $cat) { 
            $cat= $cat+1; 
            } ?> 
        <h1><?php  $category = get_the_category();
       echo $category[$cat]->name; ?></h1>
        <!-- Nous recuperons les trois derniers articles. -->
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php if ( in_category('petites-annonces') ) { ?>
                    <article class="row">
                    <figure class="col-sm-3">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?> </a>      
                    </figure>
                    <div class="textuel col-sm-9">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="chapo">
                            <p><?php the_excerpt(); ?></p>  
                            <p><span class="prix"><?php the_tags('',' ',' '); ?>€</span></p>    
                        </div>
                        <div class="meta row">
                            <p class="col-sm-3">Par <a href="#"><?php the_author(); ?></a></p>  
                            <p class="col-sm-9">Publié le <?php the_date( 'j F Y' ); ?></p>
                        </div>  
                </article>

           
            <?php } else { ?>
           <article class="row">
            <figure class="col-sm-3">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?> </a>      
            </figure>
            <div class="textuel col-sm-9">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <nav class="tags">
                    <ul class="list-inline">
                        <li><?php the_tags('','&emsp;','<br />'); ?></li>
                    </ul>   
                </nav>
                <div class="chapo">
                    <p><?php the_excerpt(); ?></p>      
                </div>
                <div class="meta row">
                    <p class="col-sm-3">Par <a href="#"><?php the_author(); ?></a></p>  
                    <p class="col-sm-9">Publié le <?php the_time( get_option('date_format') ); ?></p>
                </div>  

            </div>
        
        
        </article>
            <?php } ?>





            

        
        <?php endwhile; else: ?>
        <?php endif; ?>
        
            
    </div>
        <?php get_template_part('sidebar'); ?>
    </div>

<?php get_footer(); ?>
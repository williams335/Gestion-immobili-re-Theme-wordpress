<?php get_header(); ?>
<div id="main" class="row">
    
    <div id="content" class="col-sm-9">
        <h1> </h1>
        <p><?php the_category(' / '); ?> / <?php the_title(); ?></p>

        <!-- Nous recuperons tous les posts. -->
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php if ( in_category('petites-annonces') ) { ?>
                    <article class="row">
                    <div class="textuel col-sm-9">
                        <h1><?php the_title(); ?></h1>
                        <div class="meta row">
                            <p class="col-sm-3">Par <a href="#"><?php the_author(); ?></a></p>  
                            <p class="col-sm-9">Publié le <?php the_date( 'j F Y' ); ?></p>
                        </div>  
                        <div id="article-content">
                            
                                    <figure class="right">
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    </figure>
                            <p><?php the_content(); ?></p>  
                            <p><span class="prix"><?php the_tags('',' ',' '); ?>€</span></p>    
                       </div>
                        
                </article>

           
            <?php } else { ?>
           <article class="row">
            
            <div class="textuel col-sm-9">
                <h1><?php the_title(); ?></h1>
                <div class="meta row">
                    <p class="col-sm-3">Par <a href="#"><?php the_author(); ?></a></p>  
                    <p class="col-sm-9">Publié le <?php the_time( get_option('date_format') ); ?></p>
                </div>  
                <nav class="tags">
                    <ul class="list-inline">
                        <li><?php the_tags('','&emsp;','<br />'); ?></li>
                    </ul>   
                </nav>
                <div id="article-content">
                            
                                    <figure class="right">
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    </figure>
                                    <p><?php the_content(); ?></p>  
                </div>
            </div>
        
        
        </article>
            <?php } ?>

        
        <?php endwhile; else: ?>
        <?php endif; ?>
        <?php comments_template();?>
            <div id="forum">
            <h1>Commentaires</h1>
            <p><a href="#poster">Poster un commentaire</a></p>
            <article class="comment row">
                 <div class="col-xs-2">
                 <img src="images/avatar.png"  class="img-responsive" />
                 <p><a href="#"><strong>Nom de l'auteur</strong></a></p>
                 </div>
                <div class="col-xs-10">
                 <h2 class="media-heading">Titre du commentaire</h2>
                 <p class="meta">Publié le 1<sup>er</sup> janvier 1970 à 12:34</p>
                 <p>Corps de texte du commentaire</p>
                </div>
            </article>
        </div>
    </div>
        <?php get_template_part('sidebar'); ?>
    </div>

<?php get_footer(); ?>
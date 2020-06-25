<?php get_header(); ?>
<div class="container">
        <?php while(have_posts()) : the_post(); ?>
        <article>
            <h2><?php the_title(); ?></h2>
            <h4>Code Postal: <?php the_field('code_postal'); ?> </h4><br><br>
        <?php $logements=get_field('logement'); 
            foreach ($logements as $post): ?>
          <article class="row">
            <figure class="col-sm-3">
                <?php 
                $image = get_field('exposition');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="Alternatif" width="240" height="180" class="img-responsive" />
                <?php endif; ?>
            </figure>
            <div class="textuel col-sm-9">
                <h3>Type de logement: <?php the_field('type_de_logement'); ?></a></h3>
                <div class="chapo">
                    <h4>Surface: <?php  the_field('surface'); ?> m2</h4>
                    <h4>Prix: <?php  the_field('prix'); ?> euros</h4>
                    <h4>Frais d'agence: <?php  the_field('frais_dagence'); ?> euros</h4>

                </div>
            </div>

        </article>
        <br>
        <br>
        <?php endforeach; ?>
   

        <?php endwhile; ?>
</div>

 
<?php get_footer(); ?>
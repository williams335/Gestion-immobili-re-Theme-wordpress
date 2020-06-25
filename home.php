<?php get_header(); ?>
<div id="main" class="row">
	
	<div id="content" class="col-sm-9">
		<h1> Cherchez votre futur logement</h1>
		<h2>Les villes disponilbes</h2>

<?php
$args = array(
	'post_type'              => 'ville',
	'order'                  => 'DESC',
	'orderby'                => 'date',
);

// The Query
$query = new WP_Query( $args );
foreach ($query->posts as $post): ?>
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

		</article>
		<?php endforeach; ?>
	</div>
</div>
		
<?php get_footer(); ?>
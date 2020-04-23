<?php get_header(); ?>
<div id="main" class="row">
	
	<div id="content" class="col-sm-9">
		<?php wp_login_form(); ?>
		<h1>Nouveautés !</h1>
		<h2>Derniers articles</h2>

		<!-- Nous recuperons les trois derniers articles. -->
 		 <?php query_posts('showposts=3'); ?>
		 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		 <!-- Si l'Article est dans la Catégorie petites annonces nous les excluons, nous passons à l'Article suivant. -->
		 <?php if (in_category('petites-annonces')) continue; ?>
		
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
		</article>
		<?php endwhile; else: ?>
		<?php endif; ?>
	

		<article class="row">
			<figure class="col-sm-3">
				<img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.png" alt="Alternatif" width="240" height="180" class="img-responsive" />			
			</figure>
			<div class="textuel col-sm-9">
				<h3><a href="#">Titre du précédent article en date</a></h3>
					<nav class="tags">
						<ul class="list-inline">
							<li><a href="#">Europe</a></li>
							<li><a href="#">Chemin de fer forestier</a></li>			
							<li><a href="#">Transport de passagers</a></li>	
						</ul>	
					</nav>	
				<div class="chapo">
					<p>Introduction (chapeau) de article en question</p>		
					<p>Le chapeau peut parfois être sur plusieurs lignes.</p>
				</div>
				<div class="meta row">
					<p class="col-sm-3">Par <a href="#">Nom de l'auteur</a></p>	
					<p class="col-sm-9">Publié le 1<sup>er</sup> janvier 1970</p>
				</div>
			</div>		
		</article>
		<article class="row">
			<figure class="col-sm-3">
				<img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.png" alt="Alternatif" width="240" height="180" class="img-responsive" />			
			</figure>
			<div class="textuel col-sm-9">
				<h3><a href="#">Titre d'un autre article plus ancien</a></h3>
				<nav class="tags">
					<ul class="list-inline">
						<li><a href="#">Europe</a></li>
						<li><a href="#">Chemins de fer miniers</a></li>	
					</ul>	
				</nav>	
				<div class="chapo">
					<p>Introduction (chapeau) du dernier article présenté</p>		
				</div>
				<div class="meta row">
					<p class="col-sm-3">Par <a href="#">Nom de l'auteur</a></p>	
					<p class="col-sm-9">Publié le  1<sup>er</sup> janvier 1970</p>
				</div>	
			</div>		
		</article>
		
		<div id="participer">
			<h2>Proposez un article</h2>
			<p class="lead">Rejoignez-nous !</p>
			<p>Petits trains est alimenté et animé par des passionnés. <a href="#">Rejoignez-nous</a> si vous souhaitez <a href="#">proposer un article ou une partition</a> !</p>
		</div>
		
		<div id="annonces">
			<h2>Petites annonces</h2>
			<article class="row">
			<figure class="col-sm-3">
				<img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.png" alt="Alternatif" width="240" height="180" class="img-responsive" />			
			</figure>
			<div class="textuel col-sm-9">
				<h3><a href="#">Titre d'une annonce</a></h3>	
				<div class="chapo">
					<p>Présentation du produit vendu</p>
					<p><span class="prix">XX€</span></p>		
				</div>
				<div class="meta row">
					<p class="col-sm-3">Par <a href="#">Nom de l'auteur</a></p>	
					<p class="col-sm-9">Publié le  1<sup>er</sup> janvier 1970</p>
				</div>	
			</div>		
		</article>

		<!-- Selectionner les trois derniers articles de la Catégorie "petites annonces-->
		 <?php query_posts('category_name=petites-annonces&showposts=3'); ?>
		 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
		<?php endwhile; else: ?>
		<?php endif; ?>






			<article class="row">
			<figure class="col-sm-3">
				<img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.png" alt="Alternatif" width="240" height="180" class="img-responsive" />			
			</figure>
			<div class="textuel col-sm-9">
				<h3><a href="#">Titre d'une annonce</a></h3>	
				<div class="chapo">
					<p>Présentation du produit vendu</p>
					<p><span class="prix">XX€</span></p>				
				</div>
				<div class="meta row">
					<p class="col-sm-3">Par <a href="#">Nom de l'auteur</a></p>	
					<p class="col-sm-9">Publié le  1<sup>er</sup> janvier 1970</p>
				</div>	
			</div>		
		</article>
			<article class="row">
			<figure class="col-sm-3">
				<img src="<?php echo get_template_directory_uri(); ?>/images/placeholder.png" alt="Alternatif" width="240" height="180" class="img-responsive" />			
			</figure>
			<div class="textuel col-sm-9">
				<h3><a href="#">Titre d'une annonce</a></h3>	
				<div class="chapo">
					<p>Présentation du produit vendu</p>
					<p><span class="prix">XX€</span></p>
				</div>
				<div class="meta row">
					<p class="col-sm-3">Par <a href="#">Nom de l'auteur</a></p>	
					<p class="col-sm-9">Publié le  1<sup>er</sup> janvier 1970</p>
				</div>	
			</div>		
		</article>
		</div>
		
		<div id="forums">
		<h1>Derniers commentaires</h1>
			<nav>
				<ul>
					<?php query_posts('showposts=10'); ?>
					

					
		 			
		 			

		 			<?php $my_var=10;?>
					
					<?php if ( have_posts() ) : while ( have_posts() && $my_var !=1) : the_post(); ?>

					<?php $comments = get_comments(); ?>
					<li><a href="" class="emphase"><?php 
						
						
							echo($comments[$my_var]->comment_content);
					
					?></a> sur l'article <a href="#"><?php the_title(); ?></a>, posté par <a href="#" class="auteur"> <?php 
						$comments = get_comments();
						
							echo($comments[$my_var]->comment_author);
					
					?></a> le <?php 
						$comments = get_comments();
					
							echo($comments[$my_var]->comment_date);
	
					?>.</li>
					<?php $my_var = $my_var-1;?>

					   <?php endwhile; else: ?>

					   <?php endif; ?>
						
				</ul>			
			</nav>
		</div>
		
	</div>
	
	<?php get_template_part('sidebar'); ?>
</div>	
<?php get_footer(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>

<?php wp_head(); ?>

</head>
<body class="container">
<header>
<div class="jumbotron">
	<h1><?php bloginfo('name'); ?></h1>
	<p class="motto"><?php bloginfo('description'); ?></p>
</div>
<nav>
	<ul class="nav nav-pills">
		<?php 
		$defaults = ['theme_location' => 'menu_principal',
							 'menu_class' => 'my-menu', ];
		wp_nav_menu( $defaults ); ?>
	</ul>
</nav>
<div class="well">
<h2>Recherche</h2>
	<form class="form-horizontal">
	    <div class="form-group">
	      
	    </div>
	    <?php get_search_form(); ?>
	</form>   
</div> 
</header>
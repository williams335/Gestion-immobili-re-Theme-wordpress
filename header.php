<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="container">
<header>
<div class="jumbotron">
	<h1><?php bloginfo('name'); ?></h1>
	<p class="motto"><?php bloginfo('description'); ?></p>
	<p class="abonnement"><a href="#">S'abonner</a></p>
</div>
<nav>
	<ul class="nav nav-pills">
		<?php wp_nav_menu( array( 'theme_location' => 'menu_principal' ) ); ?>
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
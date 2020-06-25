
<footer class="row">
<div class="col-sm-6 copyright colonne">
	<p>&copy; Gestion immobilière - 2020</p>
</div>	

<div class="col-sm-3 colonne">
	<h3>En pratique</h3>
	<nav class="pratique">
		<ul>
			<li><?php 
		$footer = ['theme_location' => 'menu_footer',
							 'menu_class' => 'my-footer-menu',];
		wp_nav_menu( $footer ); ?>
			
		</li>	
			
		</ul>
	</nav>
</div>	
</footer>

<?php wp_footer(); ?>

</body>

</html>

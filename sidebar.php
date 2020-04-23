<aside class="col-sm-3 ml-sm-2">

	<?php dynamic_sidebar(1); ?>
	<h2>La communauté</h2>
	<p>Petits trains est un site de passionnés, géré par des passionnés.</p>
	<ul class="nav nav-tabs">
		 <li class="active"><a data-toggle="tab" href="#inscription">Inscription</a></li>
		 <li><a data-toggle="tab" href="#connexion">Connexion</a></li>
  	</ul>
	<div class="tab-content">
	   <div id="inscription" class="tab-pane fade in active">
			<h3>Inscription</h3>
			<p>La consultation des ressources nécessite une inscription, gratuite :</p>
			 <form>
				  <div class="form-group">
					 <label for="email">Adresse de courriel :</label>
					 <input type="email" class="form-control" id="email">
				  </div>
				  <div class="form-group">
					 <label for="pwd">Mot de passe :</label>
					 <input type="password" class="form-control" id="pwd">
				  </div>
				  <button type="submit" class="btn btn-default">S'inscrire</button>
			</form> 
		</div>	
	   <div id="connexion" class="tab-pane fade">
			<h3>Connexion</h3>
			<p>Vous avez déjà un compte ? Connectez-vous !</p>
			 <form>
				  <div class="form-group">
					 <label for="email">Identifiant ou adresse de courriel :</label>
					 <input type="email" class="form-control" id="email">
				  </div>
				  <div class="form-group">
					 <label for="pwd">Mot de passe :</label>
					 <input type="password" class="form-control" id="pwd">
				  </div>
				  <button type="submit" class="btn btn-default">Se connecter</button>
			</form> 
		</div>	
	</div>
	<h2>Recherche thématique</h2>
	<h3>Activités</h3>
	<nav class="tags">
		<ul>
			<li><a href="#">Transport de passagers</a></li>	
			<li><a href="#">Chemins de fer forestiers</a></li>	
         <li><a href="#">Chemins de fer miniers</a></li>	
		</ul>
	</nav>
	<h3>Lieux</h3>
	<nav class="tags">
		<ul>
			<li><a href="#">Amérique du Nord</a></li>	
			<li><a href="#">Europe</a></li>	
		</ul>
	</nav>
	
	</aside>
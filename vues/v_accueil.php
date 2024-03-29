	<!-- Carousel-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicateurs -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>
  
	<!-- Diapositives -->
	<div class="carousel-inner" role="listbox">
		<div class="item active">
			<img class="first-slide" src="images/fleurs1.png" alt="Lafleur"/>
			<div class="container">
				<div class="carousel-caption" >
					<center> <h1>Des compositions époustouflantes</h1>
					<p>Commander des compositions réalisées par de vrais artistes passionés.</p> </center>
				</div>
			</div>
	   </div>
	   <div class="item">
			<img class="second-slide" src="images/fleurs2.png" alt="Lafleur"/>
			<div class="container">
				<div class="carousel-caption">
					<center> <h1>Notre paradis floral</h1>
					<p>Des fleurs cultivés par nos propres producteurs.</p> </center>
				</div>
			</div>
		</div>
	   <div class="item">
			<img class="third-slide" src="images/fleurs3.png" alt="Lafleur"/>
			<div class="container">
				<div class="carousel-caption">
					<center> <h1>Commandez et reçevez</h1>
					<p>Où que vous soyez LaFleur vous livre en temps et en heure.</p> </center>
				</div>
			</div>
		</div>
	</div>	  
	<!-- Controles boutons droite et gauche -->
	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Précédent</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Suivant</span>
	</a>
</div>

<center> <h2> Nos meilleures ventes </h2>
<hr class="featurette-divider">

  
   <?php $Produits =  $pdo->getLesProduitsDeCategorie("fle"); 
          foreach($Produits as $p){ if($p['id']=="f07"){$Produit=$p;} }?>
  <div class="col-md-3">
    <div class="thumbnail">
      <img src="<?php echo $Produit['image'] ?>" style="height:165px;" >
       <h3> <?php echo $Produit['prix'] ?> <span class="glyphicon glyphicon-euro"></span> </h3>
       <a href="index.php?uc=voirProduits&categorie=<?php echo $Produit['idCategorie'] ?>&produit=<?php echo 'f07' ?>&action=ajouterAuPanier"><button class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Ajouter au panier</button></a>
    </div>
  </div>
  
        <?php $Produits =  $pdo->getLesProduitsDeCategorie("com"); 
          foreach($Produits as $p){ if($p['id']=="c04"){$Produit=$p;} }?>
    <div class="col-md-3">
    <div class="thumbnail">
      <img src="<?php echo $Produit['image'] ?>" style="height:165px;">
       <h3> <?php echo $Produit['prix'] ?> <span class="glyphicon glyphicon-euro"></span> </h3>    
       <a href="index.php?uc=voirProduits&categorie=<?php echo $Produit['idCategorie'] ?>&produit=<?php echo 'c07' ?>&action=ajouterAuPanier"><button class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Ajouter au panier</button></a>
    </div>
  </div>
  
        <?php $Produits =  $pdo->getLesProduitsDeCategorie("fle"); 
          foreach($Produits as $p){ if($p['id']=="f02"){$Produit=$p;} }?>
    <div class="col-md-3">
    <div class="thumbnail">
      <img src="<?php echo $Produit['image'] ?>" style="height:165px;" >
       <h3> <?php echo $Produit['prix'] ?> <span class="glyphicon glyphicon-euro"></span> </h3> 
       <a href="index.php?uc=voirProduits&categorie=<?php echo $Produit['idCategorie'] ?>&produit=<?php echo 'f02' ?>&action=ajouterAuPanier"><button class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Ajouter au panier</button></a>
    </div>
  </div>
  
         <?php $Produits =  $pdo->getLesProduitsDeCategorie("fle"); 
          foreach($Produits as $p){ if($p['id']=="f03"){$Produit=$p;} }?>
    <div class="col-md-3">
    <div class="thumbnail">
      <img src="<?php echo $Produit['image'] ?>"  style="height:165px;">

       <h3> <?php echo $Produit['prix'] ?> <span class="glyphicon glyphicon-euro"></span> </h3> 
       <a href="index.php?uc=voirProduits&categorie=<?php echo $Produit['idCategorie'] ?>&produit=<?php echo 'f03' ?>&action=ajouterAuPanier"><button class="btn btn-success"><span class="glyphicon glyphicon-save"></span> Ajouter au panier</button></a>
    </div>
  </div>
  
</center>
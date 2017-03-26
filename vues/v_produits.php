	<?php
	$nb=1;
	if(isset($categorie))
	{
		$categorie = $_REQUEST['categorie'];
	
		switch($categorie)
		{
			case "com":
			{
				$couleur = "info";
				break;
			}
			case "fle":
			{
				$couleur = "warning";
				break;
			}
			case "pla":
			{
				$couleur = "success";
				break;
			}
		}
		
		foreach( $lesProduits as $unProduit) 
		{
			$id = $unProduit['id'];
			$description = $unProduit['description'];
			$prix=$unProduit['prix'];
			$image = $unProduit['image'];
			$nb++;
			?>	
			<hr class="featurette-divider">
			
			<div class="row featurette">
				<div class="col-md-7 <?phpif($nb % 2 == 1){?> col-md-push-5 <?php}?>">
					<h2 class="featurette-heading"><?php echo $description ?></h2>
					<p class="lead"> <?php echo $prix?> <span class="glyphicon glyphicon-euro"></span>
					<a href="index.php?uc=voirProduits&categorie=<?php echo $categorie ?>&produit=<?php echo $id ?>&action=ajouterAuPanier"><br/><button class="btn btn-success"><span class="glyphicon glyphicon-save"></span></button></a></center>  </p>
				</div>
				<div class="col-md-5 <?phpif($nb % 2 == 1){?> col-md-pull-7 <?php}?>">
					<img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" src="<?php echo $image ?>" alt=image />
				</div>
			</div>
		<?php	
		}
	}
	else
	{
		?>
		</br>
		<div class="col-md-offset-2 col-md-8 col-md-offset-2">
			<div class="alert alert-info col-md-offset-3 col-md-6">
			<strong>Veuillez choisir une catégorie.</strong>
			</div>
		</div>
		<?php
	}
	?>

</div>
<div class="container marketing">
	<!-- From left and right -->
	<div class="row">
		<?php
		$nb = 0;
		foreach( $lesCategories as $uneCategorie) 
		{
			$idCategorie = $uneCategorie['id'];
			$libCategorie = $uneCategorie['libelle'];
			$nb++;
			?>
				<!-- normal -->
				<div class="col-md-4">
				<div class="ih-item circle effect13 from_left_and_right"><a href="index.php?uc=voirProduits&categorie=<?php echo $idCategorie ?>&action=voirProduits">
					<div class="img"><img src="images/button<?php echo $nb ?>.jpg" alt="img"></div>
						<div class="info">
							<div class="info-back">
								<h3><?php echo $libCategorie ?></h3>
								<p><?php 
								if($nb == 1)
								{
									echo "Un mariage de couleurs";
								}
								else if($nb == 2)
								{
									echo "De toute beauté";
								}
								else if ($nb == 3)
								{
									echo "Un air apaisant";
								}
								?></p>
							</div>
						</div>
					</a>
				</div>
				</div>
				<!-- end normal -->
		 
			<?php
		}
		?>
	</div>
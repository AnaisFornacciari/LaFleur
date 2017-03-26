	<div class="container">
		<form method="POST" action="index.php?uc=gererPanier&action=confirmerCommande" class="form-horizontal">
			<legend>
				<h2>Commande</h2>
				<h6><font color="red">Renseignez tous les champs.</font></h6>
			</legend>
			<div class="form-group">
				<label class="control-label col-sm-2" for="nom">Nom + Prénom :</label>
				<div class="col-sm-4">
					<input class="form-control" id="nom" type="text" name="nom" value="<?php echo $nom ?>" size="30" maxlength="45">
				</div>
			</div>
				
			<div class="form-group">
				<label class="control-label col-sm-2" for="rue">Rue :</label>
				<div class="col-sm-4">
					<input class="form-control" id="rue" type="text" name="rue" value="<?php echo $rue ?>" size="30" maxlength="45">
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2" for="cp">Code postal :</label>
				<div class="col-sm-4">
					<input class="form-control" id="cp" type="text" name="cp" value="<?php echo $cp ?>" size="10" maxlength="10">
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2" for="ville">Ville :</label>
				<div class="col-sm-4">
					<input class="form-control" id="ville" type="text" name="ville"  value="<?php echo $ville ?>" size="5" maxlength="5">
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2" for="mail">Email :</label>
				<div class="col-sm-4">
					<input class="form-control" id="mail" type="text"  name="mail" value="<?php echo $mail ?>" size ="25" maxlength="25">
				</div>
			</div>
			
			<div class="form-group"> 
				<div class="col-sm-offset-2 col-sm-4">
					<div class="checkbox">
						<label><input type="checkbox"> Remember me</label>
					</div>
				</div>
			</div>
			
			<div class="form-group"> 
				<div class="col-sm-offset-2 col-sm-4">
					<input type="submit" value="Valider" name="valider" class="btn btn-success">
					<input type="reset" value="Annuler" name="annuler" class="btn btn-danger">
				</div>
			</div>
		</form>
	</div>
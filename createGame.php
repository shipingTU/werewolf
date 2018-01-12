<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create game</title>

    <!--link rel="icon" href="./source/favicon.ico"-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="js/createGame.js" type="text/javascript"></script>
  </head>

  <body>
	<div class="container" id="main">
		<div class="well bs-component">
			<form id="gameForm" action="func/createPost.php" method="post">
				<fieldset>
					<legend>Roles</legend>
					<!--Werewolf-->
					<div class="form-group row">
					    <label class="col-xs-4 col-form-label">Werewolves:</label>
					    	<div class="col-xs-2 form-check form-check-inline">
								<label class="form-check-label">
							    	<input class="form-check-input" type="radio" name="sumWerewolves" value="1" checked> 1
								</label>
							</div>
							<div class="col-xs-2 form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" type="radio" name="sumWerewolves" value="2"> 2
								</label>
							</div>
							<div class="col-xs-2 form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" type="radio" name="sumWerewolves" value="3"> 3
								</label>
							</div>
							<div class="col-xs-2 form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" type="radio" name="sumWerewolves" value="4"> 4
								</label>
							</div>
					</div>

					<!--Townsfolks-->
					<div class="form-group row">
					    <label class="col-xs-4 col-form-label">Townsfolks:</label>
					    	<div class="col-xs-2 form-check form-check-inline">
								<label class="form-check-label">
							    	<input class="form-check-input" type="radio" name="sumTownsfolks" value="1" checked> 1
								</label>
							</div>
							<div class="col-xs-2 form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" type="radio" name="sumTownsfolks" value="2"> 2
								</label>
							</div>
							<div class="col-xs-2 form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" type="radio" name="sumTownsfolks" value="3"> 3
								</label>
							</div>
							<div class="col-xs-2 form-check form-check-inline">
								<label class="form-check-label">
									<input class="form-check-input" type="radio" name="sumTownsfolks" value="4"> 4
								</label>
							</div>
					</div>

					<!--Prophet-->
					<div class="form-group row">
						<label class="col-xs-4 col-form-label">Prophet:</label>
						<div class="col-xs-8 form-check form-check-inline">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" name="usedProphet" id="usedProphet" checked>
							</label>
						</div>
					</div>

					<!--Witch-->
					<div class="form-group row">
						<label class="col-xs-4 col-form-label">Witch:</label>
						<div class="col-xs-8 form-check form-check-inline">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" name="usedWitch" id="usedWitch">
							</label>
						</div>
					</div>

					<!--Savior-->
					<div class="form-group row">
						<label class="col-xs-4 col-form-label">Savior:</label>
						<div class="col-xs-8 form-check form-check-inline">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" name="usedSavior" id="usedSavior">
							</label>
						</div>
					</div>
					
					<!--Hunter-->
					<div class="form-group row">
						<label class="col-xs-4 col-form-label">Hunter:</label>
						<div class="col-xs-8 form-check form-check-inline">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" name="usedHunter" id="usedHunter">
							</label>
						</div>
					</div>

					<!--Idiot-->
					<div class="form-group row">
						<label class="col-xs-4 col-form-label">Idiot:</label>
						<div class="col-xs-8 form-check form-check-inline">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" name="usedIdiot" id="usedIdiot">
							</label>
						</div>
					</div>

					<!--Cupido-->
					<div class="form-group row">
						<label class="col-xs-4 col-form-label">Cupido:</label>
						<div class="col-xs-8 form-check form-check-inline">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" name="usedCupido" id="usedCupido">
							</label>
						</div>
					</div>

					<!--White werewolf-->
					<div class="form-group row">
						<label class="col-xs-4 col-form-label">White werewolf:</label>
						<div class="col-xs-8 form-check form-check-inline">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" name="usedWwerewolf" id="usedWwerewolf">
							</label>
						</div>
					</div>

					<!--Thief-->
					<div class="form-group row">
						<label class="col-xs-4 col-form-label">Thief:</label>
						<div class="col-xs-8 form-check form-check-inline">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" name="usedThief" id="usedThief">
							</label>
						</div>
					</div>	

					<div class="form-group row">
				    	<label class="col-xs-4 col-form-label">Total:</label>
				    		<div class="col-xs-1">
				      			<input class="form-control" name="sumAll" id="sumAll" readonly>
				    		</div>
				    	</label>
				  	</div>

				  	<div class="form-group row">
				    	<div class="col-xs-4 col-xs-offset-4">
				        	<button id="createGame" type="submit" class="btn btn-primary">Create</button>
				    	</div>
				    </div>
			</form>
		</div>					
	</div>
  </body>
</html>

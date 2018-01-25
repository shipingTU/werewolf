<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>创建游戏</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="js/createGame.js" type="text/javascript"></script>
  </head>

  <body>
	<div class="container" id="main" style="margin-top:2%">
		<div class="well bs-component">
			<legend>角色</legend>

			<!--Werewolves-->
			<div class="form-group row">
			    <label class="col-xs-4 col-form-label">狼人:</label>
			    	<div class="col-xs-1 form-check form-check-inline">
						<label class="form-check-label">
					    	<input class="form-check-input" type="radio" name="sumWerewolves" value="1" checked> 1
						</label>
					</div>
					<div class="col-xs-1 form-check form-check-inline">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="sumWerewolves" value="2"> 2
						</label>
					</div>
					<div class="col-xs-1 form-check form-check-inline">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="sumWerewolves" value="3"> 3
						</label>
					</div>
					<div class="col-xs-1 form-check form-check-inline">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="sumWerewolves" value="4"> 4
						</label>
					</div>
			</div>

			<!--Townsfolks-->
			<div class="form-group row">
			    <label class="col-xs-4 col-form-label">平民:</label>
			    	<div class="col-xs-1 form-check form-check-inline">
						<label class="form-check-label">
					    	<input class="form-check-input" type="radio" name="sumTownsfolks" value="1" checked> 1
						</label>
					</div>
					<div class="col-xs-1 form-check form-check-inline">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="sumTownsfolks" value="2"> 2
						</label>
					</div>
					<div class="col-xs-1 form-check form-check-inline">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="sumTownsfolks" value="3"> 3
						</label>
					</div>
					<div class="col-xs-1 form-check form-check-inline">
						<label class="form-check-label">
							<input class="form-check-input" type="radio" name="sumTownsfolks" value="4"> 4
						</label>
					</div>
			</div>

			<!--Prophet-->
			<div class="form-group row">
				<label class="col-xs-4 col-form-label">预言家:</label>
				<div class="col-xs-8 form-check form-check-inline">
					<label class="form-check-label">
						<input class="form-check-input" type="checkbox" name="usedProphet" id="usedProphet" checked>
					</label>
				</div>
			</div>

			<!--Witch-->
			<div class="form-group row">
				<label class="col-xs-4 col-form-label">女巫:</label>
				<div class="col-xs-8 form-check form-check-inline">
					<label class="form-check-label">
						<input class="form-check-input" type="checkbox" name="usedWitch" id="usedWitch">
					</label>
				</div>
			</div>

			<!--Savior-->
			<div class="form-group row">
				<label class="col-xs-4 col-form-label">守卫:</label>
				<div class="col-xs-8 form-check form-check-inline">
					<label class="form-check-label">
						<input class="form-check-input" type="checkbox" name="usedSavior" id="usedSavior">
					</label>
				</div>
			</div>
			
			<!--Hunter-->
			<div class="form-group row">
				<label class="col-xs-4 col-form-label">猎人:</label>
				<div class="col-xs-8 form-check form-check-inline">
					<label class="form-check-label">
						<input class="form-check-input" type="checkbox" name="usedHunter" id="usedHunter">
					</label>
				</div>
			</div>

			<!--Idiot-->
			<div class="form-group row">
				<label class="col-xs-4 col-form-label">白痴:</label>
				<div class="col-xs-8 form-check form-check-inline">
					<label class="form-check-label">
						<input class="form-check-input" type="checkbox" name="usedIdiot" id="usedIdiot">
					</label>
				</div>
			</div>

			<!--Cupido-->
			<div class="form-group row">
				<label class="col-xs-4 col-form-label">丘比特:</label>
				<div class="col-xs-8 form-check form-check-inline">
					<label class="form-check-label">
						<input class="form-check-input" type="checkbox" name="usedCupido" id="usedCupido">
					</label>
				</div>
			</div>

			<!--White werewolf-->
			<div class="form-group row">
				<label class="col-xs-4 col-form-label">白狼王:</label>
				<div class="col-xs-8 form-check form-check-inline">
					<label class="form-check-label">
						<input class="form-check-input" type="checkbox" name="usedWwerewolf" id="usedWwerewolf">
					</label>
				</div>
			</div>

			<!--Thief-->
			<div class="form-group row">
				<label class="col-xs-4 col-form-label">盗贼:</label>
				<div class="col-xs-8 form-check form-check-inline">
					<label class="form-check-label">
						<input class="form-check-input" type="checkbox" name="usedThief" id="usedThief">
					</label>
				</div>
			</div>	

			<div class="form-group row">
		    	<label class="col-xs-4 col-form-label">总数:</label>
		    		<div class="col-xs-8">
		      			<span name="sumAll" id="sumAll"></span>
		    		</div>
		    	</label>
		  	</div>

		  	<div class="form-group row">
		    	<div class="col-xs-4 col-xs-offset-4">
		        	<button id="createGame" type="button" class="btn btn-primary">创建</button>
		    	</div>
		    </div>
		</div>					
	</div>
  </body>
</html>

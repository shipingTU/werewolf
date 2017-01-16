<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signin</title>

    <!--link rel="icon" href="./source/favicon.ico"-->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/signin.css" rel="stylesheet">
    <script src="./js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="./js/enterGame.js" type="text/javascript"></script>
  </head>

  <body>
    <div class="container">
      <h2 class="form-signin-heading">The Werewolves of Millers Hollow</h2>	
      <div class="form-group">
        <a href="./game/createGame.php" class="btn btn-primary btn-lg btn-block">Create a game</a>
      </div>
        <form id="enterGameForm" action="./game/game.php" method="post">
          <div class="form-group">
            <select id="positions" name="positions" class="form-control form-control-xs">
              <?php
                include './func/connectSql.php';
                $bd=connectSql();
                $sql='select pos from roles where used=1 and entred!=1 order by pos asc';
                $vQuery=mysqli_query($bd, $sql);
                if ( $vQuery ) {
                  echo '<option selected></option>'; 
                  while($row = mysqli_fetch_array($vQuery, MYSQLI_ASSOC)) {
                      echo '<option>'.$row['pos'].'</option>';
                  }       
                }
                mysqli_close($bd);
                ?>
            </select>
          </div>
          <div class="form-group">
            <button id="enterGame" type="button" class="btn btn-primary btn-lg btn-block">Enter the game</button>
          </div>
        </form>
    </div>
  </body>
</html>

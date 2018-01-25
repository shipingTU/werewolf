<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>狼人杀</title>

    <!--link rel="icon" href="./source/favicon.ico"-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="js/enterGame.js" type="text/javascript"></script>
  </head>

  <body>
    <div class="container">
      <h2 class="form-signin-heading" align='center'>狼人杀</h2>
      <?php
        include 'func/base.php';
        $bd=connectSql();
        $sql="SELECT count(*) AS sum from roles where used=1";
        $vQuery=mysqli_query($bd, $sql);
        if ( $vQuery ) {
          $row = mysqli_fetch_array($vQuery, MYSQLI_ASSOC);
          if ( $row['sum'] != '0' ){
            echo '<div class="form-group" align="center">
                    <button id="createGame" type="button" class="btn btn-primary btn-lg" disabled>创建游戏</button>
                  </div>
                  <div class="form-group" align="center">
                    <button id="deleteGame" type="button" class="btn btn-primary btn-lg">删除游戏</button>
                  </div>';
          }else{
            echo '<div class="form-group" align="center">
                    <button id="createGame" type="button" class="btn btn-primary btn-lg">创建游戏</button>
                  </div>
                  <div class="form-group" align="center">
                    <button id="deleteGame" type="button" class="btn btn-primary btn-lg" disabled>删除游戏</button>
                  </div>';
          }
        }
        mysqli_close($bd);
      ?>
      <div class="form-group" align='center'>
        <form id="enterGameForm" action="game.php" method="post">
          <select id="positions" name="positions" class="form-control-xs">
            <?php
              $bd=connectSql();
              $sql="SELECT pos from roles where used=1 and entred!=1 order by pos asc";
              $vQuery=mysqli_query($bd, $sql);
              if ( $vQuery ) {
                echo '<option selected>位置</option>'; 
                while($row = mysqli_fetch_array($vQuery, MYSQLI_ASSOC)) {
                    echo '<option>'.$row['pos'].'</option>';
                }       
              }
              mysqli_close($bd);
              ?>
          </select>
        </form>  
      </div>
      <div class="form-group" align='center'>
        <button id="enterGame" type="button" class="btn btn-primary btn-lg">进入游戏</button>
      </div>
      <div class="form-group" align='center'>
        <small id="help" style="color:red"></small>
      </div>
    </div>
  </body>
</html>

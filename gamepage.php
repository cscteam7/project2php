<?php
  session_start();
  if(isset($_SESSION['user']))   // Checking whether the session is already there or not if 
  {
  }
  else
  {
    header("Location: login.php");
  }
  if(isset($_POST['logout']))   // it checks whether the user clicked logout button or not 
  {
    session_start();
    echo "Logout Successfully ";
    session_destroy();
    header("Location: login.php");//  Destroys Session  and redirect to loginpage
  } 
  if(isset($_POST['startgame']))   // it checks whether the user clicked start button or not 
  {
    header("Location: main.php");
  }
    ?> 
<!DOCTYPE html>
<html>
    <head>
        <title>WHO WANTS TO BE A MILLONAIRE?!</title>
        <link rel="stylesheet" href="style1.css">
        <h1 class="header"> WELCOME!</h1>
    </head>
    <!--<img src="millonaire.jpg" alt="WHO  WANTS TO BE  MILLONAIRE?!">-->
<div class="topnav">
<?php if(isset($_SESSION['user']))   // Checking whether the session is already there or not if 
{

  echo '<p>Wellcome to Who wants to be a millionare ';echo $_SESSION['user']."</p>".
    '<form action="" method="post">
        <button type="submit" name="logout" value="logout">Log Out</button>
    </form>
</div>';
}
?>

<div class="wrapper">
    <h4 class="summary_button"><a href="teaminfo.html">Summary</a></h4>
</div>
   
<div class="row">
    <div class="leftcolumn">
      <div class="card">
          <h3>Rules of the Game</h3>
          <ol>
              <li>Press play to start the game</li>
              <li>The highest Score will be displayed on the leaderboard </li>
          </ol>
      </div>
      <div class="rightcolumn">
        <div class="card">
            <h3>Leaderboard</h3>      
            <table class ="leadertable"style="width:300px" border="1" cellspacing="1" cellpadding="1" align="center">
            <?php
              $_SESSION["bank"]=0;
              $_SESSION["question"] = 1;
              //display the leaderboard, which will be a file import.
              //Display the name of the current user 
              //show a little of the rules of the game
              //use a start button to link to the gamepage
              $scorelist = file ('scores.txt');
              $display = array();
              $unames = array();
              $userscore = array();
              foreach ($scorelist as $uscore) 
              {
                  $display = explode('|', $uscore);
                  $unames[]=  $display[0];
                  $userscore[] =  $display[1];                 
              }
              $topscores = array_combine($unames,$userscore);
              arsort($topscores,SORT_NUMERIC);
              $length = count($topscores);
              if ($length>0){
                  foreach ($topscores as $key => $value) 
                  {
                      echo "<tr>";
                      echo "\n  <td>" .$key . "</td>\n  <td>" . $value . "</td> \n";
                      echo "</tr> \n";
                  }
              }  
            ?>
            </table>
        </div>
      </div>
    </div>
</div>

<div class="wrapper">
    <h4 class="play_button"><a href="mill1.php">Play</a></h4>
</div>
</html>

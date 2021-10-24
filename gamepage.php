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
    "<p>Your Current Score is "; echo $_SESSION['score']." </p>".
    '<form action="" method="post">
        <button type="submit" name="logout" value="logout">Log Out</button>
    </form>
</div>';
}
?>
   
<div class="row">
    <div class="leftcolumn">
      <div class="card">
          <h3>Rules of the Game</h3>
          <ol>
              <li>rule1</li>
              <li>rule2</li>
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
              $score= fopen("scores.txt","r");
              echo ' ';
              while(!feof($score)){
                  $text=fgets($score);
                  echo "<tr>";
                    echo "<td>".$text."</td>"; 
                  echo '</tr>'; 
                }
                echo "";
                fclose($score);   
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

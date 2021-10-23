<html>
    <head>
        <title>WHO WANTS TO BE A MILLONAIRE?!</title>
        <link rel="stylesheet" href="style1.css">
        <h1 class="header"> WELCOME!</h1>
        
        
    </head>
    <!--<img src="millonaire.jpg" alt="WHO  WANTS TO BE  MILLONAIRE?!">-->
<div class="topnav">
    <a href="index.php">Click here to login!</a>

</div>
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
        <?php
          //display the leaderboard, which will be a file import.
          //Display the name of the current user 
          //show a little of the rules of the game
          //use a start button to link to the gamepage
           $score= fopen("scores.txt","r");
           echo '<table style="width:300px" border="1" cellspacing="1" cellpadding="1" align="center">';
           while(!feof($score)){
              $text=fgets($score);
              echo "<tr>";
                echo "<td>".$text."</td>"; 
              echo '</tr>'; 
            }
            echo "</table>";
            fclose($score);   
         ?>
    </div>
    </div>
    </div>
</div>




</html>


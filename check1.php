<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Millionaire</title>
		<link rel="stylesheet" type="text/css" media="all" href="check1.css"/>
	</head>
	<body>
        
                <img src="millogo.png" class="logo"> 
        <br>
        
        <div>
            
                <form action="mill1.php" method="post">
		<?php   
                $answer = $_POST['q1'];
                if($_SESSION["question"]===1){
                    $_SESSION["question"]++;
                    if($answer == 'A'){
                        $audiosrc ='<source src="./static/rightsound.mp3"type="audio/mp3">';
                        playaudio($audiosrc);
                        $_SESSION["bank"] = $_SESSION["bank"] + 100;
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Correct!</h1></div>';
                        echo '<div><h4 id="current_bank">Amount Earned: $'. "$bank".'</h4></div>'; 
                        echo '<p><input id="submit" type="submit" value="Next Question" name="submit" /></p>';                    
                    }
                    else{
                        $audiosrc ='<source src="./static/wrong.mp3"type="audio/mp3">';  
                        playaudio($audiosrc);
                        writescore();
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Incorrect!</h1></div>';
                        echo '<div><h4 id="current_bank">Amount Earned: $'. "$bank".'</h4></div>';                       
                        echo '<h4><a href="gamepage.php">Play Again</a></h4>';
                    }
                }
                else if($_SESSION["question"]===2){
                    $_SESSION["question"]++;
                    if($answer == 'B'){
                        $audiosrc ='<source src="./static/rightsound.mp3"type="audio/mp3">';
                        playaudio($audiosrc);
                        $_SESSION["bank"] = $_SESSION["bank"] + 200;
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Correct!</h1></div>';
                        echo '<div><h4 id="current_bank">Amount Earned: $'. "$bank".'</h4></div>';
                        echo '<p><input id="submit" type="submit" value="Next Question" name="submit" /></p>';                    
                    }
                    else{
                        $audiosrc ='<source src="./static/wrong.mp3"type="audio/mp3">';
                        playaudio($audiosrc);
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Incorrect!</h1></div>';
                        echo '<div><h4 id="current_bank">Amount Earned: $'. "$bank".'</h4></div>';   
                        writescore();                    
                        echo '<h4><a href="gamepage.php">Play Again</a></h4>';
                    }
                }
                else if($_SESSION["question"]===3){
                    $_SESSION["question"]++;
                    if($answer == 'C'){
                        $audiosrc ='<source src="./static/rightsound.mp3"type="audio/mp3">';
                        playaudio($audiosrc);
                        $_SESSION["bank"] = $_SESSION["bank"] + 300;
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Correct!</h1></div>';
                        echo '<div><h4 id="current_bank">Amount Earned: $'. "$bank".'</h4></div>';
                        echo '<p><input id="submit" type="submit" value="Next Question" name="submit" /></p>';                    
                    }
                    else{
                        $audiosrc ='<source src="./static/wrong.mp3"type="audio/mp3">';
                        playaudio($audiosrc);
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Incorrect!</h1></div>';
                        echo '<div><h4 id="current_bank">Amount Earned: $'. "$bank".'</h4></div>';  
                        writescore();                     
                        echo '<h4><a href="gamepage.php">Play Again</a></h4>';
                    }
                }
                else if($_SESSION["question"]===4){
                    $_SESSION["question"]++;
                    if($answer == 'D'){
                        $audiosrc ='<source src="./static/rightsound.mp3"type="audio/mp3">';
                        playaudio($audiosrc);
                        $_SESSION["bank"] = $_SESSION["bank"] + 500;
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Correct!</h1></div>';
                        echo '<div><h4 id="current_bank">Amount Earned: $'. "$bank".'</h4></div>';
                        echo '<p><input id="submit" type="submit" value="Next Question" name="submit" /></p>';                    
                    }
                    else{
                        $audiosrc ='<source src="./static/wrong.mp3"type="audio/mp3">';
                        playaudio($audiosrc);
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Incorrect!</h1></div>';
                        echo '<div><h4 id="current_bank">Amount Earned: $'. "$bank".'</h4></div>';    
                        writescore();                   
                        echo '<h4><a href="gamepage.php">Play Again</a></h4>';
                    }
                }
                else if($_SESSION["question"]===5){
                    $_SESSION["question"]++;
                    if($answer == 'A'){
                        $audiosrc ='<source src="./static/rightsound.mp3"type="audio/mp3">';
                        playaudio($audiosrc);
                        $_SESSION["bank"] = $_SESSION["bank"] + 1000;
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Correct!</h1></div>';
                        echo '<div><h4 id="current_bank">Amount Earned: $'. "$bank".'</h4></div>';
                        echo '<p><input id="submit" type="submit" value="Next Question" name="submit" /></p>';                    
                    }
                    else{
                        $audiosrc ='<source src="./static/wrong.mp3"type="audio/mp3">';
                        playaudio($audiosrc);
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Incorrect!</h1></div>';
                        echo '<div><h4 id="current_bank">Amount Earned: $'. "$bank".'</h4></div>';    
                        writescore();                   
                        echo '<h4><a href="gamepage.php">Play Again</a></h4>';
                    }
                }
                else if($_SESSION["question"]===6){
                    $_SESSION["question"]++;
                    if($answer == 'B'){
                        $audiosrc ='<source src="./static/rightsound.mp3"type="audio/mp3">';
                        playaudio($audiosrc);
                        $_SESSION["bank"] = $_SESSION["bank"] + 2000;
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Correct!</h1></div>';
                        echo '<div><h4 id="current_bank">Amount Earned: $'. "$bank".'</h4></div>';
                        echo '<p><input id="submit" type="submit" value="Next Question" name="submit" /></p>';                    
                    }
                    else{
                        $audiosrc ='<source src="./static/wrong.mp3"type="audio/mp3">';
                        playaudio($audiosrc);
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Incorrect!</h1></div>';
                        echo '<div><h4 id="current_bank">Amount Earned: $'. "$bank".'</h4></div>';
                        writescore();                       
                        echo '<h4><a href="gamepage.php">Play Again</a></h4>';
                    }
                }
                else if($_SESSION["question"]===7){
                    $_SESSION["question"]++;
                    if($answer == 'C'){
                        $audiosrc ='<source src="./static/rightsound.mp3"type="audio/mp3">';
                        playaudio($audiosrc);
                        $_SESSION["bank"] = $_SESSION["bank"] + 4000;
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Correct!</h1></div>';
                        echo '<div><h4 id="current_bank">Amount Earned: $'. "$bank".'</h4></div>';
                        echo '<p><input id="submit" type="submit" value="Next Question" name="submit" /></p>';                    
                    }
                    else{
                        $audiosrc ='<source src="./static/wrong.mp3"type="audio/mp3">';
                        playaudio($audiosrc);
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Incorrect!</h1></div>';
                        echo '<div><h4 id="current_bank">Amount Earned: $'. "$bank".'</h4></div>';
                        writescore();                    
                        echo '<h4><a href="gamepage.php">Play Again</a></h4>';
                    }
                }
                else if($_SESSION["question"]===8){
                    $_SESSION["question"]++;
                    if($answer == 'D'){
                        $audiosrc ='<source src="./static/rightsound.mp3"type="audio/mp3">';
                        playaudio($audiosrc);
                        $_SESSION["bank"] = $_SESSION["bank"] + 8000;
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Correct!</h1></div>';
                        echo '<div><h4 id="current_bank">Amount Earned: $'. "$bank".'</h4></div>';
                        echo '<p><input id="submit" type="submit" value="Next Question" name="submit" /></p>';                    
                    }
                    else{
                        $audiosrc ='<source src="./static/wrong.mp3"type="audio/mp3">';
                        playaudio($audiosrc);
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Incorrect!</h1></div>';
                        echo '<div><h4 id="current_bank">Amount Earned: $'. "$bank".'</h4></div>'; 
                        writescore();                      
                        echo '<h4><a href="gamepage.php">Play Again</a></h4>';
                    }
                }
                else if($_SESSION["question"]===9){
                    $_SESSION["question"]++;
                    if($answer == 'A'){
                        $audiosrc ='<source src="./static/rightsound.mp3"type="audio/mp3">';
                        playaudio($audiosrc);
                        $_SESSION["bank"] = $_SESSION["bank"] + 16000;
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Correct!</h1></div>';
                        echo '<div><h4 id="current_bank">Amount Earned: $'. "$bank".'</h4></div>';
                        echo '<p><input id="submit" type="submit" value="Next Question" name="submit" /></p>';                    
                    }
                    else{
                        $audiosrc ='<source src="./static/wrong.mp3"type="audio/mp3">';
                        playaudio($audiosrc);
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Incorrect!</h1></div>';
                        echo '<div><h4 id="current_bank">Amount Earned: $'. "$bank".'</h4></div>';
                        writescore();                       
                        echo '<h4><a href="gamepage.php">Play Again</a></h4>';
                    }
                }
                else if($_SESSION["question"]===10){
                    $_SESSION["question"]++;
                    if($answer == 'B'){
                        $audiosrc ='<source src="./static/rightsound.mp3"type="audio/mp3">';
                        playaudio($audiosrc);
                        $_SESSION["bank"] = $_SESSION["bank"] + 32000;
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Correct!</h1></div>';
                        echo '<div><h4 id="current_bank">Amount Earned: $'. "$bank".'</h4></div>';
                        echo '<p><input id="submit" type="submit" value="Next Question" name="submit" /></p>';                    
                    }
                    else{
                        $audiosrc ='<source src="./static/wrong.mp3"type="audio/mp3">';
                        playaudio($audiosrc);
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Incorrect!</h1></div>';
                        echo '<div><h4 id="current_bank">Amount Earned: $'. "$bank".'</h4></div>';
                        writescore();                       
                        echo '<h4><a href="gamepage.php">Play Again</a></h4>';
                    }
                }
                else if($_SESSION["question"]===11){
                    $_SESSION["question"]++;
                    if($answer == 'C'){
                        $audiosrc ='<source src="./static/rightsound.mp3"type="audio/mp3">';
                        playaudio($audiosrc);
                        $_SESSION["bank"] = $_SESSION["bank"] + 64000;
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Correct!</h1></div>';
                        echo '<div><h4 id="current_bank">Amount Earned: $'. "$bank".'</h4></div>';
                        echo '<p><input id="submit" type="submit" value="Next Question" name="submit" /></p>';                    
                    }
                    else{
                        $audiosrc ='<source src="./static/wrong.mp3"type="audio/mp3">';
                        playaudio($audiosrc);
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Incorrect!</h1></div>';
                        echo '<div><h4 id="current_bank">Amount Earned: $'. "$bank".'</h4></div>'; 
                        writescore();                      
                        echo '<h4><a href="gamepage.php">Play Again</a></h4>';
                    }
                }
                else if($_SESSION["question"]===12){
                    $_SESSION["question"]++;
                    if($answer == 'D'){
                        $audiosrc ='<source src="./static/rightsound.mp3"type="audio/mp3">';
                        playaudio($audiosrc);
                        $_SESSION["bank"] = $_SESSION["bank"] + 125000;
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Correct!</h1></div>';
                        echo '<div><h4 id="current_bank">Amount Earned: $'. "$bank".'</h4></div>';
                        echo '<p><input id="submit" type="submit" value="Next Question" name="submit" /></p>';                    
                    }
                    else{
                        $bank = $_SESSION["bank"];
                        $audiosrc ='<source src="./static/wrong.mp3"type="audio/mp3">';
                        playaudio($audiosrc);
                        echo '<div><h1>Incorrect!</h1></div>';
                        echo '<div><h4 id="current_bank">Amount Earned: $'. "$bank".'</h4></div>';
                        writescore();                       
                        echo '<h4><a href="gamepage.php">Play Again</a></h4>';
                    }
                }
                else if($_SESSION["question"]===13){
                    $_SESSION["question"]++;
                    if($answer == 'A'){
                        $audiosrc ='<source src="./static/rightsound.mp3"type="audio/mp3">';
                        playaudio($audiosrc);
                        $_SESSION["bank"] = $_SESSION["bank"] + 250000;
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Correct!</h1></div>';
                        echo '<div><h4 id="current_bank">Amount Earned: $'. "$bank".'</h4></div>';
                        echo '<p><input id="submit" type="submit" value="Next Question" name="submit" /></p>';                    
                    }
                    else{
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Incorrect!</h1></div>';
                        echo '<div><h4 id="current_bank">Amount Earned: $'. "$bank".'</h4></div>';
                        $audiosrc ='<source src="./static/wrong.mp3"type="audio/mp3">';
                        playaudio($audiosrc);                       
                        writescore();
                        echo '<h4><a href="gamepage.php">Play Again</a></h4>';
                    }
                }
                else if($_SESSION["question"]===14){
                    $_SESSION["question"]++;
                    if($answer == 'B'){
                        $audiosrc ='<source src="./static/rightsound.mp3"type="audio/mp3">';
                        playaudio($audiosrc);
                        $_SESSION["bank"] = $_SESSION["bank"] + 500000;
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Correct!</h1></div>';
                        echo '<div><h4 id="current_bank">Amount Earned: $'. "$bank".'</h4></div>';
                        echo '<p><input id="submit" type="submit" value="Next Question" name="submit" /></p>';                    
                    }
                    else{
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Incorrect!</h1></div>';
                        echo '<div><h4 id="current_bank">Amount Earned: $'. "$bank".'</h4></div>';
                        $audiosrc ='<source src="./static/wrong.mp3"type="audio/mp3">';
                        playaudio($audiosrc);
                        writescore();                       
                        echo '<h4><a href="gamepage.php">Play Again</a></h4>';
                    }
                }
                else if($_SESSION["question"]===15){
                    $_SESSION["question"]++;
                    if($answer == 'C'){
                        $_SESSION["bank"] = $_SESSION["bank"] + 1000000;
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>You won!</h1></div>';
                        echo '<div><h4 id="current_bank">Amount Earned: $'. "$bank".'</h4></div>'; 
                        $audiosrc ='<source src="./static/rightsound.mp3"type="audio/mp3">';
                        playaudio($audiosrc);
                        echo '<h4><a href="gamepage.php">Play Again</a></h4>';
                        
                        }
                    else{
                        $bank = $_SESSION["bank"];
                        echo '<div><h1>Incorrect!</h1></div>';
                        echo '<div><h4 id="current_bank">Amount Earned: $'. "$bank".'</h4></div>';
                        $audiosrc ='<source src="./static/wrong.mp3"type="audio/mp3">';
                        playaudio($audiosrc);
                        writescore();                       
                        echo '<h4><a href="gamepage.php">Play Again</a></h4>';
                        
                    }
                }
               
                function writescore()
                {
                    session_start();
                    if ($_SESSION["bank"]>=100)
                    {
                        $myfile = fopen("scores.txt", "a") or die("Unable to open file!");
                        $data =  $_SESSION['user'].'|'.$_SESSION["bank"];
                        fwrite($fp,PHP_EOL);
                        fwrite($myfile,$data."\r\n");
                        fclose($fp);
                    }

                }
                ?>
                </form> 
                <?php function playaudio($audiosrc)
                {                
                    echo '<audio autoplay volume="0.1">';
                    echo $audiosrc;
                    echo '</audio>';
                }?>
                
            </div>
        </body>
</html>

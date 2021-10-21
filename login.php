<?php  session_start();   // session starts with the help of this function 


if(isset($_SESSION['user']))   // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
 {
    header("Location:gamepage.php"); 
 }

if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
{

    $userN = $_POST['uname'];
    $passW = $_POST['psw'];
    $userlist = file ('users.txt');
    $scoreslist = file('scores.txt');
    $uscore = "";

    $success = false;
    foreach ($userlist as $user) {
        $user_details = explode('|', $user);
        if ($user_details[0] == $userN && $user_details[1] == $passW) {
            $success = true;
            $score = $user_details[2];
            break;
        }
    }

        if ($success)    //if the user succesfully login it sets $_SESSION['user'] to username and redirects to homepage
         {                                 

          $_SESSION['user']=$userN;
          $_SESSION['score']=$score;
          header('Location: gamepage.php');

        }

        else
        {
            echo "invalid UserName or Password";        
        }
}
 ?>  
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="./static/style.css" />
        <title></title>
    </head>           
    <body>
        <div class="container">
            <form action="" method="post">
                <div class="row">
                    <div class="col-25">
                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-25">     
                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>
                    </div>
                </div>
                <div class="row">
                    <button type="submit" name="login" value="LOGIN">Login</button>
                </diV>
                <a href="signup.php">Create Account</a>    
            </form>
        </div>
        
    </body>
 <html>
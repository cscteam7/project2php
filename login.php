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
<html lang="en">  
    <head>
        <title>Who wants to be Millonair</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="static/main.css">
    </head>
    <body>
        <div class="formframe">
            <div class="formlogin">
                <div class="wrap-login100">
                    <form class="loginvalidation" action="" method="post" >
                        <span class="login100-form-title">
                           Login In
                        </span><br><br>
                        <div class="wrap-input100" >
                            <span class="focus-input100" ><label for="newuname" class="focus-input100"><b>Username</b></label></span> <br>
                            <input class="input100"type="text" name="uname" required>
                        </div>
                        <div class="wrap-input100 ">
                            <span class="focus-input100" ><label for="newpass" class="focus-input100"><b>Password</b></label></span> <br>
                            <input class="input100" type="password" name="psw" required>
                        </div>
                        <div class="formlogin-form-btn">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>              
                                    <button class="login100-form-btn" type="submit" name="login" value="login">
                                        Log in
                                    </button>
                                </div>
                            </div>
                        <div class="text-center p-t-115">
                            <span class="txt1">
                                Don’t have an account? Sign Up
                            </span>
                            <a class="txt2" href="signup.php">
                                Sign Up
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

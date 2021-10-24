<?php
if(isset($_POST['create'])) 
{
$userlist = file ('users.txt');
$userN = $_POST['uname'];
$passW = $_POST['psw'];;
$users = array();
foreach ($userlist as $user) 
{
    $users = explode('|', $user);
}
if (in_array($userN, $users)) {
    
    $message = "user already exists";
} 
else {
$score = '00';
$myfile = fopen("users.txt", "a") or die("Unable to open file!");
$data =  $userN.'|'.$passW.'|'.$score;
fwrite($fp,PHP_EOL);
fwrite($myfile,$data."\r\n");
fclose($fp);
header('Location: login.php');
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
                            New Account
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
                                    <button class="login100-form-btn" type="submit" name="create" value="create">
                                        Sign up
                                    </button>
                            </div>
                        </div>
                        <div class="text-center p-t-115">
                            <span class="txt1">
                                Already have an account?
                            </span>
                            <a class="txt2" href="login.php">
                                Login
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
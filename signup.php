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
if (in_array($userN, $users, true)) {
    
    echo "User exisits";
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
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" type="text/css" href="./static/style.css" />
    <title></title>
  </head> 
  <body>
    <h1 align="center">Create Acount</h1><br>

    <form action="" method="post">
        <div class="container">
            <label for="newuname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required><br>
        
            <label for="newpsw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required><br>      
            <button type="submit" name="create" value="create">Create Account</button>
            <a href="login.php">Already have Account</a>   
        </div>
    </form>
  </body>
</html>
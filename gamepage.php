  <?php
  session_start();
  if(isset($_POST['logout']))   // it checks whether the user clicked logout button or not 
  {
    session_start();
    echo "Logout Successfully ";
    session_destroy();
    header("Location: login.php");//  Destroys Session  and redirect to loginpage
  } 
    ?> 
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="./static/style.css" />
        <title></title>
    </head>           
    <body class="gamepage">
    <p>Wellcome to Who wants to be a millionare <?php echo $_SESSION['user']?> </p>
    <p>Your Current Score is <?php echo $_SESSION['score']?> </p>
    <form action="" method="post">
        <button type="submit" name="logout" value="logout">Log Out</button>
    </form>
    </body>
</html>
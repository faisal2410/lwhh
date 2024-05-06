<?php
session_start([
    'cookie_lifetime'=>300
]);
// session_destroy();
$_SESSION['loggedin']=false;
$error=false;

if(isset($_POST['username'])&& isset($_POST['password'])){
    if($_POST['username']=='admin' && md5($_POST['password'])== "81dc9bdb52d04dc20036dbd8313ed055"){

        $_SESSION['loggedin']=true;
    }else{
        $error=true;
        $_SESSION['loggedin'] = false;
    }
}

if(isset($_POST['logout'])){
    session_destroy();
    $_SESSION['loggedin'] = false;
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
    <title>Simple Auth Example</title>
</head>

<body>
    <div>
        <h2>Simple Auth Example</h2>
    </div>
    <div>
        <?php 
        // echo md5("1234")."<br/>";
        
        if(true==$_SESSION['loggedin']){
           echo "<h3>Hello Admin, Welcome</h3>";
        }else{
            echo " <h3>Hello Stranger, Login Below</h3>";
        }
        ?>
       
    </div>
    <div>
        <?php
        if(true==$error){
            echo "<blockquote> Username and Password did not match.Try again</blockquote>";
        }
        if(false==$_SESSION['loggedin']):?>

        <form method="POST">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <button type="submit" name="submit">Login</button>
    
        </form>
        <?php else: ?>
          <form action="auth.php" method="POST">
            <input type="hidden" name="logout" value="1">
            
            <button type="submit" name="submit">Logout</button>
    
        </form>
        <?php endif ;?>

    </div>
</body>

</html>
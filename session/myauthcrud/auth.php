<?php
session_start([
    'cookie_lifetime' => 300
]);

$_SESSION['loggedin'] = false;
$error = false;

$fp = fopen("./data/users.txt", "r");
$data=fgetcsv($fp);

// print_r($data);
// echo $data[0];
// echo $data[1];
// die();


if(isset($_POST['username']) && isset($_POST['password'])){

    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
  
 

    echo $username,$password;
  
    
    if ($username && $password) {
        $_SESSION['loggedin'] = false;
        $_SESSION['user'] = false;  
            
            if (($data[0]==$username && $data[1] == sha1($password))|| ($data[2] == $username && $data[3] == sha1($password))) {
              
                
                $_SESSION['loggedin'] = true;
                $_SESSION['user']=$username;
                header('location:index.php');
            } 
        
        if(!$_SESSION['loggedin']){

            $error=true;
        }
    }
    
}



if (isset($_GET['logout'])) {
    $_SESSION['loggedin'] = false;
    $_SESSION['user'] = false;
    session_destroy();
    header('location:index.php');
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

        if (true == $_SESSION['loggedin']) {
            echo "<h3>Hello Admin, Welcome</h3>";
        } else {
            echo " <h3>Hello Stranger, Login Below</h3>";
        }
        ?>

    </div>
    <div>
        <?php
        if (true == $error) {
            echo "<blockquote> Username and Password did not match.Try again</blockquote>";
        }
        if (false == $_SESSION['loggedin']) : ?>

            <form method="POST">
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
                <button type="submit" name="submit">Login</button>

            </form>
        <?php else : ?>
            <form action="auth.php" method="POST">
                <input type="hidden" name="logout" value="1">

                <button type="submit" name="submit">Logout</button>

            </form>
        <?php endif; ?>

    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <title>Form Example</title>
    <style>
        body{
            margin-top: 30px;
        }
    </style>
</head>

<body>
<div class="container">
    <div class="row">
        <div class="column column-60 column=offset-20">           
            <h2><?php echo "Our First Form"?></h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum asperiores, autem nam tempora repudiandae mollitia. Minus qui odio aliquid, animi sit maiores facilis accusantium a reiciendis recusandae ducimus, reprehenderit vitae?</p>
            <p>
                <?php if(isset($_REQUEST['fname']) && isset($_REQUEST['lname']) && !empty($_REQUEST['fname']) && !empty($_REQUEST['lname'])): ?>
              
                First Name:<?php echo $_REQUEST['fname'];?> <br/>
                Last Name: <?php echo $_REQUEST['lname']; ?> <br/>
                <?php endif; ?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <form method="GET">
                <label for="fname">First Name</label>
                <input type="text" name="fname" id="fname">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" id="lname">
                <button type="submit">Submit</button>

            </form>
        </div>
    </div>
</div>
</body>

</html>
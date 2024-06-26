<?php
$allowedTypes=['image/png','image/jpg','image/jpeg'];
$size=5*1024*1024;

if(isset($_FILES['photo'])){
    $totalFiles=count($_FILES['photo']['name']);
    for($i=0; $i<$totalFiles; $i++){

        if(in_array($_FILES['photo']['type'][$i],$allowedTypes)!==false && $_FILES['photo']['size'][$i]<$size){
    
            move_uploaded_file($_FILES['photo']['tmp_name'][$i],"./files/".$_FILES['photo']['name'][$i]);
        }
    }
}
?>

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
        body {
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column=offset-20">
                <h2>Select/Dropdowns</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum asperiores, autem nam tempora repudiandae mollitia. Minus qui odio aliquid, animi sit maiores facilis accusantium a reiciendis recusandae ducimus, reprehenderit vitae?</p>

          
                    <pre>
                    <p>
                     <?php   
                     print_r($_POST);
                     print_r($_FILES);
                      ?>
                    </p>
                    </pre>
             

            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST" enctype="multipart/form-data">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname">

                    <label for="photo">Photo</label>
                    <input type="file" name="photo[]" id="photo"><br/>
                    <input type="file" name="photo[]" id="photo"><br/>
                    <input type="file" name="photo[]" id="photo"><br/>

                    <button type="submit">Submit</button>

                </form>
            </div>
        </div>
    </div>
</body>

</html>
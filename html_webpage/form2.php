<?php
include_once "form2_functions.php";
$fruits=["mango","orange","Banana","apple","lemon","peach"];
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

                <p>

                    <?php 

                    $sfruits=$_POST['fruits']??array();
                 

                           if(count($sfruits)>0){
                    echo "You have selected: ".join(", ",$sfruits);
                  }

            //   if(isset($_POST['fruits'])){

            //       $sfruits=$_POST['fruits'];
            //       if(count($sfruits)>0){
            //         echo "You have selected: ".join(", ",$sfruits);
            //       }
            //   }
                    // $sfruits= $_POST['fruits'];
                    // if( count($sfruits)>0){
                    //     echo "You have selected: ".join(".",$sfruits);
                    // }
                 
                 
                  
                    // if(isset($_POST['fruits']) && $_POST['fruits']!=''){
                    //    printf("You have selected: %s", htmlspecialchars($_POST['fruits'])); 
                    // }
                    
                    ?>
                </p>
                
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST">
                    <label for="fruits">Select Some Fruits</label>
                    <select style="height:200px;" name="fruits[]" id="fruits" multiple>
                       <option value="" disabled selected>Select Some Frutis</option> 
                       <?php displayOptions($fruits, $sfruits); ?>
                       
                    </select>


                    <button type="submit">Submit</button>

                </form>
            </div>
        </div>
    </div>
</body>

</html>
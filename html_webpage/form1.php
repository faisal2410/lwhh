<?php
include_once "functions.php";
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
                <h2><?php echo "Our First Form" ?></h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laborum asperiores, autem nam tempora repudiandae mollitia. Minus qui odio aliquid, animi sit maiores facilis accusantium a reiciendis recusandae ducimus, reprehenderit vitae?</p>
                <p>
                    <?php
                    $fname = "";
                    $lname = "";
                    $checked = "";

                    if (isset($_REQUEST['cb1']) && !empty($_REQUEST['cb1'] == 1)) {
                        $checked = 'checked';
                    }


                    ?>
                    <?php if (isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])) :
                        // $fname =htmlspecialchars( $_REQUEST['fname']);
                        $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);


                    endif; ?>

                    <?php if (isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])) :
                        // $lname =htmlspecialchars( $_REQUEST['lname']);
                        $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                    endif; ?>
                </p>
                <p>
                    First Name: <?= $fname; ?> <br />
                    Last Name: <?= $lname; ?> <br />
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <form method="POST">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" value="<?= $fname; ?>">
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" value="<?= $lname; ?>">
                    <div>
                        <input type="checkbox" name="cb1" id="cb1" value=1 <?= $checked; ?>>
                        <label for="cb1" class="label-inline">Some Checkbox</label>
                    </div>

                    <label class="label">Select Some Fruits</label>

                    <input type="checkbox" name="fruits[]" value="orange" <?php isFruitChecked( 'orange'); ?>>
                    <label class="label-inline">Orange</label><br />
                    <input type="checkbox" name="fruits[]" value="mango" <?php isFruitChecked( 'mango'); ?>>
                    <label class="label-inline">Mango</label><br />
                    <input type="checkbox" name="fruits[]" value="banana" <?php isFruitChecked( 'banana'); ?>>
                    <label class="label-inline">Banana</label><br />
                    <input type="checkbox" name="fruits[]" value="lemon" <?php isFruitChecked( 'lemon'); ?>>
                    <label class="label-inline">Lemon</label><br />


                    <button type="submit">Submit</button>

                </form>
            </div>
        </div>
    </div>
</body>

</html>
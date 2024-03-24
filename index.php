<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p>This is a <?php echo "Pangungusap"; ?> paragraph</p>
    <?php echo "This is also a paragraph"; ?>

    <br/>
    <br/>


    <?php

    $_SESSION["username"] = "Ade";
    echo $_SESSION["username"];

   

    //     $firstName = "Ade";
    //     $age = 27;

    // ?>  

    <!-- // <p> Hi my name is <?php  echo $firstName; ?></p> -->

</body>
</html>
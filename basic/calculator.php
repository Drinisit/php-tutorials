<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
   
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
 <input type="number" name="num01" placeholder="Number one">
 <select name="operator" id="">
    <option value="add">+</option>
    <option value="subtract">-</option>
    <option value="multiply">x</option>
    <option value="divide">/</option>
 </select>
 <input type="number" name="num02" placeholder="Number two">
 <button>Calculate</button>
</form>

<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
        $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlspecialchars($_POST["operator"]);

        $errors = false;
        //to check if the fields have input in it
        if(empty($num01) || empty($num02) || empty($operator)){
            echo "fill in all fields";
            echo "<br>";
            $errors = true;
        }
        //to check if the input is number or has string inside
        if(!is_numeric($num01)  || !is_numeric($num02)){
            echo "only numbers!";
            $errors = true;
        }

        if(!$errors){

            $value = 0;

            switch ( $operator){
               case "add":
                $value = $num01 + $num02;
                break;
               case "subtract":
                $value = $num01 - $num02;
                break;
               case "multiply":
                $value = $num01 * $num02;
                break;
               case "divide":
                $value = $num01 / $num02;
                break;

                default:
                echo "something went wrong";
            }

            echo "result = " . $value;
        }
    }
?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Simple Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
      <form  action="<?php echo $_SERVER["PHP_SELF"]?>" method="GET" >

    <label for="">Enter the first number</label> <br>
    <input type="number" name="num1"> <br> <br>
    <label for="">Enter the second number</label> <br>
    <input type="number" name="num2"> <br>
   
    <div>
            <input type="submit" value="add" name="add">
            <input type="submit" value="subtract" name="subtract">
            <input type="submit" value="product" name="multiply">
            <input type="submit" value="division" name="divide">
        </div>

        <label for="result">Result</label>
        <input type="text" id="result" value="<?php echo $result ?>" >
    
       
      </form>
        
       </table>

       <?php

if (isset($_GET['operation'])){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operation = $_GET['operation'];
    $result = "";
   

    switch ($operation) {
        case "add":
            $result = $num1 + $num2;
            break;
        case "subtract":
            $result = $num1 - $num2;
            break;
        case "multiply":
            $result = $num1 * $num2;
            break;
        case "divide":
            if ($num2 == 0) {
                    $result = 'null';
            } else {
                $result = $num1 / $num2;
            }
            break;
    
        default:
        echo $result = "MATH ERROR";
        break;
    }
}


?>

</body>
</html>
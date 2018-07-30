/**
 * Created by PhpStorm.
 * User: Joy
 * Date: 7/31/2018
 * Time: 2:25 AM
 */
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
</head>
<body>
<form>
    <input type="text" name="num1" placeholder="Num1">
    <input type="text" name="num2" placeholder="Num2">
    <select name="op">
        <option>None</option>
        <option>Add</option>
        <option>Sub</option>
        <option>Mul</option>
        <option>Div</option>
    </select>
    <br>
    <input type="submit" name="submit" value="Result">
</form>
<br>
<p>Result Is :</p>
<?php
if(isset($_GET['submit'])){
    $result1=$_GET['num1'];
    $result2=$_GET['num2'];
    $op=$_GET['op'];
    switch($op){
        case "None":
            echo "Nothing";
            break;
        case "Add":
                echo $result1+$result2;
                break;
            case "Sub":
                echo $result1-$result2;
                break;
        case "Mul":
                echo $result1*$result2;
                break;
        case "Div":
                echo $result1/$result2;
                break;
    }
}
?>
</body>
</html>
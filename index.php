<!DOCTYPE html>
<html>
<head>
<title> My First PHP Project </title>
<link rel="stylesheet" type="text/css" href="calculator.css">
</head>
<body>
   <form>
   <input type="text" name="number1" placeholder="number 1">
   <input type="text" name="number2" placeholder="number 2">

   <select name="operator">
   <option>None</option>
   <option>Add</option>
   <option>Subtract</option>
   <option>Multiply</option>
   <option>Divide</option>
   </select>
   <br>
   <br>
   <button type="submit" value="Submit" name="submit"> Calculate </button>
   </form>
   <p>The answer for the computation is: </p>
   <?php
      if (isset($_GET['submit'])) {
          $result1 = $_GET['number1'];
          $result2 = $_GET['number2'];
          $operator = $_GET['operator'];

      switch ($operator){
          case "None":
            echo "Error! No operator chosen!";
          break;
          case "Add":
            echo $result1 + $result2;
          break;
          case "Subtract":
            echo $result1 - $result2;
          break;
          case "Multiply":
            echo $result1 * $result2;
          break;
          case "Divide":
            echo $result1 / $result2;
          break;
      }

    }
?>
</body>
</html>
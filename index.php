<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container"></div>
    This is my first php website.
    <?php
       echo "Hello! This is printed using php.";
       // single line comment: xyz

       /*    
           This
           is
           a
           multiline
           comment.
       */
      echo "<br>";
      $variable1 = 15;
      $variable2 = 5;
      
      echo $variable1;
      echo "<br>";
      echo $variable2;

      echo "<br>";
      echo "<br>";

      echo $variable1 + $variable2;
      echo "<br>";

      // Operations in php :-
    //   Arithmatic Operators
    echo "<h1>Arithmatic Operations</h1>";
    echo "The value of variable1 + variable2 is ";
    echo $variable1 + $variable2;
    echo "<br>";

    echo "The value of variable1 - variable2 is ";
    echo $variable1 - $variable2;
    echo "<br>";

    echo "The value of variable1 * variable2 is ";
    echo $variable1 * $variable2;
    echo "<br>";

    echo "The value of variable1 / variable2 is ";
    echo $variable1 / $variable2;
    echo "<br>";

    //   Assignment Operators
    echo "<h1>Assignment Operations</h1>";
    $newVar = $variable1;
    echo "The value of new variable is ";
    echo $newVar;
    echo "<br>";

    echo $newVar += 1;
    echo "<br>";

    echo $newVar -= 1;
    echo "<br>";

    echo $newVar *= 2;
    echo "<br>";

    echo $newVar /= 3;
    echo "<br>";

    //   Comparison Operators
    echo "<h1>Comparison Operations</h1>";
    //   Increment/Decrement Operators
    //   Logical Operators

    ?>
</body>
</html>

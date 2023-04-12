<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hello World</title>
    </head>
    <body>
        <?php echo "Hello World"; ?>
        <?php echo "<p>Hello World !!</p>"; ?>
        <p>Hello World</p>
        <?php
            $name = "John";
            $surname = "Doe";
            $age = 32;
            echo "I" . " am" . " using" . " concatenation.<br>";
            $sentence = "My name is " . $name . " " . 
            $surname . ", and I am " . $age . " years
            old.<br>";
            echo $sentence;
            echo gettype($age) . "<br>";
            echo gettype($sentence);
        ?>
    </body>
</html>
Hello, World! x1
<h1>Hello, World!</h1>
<?php
    echo "Hello, World! x3";
?>
<br>
Hi, World!
<br>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo '123'; ?></h1>
</body>
</html>

<?php
    echo "I'm just playing around with PHP, ";
    // Single line Comment
    /* Multiple line Comment */
    echo "Any Doubts?";

    // Echo multiple items printing
    echo 123, "Hello, World!", 10.5;

    // Print
    print "Hello, World!";

    // print_r() - Prints single values and arrays
    print_r([1,2,3]);

    // var_dump() - Returns information about the variable
    var_dump([1,2,3]);
    var_dump(10.5);
    var_dump("Hello, World!");
    var_dump(true);

    // var_export() - Similar to var_dump(). Outputs a string representation of a variable.
    var_export('Hello');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1><?php echo 'POST ONE' ?></h1>
</body>
</html>
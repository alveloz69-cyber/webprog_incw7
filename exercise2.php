<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions Lab</title>
</head>
<body>
    <h1>PHP Functions Lab</h1>
    <h2>Navigation</h2>
    <ul>
        <li><a href="index.php"> <?php echo "Homepage"?> </a></li>
        <li><a href="exercise1.php"> <?php echo "Exercise 1: Eligibility Checker"?> </a></li>
        <li><a href="exercise3.php"><?php echo  "Exercise 3: Random Event and Scope?"?></a></li>
    </ul>
<?php

// Calculate area only when both dimensions are valid.
function calculateArea($length, $width) {

    // Reject non-numeric values.
    if (!is_numeric($length) || !is_numeric($width)) {
        throw new InvalidArgumentException(
            "Both dimensions must be numeric."
        );
    }

    // Convert numeric strings and other numeric values to numbers.
    $length = (float) $length;
    $width = (float) $width;

    // Reject negative dimensions.
    if ($length < 0 || $width < 0) {
        throw new InvalidArgumentException(
            "Dimensions cannot be negative."
        );
    }

    // Return the area without printing it inside the function.
    return $length * $width;
}

// Test valid and invalid input pairs.
$tests = [
    [3, 4],
    [7.4, 7.5],
    ["2.5", "4"],
    [0, 4],
    [-1, 4],
    ["two", 4]
];

foreach ($tests as $test) {
    try {
        $area = calculateArea($test[0], $test[1]);

        echo "Area: " . $area . " square feet<br>";
    } catch (InvalidArgumentException $error) {
        echo "Error: " . $error->getMessage() . "<br>";
    }
}

?>

</body>
</html>

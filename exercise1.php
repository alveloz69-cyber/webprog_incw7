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
        <li><a href="exercise2.php"> <?php echo "Exercise 2: Area Calculator" ?></a></li>
        <li><a href="exercise3.php"><?php echo  "Exercise 3: Random Event and Scope?"?></a></li>
    </ul>
<?php

// Check whether a participant meets the age requirement.
function isEligible($age = 18) {
    return $age >= 18;
}

// Test different ages, including the default argument.
$ages = [17, 18, 21];

foreach ($ages as $age) {
    if (isEligible($age)) {
        echo "Age $age: Eligible<br>";
    } else {
        echo "Age $age: Not eligible<br>";
    }
}

// Test the default value of 18.
if (isEligible()) {
    echo "Default age: Eligible<br>";
} else {
    echo "Default age: Not eligible<br>";
}

?>

</body>
</html>
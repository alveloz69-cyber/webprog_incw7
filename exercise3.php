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
        <li><a href="exercise2.php"> <?php echo "Exercise 2: Area Calculator" ?></a></li>
    </ul>
<?php

// Return a random Boolean value.
function isBitten() {
    return rand(0, 1) === 1;
}

// Return a message using an explicit parameter.
function winnerMessage($name) {
    return "$name is the winner!";
}

// Store the winner's name.
$winner = "Charlie";

// Call the random function.
$bitten = isBitten();

// Display the appropriate message.
if ($bitten) {
    echo "Charlie bit your finger!<br>";
} else {
    echo "Charlie did not bite your finger!<br>";
}

// Call the message function.
echo winnerMessage($winner);

?>

</body>
</html>
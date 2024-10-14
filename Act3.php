<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for Loop</title>
</head>
<body>
    <h1>Multiplication</h1>
    <form method="POST">
        <button type="submit" name="1">Show Multiplication Table for 1</button>
    </form>
    <form method="POST">
        <button type="submit" name="2">Show Multiplication Table for 2</button>
    </form>
    <form method="POST">
        <button type="submit" name="3">Show Multiplication Table for 3</button>
    </form>
    <form method="POST">
        <button type="submit" name="4">Show Multiplication Table for 4</button>
    </form>
    <form method="POST">
        <button type="submit" name="5">Show Multiplication Table for 5</button>
    </form>
    <form method="POST">
        <button type="submit" name="6">Show Multiplication Table for 6</button>
    </form>
    <form method="POST">
        <button type="submit" name="7">Show Multiplication Table for 7</button>
    </form>
    <form method="POST">
        <button type="submit" name="8">Show Multiplication Table for 8</button>
    </form>
    <form method="POST">
        <button type="submit" name="9">Show Multiplication Table for 9</button>
    </form>
    <form method="POST">
        <button type="submit" name="10">Show Multiplication Table for 10</button>
    </form>


<?php
if (isset($_POST['1'])) {
    $number = 1;
    echo "<h3>Multiplication Table for $number</h3>";

    for ($i = 1; $i <= 10; $i++) {
        $result = $number * $i;
        echo "$number x $i = $result<br>";
    }
}
if (isset($_POST['2'])) {
    $number2 = 2;
    echo "<h3>Multiplication Table for $number2</h3>";

    for ($i = 1; $i <= 10; $i++) {
        $result = $number2 * $i;
        echo "$number2 x $i = $result<br>";
    }
}

if (isset($_POST['3'])) {
    $number3 = 3;
    echo "<h3>Multiplication Table for $number3</h3>";

    for ($i = 1; $i <= 10; $i++) {
        $result = $number3 * $i;
        echo "$number3 x $i = $result<br>";
    }
}

if (isset($_POST['4'])) {
    $number4 = 4;
    echo "<h3>Multiplication Table for $number4</h3>";

    for ($i = 1; $i <= 10; $i++) {
        $result = $number4 * $i;
        echo "$number4 x $i = $result<br>";
    }
}

if (isset($_POST['5'])) {
    $number5 = 5;
    echo "<h3>Multiplication Table for $number5</h3>";

    for ($i = 1; $i <= 10; $i++) {
        $result = $number5 * $i;
        echo "$number5 x $i = $result<br>";
    }
}

if (isset($_POST['6'])) {
    $number6 = 6;
    echo "<h3>Multiplication Table for $number6</h3>";

    for ($i = 1; $i <= 10; $i++) {
        $result = $number6 * $i;
        echo "$number6 x $i = $result<br>";
    }
}

if (isset($_POST['7'])) {
    $number7 = 7;
    echo "<h3>Multiplication Table for $number7</h3>";

    for ($i = 1; $i <= 10; $i++) {
        $result = $number7 * $i;
        echo "$number7 x $i = $result<br>";
    }
}
if (isset($_POST['8'])) {
    $number8 = 8;
    echo "<h3>Multiplication Table for $number8</h3>";

    for ($i = 1; $i <= 10; $i++) {
        $result = $number8 * $i;
        echo "$number8 x $i = $result<br>";
    }
}

if (isset($_POST['9'])) {
    $number9 = 9;
    echo "<h3>Multiplication Table for $number9</h3>";

    for ($i = 1; $i <= 10; $i++) {
        $result = $number9 * $i;
        echo "$number9 x $i = $result<br>";
    }
}

if (isset($_POST['10'])) {
    $number10 = 10;
    echo "<h3>Multiplication Table for $number10</h3>";

    for ($i = 1; $i <= 10; $i++) {
        $result = $number10 * $i;
        echo "$number10 x $i = $result<br>";
    }
}
?>
    
</body>
</html>
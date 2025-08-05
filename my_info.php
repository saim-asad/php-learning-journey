<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your Project Title</title>

    <!-- Google Fonts (Example: Roboto) -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS (if you have your own) -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
// Output a big heading and some text
echo "<h1>This is my second PHP code and I will use all the tips I studied today.</h1><br>";
echo "I will use echo and print for output.<br>";
echo "I will use keywords like global and static.<br>";
echo "I will add comments also.<br>";

// Global variable defined outside
$box = 2;

function mytest() {
    // Make $box accessible inside this function
    global $box;
    // Static variable example
    static $count = 0;
    $count++;

    echo "Inside function, global \$box = $box<br>";
    echo "Function called $count times<br>";
}

// Call the function
mytest();

// Use print
print "This is outside function: box = $box<br>";

?>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <!-- Bootstrap JS (requires jQuery) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS (if you have your own) -->
    <script src="scripts.js"></script>
</body>
</html>
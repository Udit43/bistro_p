<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bachelors Bistro</title>
    <link rel="stylesheet" href="">
    <link rel="shortcut icon" type="image/png" href="favicon-32x32.png">
</head>
<body>
<?php
    session_start();
    echo "Welcome " . $_SESSION['username'];
    echo "<br>";
    echo "<a href='logout.php'>Logout</a>";
?>
</body>
</html>
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
    session_destroy();
    echo "You successfully logout. Click here to <a href='premium.html'>login again</a>"
?>

</body>
</html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
// SESSIONS
//Good to use for sensetive information
// Seesion exists as long as the same browser is open

session_start();
// Store information
$_SESSION["Name"] = "Shomakhmud";
$_SESSION["Age"] = 21;

echo "Hello ". $_SESSION["Name"];

session_destroy();
?>
</body>
</html>

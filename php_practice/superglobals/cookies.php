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
// Cookie
//Small file that the webserver stores in the client computer

//ARGUMENTS COOKIES
// Name
//Value
//Expire
//Path
//Domain
//Security

//If you do not include an expiration date, the cookie will be stored for the current session
$time = time()-86400 * 30;

setcookie("name", "Shomakhmud", $time);

print_r($_COOKIE);

echo "<br>";
echo $_COOKIE["name"];
?>






</body>
</html>

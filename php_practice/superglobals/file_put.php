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



if (isset($_POST['submit'])) {
    $myFile = fopen("uploads/file.txt", "a");
    $txt = "My age is ". $_POST['age'] . "\n";
    fwrite($myFile, $txt);

    fclose($myFile);

}



?>
<form action="file_put.php" method = "post">
    <input type="text" name="age">
    <input type="submit" name="submit">
</form>

</body>
</html>

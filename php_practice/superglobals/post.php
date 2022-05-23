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
if (isset($_POST)) {
    echo $_POST['name']. ", your form is submitted";
}
print_r($_POST);
?>

<form action="post.php" method="post">
    <input type="text" name="name">
    <input type="text" name="age">
    <button type ="submit">SUBMIT</button>
</form>

</body>
</html>

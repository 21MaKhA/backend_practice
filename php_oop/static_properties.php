<?php
class Weather {
    public static $tempConditions = ['cold', 'mild', 'warm'];

    public static function celciusToFarenheit($c) {
        return$c*9/5+32;
    }

    public static function determinTempComditions($f){
        if($f<40){
            return self::$tempConditions[0];
        }elseif ($f<70) {
            return self::$tempConditions[1];
        }else{
        return self::$tempConditions[2];
        }
    }

}

//print_r(Weather::$tempConditions);
//echo Weather::celciusToFarenheit(20);
echo Weather:: determinTempComditions(70);

?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>

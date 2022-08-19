<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    function connect(){
        $dsn="mysql:host=localhost;dbname=shopnoithat";
        $user="root";
        $pass="";
        $db= new PDO($dsn,$user,$pass,array(PDO::MYSQL_ATTR_COMPRESS=>"SET NAMES utf8"));
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $db;
    }
    $db=connect();    
    ?>
</body>

</html>
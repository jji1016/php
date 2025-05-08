<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <?php
        $arr =  array("빨강","주황","노랑");
        var_dump($arr);
        echo "<br>";
        echo $arr[0];
        echo "<br>";
    ?>
    <?php
        class Hello {
            public $name ="홍길동";
            function sayHello() {
                return $this->name."님 반갑습니다";
            }
        }
        $msg = new Hello();
        echo $msg->sayHello();
        echo "<br>";
        var_dump($msg);
        echo "<br>";
        $myNull = NULL;
        var_dump($myNull);
    ?>
</body>
</html>
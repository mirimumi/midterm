<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ใบงาน4</title>
    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;1,100&display=swap"
        rel="stylesheet">
    <style>
    body {
        font-family: 'Prompt', sans-serif;
    }
    </style>
</head>

<body>
    <?php
    $salary = 100000;
     if($salary >= 10000){
        $bonus = ($salary * 3);
    }else if($salary>=50000){
        $bonus =($salary * 2 );
    }else{
        $bonus = ($salary * 1);
    }

    echo "เงินเดือน = ".number_format($salary)."บาท"."<br>";
    echo "-----------------"."<br>";
    echo "ได้รับโบนัส = ".number_format($bonus,2)."บาท"."<br>";
    echo "เงินเดือนสุทธิ = ".number_format($bonus + $salary,2)."บาท"."<br>";
    

?>
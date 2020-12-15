<?php

$r1 = rand(10, 200);
$r2 = rand(10, 200);

$x1 = rand(0, 400 - $r1);
$y1 = rand(0, 400 - $r1);
$x2 = rand(0, 400 - $r2);
$y2 = rand(0, 400 - $r2);



$distSq = ($x1 - $x2) * ($x1 - $x2) +
    ($y1 - $y2) * ($y1 - $y2);
$radSumSq = ($r1 + $r2) * ($r1 + $r2);

if ($distSq == $radSumSq) {
    $result = 'Circles touch each other';
} else if ($distSq > $radSumSq) {
    $result = 'Circles do not touch each other';
} else {
    $result = 'Circles intersect to each other';
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container {
            height: 400px;
            width: 400px;
            border: 1px solid black;
            position: relative;
        }

        .circle1 {
            border: 1px solid red;
            width: <?php print $r1; ?>px;
            height: <?php print $r1; ?>px;
            top: <?php print $y1; ?>px;
            left: <?php print $x1; ?>px;
        }

        .circle2 {
            border: 1px solid green;
            width: <?php print $r2; ?>px;
            height: <?php print $r2; ?>px;
            top: <?php print $y2; ?>px;
            left: <?php print $x2; ?>px;
        }

        .circle1, .circle2 {
            border-radius: 50%;
            position: absolute;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="circle1"></div>
    <div class="circle2"></div>
</div>
<p><?php print $result; ?></p>
</body>
</html>

<?php

header("Content-Type: image/png");

$image = imagecreate(556, 556);

$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 5, 60, 120, "Manipulacao imagens PHP", $red);
imagepng($image);
imagedestroy($image);
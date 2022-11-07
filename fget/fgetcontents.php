<?php

$filename = "mudei13_57.png";

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);
$mimetype = $fileinfo->file($filename);

$base64encode =  "data:" . $mimetype . ";base64," . $base64;

?>

<!-- /*apresentar imagem na tela -->
<a href="<?=$base64encode?>" target="_blank">Link para a imagem</a>
<img src="<?=$base64encode?>">
<?php

require "vendor/autoload.php";
use Intervention\Image\ImageManager as Image;

$imagem = new Image();
// open an image file
$img = $imagem->make('img/notredame.jpeg');

// resize image instance
$img->resize(320, 240);

// // insert a watermark
// $img->insert('img/notredam2e.jpeg');

// save image in desired format
$img->save('img/notredam2e.jpeg');
echo '<img src="img/notredam2e.jpeg" />';
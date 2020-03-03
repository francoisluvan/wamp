<!DOCTYPE html>

<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Multimedia</title>
</head>
<body>

<?PHP
header ("Content-type: image/png");
$image= imagecreate(500,200);
$orange= imagecolorallocate($image,255,128,0);
imagepng($image,"monimage.png");

?>

<img src="monimage.png"/>
<p>azertyyuiop</p>

</body>
</html>

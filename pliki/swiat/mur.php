<?
header("content-type: image/gif");
$rysunek=imagecreate(15,15);
$kolorbialy=imagecolorallocate($rysunek,255,255,255);
$kolorczarny=imagecolorallocate($rysunek,0,0,0);


imagefill($rysunek,0,0,$kolorczarny);
for($i=0;$i<=45;$i++){imagesetpixel($rysunek,rand()%15-1,rand()%15-1,$kolorbialy);};
imagegif($rysunek);

?>
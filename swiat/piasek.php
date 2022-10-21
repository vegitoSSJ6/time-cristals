<?
header("content-type: image/gif");
$rysunek=imagecreate(15,15);
$kolorczarny=imagecolorallocate($rysunek,0,0,0);
$kolorpiasek=imagecolorallocate($rysunek,255,255,120);


imagefill($rysunek,0,0,$kolorpiasek);
for($i=0;$i<=45;$i++){imagesetpixel($rysunek,rand()%15-1,rand()%15-1,$kolorczarny);};
imagegif($rysunek);

?>
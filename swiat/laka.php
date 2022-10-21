<?
header("content-type: image/gif");
$rysunek=imagecreate(15,15);
$kolorbialy=imagecolorallocate($rysunek,255,255,255);
$kolorczarny=imagecolorallocate($rysunek,0,0,0);
$kolorczerwony=imagecolorallocate($rysunek,255,0,0);
$kolorzielony=imagecolorallocate($rysunek,0,255,0);
$kolorzolty=imagecolorallocate($rysunek,0,0,255);


imagefill($rysunek,0,0,$kolorzielony);
for($i=0;$i<=45;$i++){imagesetpixel($rysunek,rand()%15-1,rand()%15-1,$kolorczarny);};
imagegif($rysunek);

?>
<?
class obiekt{var $symbol='X'; $solid=1; $ograniczenie=1;
	function init($symbol,$solid,$ograniczenie){
$this->symbol=$symbol; $this->solid=$solid; $this->ograniczenie=$ograniczenie;}}

class postac{$widok=new obiekt;
	function init($widok){print $widok->symbol;}}	    

class mapa{$pokaz[30,58]=new obiekt;

$laka=new obiekt; $laka->symbol='.'; $laka->solid=0; $laka->ograniczenie=0;
$las=new obiekt; $las->symbol='l'; $las->solid=0; $las->ograniczenie=0.5;
$woda=new obiekt; $woda->symbol='w'; $woda->solid=0; $woda->ograniczenie=0.75;


}
?>
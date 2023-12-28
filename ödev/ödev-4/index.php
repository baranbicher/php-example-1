<?php

class Sekil{
public $edge1;
public $edge2;
public $edge3;
public $height;



}
class ucgen{
  public function alanU($edge3,$height){
    return (( $edge3 * $height ) / 2);
  }
  public function cevreU($edge3,$edge2, $edge1){
    return$edge3 + $edge2 + $edge1;
  }

}
class kare{
  public function alanK($edge1){
    return $edge1*$edge1;
  }
  public function cevreK($edge1){
    return ($edge1*4);
  }

}
class dikdortgen{
  public function alanD($edge2, $edge1){
    return ($edge1 * $edge2);
  }
  public function cevreD($edge2, $edge1){
    return ((2*$edge2) + (2 * $edge1));
  }

}

$ucgen = new ucgen();
echo "Uçgenin alanı: ".$ucgen->alanU(3,5);
echo "<br>";
echo "Uçgenin alanı: ".$ucgen->cevreU(3,5,4);
echo "<br>";
$kare = new kare();
echo "Karenin Alanın: ".$kare->alanK(3);
echo "<br>";
echo "Karenin alanı: ".$kare->cevreK(3);
echo "<br>";
$dikdortgen = new dikdortgen();
echo "Dikdörtgenin Alanın: ".$dikdortgen->alanD(3,4);
echo "<br>";
echo "Dikdörtgenin alanı: ".$dikdortgen->cevreD(3,4);
echo "<br>";


?>
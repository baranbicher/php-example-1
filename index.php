<h1>Cherain</h1>

<?php 

    //açıklama
    /*çoklu açıklama */
    echo "Wallace \n";
    print "merhaba dünya"
?>


<h1><?= "selam" ?></h1>


<?php
$title = 'Php Basics';
?>

<h1><?= $title ?></h1>

<?= '<h3>' . $title . '</h3>'; ?>

<?= "<h5>$title</h5>"; ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php echo "Komut1"; ?>
    <h1>Başlık </h1>
    <?php echo "<p>Lorem ipsum dolor sit amet consectetur </p>"; ?>
    <?= "Son Komut"; ?>
    <br>
</body>

</html>




<?php $isim = "Cherainnnnnnnnnnn <br>";

echo $isim;

?>


<?php 
define("ISIM","Cherain");
echo ISIM;
$constAD = "Wallace";
echo $constAD;

?>


<?php 
$a = "Wallace";
$float = 2.3;
$int = -2;
$_php = "aşk";

echo gettype($a);
echo gettype($float);
echo gettype($int);
echo $_php; 

?>


<?php 
    $a = 3;

    echo $a++;
    echo "<br>";
    echo $a;
    echo --$a;


?>


<?php
$isim = 'Şahin';
$soyisim = 'Ersever';
$yas = 27;
echo $isim.$soyisim;
// Ekrana "Merhaba, benim ismim Şahin soyismim Ersever. Şuan 27 yaşımdayım." sonucunu yazar.
$html  = '<div>';
$html .=    '<h1>Patika.Dev</h1>';
$html .= '</div>';
echo $html; // Ekrana "Patika.dev" olarak basar.
?>

<?php 
$a = 1;
$b = 2;

$sonuc = ($a == 4) && ($b == 2); 

var_dump($sonuc);

echo $sonuc;

?>


<?php 
    $a = 5;
    $b = 6;

    if($a == 0){
        echo '<br>1. Koşul tamam';
    }elseif($a == 1){
        echo '<br>2. Koşul tamam';
    }elseif($a == 5){
        echo '<br>3. Koşul tamam';
    }elseif($a == 3){
        echo '<br>4. Koşul tamam';
    }else{
        echo "<br> Else Runing.. <br>";
    }



    echo $a == 5 ? "<br> Eşit":"<br> Eşit değil";

    if($b == 6):
        echo '<br>b Eşit <br> ';
    endif;
?>


<?php 

    $a = 3;

    if($a == 1)
        echo '1.Koşul';
    elseif($a == 2)
        echo '2.Koşul';
    else
        echo 'Else Çalıştı. <br>';



    switch ($a) {
        case 1:
            echo "1.Koşul";
        break;
        case 2:
            echo "2.Koşul";
            break;
        default:
        echo "Default Çalıştı.";
    }
?>

<?php 

    $isimler = array();
    $isimler2 = [];

    echo gettype($isimler);
    echo gettype($isimler2);

    $isimler = array("sahin", "fatma", "ahmet");
    echo "<pre>";
    print_r($isimler);


    echo $isimler[1];

    var_dump(1);


    $isimler0 = [
        "isim1" => "Sahin",
        "isim2" => "fatma",
    ];

    print_r($isimler0);

    var_dump("isim1")
?>

<?php 
    $hayvanlar = [
        "ucanhayvanlar" => ["kartal", "güvercin " , "Papağan"],
        "surungen" => ["yilan", "kertenkele"]
    ];
    echo "<pre>";
    print_r($hayvanlar);

    echo $hayvanlar["ucanhayvanlar"][0];

?>


<?php 
    for($i = 0; $i <= 10 ; $i++) {
        echo $i;
    }

    $dizi = [
        "ahmet",
        "mehemet",
        "sahin"
    ];

    for($i = 0; $i <= 10 ; $i++) {
        echo "<pre>";
        echo $dizi[$i];
    }
    
?>


<?php 

    $isims = [
        "ahmet",
        "mehmet",
        "sahin"
    ];
    foreach($isims as $k => $v) {
        echo $k."-".$v."<br>";

    }
    foreach($isims as $k => $v) {
        echo ++$k."-".$v."<br>";

    }

?>

<?php 

    $i = 0;
    while($i <= 10){
        echo $i."- selam<br>";
        $i++;
    }
    echo "<br>";
    $i = 0;
    while($i++ <= 10){
        echo $i."- selam<br>";
        $i;
    }
    echo "<br>";
    $a = 1;

    do{
        echo $a." - hi<br>";
        $a++;
    }while($a++ <= 10);


?>


<?php 

function isim(){
    return "cherain";
}

isim();

function result($a, $b){
    return $a + $b;
}

echo result(4,4);

function carp($q = 1,$e =4){
    return $q * $e;
}

echo carp(3);
?>

<?php 

$topla = function(){
    return 2+2;
};

echo $topla();

$carp = function($q,$e){
    return $q * $e;
};

echo $carp(4,5);


$dizi = [
    2,3,4,5,6
];

$dizi = array_map(function($e){
    return $e * $e;
},$dizi);

print_r($dizi); 


$hesap = [
    'topla' => function($q,$e){return $q + $e."<br>";},
    'cikar' => function($q,$e){return $q - $e."<br>";},
    'carp' => function($q,$e){return $q * $e."<br>";},
    'bol' => function($q,$e){return $q / $e."<br>";}
];

echo $hesap['topla'](5,4);
echo $hesap['cikar'](5,4);
echo $hesap['carp'](5,4);
echo $hesap['bol'](5,4);
?>


<?php




function sayi($e){
    echo $e."<br>";

    if($e < '5'){
        $e++;
        sayi($e);
}
}
sayi(1)."<br>";

$categories = [
    [
        'id' => 1,
        'parent' => 0,
        'name' => 'Back-end Teknolojileri'
    ],
    [
        'id' => 2,
        'parent' => 0,
        'name' => 'Front-End Teknolojileri'
    ],
    [
        'id' => 3,
        'parent' => 0,
        'name' => 'Mobil Uygulama'
    ],
    [
        'id' => 4,
        'parent' => 1,
        'name' => 'PHP'
    ],
    [
        'id' => 5,
        'parent' => 1,
        'name' => 'NodeJS'
    ],
    [
        'id' => 6,
        'parent' => 4,
        'name' => 'Laravel'
    ],
    [
        'id' => 7,
        'parent' => 4,
        'name' => 'Codeigniter'
    ],
    [
        'id' => 8,
        'parent' => 2,
        'name' => 'Javascript'
    ],
    [
        'id' => 9,
        'parent' => 8,
        'name' => 'VueJS'
    ],
    [
        'id' => 10,
        'parent' => 8,
        'name' => 'AngularJS'
    ]
];


function getCategories($arr, $par = 0){
    $html = '';

    $html .= "<ul>";
    foreach($arr as $value){
        if($value["parent"] == $par){
        $html .= "<li>";
        $html .= $value['name']."<br>";
        $html .= getCategories($arr, $value["id"]);
        $html .= "</li>";
    };
}
    $html .= "</ul>";
    return $html;

}
echo getCategories($categories);

$categories = [
    [
        'id' => 1,
        'parent' => 0,
        'name' => 'PHP'
    ],
    [
        'id' => 2,
        'parent' => 0,
        'name' => 'CSS'
    ],
    [
        'id' => 3,
        'parent' => 0,
        'name' => 'HTML'
    ],
    [
        'id' => 4,
        'parent' => 1,
        'name' => 'PHP Fonksiyonlar'
    ],
    [
        'id' => 5,
        'parent' => 1,
        'name' => 'PHP Değişkenler'
    ],
    [
        'id' => 6,
        'parent' => 4,
        'name' => 'Recursive Fonksiyonlar'
    ],
    [
        'id' => 7,
        'parent' => 4,
        'name' => 'Anonim Fonksiyonlar'
    ],
    [
        'id' => 8,
        'parent' => 6,
        'name' => 'Recursive'
    ]
];

function CategoryList($arr, $par = 0){
    $html = '';
    $html .= '<ul>';
    foreach ($arr as $value) {
        if($value['parent'] == $par){
            $html .= '<li>';
            $html .= $value['name']."<br>";
            $html .= CategoryList($arr, $value['id']);
            $html .= '</li>';
        }
    }
    $html .= '</ul>';
    return $html;
}

echo CategoryList($categories);
?>


<?php
function say(){
    static $sayi= 0;
    echo $sayi;
    $sayi++;
}

say();
say();
say();
say();
say();
?>


<?php

$isim = 'Che';

function isimyaz(){
    global $isim;
    echo  $isim;
}
isimyaz();

?>

<?php 
$arr = [1,2,3,4,5,6,7,8,9];

print_r($arr);

var_dump($arr);

$dizge = implode('=', $arr);

print_r($dizge);

$newarr = explode('=', $dizge);

print_r($newarr);

echo count($newarr)."<br>";

print_r(is_array($newarr));

?>
<?php 
echo "<pre> helllo";
$sayılar = range(0,20); 

shuffle($sayılar);

print_r($sayılar);
?>
<?php 
echo "<pre> helllo";
$sayi = ["car","both"];
$sayılar = ["volvo","peru"];

$arrcom = array_combine($sayi, $sayılar);

print_r($arrcom);
$sayi = ["car","both","car","both","car","both"];
$arrcount = array_count_values($sayi);
print_r($arrcount);

$sayi = ["car","both"];
$arrcount = array_flip($sayi);
print_r($arrcount);


$sayi = ["car","both"];
$arrcount = array_key_exists(0,$sayi);
print_r($arrcount);
var_dump($arrcount);

$sayi = range(0,20);
function cube($q){
    return $q*$q*$q;
};

$dizi = array_map('cube',$sayi);
print_r($dizi); 

$sayi = range(0,20);

$dizi = array_map(function($e){ return $e + 2; },$sayi);

print_r($dizi); 

$sayi = range(0,20);

$cift = array_filter($sayi, function($e){return $e%2==0 ? $e : false;});

print_r($cift);

$tek = array_filter($sayi, function($e){return $e%2!=0 ? $e : false;});

print_r($tek);

$_3bolum = array_filter($sayi, function($e){return $e%3==0 ? $e : false;});

print_r($_3bolum);

$sayi = range(0,10);
$sayi1 = range(10,20);

$tek = array_merge($sayi, $sayi1);

print_r($tek);

print_r(array_rand($sayi, 3));

$arrrev = array_reverse($sayi);
print_r($arrrev);

$kelime = ["elma", "armut"];
$arrsear = array_search("elma", $kelime);
print_r($arrsear);



$os = array("Mac", "NT", "Irix", "Linux","windows");
if (in_array("Irix", $os)) {
    echo "Irix var";
}
if (in_array("mac", $os)) {
    echo "Mac var"."<br>";
}
array_shift($os);
array_pop($os);
print_r($os);



$os = array("Mac", "NT", "Irix", "Linux","windows");

$newarr = array_slice($os,2,3);
print_r($newarr);


$sayi = range(1,10);

print_r(array_sum($sayi));
echo ""."<br>";
print_r(array_product($sayi));


$os = array("Mac", "NT", "Irix", "Linux","windows");

array_push($os,"microsoft", "Linux","windows");
print_r($os);

$os = array("Mac", "NT", "Irix", "Linux","windows");

array_unshift($os,"microsoft", "Linux","windows");
print_r($os);
print_r(array_keys($os))
?>

<?php
$dizi = ["dizi" , "bisiklet" ,"araba","car","both"];

echo current($dizi)."<br>";
echo next($dizi)."<br>";
echo prev($dizi)."<br>";
echo end($dizi)."<br>";
echo reset($dizi)."<br>";


$dizi = ["dizi" , "bisiklet" ,"araba", "isim"=>"car","both"];

extract($dizi);
echo $isim."<br>";

asort($dizi);

print_r($dizi);

$dizi = ["dizi" , "bisiklet" ,"araba", "isim"=>"car","both"];

arsort($dizi);

print_r($dizi); 

$dizi = ["dizi" , "bisiklet" ,"araba", "car","both"];

ksort($dizi);

print_r($dizi); 
?>






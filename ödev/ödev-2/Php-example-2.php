<?php
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];


function pla($dizi, $adet) {
    // Boş elemanları temizle
    $dizi = array_filter($dizi, function($deger) {
    return $deger !== "";
    });

    // Rastgele anahtarlar üret
    $rastgeleAnahtarlar = array_rand($dizi, $adet);

    // Rastgele değerleri `array_map()` kullanarak al
    $rastgeleDegerler = array_map(function($anahtar) use ($dizi) {
    return $dizi[$anahtar];
    }, $rastgeleAnahtarlar);

    // Rastgele değerlerden oluşan yeni diziyi döndür
    return $rastgeleDegerler;
    }

print_r(pla($planets, 2));
echo "<br>";
print_r(pla($planets, 3));
echo "<br>";
print_r(pla($planets, 2));
echo "<br>";
print_r(pla($planets, 4));
echo "<br>";
print_r(pla($planets, 5));echo "<br>";
?>

<?php
function ucgen($s){
    
    while($q <= $s){
        for($i = 0; $i <= $q; $i++){
            echo"0";
        }
        $q++;
        echo"<br>";
    }
}
ucgen(15);

function ucgenn($s){
    $q= 0;
    while($q <= $s){
        for($i = 0; $i <= $q; $i++){
            echo "0";
        }
        $q++;
        echo "<br>";
    }
}
ucgenn(20);

?>
<?php
$loop = 20;
$num = 1;
for ($i=0; $i < $loop ; $i++) { 
    if ($i == 1) {
        echo "Aku Data ke - ". $num++ ." Dan mendapatkan mendali Emas<br>";        
    }elseif ($loop == 2) {
        echo "Aku Data ke - ". $num++ ." Dan mendapatkan mendali perak<br>";
    }elseif ($loop == 3) {
        echo "Aku Data ke - ". $num++ ." Dan mendapatkan mendali perunggu<br>";
    }elseif ($loop >= 4) {
        echo "Aku Data ke - ". $num++ ." Dan mendapatkan tas laptop<br>";
    }elseif ($loop <= 9) {
        echo "Aku Data ke - ". $num++ ." Dan mendapatkan tas karung<br>";
    }elseif ($loop >= 10) {
        echo "Aku Data ke - ". $num++ ." Dan tidak mendapatkan apapun<br>";
    }
}
?>
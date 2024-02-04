<?php
echo '<pre>';
$number = $_GET['number'];
if($number % 3 ==0){
    echo '3 e tam Bölüyor.';
}
else{
    $residue = $number % 3;
    echo '<b>Girilen Sayı '.$number.'</b><br/>';
    echo 'Girdiğiniz sayı 3\'e bölünemez. Bölünebilecek ilk sayı '.($number-$residue+3).'\'dır';
}
echo '</pre>';
?>
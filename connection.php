
<?php
$link=@mysqli_connect("localhost","root","") or die ("Sunucuya Bağlanamadık");
$sec=@mysqli_select_db($link,"kutuphanedb") or die ("Veritabanı Seçilemedi");
?>

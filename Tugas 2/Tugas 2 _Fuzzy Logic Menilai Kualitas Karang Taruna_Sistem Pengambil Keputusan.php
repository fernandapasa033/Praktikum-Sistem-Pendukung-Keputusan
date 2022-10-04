<!DOCTYPE html>
<html>
<head>
    <title>Fuzzy Logic</title>
</head>
<body style="text-align: center;">
<h1>Fuzzy Logic</h1>
<br>
<br>
<form method="post" action="">
    <input type="number" name="input" placeholder="JUMLAH ANGGOTA 1-10" required="">
    <input type="submit" name="submit" value="submit">
</form>
<h3>Fuzzy Logic Result</h3>
<br>
<?php
if(isset($_POST['submit']))
{
    $input = $_POST['input'];
    echo "JUMLAH ANGGOTA YANG ANDA MASUKAN ADALAH : <b>", ($input), "</b><br>";
    if($input >= 6 and $input <= 10){
        echo "<b>Kategori Karang Taruna Anda Baik</b>";
    }elseif($input >=3 and $input <=7){
        echo "<b>Kategori Karang Taruna Anda Sedang</b>";
    }elseif($input >=0 and $input <=2){
        echo "<b>Kategori Karang Taruna Anda Kurang</b>";
    }else{
        echo "DATA TIDAK DITEMUKAN";
    }
}
?>
</body>
</html>
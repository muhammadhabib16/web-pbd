<?php
$c = mysqli_connect('localhost', 'root', '', 'akademikpro_db');
$res = mysqli_query($c, 'SELECT gambar_produk FROM produk LIMIT 5');
while($r = mysqli_fetch_assoc($res)){
    echo $r['gambar_produk'] . "\n";
}

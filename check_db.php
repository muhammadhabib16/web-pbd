<?php
$c = mysqli_connect('localhost', 'root', '', 'akademikpro_db');
$res = mysqli_query($c, 'SELECT gambar_blog FROM blog');
while($r = mysqli_fetch_assoc($res)){
    echo $r['gambar_blog'] . "\n";
}

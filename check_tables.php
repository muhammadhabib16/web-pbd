<?php
$c = mysqli_connect('localhost', 'root', '', 'akademikpro_db');
$res = mysqli_query($c, 'DESCRIBE pengguna');
while($r = mysqli_fetch_assoc($res)){
    echo $r['Field'] . " - " . $r['Type'] . "\n";
}

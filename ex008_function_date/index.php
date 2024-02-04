<?php 
    // $d= mktime(07,07,30,22,12,2023);
    // echo "escrito ás". date("h:i:s d/m/Y", $d);
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("h:i:sa Y-m-d", $d);

?>
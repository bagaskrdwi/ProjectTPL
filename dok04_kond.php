<?php
    date_default_timezone_set("Asia/Jakarta");
    $hari = date("l");
    $tgl = date("d-m-y");
    $jam = date("H:i:s");
    if ($jam < "10") {
        echo "Today is $hari, $tgl <br> $jam WIB<br>";
        echo "Awali harimu dengan semangat pagi!";
      } elseif ($jam < "20") {
        echo "Today is $hari, $tgl <br> $jam WIB<br>";
        echo "Selamat siang! Jaga kesehatan, ya! tetap semangat!";
      } else {
        echo "Today is $hari, $tgl <br> $jam WIB<br>";
        echo "Bagaimana harimu? letih? Selamat beristirahat!";
      }
?>
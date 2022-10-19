<?php

echo "\n";
echo "  Code by <sandikrxyzn/>\n";
echo "\n";

error_reporting(0);

$list = explode("\n", file_get_contents($argv[1]));

$hash = '$2y$10$g86TT9SRPuc0eoseG1tx0OYHQRTKlIVQjlix4.uNgTMfLdY1y.Ntm';

if(isset($argv[1])){
    foreach($list as $wordlist) {
        print " [+]"; print (password_verify($wordlist, $hash)) ? "\n [+]Password Ditemukan : $wordlist (Benar)\n [+]\n" :
            "$hash -> $wordlist (SALAH)\n";
    }

} else {
    print "usage: php ".$argv[0]." wordlist.txt\n";
}


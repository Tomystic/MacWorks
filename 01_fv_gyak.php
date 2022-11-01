<?php
    header('Content-Type: text/html; charset=utf-8');

    $keresztNev="Tomi";
    if (isset($keresztNev)) {
        echo 'Üdvözlünk ' .$keresztNev .'!!!';
    } if (!isset($keresztNev)){
        echo "A felhasználó nem adta meg a vezeték nevét.";
    }
?>
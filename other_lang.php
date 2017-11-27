<?php

$lang = array (
            'lang' => 'Test',
            'welcome' => 'Bienvenue sur notre nouveau site web !',
        );
ob_start();
include 'index.php';
ob_end_clean();
?>

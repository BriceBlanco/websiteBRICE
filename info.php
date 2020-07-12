<?php
    include 'header.php';
    if (isset( $_POST['envoyer'] )) {
        echo "Merci de nous contacter ".$_POST['nom'];
    }
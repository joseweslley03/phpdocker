<?php
session_start();

if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
}

$_SESSION['contador']++;

if ($_SESSION['contador'] == 5) {
    echo "Parabéns! Você ganhou um prêmio!";

    $_SESSION['contador'] = 0;
} else {
    echo "Você fez " . $_SESSION['contador'] . " requisições.";
}
?>
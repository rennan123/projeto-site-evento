<?php
session_start();
unset($_SESSION['email']);
$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
?>
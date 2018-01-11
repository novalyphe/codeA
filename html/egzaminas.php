<?php

session_start();

if (!isset($_SESSION['sesija'])) $_SESSION['sesija'] = [];

$_SESSION['sesija'][] = $_POST;

var_export($_POST);

echo '<a href="egzaminas.html">Grazinti i forma</a>';
//      header ('Location:egzaminas.html' );        //grazina tiesiogiai i html faila





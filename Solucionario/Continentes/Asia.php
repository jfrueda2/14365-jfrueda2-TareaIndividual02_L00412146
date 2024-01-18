<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title> ASIA </title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="generator" content="Geany 1.31" />
</head>

<body>

<?php

// INDICES NUMERICOS
$cantones = array(
    array("TOKIO", "OSAKA", "YOKOHAMA"),
    array("PEKÍN", "SHANGHÁI", "CANTÓN", "SHENZHEN"),
    array("NUEVA DELHI", "MUMBAI", "BANGALORE", "CHENNAI"),
    array("ANKARA", "ESTAMBUL", "IZMIR", "ANTALYA"),
    array("SEÚL", "BUSAN", "INCHEON", "DAEGU", "GWANGJU")
);

$Asia = array(
    'JAPÓN' => array(
        'Kanto' => array("TOKIO", "OSAKA", "YOKOHAMA"),
        'Kansai' => $cantones[1],
        'Chubu' => ["NAGOYA"]
    ),

    'CHINA' => array(
        'Pekín' => array("PEKÍN", "SHANGHÁI", "CANTÓN", "SHENZHEN"),
        'Shanghái' => $cantones[1],
        'Cantón' => ["CANTÓN", "SHENZHEN"]
    ),

    'INDIA' => array(
        'Delhi' => array("NUEVA DELHI", "MUMBAI", "BANGALORE", "CHENNAI"),
        'Maharashtra' => $cantones[1],
        'Karnataka' => ["BANGALORE", "MANGALORE"]
    ),

    'TURQUÍA' => array(
        'Ankara' => array("ANKARA", "ESTAMBUL", "IZMIR", "ANTALYA"),
        'Estambul' => $cantones[1],
        'Izmir' => ["IZMIR"]
    ),

    'COREA DEL SUR' => array(
        'Seúl' => array("SEÚL", "BUSAN", "INCHEON", "DAEGU", "GWANGJU"),
        'Busan' => $cantones[1],
        'Incheon' => ["INCHEON"]
    )
);

?>

</body>
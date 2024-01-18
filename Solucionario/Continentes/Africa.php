<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title> ÁFRICA </title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="generator" content="Geany 1.31" />
</head>

<body>

<?php

// INDICES NUMERICOS
$cantones = array(
    array("CASABLANCA", "RABAT", "FES"),
    array("JOHANESBURGO", "CIUDAD DEL CABO", "PRETORIA"),
    array("EL CAIRO", "ALEJANDRÍA", "LUXOR", "ASUÁN"),
    array("LAGOS", "ABUYA", "KANO"),
    array("NAIROBI", "MOMBASA", "NAKURU")
);

$Africa = array(
    'MARRUECOS' => array(
        'Casablanca-Settat' => array("CASABLANCA", "RABAT", "FES"),
        'Marrakech-Safi' => $cantones[1],
        'Fès-Meknès' => ["FES"]
    ),

    'SUDÁFRICA' => array(
        'Gauteng' => array("JOHANESBURGO", "CIUDAD DEL CABO", "PRETORIA"),
        'Cabo Occidental' => $cantones[1],
        'Ehlanzeni' => ["MBOMBELA", "NELSPRUIT"]
    ),

    'EGIPTO' => array(
        'Gobernación de El Cairo' => array("EL CAIRO", "ALEJANDRÍA", "LUXOR", "ASUÁN"),
        'Gobernación de Alejandría' => $cantones[1],
        'Gobernación de Luxor' => ["LUXOR"]
    ),

    'NIGERIA' => array(
        'Lagos' => array("LAGOS", "ABUYA", "KANO"),
        'Abuya' => $cantones[1],
        'Kano' => ["KANO", "SOKOTO"]
    ),

    'KENIA' => array(
        'Nairobi' => array("NAIROBI", "MOMBASA", "NAKURU"),
        'Costa' => $cantones[1],
        'Rift Valley' => ["NAKURU", "ELDORET"]
    )
);

?>

</body>

</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title> OCEANÍA </title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="generator" content="Geany 1.31" />
</head>

<body>

<?php

// INDICES NUMERICOS
$cantones = array(
    array("SIDNEY", "MELBOURNE", "BRISBANE"),
    array("AUCKLAND", "WELLINGTON", "CHRISTCHURCH"),
    array("HONOLULU", "MAUI", "OAHU", "KAUAI"),
    array("PORT MORESBY", "LAE", "MOUNT HAGEN"),
    array("SUVA", "NADI", "LABASA", "LEVUKA")
);

$Oceania = array(
    'AUSTRALIA' => array(
        'New South Wales' => array("SIDNEY", "MELBOURNE", "BRISBANE"),
        'Queensland' => $cantones[1],
        'Victoria' => ["MELBOURNE", "GEELONG"]
    ),

    'NUEVA ZELANDA' => array(
        'Auckland' => array("AUCKLAND", "WELLINGTON", "CHRISTCHURCH"),
        'Wellington' => $cantones[1],
        'Canterbury' => ["CHRISTCHURCH", "TIMARU"]
    ),

    'ESTADOS UNIDOS (HAWAI)' => array(
        'Hawái' => array("HONOLULU", "MAUI", "OAHU", "KAUAI"),
        'Maui' => $cantones[1],
        'Oahu' => ["OAHU"]
    ),

    'PAPÚA NUEVA GUINEA' => array(
        'National Capital District' => array("PORT MORESBY", "LAE", "MOUNT HAGEN"),
        'Morobe' => $cantones[1],
        'Central' => ["PORT MORESBY", "ABAU"]
    ),

    'FIYI' => array(
        'Viti Levu' => array("SUVA", "NADI", "LABASA", "LEVUKA"),
        'Vanua Levu' => $cantones[1],
        'Ovalau' => ["LEVUKA"]
    )
);

?>

</body>

</html>
<?php
date_default_timezone_set("Europe/Berlin");
$mysqli = new mysqli('127.0.0.1','','','');

$format = "%d.%m.%Y %H:%i";
$date = DateTime::createFromFormat('d.m.Y H:i', $_POST['date']);
$sql_date = $date->format("U");

$stmt = $mysqli->prepare("INSERT INTO `stats` (`user`, `time`, `SYS`, `DIA`, `PULSE`) VALUES ('', ?, ?, ?, ?)");
$stmt->bind_param("iiii", $sql_date, $_POST['SYS'], $_POST['DIA'], $_POST['PULSE']);
$stmt->execute();
header("Location: index.php");

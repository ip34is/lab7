<?php

date_default_timezone_set("Europe/Kiev");

$id   = $_GET['id']   ?? null;
$time = $_GET['time'] ?? null;
$desc = $_GET['desc'] ?? null;

if ($id && $time && $desc) {
    $file = "events.txt";
    $serverTime = date("H:i:s");
    $line = "{$id}||{$time}||{$desc}||{$serverTime}\n";
    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);
    echo "OK";
} else {
    echo "Missing parameters";
}

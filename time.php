<?php
session_start();

$user = $_SERVER['HTTP_USER_AGENT'];
$id = $_SERVER['REMOTE_ADDR'];
$count = 1;
if ($user = $_SERVER['HTTP_USER_AGENT'] && $id = $_SERVER['REMOTE_ADDR']) {
    echo $count;
} else {
    $count += 1;
    echo $count;
}

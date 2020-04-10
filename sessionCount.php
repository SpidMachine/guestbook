<?php
session_start();

  $home = $_SERVER["DOCUMENT_ROOT"];

  $domen = $_SERVER["HTTP_X_FORWARDED_PROTO"] . "://" . $_SERVER["HTTP_HOST"];

  $parse_url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

  $real_page = $domen . $parse_url;

  $url_looks = $home . "/GB/" . md5($real_page) . ".dat";
  $count_looks = @file_get_contents($url_looks);

  if (!$_SESSION["count"]) {

    @file_put_contents($url_looks, ($count_looks + 1));

    $_SESSION["count"] = 1;
  }

  
  // H:/server/OSPanel/domains/Pavel-Gorokhovskii

  // ://pavel-gorokhovskii/GB/sessionCount.php

  // ://pavel-gorokhovskii/GB/sessionCount.php26bd0171992b5def3faff0107060f8e0

  // 26bd0171992b5def3faff0107060f8e0.dat

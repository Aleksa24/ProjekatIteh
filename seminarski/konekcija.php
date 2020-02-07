<?php

error_reporting(E_ALL | E_STRICT);
ini_set("display_errors", false);
ini_set("log_errors", true);
ini_set("error_log", "logoviGresaka.log");


$konekcija = new MySqli('localhost','root','','cokolada');
$konekcija->set_charset("utf8");
 ?>

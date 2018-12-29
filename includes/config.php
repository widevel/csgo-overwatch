<?php
session_write_close();

date_default_timezone_set("Europe/Bucharest");

$config = (object) parse_ini_file('.' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'config.ini');
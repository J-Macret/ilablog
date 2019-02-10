<?php

$db = new PDO('mysql:dbname=ilablog;host=localhost', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
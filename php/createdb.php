<?php
include("connect.php");

$bdd->query("SOURCE monfichier.sql");
echo 'done';

<?php
require_once("util-db.php");
require_once("model-oudtbl.php");

$pageTitle = "oudtbl";
$oudtbl = selectOudtbl();
include "view-oudtbl.php";
?>

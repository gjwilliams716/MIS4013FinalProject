<?php
require_once("util-db.php");
require_once("model-oudtbl.php");

$pageTitle = "oudtbl";
include "view-header.php";
$oudtbl = selectOudtbl();
include "view-oudtbl.php";
include "view-footer.php";
?>

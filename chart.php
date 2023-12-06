<?php
require_once("util-db.php");
require_once("model-chart.php");

$pageTitle = "oudtbl";
include "view-header.php";
$oudtbl = selectOudtbl();
include "view-chart.php";
include "view-footer.php";
?>

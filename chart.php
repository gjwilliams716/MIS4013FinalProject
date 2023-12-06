<?php
require_once("util-db.php");
require_once("model-chart.php");

$pageTitle = "oudtbl";
include "view-header.php";
$oudtbl = selectChart();
include "view-chart.php";
include "view-chart2.php";
include "view-footer.php";
?>

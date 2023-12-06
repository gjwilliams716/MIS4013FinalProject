<html>
<?php
require_once("util-db.php");
require_once("model-chart.php");
require_once("model-chart2.php"); // Include the second chart model file

$pageTitle = "oudtbl";
include "view-header.php";

$oudtbl = selectChart();
$chart2Data = selectChart2(); // Call the function to get data for the second chart

?>
<div style="display:flex; flex-direction:column;">
  <h1 style="font-weight: bold; margin-left:10px;">2023 Oklahoma Football Sack Leaders</h1>
<?php
include "view-chart.php";
?>
  <h1 style="font-weight: bold; margin-left:10px;">2023 Oklahoma Football Fumble Leaders</h1>
</div>
<?php

include "view-chart2.php"; // Include the view for the second chart

include "view-footer.php";
?>
</html>

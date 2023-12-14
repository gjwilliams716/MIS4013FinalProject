<?php
require_once("util-db.php");
require_once("model-oudtbl.php");

$pageTitle = "oudtbl";
include "view-header.php";

if (isset($_POST['actionType']))
{
    switch ($_POST['actionType']) {
      case "Add";
      addPlayer($_POST['player'], $_POST['g'], $_POST['solo'], $_POST['ast'], $_POST['tot'], $_POST['loss'], $_POST['sk'], $_POST['inte'], $_POST['fr'], $_POST['ff']);
    break;
    }
}

$oudtbl = selectOudtbl();
include "view-oudtbl.php";
include "view-footer.php";
?>

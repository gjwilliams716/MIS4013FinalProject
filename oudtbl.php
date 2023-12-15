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
    case "Edit":
    if (updateAnimal($_POST['aName'], $_POST['aSpecies'], $_POST['aHabitatid'], $_POST['aKeeperid'], $_POST['aid'])) {
     echo '<div class="alert alert-success" role="alert">Animal edited.</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
  break;
    case "Delete":
    if (deleteAnimal($_POST['aid'])) {
     echo '<div class="alert alert-success" role="alert">Animal deleted.</div>';
    } else {
      echo '<div class="alert alert-danger" role="alert">Error.</div>';
    }
  break;
  }
}

$oudtbl = selectOudtbl();
include "view-oudtbl.php";
include "view-footer.php";
?>

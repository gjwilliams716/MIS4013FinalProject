<?php
include "view-players-form.php";
?>

<h1 style="font-weight:bold;">2023 Oklahoma Football Defensive Statistics</h1>
<div class = "table-responsive">
<table class="table">
<thead>
  <tr>
    <th>Rk</th>
    <th>Player</th>
    <th>Games Played</th>
    <th>Solo Tackles</th>
    <th>Assisted Tackles</th>
    <th>Total Tackles</th>
    <th>Tackles For Loss</th>
    <th>Sack</th>
    <th>Interceptions</th>
    <th>Fumble Recoveries</th>
    <th>Forced Fumbles</th>
  </tr>
</thead>
<tbody>
  <?php
while ($oudtbls = $oudtbl->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $oudtbls['rk']; ?></td>
  <td><?php echo $oudtbls['player']; ?></td>
    <td><?php echo $oudtbls['g']; ?></td>
    <td><?php echo $oudtbls['solo']; ?></td>
    <td><?php echo $oudtbls['ast']; ?></td>
    <td><?php echo $oudtbls['tot']; ?></td>
    <td><?php echo $oudtbls['loss']; ?></td>
    <td><?php echo $oudtbls['sk']; ?></td>
    <td><?php echo $oudtbls['inte']; ?></td>
    <td><?php echo $oudtbls['fr']; ?></td>
    <td><?php echo $oudtbls['ff']; ?></td>
  </tr>
  <?php
}
?>
</tbody>
</table>
</div>

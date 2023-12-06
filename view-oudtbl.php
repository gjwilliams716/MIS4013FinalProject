<h1> OUDTBL </h1>
<div class = "table-responsive">
<table class="table">
<thead>
  <tr>
    <th>Rk</th>
    <th>Player</th>
    <th>G</th>
    <th>Solo</th>
    <th>Ast</th>
    <th>Tot</th>
    <th>Loss</th>
    <th>Sk</th>
    <th>inte</th>
    <th>fr</th>
    <th>ff</th>
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

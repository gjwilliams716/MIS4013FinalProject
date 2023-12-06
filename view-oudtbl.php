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
while ($oudtbl = $oudtbl->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $oudtbl['rk']; ?></td>
  <td><?php echo $oudtbl['player']; ?></td>
    <td><?php echo $oudtbl['g']; ?></td>
    <td><?php echo $oudtbl['solo']; ?></td>
    <td><?php echo $oudtbl['ast']; ?></td>
    <td><?php echo $oudtbl['tot']; ?></td>
    <td><?php echo $oudtbl['loss']; ?></td>
    <td><?php echo $oudtbl['sk']; ?></td>
    <td><?php echo $oudtbl['inte']; ?></td>
    <td><?php echo $oudtbl['fr']; ?></td>
    <td><?php echo $oudtbl['ff']; ?></td>
  </tr>
  <?php
}
?>
</tbody>
</table>
</div>

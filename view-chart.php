<h1 style="font-weight:bold;">2023 Oklahoma Football Sack Leaders</h1>
<div class = "table-responsive">
<table class="table">
<thead>
  <tr>
    <th>Player</th>
    <th>Sack</th>
  </tr>
</thead>
<tbody>
  <?php
while ($oudtbls = $oudtbl->fetch_assoc()) {
  ?>
  <tr>
  <td><?php echo $oudtbls['player']; ?></td>
    <td><?php echo $oudtbls['sk']; ?></td>
  </tr>
  <?php
}
?>
</tbody>
</table>
</div>

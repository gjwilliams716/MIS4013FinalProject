<!DOCTYPE html>
<html lang="en">
<body>

<h1 style="font-weight:bold;">2023 Oklahoma Football Sack Leaders</h1>
<div class="table-responsive">
  <table class="table">
    <!-- ... Your table code ... -->
  </table>
</div>

<!-- Create a canvas element for the chart -->
<canvas id="myBarChart" width="400" height="200"></canvas>

<script>
  // Extract data from PHP variables
  <?php
  $players = [];
  $sacks = [];
  while ($oudtbls = $selectChart->fetch_assoc()) {
    $players[] = $oudtbls['player'];
    $sacks[] = $oudtbls['sk'];
  }
  ?>

  // Get the canvas element
  var ctx = document.getElementById('myBarChart').getContext('2d');

  // Create the bar chart
  var myBarChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: <?php echo json_encode($players); ?>,
      datasets: [{
        label: 'Sacks',
        data: <?php echo json_encode($sacks); ?>,
        backgroundColor: 'rgba(75, 192, 192, 0.2)', // Adjust as needed
        borderColor: 'rgba(75, 192, 192, 1)', // Adjust as needed
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>

</body>
</html>

<?php
// Assuming you have a function named selectChart to fetch data
$oudtbl = selectChart();

// Rest of your code remains the same
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Football Sack Leaders - Bar Chart</title>
  <!-- Include Chart.js library -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    canvas {
      display: block;
      margin: 20px auto;
    }
  </style>
</head>
<body>
  
  <div style="float:left; margin-left:10px">
    <canvas id="barChart" width="800px" height="200"></canvas>
  </div>
    
  <?php
  // Assuming $oudtbl is your result set
  $labels = [];
  $data = [];

  while ($oudtbls = $oudtbl->fetch_assoc()) {
    $labels[] = $oudtbls['player'];
    $data[] = $oudtbls['sk'];
  }
  ?>

  <script>
    // Get the PHP data and convert it to JavaScript arrays
    var labels = <?php echo json_encode($labels); ?>;
    var data = <?php echo json_encode($data); ?>;

    // Create a bar chart using Chart.js
    var ctx = document.getElementById('barChart').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: labels,
        datasets: [{
          label: 'Sacks',
          data: data,
          backgroundColor: 'rgba(75, 192, 192, 0.2)',
          borderColor: 'rgba(75, 192, 192, 1)',
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

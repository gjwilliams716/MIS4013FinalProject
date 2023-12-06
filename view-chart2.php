<?php
// Assuming you have a function named selectChart to fetch data
$oudtbl = selectChart2();

// Rest of your code remains the same
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Football Fumble Leaders - Bar Chart</title>
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
  <h1 style="font-weight: bold; margin-left:10px;">2023 Oklahoma Football Fumble Leaders</h1>
  
  <div style="float:left; margin-left:10px">
    <canvas id="barChart2" width="1000px" height="200"></canvas>
  </div>
    
  <?php
  // Assuming $oudtbl is your result set
  $labels = [];
  $data = [];

  while ($oudtbls = $oudtbl->fetch_assoc()) {
    $labels[] = $oudtbls['player'];
    $data[] = $oudtbls['ff'];
  }
  ?>

  <script>
    // Get the PHP data and convert it to JavaScript arrays
    var labels = <?php echo json_encode($labels); ?>;
    var data = <?php echo json_encode($data); ?>;

    // Create a bar chart using Chart.js
    var ctx2 = document.getElementById('barChart2').getContext('2d');
    var myChart2 = new Chart(ctx2, {
      type: 'bar',
      data: {
        labels: labels,
        datasets: [{
          label: 'Forced Fumbles',
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

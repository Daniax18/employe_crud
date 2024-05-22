function getStatistique(legende, value, x, y, value_y, chart, bar_id) {
    var chartData = {
      labels: legende,
      datasets: [{
        label: '# en ' + value_y,
        data: value,
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(255, 206, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
          'rgba(255,99,132,1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1,
        fill: false
      }]
    };

    var options = {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero: true
            },
            scaleLabel: {
              display: true,
              labelString: y // Add your Y-axis label here
            }
          }],
          xAxes: [{
            scaleLabel: {
              display: true,
              labelString: x // Add your X-axis label here
            }
          }]
        },
        legend: {
          display: false
        },
        elements: {
          point: {
            radius: 0
          }
        }
      };

    // Get the canvas element
    var canvas = document.getElementById(bar_id);

    // Check if the canvas exists before creating the chart
    if (canvas) {
      var barChartCanvas = canvas.getContext("2d");
      var barChart = new Chart(barChartCanvas, {
        type: chart,
        data: chartData,
        options: options
      });
    }
  }
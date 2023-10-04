/* globals Chart:false */

(() => {
  'use strict'

  // Graphs
  const ctx = document.getElementById('myChart')
  // eslint-disable-next-line no-unused-vars
  const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [
        'Jan',
        'Feb',
        'Mar',
        'Apr',
        'May',
        'Jun',
        'Jul',
        'Aug',
        'Sep',
        'Oct',
        'Nov',
        'Dec',
      ],
      datasets: [{
        data: [
          7,
          5,
          2,
          3,
          3,
          5,
          6,
          8,
          10,
          1,
          0,
          0,
        ],
        lineTension: 0,
        backgroundColor: '#007bff',
        borderColor: '#007bff',
        borderWidth: 0,
        pointBackgroundColor: '#007bff'
      }]
    },
    options: {
      scales: {
        xAxes: [{
          barPercentage: 0.4
        }]
      },
      plugins: {
        title: {
          display: true,
          text: 'Grafik Jumlah Penyusunan RAB Tahun 2023',
          align: 'start',
          padding: { bottom: 30 },
          font: {
            family: 'Montserrat',
            size: 15,
            weight: 700
          }
        },
        legend: {
          display: false
        },
        tooltip: {
          boxPadding: 3
        }
      }
    }
  })
})()

$(function () {
    "use strict";
    // Bar chart

    // var tot0 = 0;
    // var tot1 = 1;
    // var tot2 = 2;

    // var total0 = document.getElementById("suara["+tot0+"]").textContent;
    // var total1 = document.getElementById("suara["+tot1+"]").textContent;
    // var total2 = document.getElementById("suara["+tot2+"]").textContent;
 
    // var jumlah = document.getElementById("jumlah").textContent;    

    // new Chart(document.getElementById("chart2"), {
    //     type: 'bar',
    //     data: {
    //         labels: ["Paslon 1", "Paslon 2", "Paslon 3",],
    //         datasets: [{
    //             label: "Population (millions)",
    //             backgroundColor: ["#7158fd", "#7158fd", "#7158fd"],
    //             data: [total0,total1,total2],  
    //         }]
    //     },
    //     options: {
    //         legend: { display: false },
    //         title: {
    //             display: true,
    //             text: 'Diagram Hasil Pemilihan'
    //         }
    //     }
    // });

    var jumlah = document.getElementById("jumlah").textContent;
    var totsr = document.getElementById("totsr").textContent;
    var total = [];
    var warna = ["#b3d9ff", "#99ccff", "#80bfff", "#66b3ff", "#4da6ff", "#3399ff", "#1a8cff", "#0080ff", "#0073e6", "#0066cc"];

    for (var i = 0; i < jumlah; i++) {
        total[i] = document.getElementById("suara[" + i + "]").textContent;
    }

    // var a = 0;
    // var b = 1;
    // var c = 2;

    // total[0] = 900;
    // total[1] = totsr;
    // total[2] = 500;
    // total[3] = 300;

    // var tot0 = total[0];
    // var tot1 = total[1];
    // var tot2 = total[2];

    window.alifChart = new Chart(document.getElementById("chart2"), {

        type: 'bar',
        data: {

        },
        options: {
            legend: { display: false },
            scales: {
                yAxes: [{
                    display: true,
                    ticks: {
                        beginAtZero: true,
                        steps: 10,
                        stepValue: 5,
                    }
                }]
            },
            title: {
                display: true,
                text: 'Diagram Hasil Pemilihan'
            },
        }
    });

    for (var a = 0; a < jumlah; a++) {

        alifChart.data.datasets.push({

            label: "Jumlah Pemilih",
            backgroundColor: [warna[a],],
            data: [total[a]],
        });
    }

    window.alifChart.update();

    // var jumlah = document.getElementById("jumlah").textContent;
    // var data_tot = <?php echo $tot_data; ?> ;


    // new Chart(document.getElementById("chart2"), {
    //     type: 'bar',
    //     data: {
    //         labels: ["Paslon 1", "Paslon 2", "Paslon 3"],
    //         datasets: [{
    //             label: "Population (millions)",
    //             backgroundColor: ["#7158fd", "#7158fd", "#7158fd"],
    //             data: data_tot,  
    //         }]
    //     },
    //     options: {
    //         legend: { display: false },
    //         title: {
    //             display: true,
    //             text: 'Diagram Hasil Pemilihan'
    //         }
    //     }
    // });

    // New charts
    new Chart(document.getElementById("chart3"), {
        type: 'pie',
        data: {
            labels: ["Africa", "Asia", "Europe", "Latin America"],
            datasets: [{
                label: "jumlah pemilih",
                backgroundColor: ["#36a2eb", "#ff6384", "#4bc0c0", "#ffcd56", "#07b107"],
                data: [2478, 5267, 3734, 2784]
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Predicted world population (millions) in 2050'
            }
        }
    });

    // Horizental Bar Chart
    new Chart(document.getElementById("chart4"), {
        type: 'horizontalBar',
        data: {
            labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
            datasets: [{
                label: "Population (millions)",
                backgroundColor: ["#03a9f4", "#e861ff", "#08ccce", "#e2b35b", "#e40503"],
                data: [8478, 6267, 5534, 4784, 3433]
            }]
        },
        options: {
            legend: { display: false },
            title: {
                display: true,
                text: 'Predicted world population (millions) in 2050'
            }
        }
    });

    //Polar Chart
    new Chart(document.getElementById("chart5"), {
        type: 'polarArea',
        data: {
            labels: ["Africa", "Asia", "Europe", "Latin America"],
            datasets: [{
                label: "Population (millions)",
                backgroundColor: ["#36a2eb", "#ff6384", "#4bc0c0", "#ffcd56", "#07b107"],
                data: [2478, 5267, 5734, 3784]
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Predicted world population (millions) in 2050'
            }
        }
    });

    //Radar chart
    new Chart(document.getElementById("chart6"), {
        type: 'radar',
        data: {
            labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
            datasets: [{
                label: "250",
                fill: true,
                backgroundColor: "rgba(179,181,198,0.2)",
                borderColor: "rgba(179,181,198,1)",
                pointBorderColor: "#fff",
                pointBackgroundColor: "rgba(179,181,198,1)",
                data: [8.77, 55.61, 21.69, 6.62, 6.82]
            }, {
                label: "4050",
                fill: true,
                backgroundColor: "rgba(255,99,132,0.2)",
                borderColor: "rgba(255,99,132,1)",
                pointBorderColor: "#fff",
                pointBackgroundColor: "rgba(255,99,132,1)",
                pointBorderColor: "#fff",
                data: [25.48, 54.16, 7.61, 8.06, 4.45]
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Distribution in % of world population'
            }
        }
    });

    //Line Chart

    new Chart(document.getElementById("chart1"), {
        type: 'line',
        data: {
            labels: [4500, 3500, 3200, 3050, 2700, 2450, 2200, 1750, 1499, 2050],
            datasets: [{
                data: [86, 114, 106, 106, 107, 111, 133, 221, 783, 2478],
                label: "Africa",
                borderColor: "#3e95cd",
                fill: false
            }, {
                data: [282, 350, 411, 502, 635, 809, 947, 1402, 3700, 5267],
                label: "Asia",
                borderColor: "#36a2eb",
                fill: false
            }, {
                data: [168, 170, 178, 190, 203, 276, 408, 547, 675, 734],
                label: "Europe",
                borderColor: "#07b107",
                fill: false
            }, {
                data: [40, 20, 10, 16, 24, 38, 74, 167, 508, 784],
                label: "Latin America",
                borderColor: "#ff6384",
                fill: false
            }, {
                data: [6, 3, 2, 2, 7, 26, 82, 172, 312, 433],
                label: "North America",
                borderColor: "#4bc0c0",
                fill: false
            }]
        },
        options: {
            title: {
                display: true,
                text: 'World population per region (in millions)'
            }
        }
    });

    // line second
});
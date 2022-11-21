
<?php 

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
 ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Covid 19</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <div class="container-fluid px-5">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
                    <a href="logout.php">Logout</a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="py-3">Analytics Dashboard - COVID 19</h2>
                </div>
                <div class="col-sm-12">
                    <div id="root" class="mb-3">
                        <div class="row align-items-stretch">
                            <div class="c-dashboardInfo col-lg-3 col-md-6">
                            <div class="wrap">
                                <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Total<svg
                                    class="MuiSvgIcon-root-19" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
                                    </path>
                                </svg></h4><span class="hind-font total_cases c-dashboardInfo__subInfo"></span>
                            </div>
                            </div>
                            <div class="c-dashboardInfo col-lg-3 col-md-6">
                            <div class="wrap">
                                <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Deaths<svg
                                    class="MuiSvgIcon-root-19" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
                                    </path>
                                </svg></h4><span
                                class="hind-font c-dashboardInfo__subInfo death_cases"></span>
                            </div>
                            </div>
                            <div class="c-dashboardInfo col-lg-3 col-md-6">
                            <div class="wrap">
                                <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Recovered<svg
                                    class="MuiSvgIcon-root-19" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
                                    </path>
                                </svg></h4><span class="hind-font  c-dashboardInfo__subInfo recovered_cases"></span>
                            </div>
                            </div>
                            <div class="c-dashboardInfo col-lg-3 col-md-6">
                            <div class="wrap">
                                <h4 class="heading heading5 hind-font medium-font-weight c-dashboardInfo__title">Active<svg
                                    class="MuiSvgIcon-root-19" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation">
                                    <path fill="none" d="M0 0h24v24H0z"></path>
                                    <path
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
                                    </path>
                                </svg></h4><span class="hind-font  c-dashboardInfo__subInfo active_cases"></span>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row chart-wrapper">
                <div class="col-sm-9">
                    <div class="card border-0">
                        <div class="card-header bg-white">
                            <h4 class="c-dashboardInfo__subInfo">Regional Total Count</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="regional" width="100"></canvas>
                        </div>
                    </div>

                    <div class="card border-0 mt-3">
                        <div class="card-header bg-white">
                            <h4 class="c-dashboardInfo__subInfo">Regional Stats</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="stats" width="100"></canvas>
                        </div>
                    </div>
                    
                </div>
                <div class="col-sm-3">
                    <div class="card border-0 mt-3">
                        <div class="card-header bg-white">
                            <h4 class="c-dashboardInfo__subInfo">Regional Stats</h4>
                        </div>
                        <div class="card-body">
                            <canvas id="other_stats" width="100" height="370"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            $.get("https://api.rootnet.in/covid19-in/stats/latest", function(data, status){
            $('.total_cases').html(data.data.summary.total);
            $('.death_cases').html(data.data.summary.deaths);
            $('.recovered_cases').html(data.data.summary.discharged);
            $('.active_cases').html(data.data.summary.total-(data.data.summary.deaths+data.data.summary.discharged));
                var labels = [];
                var total = [];
                var deaths = []; 
                var discharged = [];
                var india_stats = [];
                var foreign_stats = [];
            $.each(data.data.regional, function(key,value) {
                    labels[key] = value.loc;
                    total[key] = value.totalConfirmed;
                    deaths[key] = value.deaths;
                    discharged[key] = value.discharged;
                    india_stats[key] = value.confirmedCasesIndian;
                    foreign_stats[key] = value.confirmedCasesForeign;
            });

            //    Total Count -> Regional
            // ====================================================
            const ctx = document.getElementById('regional');

                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'State Cases Count',
                            data: total,
                            borderWidth: 1,
                            borderColor: 'red',
                            backgroundColor: 'lightgreen',
    
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
                // ====================================================

                //    Stats -> Regional
                // ====================================================
                const ctx_stats = document.getElementById('stats');

                new Chart(ctx_stats, {
                    type: 'line',
                    data: {
                        labels: labels,
                        datasets: [
                            {
                                label: 'Deaths',
                                data: deaths,
                                borderColor: 'red',
                                backgroundColor: 'red',
                                yAxisID: 'y',
                            },
                            {
                                label: 'Recovered',
                                data: discharged,
                                borderColor: 'blue',
                                backgroundColor: 'blue',
                                yAxisID: 'y1',
                                }
                        ]
                    },
                    options: {
                        responsive: true,
                        interaction: {
                            mode: 'index',
                            intersect: false,
                        },
                        stacked: false,
                        plugins: {
                        title: {
                            display: true,
                            text: 'Deaths, Recovered Data'
                        }
                        },
                        scales: {
                            y: {
                                type: 'linear',
                                display: true,
                                position: 'left',
                            },
                            y1: {
                                type: 'linear',
                                display: true,
                                position: 'right',

                                // grid line settings
                                grid: {
                                    drawOnChartArea: false, // only want the grid lines for one axis to show up
                                },
                            },
                        }
                    },
                });

                // ====================================================

                //    Total Count -> Regional
            // ====================================================
            const other_ctx = document.getElementById('other_stats');

                new Chart(other_ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'India',
                            data: india_stats,
                            borderWidth: 1,
                            borderColor: 'pink',
                            backgroundColor: 'pink',

                        },
                        {
                            label: 'Foreign',
                            data: foreign_stats,
                            borderWidth: 1,
                            borderColor: 'blue',
                            backgroundColor: 'blue',

                        }]
                    },
                    options: {
                        indexAxis: 'y',
                        elements: {
                            bar: {
                                borderWidth: 2,
                            }
                        },
                    }
                });
                // ====================================================
            });
        </script>
    </body>
    </html>
<?php }else{

header("Location: index.php");

exit();

} ?>
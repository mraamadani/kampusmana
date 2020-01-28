

        

        
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

                        <canvas id="myChart" style="height:40vh; width:80vw"></canvas>
                        <script>
                        var ctx = document.getElementById('myChart').getContext('2d');
                        var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: ['2019', '2020'],
                                datasets: [{
                                    label: 'Jumlah Mahasiswa',
                                    data: [5, 10],
                                    backgroundColor: ['rgba(17, 28, 238, 0.55)'],
                                    borderColor: ['rgba(17, 28, 238, 0.55)'],
                                    pointBorderColor: ['rgba(17, 28, 238, 0.6)'],
                                    pointBackgroundColor: ['rgba(38, 185, 154, 0.7)'],
                                    pointHoverBackgroundColor: "#fff",
                                    pointHoverBorderColor: ['rgba(220, 220, 220, 1)'],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        }
                                    }]
                                }
                            }
                        });
                        </script>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

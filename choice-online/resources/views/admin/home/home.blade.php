@extends('admin.master')
@section('title')
    Choice Online
@endsection
@section('body')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>
        <!-- Content Row -->
        <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                   Total Customers</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totals['customers'] }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                            <div class="">
                                <a href="{{ route('manage-order') }}">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Total Sells
                                </div>
                                <!-- @php( $sum = 0)
                                @foreach( $totalSells as $totalSell )
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <input type="hidden" value="{!! $total =$totalSell->product_price* $totalSell->product_quantity !!}">
                                </div>
                                @php($sum = $sum+$total)
                                @endforeach -->
                                <span class="price">Tk. {!! $sum !!}</span>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Categories
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $totals['categories'] }}</div>
                                    </div>
                                    <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar"
                                                 style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                 aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                            <div class="">
                                <a href="{{ route('manage-category') }}">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Total Users</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totals['users'] }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                            <div class="">
                                <a href="{{ route('manage-user') }}">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Row -->
        <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                        <div class="dropdown no-arrow">
                            <select name="chart" id="chart" onchange="chartFunction()" class="form-control ">
                                <option >Select Chart</option>
                                <option  value="pie">Pie</option>
                                <option  value="column">Column</option>
                                <option  value="pyramid">Pyramid</option>
                                <option  value="bar">Bar</option>
                            </select>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-area">
                            <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div
                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                 aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <div class="chart-pie pt-4 pb-2">
                            <canvas id="myPieChart"></canvas>
                        </div>
                        <div class="mt-4 text-center small">
                            <span class="mr-2">
                                <i class="fas fa-circle text-primary"></i> Direct</span>
                            <span class="mr-2">
                                <i class="fas fa-circle text-success"></i> Social
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle text-info"></i> Referral
                            </span>
                            <span class="mr-2">
                                <i class="fas fa-circle text-danger"></i> Test
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- user Chart -->
        <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header ">
                        <h6 class="m-0 font-weight-bold text-primary">User Overview</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body dark">
                        <div id="userChart"></div>
                    </div>
                </div>
            </div>            
        </div>
        <!-- user chart end -->
    </div>
    <script src="{!! asset('admin/dashboard/js/highChart.js') !!}"></script>
    <script src="{!! asset('admin/dashboard/js/CanvasJS.js') !!}"></script>
    <script>
        var datas    = <?php echo json_encode($datas) ?>

        Highcharts.chart('userChart',{
            title:{
                text:'New User Growth, 2022'
            },
            subtitle:{
                text:'Source: User Login'
            },
            xAxis:{
                categories:['Jan','Feb','Mar','Apr','May','Jun', 'July','Aug','Sep','Oct','Nov','Dec']
            },
            yAxis:{
                text:'Number Of New User'
            },
            legend:{
                layout:'vertical',
                align:'right',
                verticalAlign:'middle'
            },
            plotOptions:{
                series:{
                    allowPointSelect:true
                }
            },
            series:[{
                name:'New User',
                data:datas
            }],
            responsive:{
                rules:[{
                    condition:{
                        maxWidth:500
                    },
                    chartOptions:{
                        legend:{
                            layout:'horizontal',
                            align:'center',
                            verticalAlign:'bottom'
                        }
                    }
                }]
            }
        })
    </script>
    <script>
        var productNamePrice = <?php echo json_encode($data) ?>;

        window.onload = function () {
        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            title:{
                text: "Sells Product Growth"
            },
            axisY: {
                title: "Reserves(Sells)"
            },
            data: [{        
                type:"column",  
                showInLegend: true, 
                legendMarkerColor: "grey",
                legendText: "Sells = Tk",
                dataPoints:productNamePrice
            }]
        })
        chart.render();
        }
    </script>
@endsection

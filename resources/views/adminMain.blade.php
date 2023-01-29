<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ReporTruzz - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="templateAdmin\vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="templateAdmin\css\sb-admin-2.css" rel="stylesheet">

    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    
    
    <!-- <canvas id="barChart"></canvas> -->

    <style>
.button-tukaq {

    background-color:black;
}
.t{
    color:black;
}
</style>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav button-tukaq sidebar sidebar-dark accordion button-tukaq" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ReporTruzz</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="adminMain">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Admin Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>
            <li class="nav-item active">
                <a class="nav-link" href="/home">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Home</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="/main">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Main</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="/cmarker">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Marker</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 ">{{ Auth::user()->email }}</span>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 ">{{ Auth::user()->name }}</span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="\login" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Admin Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Number of active reports -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total reports </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalReports }}</div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Report in Progress -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Reports In Progress </div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $inProgressReports }}</div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Reports Solved</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $resolvedReports }}</div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
       
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                <!-- Reports -->         
                <div class="card">
                    <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                            </li>
                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">This Month</a></li>
                            <li><a class="dropdown-item" href="#">This Year</a></li>
                        </ul>
                    </div>
                </div>

            <!-- DataTales Example -->
            <div class="col-12">
            <div class="card recent-sales overflow-auto">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Report List</h6>
            </div>
            <script>
            // $(document).ready( function () {
            //     $('#title').DataTable();
            // } );
            var table = $('#dataTable').DataTable();
            </script>
            <div class="card-body">
                <div class="table-responsive">
                    <div class="dataTables_filter">
                        <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label>
                    </div>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Report Name</th>                   
                            <th scope="col">Category ID</th>
                            <th scope="col">Status</th>
                            <th scope="col">Change Status</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($row1 as $foods)
                        <tr>
                            <th scope="row">{{$foods->id}}</th>
                            <td>{{$foods->user?->name}}</td>
                            <td>{{$foods->user?->email}}</td>
                            <th scope="row"><a href="$id">{{$foods->title}}</a></th>
                            <td>{{$foods->category_id}}</td>
                            <td>{{$foods->created_at}}</td>
                            <td>{{$foods->status}}</td>
                                <td><form method="post" action="{{ url('status/update', $foods->id) }}">
                                @csrf
                                @method('PUT')
                                <select name="status" id="status" class="form-control">
                                    <option value="New" {{ ($foods->status == 'New') ? 'selected' : '' }}>New</option>
                                    <option value="In Progress" {{ ($foods->status == 'In Progress') ? 'selected' : '' }}>In Progress</option>
                                    <option value="Resolved" {{ ($foods->status == 'Resolved') ? 'selected' : '' }}>Resolved</option>
                                </select>
                                <button type="submit" class="btn btn-secondary button-tukaq">Save</button>
                                </form>
                                </td>  
                        </tr>    
                        @endforeach                      
                        </tbody>
                    </table>
               
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

                    <!-- Content Row -->
                         

                    <canvas id="myChart" width="600" height="400"></canvas>

                    <!-- bar chart -->
                    <div class="col-3 mb-4">

                        <script>
                            var ctx = document.getElementById('myChart').getContext('2d');
                            var myChart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: 
                                        [
                                            @foreach($data as $d) 
                                            @switch($d->category_id)
                                                @case(1)
                                                    'Abandoned Vehicles',
                                                    @break
                                                @case(2)
                                                    'Road Damages',
                                                    @break
                                                @case(3)
                                                    'Pavement maintenance',
                                                @case(4)
                                                    'Stray Animals Problem',
                                                @case(5)
                                                    'Traffic sign damage',
                                                @case(6)
                                                    'Other',
                                                    @break
                                                @default
                                                    'Other',
                                            @endswitch
                                        @endforeach
                                    ],
                                    datasets: [{
                                        label: 'Number of Reports based on categories',
                                        data: [@foreach($data as $d) {{ $d->count }}, @endforeach],
                                        backgroundColor: [
                                            'rgba(255, 99, 132, 0.2)',
                                            'rgba(54, 162, 235, 0.2)',
                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(255, 159, 64, 0.2)'
                                        ],
                                        borderColor: [
                                            'rgba(255, 99, 132, 1)',
                                            'rgba(54, 162, 235, 1)',
                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 159, 64, 1)'
                                        ],
                                        borderWidth: 3
                                    }]
                                },
                                options: {
                                    scales: {
                                        y: {
                                            options: {
                                                scales: {
                                                    y: {
                                                        beginAtZero: true,
                                                        ticks: {
                                                            fontColor: 'black',
                                                            fontSize: 18
                                                        }
                                                    }
                                                }
                                            }
                                        }                                     
                                    }
                                }
                            });
                        </script>
                    </div>
                        

                        <div class="col-lg-6 mb-4">

                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Authorities</h6>
                                </div>
                                <div class="card-body">
                                    
                                        <h6>Pulau Pinang City Council</h6>
                                        <li>http://aduan.mbpp.gov.my/</li>
                                        <br>
                                        <h6>Public Works Department of Pulau Pinang</h6>
                                        <li>https://ppinang.jkr.gov.my/Malay_Version/C0400_Hubungi_Kami.html</li>
                                        <br>
                                        <h6>Malaysian Highway Authority</h6>
                                        <li>https://llm.spab.gov.my/eApps/system/index.do</li>
                                        <br>
                                        
                                    <p class="mb-0">Before working with this theme, you should become familiar with the
                                        Bootstrap framework, especially the utility classes.</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="\login">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="templateAdmin\vendor/jquery/jquery.min.js"></script>
    <script src="templateAdmin\vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="templateAdmin\vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="templateAdmin\js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="templateAdmin\vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="templateAdmin\js/demo/chart-area-demo.js"></script>
    <script src="templateAdmin\js/demo/chart-pie-demo.js"></script>

</body>

</html>
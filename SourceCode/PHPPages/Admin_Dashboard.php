<?php
  session_start();

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="dashstyles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="../bootstrap-5.2.2/css/bootstrap.min.css"/>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"> 


    </head>

    <style>
        .main-container {
  grid-area: main;
  overflow-y: auto;
  padding: 20px 20px;
}

.main-title {
  display: flex;
  justify-content: space-between;
}

.main-title > p {
  font-size: 20px;
}

.main-cards {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  gap: 20px;
  margin: 20px 0;
}

.card {
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  padding: 25px;
  background-color: #ffffff;
  box-sizing: border-box;
  border: 1px solid #d2d2d3;
  border-radius: 5px;
  box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2);
}

.card:first-child {
  border-left: 7px solid #206d19;
}

.card:nth-child(2) {
  border-left: 7px solid #44b453;
}

.card:nth-child(3) {
  border-left: 7px solid #206d19;
}

.card:nth-child(4) {
  border-left: 7px solid #44b453;
}

.card > span {
  font-size: 20px;
  font-weight: 600;
}

.card-inner {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.card-inner > p {
  font-size: 18px;
}

.card-inner > span {
  font-size: 35px;
}

.charts {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
}

.charts-card {
  background-color: #ffffff;
  margin-bottom: 20px;
  padding: 25px;
  box-sizing: border-box;
  -webkit-column-break-inside: avoid;
  border: 1px solid #d2d2d3;
  border-radius: 5px;
  box-shadow: 0 6px 7px -4px rgba(0, 0, 0, 0.2);
}

.chart-title {
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 22px;
  font-weight: 600;
}

    </style>


 
    <body class="sb-nav-fixed" >
        <nav class="sb-topnav navbar navbar-expand " style="background-color: #1165AE; ">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="dash.html" style="color: #FFDE59;">
                <img src="/SourceCode/images/logoo.jpg"  class="" style="width: 50px; height: 50px;"alt=""> NMEMPC
            </a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars" style="color: #FFDE59;"> </i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading text-white ">Core</div>
                            <a class="nav-link active" href="MemberList.php">
                                <div class="sb-nav-link-icon "><i class="fas fa-tachometer-alt "></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading text-white">Member</div>
                            <a class="nav-link px-2" href="MemberList.php"><i class="fa-solid fa-user-group  me-2"></i> List of Members</a>
                            <a class="nav-link px-2" href="Member_Approval.php"><i class="fa-solid fa-user-check  me-1"></i>  Membership Approval </a>
                
                       
                            <div class="sb-sidenav-menu-heading text-white">Loans</div>
                            <a class="nav-link px-2" href="layout-static.html"><i class="fa-solid fa-credit-card  me-2"></i> Member's Loan</a>
                            <a class="nav-link px-2" href="layout-static.html"><i class="fa-solid fa-table me-2"></i> Loan Types</a>
                        
                        </div>
                    </div>
                   
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main class="main-container">
                    <div class="main-title">
                      <h2 style="color: black">Dashboard </h2>
                      
                    </div>
            
                    <div class="main-cards">
            
                      <div class="card">
                        <div class="card-inner">
                          <p class="text-primary">Total Members</p>
                          <span class="material-icons-outlined text-blue" style="color: #206d19;">people</span>
                        </div>
                        <span class="text-primary font-weight-bold">150</span>
                      </div>
            
                      <div class="card">
                        <div class="card-inner">
                          <p class="text-primary">Total Loan Application</p>
                          <span class="material-icons-outlined text-orange">article</span>
                        </div>
                        <span class="text-primary font-weight-bold">83</span>
                      </div>
            
                      <div class="card">
                        <div class="card-inner">
                          <p class="text-primary">Loan Approved</p>
                          <span class="material-icons-outlined text-green">check</span>
                        </div>
                        <span class="text-primary font-weight-bold">79</span>
                      </div>
            
                      <div class="card">
                        <div class="card-inner">
                          <p class="text-primary">Loans Disbursed</p>
                          <span class="material-icons-outlined text-red">wallet</span>
                        </div>
                        <span class="text-primary font-weight-bold">56</span>
                      </div>
            
                    </div>
            
                    <div class="charts">
            
                      <div class="charts-card">
                        <p class="chart-title">Predicted Revenue</p>
                        <div id="bar-chart"></div>
                      </div>
            
                      <div class="charts-card">
                        <p class="chart-title">dipa alam ilalagay</p>
                        <div id="area-chart"></div>
                      </div>
            
                    </div>
                  </main>
                <!-- <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer> -->
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>


   
    <script>
        window.addEventListener('DOMContentLoaded', event => {

// Toggle the side navigation
const sidebarToggle = document.body.querySelector('#sidebarToggle');
if (sidebarToggle) {
    // Uncomment Below to persist sidebar toggle between refreshes
    // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
    //     document.body.classList.toggle('sb-sidenav-toggled');
    // }
    sidebarToggle.addEventListener('click', event => {
        event.preventDefault();
        document.body.classList.toggle('sb-sidenav-toggled');
        localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
    });
}

});
    </script>
    <script>
        // BAR CHART
var barChartOptions = {
  series: [{
    data: [10, 8, 6, 4, 2]
  }],
  chart: {
    type: 'bar',
    height: 350,
    toolbar: {
      show: false
    },
  },
  colors: [
    "#246dec",
    "#cc3c43",
    "#367952",
    "#f5b74f",
    "#4f35a1"
  ],
  plotOptions: {
    bar: {
      distributed: true,
      borderRadius: 4,
      horizontal: false,
      columnWidth: '40%',
    }
  },
  dataLabels: {
    enabled: false
  },
  legend: {
    show: false
  },
  xaxis: {
    categories: ["Laptop", "Phone", "Monitor", "Headphones", "Camera"],
  },
  yaxis: {
    title: {
      text: "Count"
    }
  }
};

var barChart = new ApexCharts(document.querySelector("#bar-chart"), barChartOptions);
barChart.render();


// AREA CHART
var areaChartOptions = {
  series: [{
    name: 'Purchase Orders',
    data: [31, 40, 28, 51, 42, 109, 100]
  }, {
    name: 'Sales Orders',
    data: [11, 32, 45, 32, 34, 52, 41]
  }],
  chart: {
    height: 350,
    type: 'area',
    toolbar: {
      show: false,
    },
  },
  colors: ["#4f35a1", "#246dec"],
  dataLabels: {
    enabled: false,
  },
  stroke: {
    curve: 'smooth'
  },
  labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
  markers: {
    size: 0
  },
  yaxis: [
    {
      title: {
        text: 'Purchase Orders',
      },
    },
    {
      opposite: true,
      title: {
        text: 'Sales Orders',
      },
    },
  ],
  tooltip: {
    shared: true,
    intersect: false,
  }
};

var areaChart = new ApexCharts(document.querySelector("#area-chart"), areaChartOptions);
areaChart.render();
    </script>


    
</body>
</html>

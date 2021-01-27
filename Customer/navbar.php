
<html lang="en">
<head>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Bootstrap core JavaScript-->

</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="LoggedCustomer.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-building"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Apartment Management System </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="LoggedCustomer.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>HomePage</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">

                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <li class="nav-item">
                        <a class="nav-link" href="fee.php">
                            <i class="fas fa-money-check"></i>
                            <span>Pay Dues</span></a>
                        </li>

                    </li>

                    <!-- Nav Item - Utilities Collapse Menu -->






                    <hr class="sidebar-divider">

                    <!-- Heading -->
                    <div class="sidebar-heading">

                    </div>

                    <!-- Nav Item - Pages Collapse Menu -->


                    <!-- Nav Item - Charts -->
                    <li class="nav-item">
                        <a class="nav-link" href="balance.php">
                            <i class="fas fa-fw fa-chart-area"></i>
                            <span>Due Balance</span></a>
                            <hr class="sidebar-divider">
                        </li>
                        <div class="sidebar-heading">

                        </div>
                        <li class="nav-item">
                            <a class="nav-link" href="announcement.php">
                                <i class="fas fa-user"></i>
                                <span>Announcements</span></a>
                            </li>

                            <hr class="sidebar-divider">
                        </li>
                        <div class="sidebar-heading">

                        </div>
                        <li class="nav-item">
                            <a class="nav-link" href="LoggedCustomer.php">
                                <i class="fas fa-user"></i>
                                <span>My Profile</span></a>
                            </li>
                            <!-- Divider -->
                            <hr class="sidebar-divider d-none d-md-block">

                            <div class="text-center d-none d-md-inline">
                                <button class="rounded-circle border-0" id="sidebarToggle"></button>
                            </div>
                            <div class="sidebar-card">
                                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="">
                                <p class="text-center mb-2"><strong>Github Link</strong> </p>
                                <a class="btn btn-success btn-sm" href="https://github.com/mertkarababa7/DesignApartmentManagerWeb"  target="_blank">By Mert Karababa!</a>
                            </div>



                        </ul>

                        <div id="content-wrapper" class="d-flex flex-column">

                            <!-- Main Content -->
                            <div id="content">

                                <!-- Topbar -->
                                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                                    <!-- Sidebar Toggle (Topbar) -->
                                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                        <i class="fa fa-bars"></i>
                                    </button>

                                    <!-- Topbar Search -->


                                    <div class="input-group">

                                        <div class="input-group-append">

                                            <a href = logoutCustomer.php
                                            <i class="fas fa-sign-out-alt"></i> LOG OUT</a>

                                        </div>
                                    </div>



                                    <!-- Topbar Navbar -->
                                    <ul class="navbar-nav ml-auto">

                                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                                        <li class="nav-item dropdown no-arrow d-sm-none">
                                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-search fa-fw"></i>
                                        </a>
                                        <!-- Dropdown - Messages -->
                                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                        aria-labelledby="searchDropdown">
                                        <form class="form-inline mr-auto w-100 navbar-search">
                                            <div class="input-group">
                                                <input type="text" class="form-control bg-light border-0 small"
                                                placeholder="Search for..." aria-label="Search"
                                                aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-primary" type="button">
                                                        <i class="fas fa-search fa-sm"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </li>

                                <!-- Nav Item - Alerts -->
                             <h4>   <li class="nav-item dropdown no-arrow mx-1">
                                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bell fa-fw"></i>
                                    <!-- Counter - Alerts -->
                                    <span class="badge badge-danger badge-counter">1+</span>
                                </a>
                                <!-- Dropdown - Alerts -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Last Announcement
                                </h6>
                               
                              
                                <a class="dropdown-item d-flex align-items-center" a href="announcement.php">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-grey-1000"><?php
                                $Block=$_SESSION['Block'];
                                $sql1 = "SELECT id FROM announcement where Block='$Block'  ORDER BY id DESC ";
                                $result= mysqli_query($conn, $sql1);
                                $row =$result->fetch_assoc();
                                $numberofusers=$row['id'];
                                

                                $query = "SELECT * FROM announcement where Block='$Block' ORDER BY openedDate  ";

                                $data = mysqli_query($conn,$query);
                                $total=mysqli_num_rows($data);                 
                                if($total!=0)
                                {

while($result = mysqli_fetch_assoc($data)){   //Creates a loop to loop through results
   if ($result['id'] == $numberofusers ) {
      echo "  
      ".$result['openedDate']." ";
  ?>
            </div>
            <?php 
              echo "  
      ".$result['details']." ";

            }


}
}               ?>
                                      
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500"  a href="announcement.php">Show All Announcements</a>
                            </div>
                        </li> </h4>

                       
                    

<div class="topbar-divider d-none d-sm-block"></div>

<!-- Nav Item - User Information -->
<li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Customer <?php
    echo $_SESSION['name'];?></span>
    <img class="img-profile rounded-circle"
    src="img/undraw_profile.svg">
</a>
<!-- Dropdown - User Information -->
<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
aria-labelledby="userDropdown">
<a href="LoggedCustomer.php"class="dropdown-item" href="#">
    <i class="fas fa-user"></i>
    Profile
</a>
<a class="dropdown-item" href="#">
    <a href="logoutCustomer.php"class="dropdown-item" href="#">
        <i class="fas fa-sign-out-alt"></i>
        log Out
    </a> 



</a>
</div>
</li>

</ul>

</nav>
</body>
<!-- Bootstrap core JavaScript-->

</html>
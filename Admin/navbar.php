<!-- Custom fonts for this template-->
<html lang="en">
<head>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
 <!-- Bootstrap core JavaScript-->
   
   <style>


.icon-red{
  background-color:#ff0000!important;
}

.sidebar .nav-item .nav-link .img-profile, .topbar .nav-item .nav-link .img-profile {
    height: 3rem;
    width: 3rem;
}
   </style>
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-building"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Apartment Management System </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="admin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>HomePage</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                VIEW PAGES
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-money-bill-alt"></i>
                    <span>Dues</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Due Pages</h6>
                        <a class="collapse-item" href="adddues.php">Open Due <i class="fas fa-money-bill-alt"></i></a>
                        <a class="collapse-item" href="addduespent.php">Spent Due <i class="fas fa-money-bill-alt"></i></a>
                         <div class="collapse-divider"></div>
                        
                        <h6 class="collapse-header">Payment List</h6>
                        <a class="collapse-item" href="balance.php">Due Payment List <i class="fas fa-list"></i></a>
                        <a class="collapse-item" href="dueview.php">Due List <i class="fas fa-list"></i></a>
                      
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-user"></i>
                    <span>Customer & Flats</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Customer Pages</h6>
                        <a class="collapse-item" href="Landlord.php">Customer List <i class="fas fa-list"></i></a>
                       
                       <div class="collapse-divider"></div>
                         <h6 class="collapse-header">Apartment & Flat</h6>
                           <a class="collapse-item" href="viewflats.php">Flat List <i class="fas fa-list"></i></a>
                            <a class="collapse-item" href="viewapartment.php">Apartment List  <i class="fas fa-list"></i></a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Register Pages
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-registered"></i>
                    <span>Register</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Person:</h6>

                        <a  class="collapse-item" href="registerCustomer.php"> Customer  <i class="fas fa-user"></i> </a>
                        <a class="collapse-item" href="registerAdmin.php"> Admin  <i class="fas fa-user"></i></a>
                        <a class="collapse-item" href="registerStaff.php">Staff <i class="fas fa-user"></i></a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Apartment:</h6>
                         <a class="collapse-item" href="addapartment.php">Apartment <i class="fas fa-building"></i></a>
                        <a class="collapse-item" href="addflat.php">Flats <i class="fas fa-building"></i></a>
                     <h6 class="collapse-header">Announcement:</h6>
                      <a class="collapse-item" href="registerAnnouncement.php">Announcement <i class="fas fa-bullhorn"></i></a>
                    </div>
                </div>
            </li>

       

  <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
               
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
           

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="balance.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Balance</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="viewAnnouncement.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Announcements</span></a>
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

                                            <a href = logout.php
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
                                    <i class="fas fa-envelope fa-lg fa-fw"a></i>
                                    <!-- Counter - Alerts -->

                                   <br> <span class="badge badge-danger badge-counter">+3</span>

                                </a>
                                <!-- Dropdown - Alerts -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Messages
                                </h6>


                                <a class="dropdown-item px-0" a href="messageview.php">

                                    <div class="container px-0">
                                        <div class="row">
                                            <?php
                                            $admin_id=$_SESSION['id'];
                                            $sql1 = "SELECT id FROM messages where admin_id='$admin_id'  ORDER BY id DESC ";
                                            $result= mysqli_query($conn, $sql1);
                                            $row =$result->fetch_assoc();
                                            $numberofusers=$row['id'];


                                            $query = "SELECT * FROM messages where admin_id='$admin_id' ORDER BY id DESC limit 3 ";

                                            $data = mysqli_query($conn,$query);
                                            $total=mysqli_num_rows($data);                 
                                            if($total!=0)
                                            {

while($result = mysqli_fetch_assoc($data)){   //Creates a loop to loop through results
  ?><div class="dropdown-item d-flex align-items-center"><div class="col-3">
    <div class="icon-circle bg-warning <?php 
    if($result['head'] == 'Complaint')
    {
        echo "icon-red";
    }
    ?>">
    <i class="fas <?php 
    if($result['head']=='Complaint')
    {
        echo "fa-exclamation-triangle";
    }
    else
    {
        echo "fa-exclamation";
    }
    ?> text-white"></i>
</div>
</div><div class="col-9"><div  class="small text-grey-1000"><?php
$result1="Sending Date";
echo "  
".$result1 ." ".$result['messagedate']." ";?></div><div><?php

echo "  
".$result['message']." ";?></div></div></div><?php




}
}               ?>

</div>
</div>
</a>
<a class="dropdown-item text-center small text-gray-500"  a href="messageview.php">Show All Messages</a>
</div>
</li> </h4>


                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin  <?php
                                echo $_SESSION['name'];?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                <a href="profile.php"class="dropdown-item" href="#">
                                    <i class="fas fa-user"></i>
                                    Profile
                                </a>
                             
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item"  a href="" data-toggle="modal" data-target="#logoutModal">
                                     <a href="logout.php"class="dropdown-item" href="#">
                                    <i class="fas fa-sign-out-alt"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
        </body>
         <!-- Bootstrap core JavaScript-->
  
</html>
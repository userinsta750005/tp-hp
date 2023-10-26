
<!DOCTYPE html>
<html lang="en">
    
    <!--Head Code-->
    <head>
        <meta charset="utf-8" />
        <title>Hospital Management Information System -A Super Responsive Information System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="MartDevelopers" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('docteur/assets/images/favicon.ico')}}">

        <!-- Plugins css -->
        <link href="{{asset('docteur/assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{asset('docteur/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('docteur/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('docteur/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
         <!-- Loading button css -->
         <link href="{{asset('docteur/assets/libs/ladda/ladda-themeless.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Footable css -->
        <link href="{{asset('docteur/assets/libs/footable/footable.core.min.css')}}" rel="stylesheet" type="text/css" />

       <!--Load Sweet Alert Javascript-->
       <script src="{{asset('docteur/assets/js/swal.js')}}"></script>
       
        <!--Inject SWAL-->
        
        
</head>
    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
                <div class="navbar-custom">
        <ul class="list-unstyled topnav-menu float-right mb-0">

            <li class="d-none d-sm-block">
                <form class="app-search">
                    <div class="app-search-box">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <button class="btn" type="submit">
                                    <i class="fe-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </li>

            
            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="{{asset('docteur/assets/images/users/user-default-2-min.png')}}" alt="dpic" class="rounded-circle">
                    <span class="pro-user-name ml-1">
                        Bryan Arreola <i class="mdi mdi-chevron-down"></i> 
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div>

                    <!-- item-->
                    <!-- <a href="his_doc_account.php" class="dropdown-item notify-item">
                        <i class="fas fa-user"></i>
                        <span>My Account</span>
                    </a> -->

                    <a href="his_doc_update-account.php" class="dropdown-item notify-item">
                        <i class="fas fa-user-tag"></i>
                        <span>Update Account</span>
                    </a>


                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    <a href="/logoutDocteur" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </li>

           

        </ul>

        <!-- LOGO -->
        <div class="logo-box">
            <a href="his_admin_dashboard.php" class="logo text-center">
                <span class="logo-lg">
                    <img src="{{asset('docteur/assets/images/logo-light.png')}}" alt="" height="18">
                    <!-- <span class="logo-lg-text-light">UBold</span> -->
                </span>
                <span class="logo-sm">
                    <!-- <span class="logo-sm-text-dark">U</span> -->
                    <img src="{{asset('docteur/assets/images/logo-sm-white.png')}}" alt="" height="24">
                </span>
            </a>
        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="fe-menu"></i>
                </button>
            </li>

            <li class="dropdown d-none d-lg-block">
                <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    Create New
                    <i class="mdi mdi-chevron-down"></i> 
                </a>
                <div class="dropdown-menu">
                    

                    <!-- item-->
                    <a href="his_doc_register_patient.php" class="dropdown-item">
                        <i class="fe-activity mr-1"></i>
                        <span>Patient</span>
                    </a>



                    <!-- item-->
                    <a href="his_doc_lab_report.php" class="dropdown-item">
                        <i class="fe-hard-drive mr-1"></i>
                        <span>Laboratory Report</span>
                    </a>

                    
                    <div class="dropdown-divider"></div>

                    
                </div>
            </li>

        </ul>
    </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="slimscroll-menu">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <li class="menu-title">Navigation</li>

                            <li>
                                <a href="his_doc_dashboard.php">
                                    <i class="fe-airplay"></i>
                                    <span> Dashboard </span>
                                </a>
                                
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fab fa-accessible-icon "></i>
                                    <span> Patients </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="his_doc_register_patient.php">Register Patient</a>
                                    </li>
                                    <li>
                                        <a href="his_doc_view_patients.php">View Patients</a>
                                    </li>
                                    <li>
                                        <a href="his_doc_manage_patient.php">Manage Patients</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="his_doc_discharge_patient.php">Discharge Patients</a>
                                    </li>
                                    <li>
                                        <a href="his_doc_patient_transfer.php">Patient Transfers</a>
                                    </li>
                                </ul>
                            </li>

                          

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-pill"></i>
                                    <span> Pharmacy </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="his_doc_add_pharm_cat.php">Add Pharm Category</a>
                                    </li>
                                    <li>
                                        <a href="his_doc_view_pharm_cat.php">View Pharm Category</a>
                                    </li>
                                    <li>
                                        <a href="his_doc_manage_pharm_cat.php">Manage Pharm Category</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="his_doc_add_pharmaceuticals.php">Add Pharmaceuticals</a>
                                    </li>
                                    <li>
                                        <a href="his_doc_view_pharmaceuticals.php">View Pharmaceuticals</a>
                                    </li>
                                    <li>
                                        <a href="his_doc_manage_pharmaceuticals.php">Manage Pharmaceuticals</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="his_doc_add_presc.php">Add Prescriptions</a>
                                    </li>
                                    <li>
                                        <a href="his_doc_view_presc.php">View Prescriptions</a>
                                    </li>
                                    <li>
                                        <a href="his_doc_manage_presc.php">Manage Prescriptions</a>
                                    </li>
                                </ul>
                            </li>

                            
                            <li>
                                <a href="javascript: void(0);">
                                    <i class=" fas fa-funnel-dollar "></i>
                                    <span> Inventory </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                   
                                    <li>
                                        <a href="his_doc_pharm_inventory.php">Pharmaceuticals</a>
                                    </li>

                                    <li>
                                        <a href="his_doc_equipments_inventory.php">Assets</a>
                                    </li>
                                    
                                </ul>
                            </li>
                
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-flask"></i>
                                    <span> Laboratory </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="his_doc_patient_lab_test.php">Patient Lab Tests</a>
                                    </li>
                                    <li>
                                        <a href="his_doc_patient_lab_result.php">Patient Lab Results</a>
                                    </li>
                                    <li>
                                        <a href="his_doc_patient_lab_vitals.php">Patient Vitals</a>
                                    </li>
                                    
                                    <li>
                                        <a href="his_doc_lab_report.php">Lab Reports</a>
                                    </li>
                                    <hr>
                                    
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-cash-refund "></i>
                                    <span> Payrolls </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    
                                    <li>
                                        <a href="his_doc_view_payrolls.php">My Payrolls</a>
                                    </li>
                                </ul>
                            </li>

                            

                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    
                                    <h4 class="page-title">Hospital Management Information System Dashboard</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        

                        <div class="row">
                            <!--Start OutPatients-->
                            <div class="col-md-6 col-xl-4">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-danger border-danger border">
                                                <i class="fab fa-accessible-icon  font-22 avatar-title text-danger"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                                                                <h3 class="text-dark mt-1"><span data-plugin="counterup">5</span></h3>
                                                <p class="text-muted mb-1 text-truncate">Patients</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->
                            <!--End Out Patients-->


                            <!--Start InPatients-->
                            <div class="col-md-6 col-xl-4">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-danger border-danger border">
                                                <i class="mdi mdi-flask font-22 avatar-title text-danger"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                                                                <h3 class="text-dark mt-1"><span data-plugin="counterup">2</span></h3>
                                                <p class="text-muted mb-1 text-truncate">Corporation Assets</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div>
                            <!--End InPatients-->

                            <!--Start Pharmaceuticals-->
                            <div class="col-md-6 col-xl-4">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-danger border-danger border">
                                                <i class="mdi mdi-pill font-22 avatar-title text-danger"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                                                                <h3 class="text-dark mt-1"><span data-plugin="counterup">3</span></h3>
                                                <p class="text-muted mb-1 text-truncate">Pharmaceuticals</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->
                            <!--End Pharmaceuticals-->
                        
                        </div>

                        <div class="row">

                        <!--Start Vendors-->
                       
                            <div class="col-md-6 col-xl-6">
                                <a href="his_doc_account.php">
                                    <div class="widget-rounded-circle card-box">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-soft-danger border-danger border">
                                                    <i class="fas fa-user-tag font-22 avatar-title text-danger"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-right">
                                                    <h3 class="text-dark mt-1"></span></h3>
                                                    <p class="text-muted mb-1 text-truncate">My Profile</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </a> <!-- end widget-rounded-circle-->
                            </div> 
                           <!-- end col--> 
                            <!--End Vendors-->  

                            <!--Start Corporation Assets-->
                            <div class="col-md-6 col-xl-6">
                                <a href="his_doc_view_payrolls.php">
                                    <div class="widget-rounded-circle card-box">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-soft-danger border-danger border">
                                                    <i class="mdi mdi-flask font-22 avatar-title text-danger"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-right">
                                                    <h3 class="text-dark mt-1"></span></h3>
                                                    <p class="text-muted mb-1 text-truncate">My Payroll</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </a>     <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->
                            <!--End Corporation Assets-->
                        </div>
                        

                        
                        <!--Recently Employed Employees-->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card-box">
                                    <h4 class="header-title mb-3">Patients</h4>

                                    <div class="table-responsive">
                                        <table class="table table-borderless table-hover table-centered m-0">

                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Address</th>
                                                    <th>Mobile Phone</th>
                                                    <th>Category</th>
                                                    <th>Ailment</th>
                                                    <th>Age</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                                                                        <tbody>
                                                <tr>
                                                    
                                                    <td>
                                                        Michael White                                                    </td>
                                                    <td>
                                                        60 Radford Street                                                    </td>    
                                                    <td>
                                                        1458887854                                                    </td>
                                                    <td>
                                                        InPatient                                                    </td>
                                                    <td>
                                                        Demo Test                                                    </td>
                                                    <td>
                                                        30 Years
                                                    </td>
                                                    <td>
                                                        <a href="his_doc_view_single_patient.php?pat_id=8&&pat_number=DCRI8&&pat_name=Michael_White" class="btn btn-xs btn-success"><i class="mdi mdi-eye"></i> View</a>
                                                    </td>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
                                                </tr>
                                            </tbody>
                                                                                        <tbody>
                                                <tr>
                                                    
                                                    <td>
                                                        Cynthia Connolly                                                    </td>
                                                    <td>
                                                        9 Hill Haven Drive                                                    </td>    
                                                    <td>
                                                        1478885458                                                    </td>
                                                    <td>
                                                        InPatient                                                    </td>
                                                    <td>
                                                        Demo Test                                                    </td>
                                                    <td>
                                                        22 Years
                                                    </td>
                                                    <td>
                                                        <a href="his_doc_view_single_patient.php?pat_id=10&&pat_number=3Z14K&&pat_name=Cynthia_Connolly" class="btn btn-xs btn-success"><i class="mdi mdi-eye"></i> View</a>
                                                    </td>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
                                                </tr>
                                            </tbody>
                                                                                        <tbody>
                                                <tr>
                                                    
                                                    <td>
                                                        Lawrence Bischof                                                    </td>
                                                    <td>
                                                        82 Bryan Street                                                    </td>    
                                                    <td>
                                                        7412225698                                                    </td>
                                                    <td>
                                                        InPatient                                                    </td>
                                                    <td>
                                                        Demo Test                                                    </td>
                                                    <td>
                                                        32 Years
                                                    </td>
                                                    <td>
                                                        <a href="his_doc_view_single_patient.php?pat_id=9&&pat_number=ISL1E&&pat_name=Lawrence_Bischof" class="btn btn-xs btn-success"><i class="mdi mdi-eye"></i> View</a>
                                                    </td>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
                                                </tr>
                                            </tbody>
                                                                                        <tbody>
                                                <tr>
                                                    
                                                    <td>
                                                        Helen Macdougall                                                    </td>
                                                    <td>
                                                        28 Holly Street                                                    </td>    
                                                    <td>
                                                        1458889655                                                    </td>
                                                    <td>
                                                        InPatient                                                    </td>
                                                    <td>
                                                        Test Test                                                    </td>
                                                    <td>
                                                        42 Years
                                                    </td>
                                                    <td>
                                                        <a href="his_doc_view_single_patient.php?pat_id=11&&pat_number=K74P3&&pat_name=Helen_Macdougall" class="btn btn-xs btn-success"><i class="mdi mdi-eye"></i> View</a>
                                                    </td>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
                                                </tr>
                                            </tbody>
                                                                                        <tbody>
                                                <tr>
                                                    
                                                    <td>
                                                        Christine Moore                                                    </td>
                                                    <td>
                                                        117 Bleecker Street                                                    </td>    
                                                    <td>
                                                        7412569698                                                    </td>
                                                    <td>
                                                        InPatient                                                    </td>
                                                    <td>
                                                        Demo Test                                                    </td>
                                                    <td>
                                                        28 Years
                                                    </td>
                                                    <td>
                                                        <a href="his_doc_view_single_patient.php?pat_id=12&&pat_number=4TLG0&&pat_name=Christine_Moore" class="btn btn-xs btn-success"><i class="mdi mdi-eye"></i> View</a>
                                                    </td>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
                                                </tr>
                                            </tbody>
                                                                                    </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->                                                                                                                                                                                                                                         
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                2020 - 2023 &copy; Hospital Management Information System. Developed By Martin Mbithi Nzilani</a>
            </div>

        </div>
    </div>
</footer>                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h5 class="m-0 text-white">Settings</h5>
            </div>
            <div class="slimscroll-menu">
                <!-- User box -->
                <div class="user-box">
                    <div class="user-img">
                        <img src="{{asset('docteur/assets/images/users/user-1.jpg')}}" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
                    </div>
            
                    <h5><a href="javascript: void(0);">Geneva Kennedy</a> </h5>
                    <p class="text-muted mb-0"><small>Admin Head</small></p>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h5 class="pl-3">Basic Settings</h5>
                <hr class="mb-0" />

                <div class="p-3">
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="Rcheckbox1" type="checkbox" checked>
                        <label for="Rcheckbox1">
                            Notifications
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="Rcheckbox2" type="checkbox" checked>
                        <label for="Rcheckbox2">
                            API Access
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="Rcheckbox3" type="checkbox">
                        <label for="Rcheckbox3">
                            Auto Updates
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-2">
                        <input id="Rcheckbox4" type="checkbox" checked>
                        <label for="Rcheckbox4">
                            Online Status
                        </label>
                    </div>
                    <div class="checkbox checkbox-primary mb-0">
                        <input id="Rcheckbox5" type="checkbox" checked>
                        <label for="Rcheckbox5">
                            Auto Payout
                        </label>
                    </div>
                </div>

                <!-- Timeline -->
                <hr class="mt-0" />
                <h5 class="px-3">Messages <span class="float-right badge badge-pill badge-danger">25</span></h5>
                <hr class="mb-0" />
                <div class="p-3">
                    <div class="inbox-widget">
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{asset('docteur/assets/images/users/user-2.jpg')}}" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a></p>
                            <p class="inbox-item-text">I've finished it! See you so...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{asset('docteur/assets/images/users/user-3.jpg')}}" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{asset('docteur/assets/images/users/user-4.jpg')}}" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a></p>
                            <p class="inbox-item-text">Nice to meet you</p>
                        </div>

                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{asset('docteur/assets/images/users/user-5.jpg')}}" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
                            <p class="inbox-item-text">Hey! there I'm available...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{asset('docteur/assets/images/users/user-6.jpg')}}" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Adhamdannaway</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                    </div> <!-- end inbox-widget -->
                </div> <!-- end .p-3-->

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{asset('docteur/assets/js/vendor.min.js')}}"></script>

        <!-- Plugins js-->
        <script src="{{asset('docteur/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
        <script src="{{asset('docteur/assets/libs/jquery-knob/jquery.knob.min.js')}}"></script>
        <script src="{{asset('docteur/assets/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('docteur/assets/libs/flot-charts/jquery.flot.js')}}"></script>
        <script src="{{asset('docteur/assets/libs/flot-charts/jquery.flot.time.js')}}"></script>
        <script src="{{asset('docteur/assets/libs/flot-charts/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{asset('docteur/assets/libs/flot-charts/jquery.flot.selection.js')}}"></script>
        <script src="{{asset('docteur/assets/libs/flot-charts/jquery.flot.crosshair.js')}}"></script>

        <!-- Dashboar 1 init js-->
        <script src="{{asset('docteur/assets/js/pages/dashboard-1.init.js')}}"></script>

        <!-- App js-->
        <script src="{{asset('docteur/assets/js/app.min.js')}}"></script>
        
    </body>

</html>
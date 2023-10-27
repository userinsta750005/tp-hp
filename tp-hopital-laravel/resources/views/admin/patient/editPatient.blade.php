
<!--Server side code to handle  Patient Registration-->
<!--End Server Side-->
<!--End Patient Registration-->
<!DOCTYPE html>
<html lang="en">
    
    <!--Head-->
    <head>
        <meta charset="utf-8" />
        <title>Hospital Management System -A Super Responsive Information System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="MartDevelopers" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset("admin/assets/images/favicon.ico")}}">

        <!-- Plugins css -->
        <link href="{{asset("admin/assets/libs/flatpickr/flatpickr.min.css")}}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{asset("admin/assets/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css" />
        <link href="{{asset("admin/assets/css/icons.min.css")}}" rel="stylesheet" type="text/css" />
        <link href="{{asset("admin/assets/css/app.min.css")}}" rel="stylesheet" type="text/css" />
         <!-- Loading button css -->
         <link href="{{asset("admin/assets/libs/ladda/ladda-themeless.min.css")}}" rel="stylesheet" type="text/css" />

        <!-- Footable css -->
        <link href="{{asset("admin/assets/libs/footable/footable.core.min.css")}}" rel="stylesheet" type="text/css" />

       <!--Load Sweet Alert Javascript-->
       <script src="{{asset("admin/assets/js/swal.js")}}"></script>
       
        <!--Inject SWAL-->
        
        
</head>    <body>

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
                    <img src="{{asset("admin/assets/images/users/doc-icon.png")}}" alt="dpic" class="rounded-circle">
                    <span class="pro-user-name ml-1">
                        System Administrator <i class="mdi mdi-chevron-down"></i> 
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <!-- <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div> -->

                    <!-- item-->
                    <!-- <a href="his_admin_account.php" class="dropdown-item notify-item">
                        <i class="fe-user"></i>
                        <span>My Account</span>
                    </a> -->


                    <!-- <div class="dropdown-divider"></div> -->

                    <!-- item-->
                    <a href="his_admin_logout_partial.php" class="dropdown-item notify-item">
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
                    <img src="{{asset("admin/assets/images/logo-light.png")}}" alt="" height="18">
                    <!-- <span class="logo-lg-text-light">UBold</span> -->
                </span>
                <span class="logo-sm">
                    <!-- <span class="logo-sm-text-dark">U</span> -->
                    <img src="{{asset("admin/assets/images/logo-sm-white.png")}}" alt="" height="24">
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
                    <a href="addemployee.html" class="dropdown-item">
                        <i class="fe-users mr-1"></i>
                        <span>Employee</span>
                    </a>

                    <!-- item-->
                    <a href="registerpatient.html" class="dropdown-item">
                        <i class="fe-activity mr-1"></i>
                        <span>Patient</span>
                    </a>

                    <!-- item-->
                    <a href="addpayrol.html" class="dropdown-item">
                        <i class="fe-layers mr-1"></i>
                        <span>Payroll</span>
                    </a>

                    <!-- item-->
                    <a href="addvendorredetails.html" class="dropdown-item">
                        <i class="fe-shopping-cart mr-1"></i>
                        <span>Vendor</span>
                    </a>


                    <!-- item-->
                    <a href="addmedicalrecord.html" class="dropdown-item">
                        <i class="fe-list mr-1"></i>
                        <span>Medical Report</span>
                    </a>

                    <!-- item-->
                    <a href="addlabreport.html" class="dropdown-item">
                        <i class="fe-hard-drive mr-1"></i>
                        <span>Laboratory Report</span>
                    </a>

                    <!-- item-->
                    <a href="surgeyrecord.html" class="dropdown-item">
                        <i class="fe-anchor mr-1"></i>
                        <span>Surgical/Theatre Report</span>
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
                                <a href="dashboard.html">
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
                                        <a href="registerpatient.html">Register Patient</a>
                                    </li>
                                    <li>
                                        <a href="viewpatients.html">View Patients</a>
                                    </li>
                                    <li>
                                        <a href="managepatient.html">Manage Patients</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="discharge.html">Discharge Patients</a>
                                    </li>
                                    <li>
                                        <a href="patienttransfer.html">Patient Transfers</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-doctor"></i>
                                    <span> Employees </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="addemployee.html">Add Employee</a>
                                    </li>
                                    <li>
                                        <a href="viewemployees.html">View Employees</a>
                                    </li>
                                    <li>
                                        <a href="manageemployee.html">Manage Employees</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="assigndepartement.html">Assign Department</a>
                                    </li>
                                    <li>
                                        <a href="transferemployee.html">Transfer Employee</a>
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
                                        <a href="addpharmacycategory.html">Add Pharm Category</a>
                                    </li>
                                    <li>
                                        <a href="viewpharmacycategory.html">View Pharm Category</a>
                                    </li>
                                    <li>
                                        <a href="managepharmacycategory.html">Manage Pharm Category</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="addpharmaceutical.html">Add Pharmaceuticals</a>
                                    </li>
                                    <li>
                                        <a href="viewpharmaceutical.html">View Pharmaceuticals</a>
                                    </li>
                                    <li>
                                        <a href="managepharmaceutical.html">Manage Pharmaceuticals</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="addprescription.html">Add Prescriptions</a>
                                    </li>
                                    <li>
                                        <a href="viewprescription.html">View Prescriptions</a>
                                    </li>
                                    <li>
                                        <a href="manageprescription.html">Manage Prescriptions</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-cash-multiple "></i>
                                    <span> Accounting </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="addaccountpayable.html">Add Acc. Payable</a>
                                    </li>
                                    <li>
                                        <a href="manageaccountpayable.html">Manage Acc. Payable</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="addreceivable.html">Add Acc. Receivable</a>
                                    </li>
                                    <li>
                                        <a href="manageaccountreceivable.html">Manage Acc. Receivable</a>
                                    </li>
                                    <hr>
                                    
                                    
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
                                        <a href="inventorypharmaceuticals.html">Pharmaceuticals</a>
                                    </li>

                                    <li>
                                        <a href="invetory{{asset("admin/assets.html")}}">Assets</a>
                                    </li>
                                    
                                </ul>
                            </li>
                
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-share"></i>
                                    <span> Reporting </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="inpatientrecords.html">InPatient Records</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_outpatient_records.php">OutPatient Records</a>
                                    </li>
                                    <li>
                                        <a href="employeerecords.html">Employee Records</a>
                                    </li>
                                    <li>
                                        <a href="pharmaceuticalrecords.html">Pharmaceutical Records</a>
                                    </li>
                                    <li>
                                        <a href="accountrecords.html">Accounting Records</a>
                                    </li>
                                    <li>
                                        <a href="medicalrecord.html">Medical Records</a>
                                    </li>
                                    
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fe-file-text"></i>
                                    <span> Medical Records </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="addmedicalrecord.html">Add Medical Record</a>
                                    </li>
                                    <li>
                                        <a href="managemedicalrecord.html">Manage Medical Records</a>
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
                                        <a href="patientlabtest.html">Patient Lab Tests</a>
                                    </li>
                                    <li>
                                        <a href="patientladdresults.html">Patient Lab Results</a>
                                    </li>
                                    <li>
                                        <a href="patientvitals.html">Patient Vitals</a>
                                    </li>
                                    <li>
                                        <a href="employeevitals.html">Employee Vitals</a>
                                    </li>
                                    <li>
                                        <a href="labreports.html">Lab Reports</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="addlabreport.html">Add Lab Equipment</a>
                                    </li>
                                    <li>
                                        <a href="managelabequipment.html">Manage Lab Equipments</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="mdi mdi-scissors-cutting "></i>
                                    <span> Surgical / Theatre </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="addequipment.html">Add Equipment</a>
                                    </li>
                                    <li>
                                        <a href="manageequipment.html">Manage Equipments</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_add_theatre_patient.php">Add Patient</a>
                                    </li>
                                    <li>
                                        <a href="managepatient.html">Manage Patients</a>
                                    </li>

                                    <li>
                                        <a href="surgeyrecord.html">Surgery Records</a>
                                    </li>
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
                                        <a href="addpayrol.html">Add Payroll</a>
                                    </li>
                                    <li>
                                        <a href="managepayrol.html">Manage Payrolls</a>
                                    </li>
                                    <li>
                                        <a href="payrolgeneration.html">Generate Payrolls</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fas fa-user-tag"></i>
                                    <span> Vendors </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="addvendorredetails.html">Add Vendor</a>
                                    </li>
                                    <li>
                                        <a href="managevendor.html">Manage Vendors</a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fas fa-lock"></i>
                                    <span> Password Resets </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li>
                                        <a href="passwordrecords.html">Manage</a>
                                    </li>
                                                                        
                                </ul>
                            </li>

                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>             
            <!-- Left Sidebar End -->

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
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="his_admin_dashboard.php">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Patients</a></li>
                                            <li class="breadcrumb-item active">Add Patient</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Add Patient Details</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        <!-- Form row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Fill all fields</h4>
                                        <!--Add Patient Form-->
                                        <form method="post" action="{{ route('update-patient', ['id' => $patient->id]) }}">
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="nomInput" class="col-form-label">First Name</label>
                                                    <input type="text" name="nom" value="{{ $patient->nom }}" class="form-control" id="nomInput" placeholder="Patient's First Name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="prenomInput" class="col-form-label">Last Name</label>
                                                    <input type="text" name="prenom" value="{{ $patient->prenom }}" class="form-control" id="prenomInput" placeholder="Patient's Last Name">
                                                </div>
                                            </div>
                                        
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="dobInput" class="col-form-label">Date Of Birth</label>
                                                    <input type="date" name="date_de_naissance" value="{{ $patient->date_de_naissance }}" class="form-control" id="dobInput">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="ageInput" class="col-form-label">Age</label>
                                                    <input type="number" name="age" value="{{ $patient->age }}" class="form-control" id="ageInput" placeholder="Patient's Age">
                                                </div>
                                            </div>
                                        
                                            <div class="form-group">
                                                <label for="addressInput" class="col-form-label">Address</label>
                                                <input type="text" name="adresse" value="{{ $patient->adresse }}" class="form-control" id="addressInput" placeholder="Patient's Address">
                                            </div>
                                        
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="mobileInput" class="col-form-label">Mobile Number</label>
                                                    <input type="tel" name="tel" value="{{ $patient->tel }}" class="form-control" id="mobileInput">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="ailmentInput" class="col-form-label">Patient Ailment</label>
                                                    <input type="text" name="ailment" value="{{ $patient->ailment }}" class="form-control" id="ailmentInput">
                                                </div>
                                            </div>
                                        
                                            <button type="submit" class="ladda-button btn btn-primary" data-style="expand-right">Update Patient</button>
                                        </form>
                                        
                                        
                                        <!--End Patient Form-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
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
                2020 - 2022 &copy; Hospital Management System. Developed By Martin Mbithi Nzilani</a>
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

       
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="{{asset("admin/assets/js/vendor.min.js")}}"></script>

        <!-- App js-->
        <script src="{{asset("admin/assets/js/app.min.js")}}"></script>

        <!-- Loading buttons js -->
        <script src="{{asset("admin/assets/libs/ladda/spin.js")}}"></script>
        <script src="{{asset("admin/assets/libs/ladda/ladda.js")}}"></script>

        <!-- Buttons init js-->
        <script src="{{asset("admin/assets/js/pages/loading-btn.init.js")}}"></script>
        
    </body>

</html>
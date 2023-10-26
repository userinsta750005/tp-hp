<!DOCTYPE html>
<html lang="en">
    
    <!--Head Code-->
    <head>
        <meta charset="utf-8" />
        <title>Hospital Management System -A Super Responsive Information System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="MartDevelopers" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.ico')}}">

        <!-- Plugins css -->
        <link href="{{asset('admin/assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
         <!-- Loading button css -->
         <link href="{{asset('admin/assets/libs/ladda/ladda-themeless.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Footable css -->
        <link href="{{asset('admin/assets/libs/footable/footable.core.min.css')}}" rel="stylesheet" type="text/css" />

       <!--Load Sweet Alert Javascript-->
       <script src="{{asset('admin/assets/js/swal.js')}}"></script>
       
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
                    <img src="{{asset('admin/assets/images/users/doc-icon.png')}}" alt="dpic" class="rounded-circle">
                    <span class="pro-user-name ml-1">
                        System Administrator <i class="mdi mdi-chevron-down"></i> 
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                    <a href="/logoutAdmin" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </li>
        </ul>

        <!-- LOGO -->
        <div class="logo-box">
            <a href="dashboard.html" class="logo text-center">
                <span class="logo-lg">
                    <img src="{{asset('admin/assets/images/logo-light.png')}}" alt="" height="18">
                </span>
                <span class="logo-sm">
                    <img src="{{asset('admin/assets/images/logo-sm-white.png')}}" alt="" height="24">
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
                                        <a href="invetory{{asset('admin/assets.html')}}">Assets</a>
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
                                    
                                    <h4 class="page-title">Hospital Management System Dashboard</h4>
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
                                            <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                                <i class="fab fa-accessible-icon  font-22 avatar-title text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                                                                <h3 class="text-dark mt-1"><span data-plugin="counterup">0</span></h3>
                                                <p class="text-muted mb-1 text-truncate">Out Patients</p>
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
                                            <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                                <i class="mdi mdi-hotel   font-22 avatar-title text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                                                                <h3 class="text-dark mt-1"><span data-plugin="counterup">5</span></h3>
                                                <p class="text-muted mb-1 text-truncate">In Patients</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->
                            <!--End InPatients-->

                            <!--Start Employees-->
                            <div class="col-md-6 col-xl-4">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                                <i class="mdi mdi-doctor font-22 avatar-title text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                                                                <h3 class="text-dark mt-1"><span data-plugin="counterup">3</span></h3>
                                                <p class="text-muted mb-1 text-truncate">Hospital Employees</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->
                            <!--End Employees-->
                        
                        </div>

                        <div class="row">

                        <!--Start Vendors-->
                            <div class="col-md-6 col-xl-4">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                                <i class="fas fa-user-tag font-22 avatar-title text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="text-right">
                                                                                                <h3 class="text-dark mt-1"><span data-plugin="counterup">1</span></h3>
                                                <p class="text-muted mb-1 text-truncate">Vendors</p>
                                            </div>
                                        </div>
                                    </div> <!-- end row-->
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col--> 
                            <!--End Vendors-->  

                            <!--Start Corporation Assets-->
                            <div class="col-md-6 col-xl-4">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                                <i class="mdi mdi-flask font-22 avatar-title text-primary"></i>
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
                            </div> <!-- end col-->
                            <!--End Corporation Assets-->

                            <!--Start Pharmaceuticals-->
                            <div class="col-md-6 col-xl-4">
                                <div class="widget-rounded-circle card-box">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                                <i class="mdi mdi-pill font-22 avatar-title text-primary"></i>
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
                        

                        
                        <!--Recently Employed Employees-->
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card-box">
                                    <h4 class="header-title mb-3">Hospital Employees</h4>

                                    <div class="table-responsive">
                                        <table class="table table-borderless table-hover table-centered m-0">

                                            <thead class="thead-light">
                                                <tr>
                                                    <th colspan="2">Picture</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Department</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                                                                        <tbody>
                                                <tr>
                                                    <td style="width: 36px;">
                                                        <img src="../doc/{{asset('admin/assets/images/users/defaultimg.jpg')}}" alt="img" title="contact-img" class="rounded-circle avatar-sm" />
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        Aletha White                                                    </td>    
                                                    <td>
                                                        aletha@mail.com                                                    </td>
                                                    <td>
                                                        Laboratory                                                    </td>
                                                    <td>
                                                        <a href="his_admin_view_single_employee.php?doc_id=5&&doc_number=BKTWQ" class="btn btn-xs btn-primary"><i class="mdi mdi-eye"></i> View</a>
                                                    </td>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
                                                </tr>
                                            </tbody>
                                                                                        <tbody>
                                                <tr>
                                                    <td style="width: 36px;">
                                                        <img src="../doc/{{asset('admin/assets/images/users/usric.png')}}" alt="img" title="contact-img" class="rounded-circle avatar-sm" />
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        Jessica Spencer                                                    </td>    
                                                    <td>
                                                        jessica@mail.com                                                    </td>
                                                    <td>
                                                        Accounting                                                    </td>
                                                    <td>
                                                        <a href="his_admin_view_single_employee.php?doc_id=12&&doc_number=5VIFT" class="btn btn-xs btn-primary"><i class="mdi mdi-eye"></i> View</a>
                                                    </td>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
                                                </tr>
                                            </tbody>
                                                                                        <tbody>
                                                <tr>
                                                    <td style="width: 36px;">
                                                        <img src="../doc/{{asset('admin/assets/images/users/user-default-2-min.png')}}" alt="img" title="contact-img" class="rounded-circle avatar-sm" />
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        Bryan Arreola                                                    </td>    
                                                    <td>
                                                        bryan@mail.com                                                    </td>
                                                    <td>
                                                        Surgery | Theatre                                                    </td>
                                                    <td>
                                                        <a href="his_admin_view_single_employee.php?doc_id=6&&doc_number=YDS7L" class="btn btn-xs btn-primary"><i class="mdi mdi-eye"></i> View</a>
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
                        <img src="{{asset('admin/assets/images/users/user-1.jpg')}}" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
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
                            <div class="inbox-item-img"><img src="{{asset('admin/assets/images/users/user-2.jpg')}}" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a></p>
                            <p class="inbox-item-text">I've finished it! See you so...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{asset('admin/assets/images/users/user-3.jpg')}}" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a></p>
                            <p class="inbox-item-text">This theme is awesome!</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{asset('admin/assets/images/users/user-4.jpg')}}" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a></p>
                            <p class="inbox-item-text">Nice to meet you</p>
                        </div>

                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{asset('admin/assets/images/users/user-5.jpg')}}" class="rounded-circle" alt=""></div>
                            <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
                            <p class="inbox-item-text">Hey! there I'm available...</p>
                        </div>
                        <div class="inbox-item">
                            <div class="inbox-item-img"><img src="{{asset('admin/assets/images/users/user-6.jpg')}}" class="rounded-circle" alt=""></div>
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
        <script src="{{asset('admin/assets/js/vendor.min.js')}}"></script>

        <!-- Plugins js-->
        <script src="{{asset('admin/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/jquery-knob/jquery.knob.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/flot-charts/jquery.flot.js')}}"></script>
        <script src="{{asset('admin/assets/libs/flot-charts/jquery.flot.time.js')}}"></script>
        <script src="{{asset('admin/assets/libs/flot-charts/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{asset('admin/assets/libs/flot-charts/jquery.flot.selection.js')}}"></script>
        <script src="{{asset('admin/assets/libs/flot-charts/jquery.flot.crosshair.js')}}"></script>

        <!-- Dashboar 1 init js-->
        <script src="{{asset('admin/assets/js/pages/dashboard-1.init.js')}}"></script>

        <!-- App js-->
        <script src="{{asset('admin/assets/js/app.min.js')}}"></script>
        
    </body>

</html>
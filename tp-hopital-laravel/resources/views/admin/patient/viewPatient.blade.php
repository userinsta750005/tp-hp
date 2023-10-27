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
                    <img src="{{asset('admin/assets/images/users/doc-icon.png" alt="dpic" class="rounded-circle')}}">
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
                    <img src="{{asset('admin/assets/images/logo-light.png')}}" alt="" height="18">
                    <!-- <span class="logo-lg-text-light">UBold</span> -->
                </span>
                <span class="logo-sm">
                    <!-- <span class="logo-sm-text-dark">U</span> -->
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
                    <a href="his_admin_add_employee.php" class="dropdown-item">
                        <i class="fe-users mr-1"></i>
                        <span>Employee</span>
                    </a>

                    <!-- item-->
                    <a href="his_admin_register_patient.php" class="dropdown-item">
                        <i class="fe-activity mr-1"></i>
                        <span>Patient</span>
                    </a>

                    <!-- item-->
                    <a href="his_admin_add_payroll.php" class="dropdown-item">
                        <i class="fe-layers mr-1"></i>
                        <span>Payroll</span>
                    </a>

                    <!-- item-->
                    <a href="his_admin_add_vendor.php" class="dropdown-item">
                        <i class="fe-shopping-cart mr-1"></i>
                        <span>Vendor</span>
                    </a>


                    <!-- item-->
                    <a href="his_admin_add_medical_record.php" class="dropdown-item">
                        <i class="fe-list mr-1"></i>
                        <span>Medical Report</span>
                    </a>

                    <!-- item-->
                    <a href="his_admin_lab_report.php" class="dropdown-item">
                        <i class="fe-hard-drive mr-1"></i>
                        <span>Laboratory Report</span>
                    </a>

                    <!-- item-->
                    <a href="his_admin_surgery_records.php" class="dropdown-item">
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
                                <a href="his_admin_dashboard.php">
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
                                        <a href="his_admin_register_patient.php">Register Patient</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_view_patients.php">View Patients</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_patient.php">Manage Patients</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="his_admin_discharge_patient.php">Discharge Patients</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_patient_transfer.php">Patient Transfers</a>
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
                                        <a href="his_admin_add_employee.php">Add Employee</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_view_employee.php">View Employees</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_employee.php">Manage Employees</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="his_admin_assaign_dept.php">Assign Department</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_transfer_employee.php">Transfer Employee</a>
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
                                        <a href="his_admin_add_pharm_cat.php">Add Pharm Category</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_view_pharm_cat.php">View Pharm Category</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_pharm_cat.php">Manage Pharm Category</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="his_admin_add_pharmaceuticals.php">Add Pharmaceuticals</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_view_pharmaceuticals.php">View Pharmaceuticals</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_pharmaceuticals.php">Manage Pharmaceuticals</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="his_admin_add_presc.php">Add Prescriptions</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_view_presc.php">View Prescriptions</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_presc.php">Manage Prescriptions</a>
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
                                        <a href="his_admin_add_acc.payable.php">Add Acc. Payable</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_acc_payable.php">Manage Acc. Payable</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="his_admin_add_acc_receivable.php">Add Acc. Receivable</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_acc_receivable.php">Manage Acc. Receivable</a>
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
                                        <a href="his_admin_pharm_inventory.php">Pharmaceuticals</a>
                                    </li>

                                    <li>
                                        <a href="his_admin_equipments_inventory.php">Assets</a>
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
                                        <a href="his_admin_inpatient_records.php">InPatient Records</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_outpatient_records.php">OutPatient Records</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_employee_records.php">Employee Records</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_pharmaceutical_records.php">Pharmaceutical Records</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_accounting_records.php">Accounting Records</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_medical_records.php">Medical Records</a>
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
                                        <a href="his_admin_add_medical_record.php">Add Medical Record</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_medical_record.php">Manage Medical Records</a>
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
                                        <a href="his_admin_patient_lab_test.php">Patient Lab Tests</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_patient_lab_result.php">Patient Lab Results</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_patient_lab_vitals.php">Patient Vitals</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_employee_lab_vitals.php">Employee Vitals</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_lab_report.php">Lab Reports</a>
                                    </li>
                                    <hr>
                                    <li>
                                        <a href="his_admin_add_lab_equipment.php">Add Lab Equipment</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_lab_equipment.php">Manage Lab Equipments</a>
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
                                        <a href="his_admin_add_equipment.php">Add Equipment</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_equipment.php">Manage Equipments</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_add_theatre_patient.php">Add Patient</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_theatre_patient.php">Manage Patients</a>
                                    </li>

                                    <li>
                                        <a href="his_admin_surgery_records.php">Surgery Records</a>
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
                                        <a href="his_admin_add_payroll.php">Add Payroll</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_payrolls.php">Manage Payrolls</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_generate_payrolls.php">Generate Payrolls</a>
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
                                        <a href="his_admin_add_vendor.php">Add Vendor</a>
                                    </li>
                                    <li>
                                        <a href="his_admin_manage_vendor.php">Manage Vendors</a>
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
                                        <a href="his_admin_manage_password_resets.php">Manage</a>
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
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Surgery | Theatre</a></li>
                                            <li class="breadcrumb-item active">Add Patient</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Add Patient</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title"></h4>
                                    <div class="mb-2">
                                        <div class="row">
                                            <div class="col-12 text-sm-center form-inline" >
                                                <div class="form-group mr-2" style="display:none">
                                                    <select id="demo-foo-filter-status" class="custom-select custom-select-sm">
                                                        <option value="">Show all</option>
                                                        <option value="Discharged">Discharged</option>
                                                        <option value="OutPatients">OutPatients</option>
                                                        <option value="InPatients">InPatients</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input id="demo-foo-search" type="text" placeholder="Search" class="form-control form-control-sm" autocomplete="on">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="table-responsive">
                                        <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="7">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th data-toggle="true">Patient Name</th>
                                                <th data-hide="phone">Patient Number</th>
                                                <th data-hide="phone">Patient Address</th>
                                                <th data-hide="phone">Patient Category</th>
                                                <th data-hide="phone">Action</th>
                                            </tr>
                                            </thead>
                                            
                                            <tbody>
                                                @foreach($patients as $patient)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $patient->nom }}</td>
                                                    <td>{{ $patient->prenom }}</td>
                                                    <td>{{ $patient->date_de_naissance }}</td>
                                                    <td>{{ $patient->adresse }}</td>
                                                    <td>{{ $patient->ailment }}</td>
                                                    <td>
                                                        {{-- <a href="{{ route('view-patient', ['id' => $patient->id]) }}" class="badge badge-success"><i class="mdi mdi-eye"></i> View</a>
                                                        <a href="{{ route('add-patient-theatre', ['id' => $patient->id]) }}" class="badge badge-primary"><i class="mdi mdi-check-box-outline"></i> Add Patient</a> --}}
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        
                                            <tfoot>
                                            <tr class="active">
                                                <td colspan="8">
                                                    <div class="text-right">
                                                        <ul class="pagination pagination-rounded justify-content-end footable-pagination m-t-10 mb-0"></ul>
                                                        {{ $patients->links() }}
                                                    </div>
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div> <!-- end .table-responsive-->
                                </div> <!-- end card-box -->
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
                2020 - 2023 &copy; Hospital Management System. Developed By Martin Mbithi Nzilani</a>
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
        <script src="{{asset('admin/assets/js/vendor.min.js')}}"></script>

        <!-- Footable js -->
        <script src="{{asset('admin/assets/libs/footable/footable.all.min.js')}}"></script>

        <!-- Init js -->
        <script src="{{asset('admin/assets/js/pages/foo-tables.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('admin/assets/js/app.min.js')}}"></script>
        
    </body>

</html>
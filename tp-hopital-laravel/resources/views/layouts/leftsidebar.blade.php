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
                            <a href="{{ URL::to('/patient/patientAddAdmin') }}">Register Patient</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('/patient/patientViewAdmin') }}">View Patients</a>
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
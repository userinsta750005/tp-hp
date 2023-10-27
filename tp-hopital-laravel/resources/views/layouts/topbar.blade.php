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
                            <a href="{{ URL::to('/patient/patientAddAdmin') }}" class="dropdown-item">
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
@extends('layouts.app')

@section('content')

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page" style="margin-left: 50px;">
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


            @endsection
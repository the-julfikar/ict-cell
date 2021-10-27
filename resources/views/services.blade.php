@extends('layouts.app')

@section('contents')

<div class="container" style="margin-top: 40px">
    <p class="fw-lighter text-center h2">ICT-CELL Service List</p>
    <div class="row">
        <div class="col-1"></div>
        <!-- list -->
        <div class="col-10">

            <div class="card">
                <h6 class="card-header">1. RUET Website (ruet.ac.bd)</h6>
                <div class="card-body">
                    <!-- <h5 class="card-title">Special title treatment</h5> -->
                    <p class="card-text">Analysis, Maintenance, Support and Ensure Cyber Security.</p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
            <br>
            <div class="card">
                <h6 class="card-header">2. GSuit Support</h6>
                <div class="card-body">
                    <p class="card-text">Maintenance and support of GSuit mail for teachers, officers & students.</p>
                </div>
            </div>
            <br>
            <div class="card">
                <h6 class="card-header">3. Utility Software Development</h6>
                <div class="card-body">
                    <p class="card-text">Utility software like HRMS, Hall Management System etc planning, designing and
                        developement.</p>
                </div>
            </div>
            <br>
            <div class="card">
                <h6 class="card-header">4. Software as well as Vendor Management</h6>
                <div class="card-body">
                    <p class="card-text">Manage internal softwares like Jobs Portal, Post Graduate Portal etc which are
                        alredy in developer's hands.</p>
                </div>
            </div>
            <br>
            <div class="card">
                <h6 class="card-header">5. Hardware Support</h6>
                <div class="card-body">
                    <!-- <h5 class="card-title">Special title treatment</h5> -->
                    <p class="card-text">Hardware repair, maintenance and full functional & technical support.</p>
                    <a href="#" class="btn btn-primary">Get the form.</a>
                </div>
            </div>

        </div>
        <div class="col-1"></div>
    </div>
</div>

@endsection
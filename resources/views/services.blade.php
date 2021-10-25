<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


    <!-- Custom Stylesheets for the Page-->
    <style type="text/css">
        body {
            //background-image: url({{url('/imgs/bg-img_1280.jpg')}});
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .navbar-nav>li {
            padding-right: 10px;
        }

        .fl_margin {
            margin-top: -10px
        }
    </style>

    <title>ICT Cell-RUET</title>
</head>

<body>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>

    <!-- Nav Bar -->
    <div class="container lead">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid shadow p-1 mb-1 bg-white rounded">
                <!-- <a class="navbar-brand" href="#">RUET Automation</a> -->
                <a class="navbar-brand" href="#">
                    <img src="{{url('/imgs/ruet-hd.png')}}" width="50" height="47" alt="RUET">
                    ICT Cell-RUET
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <!-- me-auto : ms-auto | style="margin-left: auto" -->
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/ict-cell">Home</a> <!-- nav-link active -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/cell-complain">Complains</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/cell-services">Services</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Digital Corner
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Notice</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Projects</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Automation Systems</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-success me-2" type="submit">Admin Console</button>
                    </form>

                </div>
            </div>
        </nav>
    </div>

    <!-- Service Dashboard -->
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
                        <p class="card-text">Utility software like HRMS, Hall Management System etc planning, designing and developement.</p>
                    </div>
                </div>
                <br>
                <div class="card">
                    <h6 class="card-header">4. Software as well as Vendor Management</h6>
                    <div class="card-body">
                        <p class="card-text">Manage internal softwares like Jobs Portal, Post Graduate Portal etc which are alredy in developer's hands.</p>
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

    <!-- Footers -->
    <div class="container lead" style="margin-top: 50px;">
        <div class="d-flex justify-content-between">
            <div style="margin-top: -8px">
                <p class="text-center fw-lighter fs-3">Rajshahi University of<br>Engineering & Technology (RUET)</p>
                <div class="text-center">
                    <img src="{{url('/imgs/ruet-hd.png')}}" width="100" height="100" alt="RUET">
                </div>
            </div>

            <div>
                <p class="font-monospace">Contacts</p>
                <p class="fw-light fs-6">Central Computer Center (L-3) <br> Rajshahi University of Engineering &
                    Technology (RUET) <br> Rajshahi-6204 <br>
                    <i class="bi bi-google"></i> team@ictcell.ruet.ac.bd | ict.cell.ruet@gmail.com<br>
                    <i class="bi bi-telephone-inbound-fill"></i> Ext-256<br>
                    <i class="bi bi-clock-history"></i> 09:00 AM - 05:00 PM
                </p>
            </div>

            <div>
                <p class="font-monospace">Featured Links</p>
                <p class="fw-light fs-6"><a href="#" class="link-secondary">Honorable Vice-Chancellor</a></p>
                <p class="fw-light fs-6 fl_margin"><a href="#" class="link-secondary">Vice-Chancellor's Office</a></p>
                <p class="fw-light fs-6 fl_margin"><a href="#" class="link-secondary">Registrar's Office</a></p>
                <p class="fw-light fs-6 fl_margin"><a href="#" class="link-secondary">Comptroller's Office</a></p>
                <p class="fw-light fs-6 fl_margin"><a href="#" class="link-secondary">Directorate of Student's
                        Welfare</a></p>
            </div>

            <div>
                <p class="font-monospace">Social Links</p>
                <div class="d-flex justify-content-between">
                    <div>
                        <a href="#" class=""><i class="bi bi-facebook"></i></a>
                    </div>

                    <div>
                        <a href="#" class=""><i class="bi bi-twitter"></i></a>
                    </div>

                    <div>
                        <a href="#" class=""><i class="bi bi-linkedin"></i></a>
                    </div>

                    <div>
                        <a href="#" class=""><i class="bi bi-house-fill"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Copyright -->
    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-3 fw-light fst-italic" style="background-color: rgba(0, 0, 0, 0.2);">
            ©2021 Copyright: Developed & maintainted by <p class="fw-bold">ICT Cell-RUET.</p>
        </div>
        <!-- Copyright -->
    </footer>

</body>

</html>
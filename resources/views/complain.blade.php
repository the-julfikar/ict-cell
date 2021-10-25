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
                            <a class="nav-link active" href="/cell-complain">Complains</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/cell-services">Services</a>
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

    <!-- Complaint Dashboard -->
    <div class="container" style="margin-top: 40px">
        <!-- <p class="fw-lighter text-center h2">Information and Communication Technology CELL (ICT CELL) - RUET</p> -->
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8 shadow p-4 mb-4 bg-white">

                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                    Session::forget('success');
                    @endphp
                </div>
                @endif

                <p class="fw-lighter text-center h2">Complain Portal, ICT Cell.</p>

                <form action="registration" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" id="name" name="fullname">
                        @if ($errors->has('fullname'))
                            <span class="text-danger">*{{ $errors->first('fullname') }}</span>
                        @endif
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com" name="email">
                        @if ($errors->has('email'))
                            <span class="text-danger">*{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Department</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="dept">
                            <!-- form-control -->
                            <option>Select dept.</option>
                            <option>EEE</option>
                            <option>CSE</option>
                            <option>ECE</option>
                            <option>ETE</option>
                            <option>CE</option>
                            <option>ARCHITECTURE</option>
                            <option>BECM</option>
                            <option>URP</option>
                            <option>ME</option>
                            <option>GCE</option>
                            <option>CEFP</option>
                            <option>IPE</option>
                            <option>MSE</option>
                            <option>MTE</option>
                            <option>MATH</option>
                            <option>PHYSICS</option>
                            <option>CHEMISTRY</option>
                            <option>HUMANITIES</option>
                            <option>ENGR. SECTION</option>
                            <option>ADMIN-RUET</option>
                            <option>OTHERS</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="designation">Designation</label>
                        <select class="form-control" id="designation" name="designation">
                            <!-- form-control -->
                            <option>Select designation.</option>
                            <option>Professor</option>
                            <option>Associate Professor</option>
                            <option>Assistant Professor</option>
                            <option>Lecturer</option>
                            <option>Chief Engr.</option>
                            <option>Senior Executive Engr.</option>
                            <option>Senior Engr.</option>
                            <option>Engr.</option>
                            <option>Assistnat Engr.</option>
                            <option>Section Officer</option>
                            <option>Junior Section Officer</option>
                            <option>Senior System Analyst</option>
                            <option>Programmer</option>
                            <option>Assistant Programmer</option>
                            <option>Network Engineer</option>
                            <option>Assistant Network Engineer</option>
                            <option>Maintenance Engr.</option>
                            <option>Assistnat Maintenance Engr.</option>
                            <option>Technical Officer</option>
                            <option>Assistant Technical Officer</option>
                            <option>Officer-1</option>
                            <option>Officer-2</option>
                            <option>Officer-3</option>
                            <option>Officer-4</option>
                            <option>Employee-1</option>
                            <option>Employee-2</option>
                            <option>Employee-3</option>
                            <option>Employee-4</option>
                            <option>OTHERS</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Address</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"
                            name="address"></textarea>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="complain_desc">Complaint Details</label>
                        <textarea class="form-control" id="complain_desc" rows="4"
                            name="complain_details"></textarea>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-2">
                            <label>Problem Category </label>
                        </div>
                        <div class="col-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="prob_category" id="inlineRadio1"
                                    value="option1"> <!-- inlineRadioOptions -->
                                <label class="form-check-label" for="inlineRadio1">Software Support</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="prob_category" id="inlineRadio2"
                                    value="option2">
                                <label class="form-check-label" for="inlineRadio2">Hardware Support</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="prob_category" id="inlineRadio3"
                                    value="option3">
                                <label class="form-check-label" for="inlineRadio3">Network Support</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="prob_category" id="inlineRadio4"
                                    value="option4">
                                <label class="form-check-label" for="inlineRadio4">OTHERS</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-secondary" style="width: 100%">Submit</button>
                </form>
            </div>
            <div class="col-2"></div>
        </div>

    </div>

    <!-- Footers -->
    <div class="container lead" style="margin-top: 40px;">
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
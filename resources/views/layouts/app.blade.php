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


    <!-- Custom-Stylesheets for the Page-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

    @stack('css')

    <title>ICT Cell-RUET</title>
</head>

<body>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>

    <!-- JQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Nav Bar -->
    <div class="container lead">
        <nav class="navbar navbar-expand-lg navbar-light bg-light navb_style shadow p-2 mb-2 bg-white rounded"> <!-- shadow p-4 mb-4 bg-white rounded | shadow p-2 bg-white rounded -->
            <div class="container-fluid">
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
                            <a class="nav-link active" id="jq-nav-home" aria-current="page" href="/ict-cell"><i class="bi bi-house-door"></i> Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="jq-nav-complain" href="/cell-complain"><i class="bi bi-shield-check"></i> Complains</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="jq-nav-service" href="/cell-services"><i class="bi bi-app-indicator"></i> Services</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-menu-app-fill"></i> Digital Corner
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
                        <!-- <button class="btn btn-outline-success me-2" type="submit">Admin Console</button> -->
                        <button type="button" class="btn btn-outline-success me-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi bi-person-bounding-box"></i>  Admin Console
                        </button>
                    </form>
                    
                </div>
            </div>
        </nav>
    </div>

    @yield('contents')

    <!-- Modal for POPup -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-server"></i> POPup message from ICT Cell.</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    The required feature/link is not addded till now in the system/under development phase.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
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
                <p class="fw-light fs-6">Central Computer Center (L-3) <br> Rajshahi University of Engineering & Technology (RUET) <br> Rajshahi-6204 <br>
                <i class="bi bi-google"></i> team@ictcell.ruet.ac.bd | complain@ictcell.ruet.ac.bd<br>
                <i class="bi bi-telephone-inbound-fill"></i> Ext-256<br>
                <i class="bi bi-clock-history"></i> 09:00 AM - 05:00 PM</p>
            </div>

            <div>
                <p class="font-monospace">Featured Links</p>
                <p class="fw-light fs-6"><a href="https://www.ruet.ac.bd/message/vice-chancellor" class="link-secondary">Honorable Vice-Chancellor</a></p>
                <p class="fw-light fs-6 fl_margin"><a href="https://www.ruet.ac.bd/list/office-of-the-vice-chancellor" class="link-secondary">Vice-Chancellor's Office</a></p>
                <p class="fw-light fs-6 fl_margin"><a href="https://www.ruet.ac.bd/list/office-of-the-registrar" class="link-secondary">Registrar's Office</a></p>
                <p class="fw-light fs-6 fl_margin"><a href="https://www.ruet.ac.bd/list/office-of-the-comptroller" class="link-secondary">Comptroller's Office</a></p>
                <p class="fw-light fs-6 fl_margin"><a href="https://www.ruet.ac.bd/list/office-of-the-chief-engineer" class="link-secondary">Chief Engineer's Office</a></p>
                <p class="fw-light fs-6 fl_margin"><a href="https://www.ruet.ac.bd/section_details/central-computer-center" class="link-secondary">Central Computer Center</a></p>
            </div>

            <div>
                <p class="font-monospace">Social Links</p>
                <div class="d-flex justify-content-between">
                    <div>
                        <a href="#" class="" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-facebook"></i></a>
                    </div>

                    <div>
                        <a href="#" class="" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-youtube"></i></a>
                    </div>

                    <div>
                        <a href="#" class="" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-linkedin"></i></a>
                    </div>

                    <div>
                        <a href="https://www.ruet.ac.bd/" class=""><i class="bi bi-house-fill"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Copyright -->
    <footer class="mt-3">
        <div class="container text-center">
            <!-- <hr class="my-4" style="{ border: 5px solid black};"> -->
            <div class="fw-light fst-italic mb-3">
                <p class="fw-bold">
                    ©2021 Copyright: Developed & maintainted by ICT Cell-RUET.
                </p>
            </div>
       </div>
    </footer>

    @yield('scripts')

</body>

</html>
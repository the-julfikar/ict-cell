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
        .dropdown:hover .dropdown-menu {
            display: block;
        }

        .navbar-nav>li {
            padding-right: 10px;
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
                            <a class="nav-link active" aria-current="page" href="#">Home</a> <!-- nav-link active -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Complains</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Applications</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Digi Corner
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
                        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                        <button class="btn btn-outline-success me-2" type="submit">Admin Console</button>
                    </form>

                </div>
            </div>
        </nav>
    </div>

    <!-- Identity Dashboard -->
    <div class="container lead" style="margin-top: 50px">
        <div class="row">
            <p class="fw-lighter text-center h2">Current Members of ICT Cell, RUET</p>
        </div>

        <div class="row mt-3">
            <div class="col-1"></div>
            <div class="col-10 shadow p-4 mb-4 bg-white rounded">
                <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="director-tab" data-bs-toggle="tab"
                            data-bs-target="#director" type="button" role="tab" aria-controls="director"
                            aria-selected="true">Director</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="programmers-tab" data-bs-toggle="tab" data-bs-target="#programmers"
                            type="button" role="tab" aria-controls="programmers"
                            aria-selected="false">Programmers</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="netkengr-tab" data-bs-toggle="tab" data-bs-target="#netkengr"
                            type="button" role="tab" aria-controls="netkengr" aria-selected="false">Network
                            Engineers</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="labasst-tab" data-bs-toggle="tab" data-bs-target="#labasst"
                            type="button" role="tab" aria-controls="labasst" aria-selected="false">Lab
                            Assistant</button>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="director" role="tabpanel" aria-labelledby="director-tab">
                        <figure>
                            <blockquote class="blockquote">
                                <p>Prof. Dr. Md. Al Mamun</p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                <cite title="Source Title">Director, ICT Cell && Head, Dept. of CSE, RUET</cite>
                                <br>
                                <br>
                                <cite>SMIEEE
                                    <br>
                                    PhD (UNSW CANBERRA, AUSTRALIA)
                                    <br>
                                    Joint Secretary (Divisional Coordinator), IEEE CS BD Chapter
                                    <br>
                                    Advisor, IEEE CS RUET Student Branch Chapter
                                    <br>
                                    Ex-Com Member, Robotic Foundation Bangladesh (Eastern R.)
                                    <br>
                                    Advanced Instructor, Cisco Local Academy, RUET
                                </cite>
                                <br>
                                <br>
                                <cite>Mail: director@ictcell.ruet.ac.bd | a.mamun@cse.ruet.ac.bd |
                                    almamun00350@gmail.com</cite>
                                <br>
                                <cite>Mobile: +8801712622764</cite>
                            </figcaption>
                        </figure>
                    </div>


                    <div class="tab-pane fade" id="programmers" role="tabpanel" aria-labelledby="programmers-tab">
                        <div class="d-flex justify-content-between">
                            <div>
                                <figure>
                                    <blockquote class="blockquote">
                                        <p>Engr. Md. Julfikar Islam</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer">
                                        <cite title="Source Title">Assistant Computer Programmmer, ICT Cell</cite>
                                        <br>
                                        <br>
                                        <cite>Member, IEB
                                            <br>
                                            B. Sc. Engr. (CSE), KUET
                                        </cite>
                                        <br>
                                        <br>
                                        <cite>Mail: julfikar.islam@ictcell.ruet.ac.bd |
                                            julfikar.islam.khan@gmail.com</cite>
                                        <br>
                                        <cite>Mobile: +8801833182066</cite>
                                    </figcaption>
                                </figure>
                            </div>

                            <div>
                                <figure>
                                    <blockquote class="blockquote">
                                        <p>Engr. Md. Manirul Islam</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer">
                                        <cite title="Source Title">Assistant Programmmer, ICT Cell</cite>
                                        <br>
                                        <br>
                                        <cite>Member, IEB
                                            <br>
                                            B. Sc. Engr. (CSE), RUET
                                        </cite>
                                        <br>
                                        <br>
                                        <cite>Mail: manirul.islam@ictcell.ruet.ac.bd | monirul.ruet12@gmail.com</cite>
                                        <br>
                                        <cite>Mobile: +8801765707808</cite>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="netkengr" role="tabpanel" aria-labelledby="netkengr-tab">
                        <div class="d-flex justify-content-between">
                            <div>
                                <figure>
                                    <blockquote class="blockquote">
                                        <p>Engr. Md. Ashif Al Amin</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer">
                                        <cite title="Source Title">Assistant Network Engineer, ICT Cell</cite>
                                        <br>
                                        <br>
                                        <cite>Member, IEB
                                            <br>
                                            B. Sc. Engr. (CSE), KUET
                                        </cite>
                                        <br>
                                        <br>
                                        <cite>Mail: ashif.amin@ictcell.ruet.ac.bd | ashif.ruet@gmail.com</cite>
                                        <br>
                                        <cite>Mobile: +8801818301135</cite>
                                    </figcaption>
                                </figure>
                            </div>

                            <div>
                                <figure>
                                    <blockquote class="blockquote">
                                        <p>Engr. Saumik Sarkar</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer">
                                        <cite title="Source Title">Assistant Network Engineer, ICT Cell</cite>
                                        <br>
                                        <br>
                                        <cite>Member, IEB
                                            <br>
                                            B. Sc. Engr. (EEE), AIUB
                                        </cite>
                                        <br>
                                        <br>
                                        <cite>Mail: saumik.sarkar@ictcell.ruet.ac.bd | saumik.sr29@gmail.com</cite>
                                        <br>
                                        <cite>Mobile: +8801770702027</cite>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="labasst" role="tabpanel" aria-labelledby="labasst-tab">
                        <div class="d-flex justify-content-between">
                            <div>
                                <figure>
                                    <blockquote class="blockquote">
                                        <p>Md. Shahnewaz Uddin (Shanto)</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer">
                                        <cite title="Source Title">Lab Assistant, ICT Cell</cite>
                                        <br>
                                        <br>
                                        <cite>Member, DIEB
                                            <br>
                                            Diploma Engr. (CSE), Rajshahi Polytechnic Institute
                                        </cite>
                                        <br>
                                        <br>
                                        <cite>Mail: shahnewaz.uddin@ictcell.ruet.ac.bd | shahnewaz20@gmail.com</cite>
                                        <br>
                                        <cite>Mobile: +8801613285768</cite>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-1"></div>
        </div>
    </div>
</body>

</html>
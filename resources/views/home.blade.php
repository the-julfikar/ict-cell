@extends('layouts.app')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
@endpush

@section('contents')
<!-- SLIDER -->
<div class="container">
    <div class="row mt-3">
        <div class="col-1"></div>
        <div class="col-10 shadow p-2 mb-2 rounded">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <!-- <img src="{{url('/imgs/bg/ictcell-concept.png')}}" class="d-block w-100" height="400" width="800" alt="ICT-Cell-Concept"> -->
                        <img src="{{url('/imgs/bg/sliders/ict-bg-hd-2.jpg')}}" class="d-block w-100" height="400" width="800" alt="ICT-Cell-Concept">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-warning">ICT Cell Concepts</h5>
                            <p class="text-warning">Some elements of Information and Communication Technology (ICT) Cell.</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <!-- <img src="{{url('/imgs/bg/circuit-gear.jpeg')}}" class="d-block w-100" height="400" width="800" alt="..."> -->
                        <img src="{{url('/imgs/bg/sliders/ict-bg-hd.jpg')}}" class="d-block w-100" height="400" width="800" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-warning">ICT Cell Interconnection</h5>
                            <p class="text-warning">Connectivity of ICT Cell components.</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <!-- <img src="{{url('/imgs/bg/ict-cell.png')}}" class="d-block w-100" height="400" width="800" alt="..."> -->
                        <img src="{{url('/imgs/bg/sliders/ict-bg-hd-4.jpg')}}" class="d-block w-100" height="400" width="800" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="text-dark">ICT Cell Symbol</h5>
                            <p class="text-dark">The Symbol and accessibility of ICT Cell services.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-1"></div>
    </div>
</div>

<div class="container lead" style="margin-top: 40px">
    <div class="row">
        <p class="fw-lighter text-center h2">Information and Communication Technology CELL (ICT CELL) - RUET</p>
    </div>

    <div class="row mt-3">
        <div class="col-1"></div>
        <div class="col-10 shadow p-4 mb-4 bg-white rounded bg-tab-set">
            <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="members-tab" data-bs-toggle="tab" data-bs-target="#members"
                        type="button" role="tab" aria-controls="members" aria-selected="true"><i class="bi bi-people-fill"></i> Members</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="aboutus-tab" data-bs-toggle="tab" data-bs-target="#aboutus"
                        type="button" role="tab" aria-controls="aboutus" aria-selected="false"><i class="bi bi-info-circle"></i> About Us</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="netkengr-tab" data-bs-toggle="tab" data-bs-target="#netkengr"
                        type="button" role="tab" aria-controls="netkengr" aria-selected="false"><i class="bi bi-bag-check-fill"></i> Softwares</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="labasst-tab" data-bs-toggle="tab" data-bs-target="#labasst"
                        type="button" role="tab" aria-controls="labasst" aria-selected="false"><i class="bi bi-check2-circle"></i> Service Request</button>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="members" role="tabpanel" aria-labelledby="members-tab">
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
                            <cite><i class="bi bi-google"></i> director@ictcell.ruet.ac.bd | a.mamun@cse.ruet.ac.bd |
                                almamun00350@gmail.com</cite>
                            <br>
                            <cite><i class="bi bi-phone"></i> +8801712622764</cite>
                        </figcaption>
                    </figure>
                    <hr class="my-4">
                    <!-- PROGRAMMERS -->
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
                                    <cite><i class="bi bi-google"></i> julfikar.islam@ictcell.ruet.ac.bd |
                                        julfikar.islam.khan@gmail.com</cite>
                                    <br>
                                    <cite><i class="bi bi-phone"></i> +8801833182066</cite>
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
                                    <cite><i class="bi bi-google"></i> manirul.islam@ictcell.ruet.ac.bd |
                                        monirul.ruet12@gmail.com</cite>
                                    <br>
                                    <cite><i class="bi bi-phone"></i> +8801765707808</cite>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <hr class="my-4">
                    <!-- NETWK ENGRS -->
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
                                        B. Sc. Engr. (CSE), RUET
                                        <br>
                                        M. Sc. Engr. (CSE), University of Greenwinch, London, UK.
                                    </cite>
                                    <br>
                                    <br>
                                    <cite><i class="bi bi-google"></i> ashif.amin@ictcell.ruet.ac.bd |
                                        ashif.ruet@gmail.com</cite>
                                    <br>
                                    <cite><i class="bi bi-phone"></i> +8801818301135</cite>
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
                                    <cite><i class="bi bi-google"></i> saumik.sarkar@ictcell.ruet.ac.bd |
                                        saumik.sr29@gmail.com</cite>
                                    <br>
                                    <cite><i class="bi bi-phone"></i> +8801770702027</cite>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                    <hr class="my-4">
                    <!-- Lab Asst. -->
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
                                    <cite>Member, IDEB
                                        <br>
                                        Diploma in CSE, Bangladesh Polytechnic Institute-Rajshahi.
                                    </cite>
                                    <br>
                                    <br>
                                    <cite><i class="bi bi-google"></i> shahnewaz.uddin@ictcell.ruet.ac.bd |
                                        shahnewaz20@gmail.com</cite>
                                    <br>
                                    <cite><i class="bi bi-phone"></i> +8801613285768</cite>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                </div>


                <div class="tab-pane fade" id="aboutus" role="tabpanel" aria-labelledby="aboutus-tab">

                    <div class="jumbotron">
                        <h1 class="display-4">ICT Cell</h1>
                        <p>The ICT Cell at RUET is basically the central-support office that provides the university’s information and communication related digital services and facilities to 
                            the students, faculty members and staffs. The ICT Cell is developed with a significant purpose of improving, deploying and strengthening creative and sustainable 
                            technical solutions and services that will enrich and facilitate learning, teaching, research and management needs at RUET. The Cell aims to provide a one-stop digital 
                            solutions to all the concerns at RUET.
                        </p>
                        <hr class="my-4">
                        <p class="fs-6">
                            ICT Cell provides centralized facility related to Automation Systems and Computer Network which includes maintenance of networking, web server, internet service, 
                            website management, e-mail service management, hardware IT support and centralized data management of the university. We appreciate your suggestions for the 
                            development/services of the ICT Cell.
                        </p>
                        <p class="lead">
                            <a class="btn btn-primary btn-lg" href="https://ictd.gov.bd/" role="button">Learn more</a>
                        </p>
                    </div>

                </div>

                <div class="tab-pane fade" id="netkengr" role="tabpanel" aria-labelledby="netkengr-tab">
                    
                </div>

                <div class="tab-pane fade" id="labasst" role="tabpanel" aria-labelledby="labasst-tab">
                    
                </div>

            </div>

        </div>
        <div class="col-1"></div>
    </div>
</div>
@endsection

<!-- Jquery -->
@section('scripts')

<script type="text/javascript">

    $(document).ready(function () {
    
    $('#jq-nav-home').addClass('active');
    $('#jq-nav-complain').removeClass('active');
    $('#jq-nav-service').removeClass('active');
    $('#navbarDropdown').removeClass('active');

    });

</script>
    
@endsection

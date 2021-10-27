@extends('layouts.app')

@section('contents')
<div class="container lead" style="margin-top: 40px">
    <div class="row">
        <p class="fw-lighter text-center h2">Information and Communication Technology CELL (ICT CELL) - RUET</p>
    </div>

    <div class="row mt-3">
        <div class="col-1"></div>
        <div class="col-10 shadow p-4 mb-4 bg-white rounded">
            <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="director-tab" data-bs-toggle="tab" data-bs-target="#director"
                        type="button" role="tab" aria-controls="director" aria-selected="true">Director</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="programmers-tab" data-bs-toggle="tab" data-bs-target="#programmers"
                        type="button" role="tab" aria-controls="programmers" aria-selected="false">Programmers</button>
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
                            <cite><i class="bi bi-google"></i> director@ictcell.ruet.ac.bd | a.mamun@cse.ruet.ac.bd |
                                almamun00350@gmail.com</cite>
                            <br>
                            <cite><i class="bi bi-phone"></i> +8801712622764</cite>
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
                                        B. Sc. Engr. (CSE), RUET
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
                                    <cite><i class="bi bi-google"></i> shahnewaz.uddin@ictcell.ruet.ac.bd |
                                        shahnewaz20@gmail.com</cite>
                                    <br>
                                    <cite><i class="bi bi-phone"></i> +8801613285768</cite>
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
@endsection
@extends('layouts.app')

@section('contents')
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

            <form action="addComplain" method="POST">
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
                    @if ($errors->has('dept'))
                    <span class="text-danger">*{{ $errors->first('dept') }}</span>
                    @endif
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
                    @if ($errors->has('designation'))
                    <span class="text-danger">*{{ $errors->first('designation') }}</span>
                    @endif
                </div>
                <br>
                <div class="form-group">
                    <label for="name">Mobile No</label>
                    <input type="text" class="form-control" placeholder="01xxxxxxxxx" id="mobile" name="mobile">
                    @if ($errors->has('mobile'))
                    <span class="text-danger">*{{ $errors->first('mobile') }}</span>
                    @endif
                </div>
                <br>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Address</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="address" 
                    placeholder="e.g. Adming Building (Level-3)."></textarea>
                    @if ($errors->has('address'))
                    <span class="text-danger">*{{ $errors->first('address') }}</span>
                    @endif
                </div>
                <br>
                <div class="form-group">
                    <label for="complain_desc">Complaint Details</label>
                    <textarea class="form-control" id="complain_desc" rows="4" name="complain_details"></textarea>
                    @if ($errors->has('complain_details'))
                    <span class="text-danger">*{{ $errors->first('complain_details') }}</span>
                    @endif
                </div>
                <br>
                <div class="row">
                    <div class="col-2">
                        <label>Problem Category </label>
                    </div>
                    <div class="col-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="prob_category" id="inlineRadio1"
                                value="Softw-Support"> <!-- inlineRadioOptions -->
                            <label class="form-check-label" for="inlineRadio1">Software Support</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="prob_category" id="inlineRadio2"
                                value="Hardw-Support">
                            <label class="form-check-label" for="inlineRadio2">Hardware Support</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="prob_category" id="inlineRadio3"
                                value="Netk-Support">
                            <label class="form-check-label" for="inlineRadio3">Network Support</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="prob_category" id="inlineRadio4"
                                value="OTHERS">
                            <label class="form-check-label" for="inlineRadio4">OTHERS</label>
                        </div>
                    </div>
                    @if ($errors->has('prob_category'))
                    <span class="text-danger">*{{ $errors->first('prob_category') }}</span>
                    @endif
                </div>
                <br>
                <button type="submit" class="btn btn-secondary" style="width: 100%">Submit</button>
            </form>
        </div>
        <div class="col-2"></div>
    </div>
</div>

@endsection

<!-- Jquery -->
@section('scripts')

<script type="text/javascript">

    $(document).ready(function () {
    
    $('#jq-nav-home').removeClass('active');
    $('#jq-nav-complain').addClass('active');
    $('#jq-nav-service').removeClass('active');
    $('#navbarDropdown').removeClass('active');

    });

</script>
    
@endsection
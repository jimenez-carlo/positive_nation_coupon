@extends('layouts.landing')
@section('content')
<!-- /.search form -->
<section id="page" class="container mBtm-50">
    
    <div class="row">
        <div class="col-sm-12 clearfix mTop-30">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hpanel">

                        <div class="panel-body frameLR bg-white shadow">

                            <form name="simpleForm" novalidate="" id="simpleForm" action="#" method="post">
                                <div class="row">
                                    <div class=" mTop-30 col-sm-9 col-sm-offset-3" id="wizardControl">
                                        <div class="wizNav">

                                            <a class="btn btn-primary btn-raised ripple-effect" href="#step1"
                                                data-toggle="tab">
                                                Step 1 - Your Info
                                            </a>
                                            <a class="btn btn-default btn-raised ripple-effect" href="#step2"
                                                data-toggle="tab">
                                                Step 2 - Deal info and Payment data
                                            </a>
                                            <a class="btn btn-default btn-raised ripple-effect" href="#step3"
                                                data-toggle="tab">
                                                Step 3 - Deal Approval
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-content">
                                    <div id="step1" class="tab-pane active">

                                        <div class="row wizForm">
                                            <div class="col-lg-3">
                                                <h4>
                                                    Sumbit your offer
                                                </h4>
                                                <p>
                                                    Typesetting industry industry's standard.

                                                </p>
                                                <div class="content">
                                                    <ul class="tick">
                                                        <li>
                                                            Travel Deals
                                                        </li>
                                                        <li>
                                                            Restaurant Deals
                                                        </li>
                                                        <li>
                                                            Online courses
                                                        </li>
                                                        <li>
                                                            digital goods
                                                        </li>

                                                    </ul>
                                                </div>

                                            </div>
                                            <div class="col-lg-9">
                                                <div class="row">
                                                    <div class="form-group col-lg-12">
                                                        <label>
                                                            Username
                                                        </label>
                                                        <input type="" value="" id="" class="form-control"
                                                            name="username" placeholder="username">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label>
                                                            Password
                                                        </label>
                                                        <input type="password" value="" id="" class="form-control"
                                                            name="" placeholder="******">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label>
                                                            Company
                                                        </label>
                                                        <input type="text" value="" id="" class="form-control" name=""
                                                            placeholder="Company Name">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label>
                                                            Email Address
                                                        </label>
                                                        <input type="" value="" id="" class="form-control" name=""
                                                            placeholder="user@email.com">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label>
                                                            Country
                                                        </label>
                                                        <input type="text" value="" id="" class="form-control" name=""
                                                            placeholder="UK">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-right col-sm-12">
                                            <a class="btn btn-default btn-raised ripple-effect prev" href="#">
                                                Previous
                                            </a>
                                            <a class="btn btn-primary btn-raised ripple-effect next" href="#">
                                                Next
                                            </a>
                                        </div>

                                    </div>

                                    <div id="step2" class="tab-pane">

                                        <div class="row">
                                            <div class="col-lg-3">
                                                <h4>
                                                    Sumbit your offer
                                                </h4>
                                                <p class="small">
                                                    <strong>
                                                        It is a long
                                                    </strong>
                                                    established fact that a reader will be distracted by the readable
                                                    <br>
                                                    <br>Many desktop publishing packages and web page editors now use
                                                </p>
                                            </div>
                                            <div class="col-lg-9">
                                                <div class="row">
                                                    <div class="form-group col-lg-12">
                                                        <label>
                                                            Name on Card
                                                        </label>
                                                        <input type="" value="" id="" class="form-control"
                                                            name="card_name">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label>
                                                            Card Number
                                                        </label>
                                                        <input type="text" value="" id="" class="form-control" name="">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label>
                                                            Billing Address
                                                        </label>
                                                        <input type="text" value="" id="" class="form-control" name="">
                                                    </div>
                                                    <div class="form-group col-lg-12">
                                                        <div class="row">
                                                            <div class="col-xs-4 form-group">
                                                                <label>
                                                                    CVC
                                                                </label>
                                                                <input class="form-control" placeholder="ex. 381"
                                                                    type="text" name="cvc">
                                                            </div>
                                                            <div class="col-xs-4 form-group">
                                                                <label>
                                                                    Expiration
                                                                </label>
                                                                <input class="form-control" placeholder="MM" type="text"
                                                                    name="expire_month">
                                                            </div>
                                                            <div class="col-xs-4 form-group">
                                                                <label>
                                                                </label>
                                                                <input class="form-control" placeholder="YYYY"
                                                                    type="text" name="expire_year">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-lg-12">
                                                        <label>
                                                            Deal Name
                                                        </label>
                                                        <input type="" value="" id="" class="form-control"
                                                            name="dealname" placeholder="Deal name">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label>
                                                            Deal Value
                                                        </label>
                                                        <input type="password" value="" id="" class="form-control"
                                                            name="" placeholder="Deal price">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label>
                                                            Asking price
                                                        </label>
                                                        <input type="text" value="" id="" class="form-control" name=""
                                                            placeholder="Asking price">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label>
                                                            Discount
                                                        </label>
                                                        <input type="" value="" id="" class="form-control" name=""
                                                            placeholder="Discount">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label>
                                                            Country
                                                        </label>
                                                        <input type="text" value="" id="" class="form-control" name=""
                                                            placeholder="UK">
                                                    </div>
                                                    <div class="form-group col-lg-12">
                                                        <textarea rows="6" cols="88" id="contact_message" name="message"
                                                            class="form-control">
                                                                    Desciption (*)
                                                                </textarea>
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label>
                                                            Valid from
                                                        </label>
                                                        <input type="password" value="" id="" class="form-control"
                                                            name="" placeholder="Enter date">
                                                    </div>
                                                    <div class="form-group col-lg-6">
                                                        <label>
                                                            Valid to
                                                        </label>
                                                        <input type="text" value="" id="" class="form-control" name=""
                                                            placeholder="Valid to">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-right col-sm-12">
                                            <a class="btn btn-danger btn-raised ripple-effect prev" href="#">
                                                Previous
                                            </a>
                                            <a class="btn btn-primary btn-raised ripple-effect next" href="#">
                                                Next
                                            </a>
                                        </div>

                                    </div>
                                    <div id="step3" class="tab-pane">
                                        <div class="row text-center m-t-lg m-b-lg">

                                            <div class="col-sm-8 col-sm-offset-2">

                                                <div class="alert alert-success alert-dismissible ripple-effect btn-raised"
                                                    role="alert">
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">
                                                            ×
                                                        </span>
                                                    </button>
                                                    <strong>
                                                        Whoooha!
                                                    </strong>
                                                    Thank you ! Your deal is ready to be sold out!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-right col-sm-12">
                                            <a class="btn btn-danger btn-raised ripple-effect prev" href="#">
                                                Previous
                                            </a>
                                            <a class="btn btn-primary btn-raised ripple-effect next" href="#">
                                                Next
                                            </a>
                                            <a class="btn btn-success btn-raised ripple-effect submitWizard" href="#">
                                                Submit
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mBtm-50 clearfix">
                                </div>
                            </form>



                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- /inner wrap -->
    </div>


</section>
@stop
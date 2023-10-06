@extends('layouts.landing')
@section('content')
<section id="page" class="container mTop-30 mBtm-50">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel-body frameLR bg-white shadow space-sm">

                <div class="col-md-6">
                    <h3 class="dark-grey">
                        Registration
                    </h3>

                    <div class="form-group">
                        <label>
                            Username
                        </label>
                        <input type="" name="" class="form-control" id="" value="">
                    </div>

                    <div class="form-group">
                        <label>
                            Password
                        </label>
                        <input type="password" name="" class="form-control" id="" value="">
                    </div>

                    <div class="form-group">
                        <label>
                            Repeat Password
                        </label>
                        <input type="password" name="" class="form-control" id="" value="#">
                    </div>

                    <div class="form-group">
                        <label>
                            Email Address
                        </label>
                        <input type="" name="" class="form-control" id="" value="">
                    </div>

                    <div class="form-group">
                        <label>
                            Repeat Email Address
                        </label>
                        <input type="" name="" class="form-control" id="" value="">
                    </div>


                    <div class="col-sm-6">
                        <input type="checkbox" class="checkbox pull-left" />Sigh up for our newsletter
                    </div>

                    <div class="col-sm-6">
                        <input type="checkbox" class="checkbox pull-left" />Send notifications to this email
                    </div>


                </div>

                <div class="mBtm-20 visible-xs">
                </div>

                <div class="col-md-6">
                    <h3 class="dark-grey">
                        Terms and Conditions
                    </h3>
                    <p>
                        By clicking on "Register" you agree to The Company's' Terms and Conditions
                    </p>
                    <p>
                        While rare, prices are subject to change based on exchange rate fluctuations - should such a
                        fluctuation happen, we may request an additional payment. You have the option to request a full
                        refund or to pay the new price. (Paragraph 13.5.8)
                    </p>
                    <p>
                        Should there be an error in the description or pricing of a product, we will provide you with a
                        full refund (Paragraph 13.5.6)
                    </p>
                    <p>
                        Acceptance of an order by us is dependent on our suppliers ability to provide the product.
                        (Paragraph 13.5.6)
                    </p>

                    <button type="submit" class="btn btn-primary btn-raised ripple-effect">
                        Register
                    </button>
                </div>


            </div>
            <!-- /inner wrap -->
        </div>
    </div>

</section>
@stop
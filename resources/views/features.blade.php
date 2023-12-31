@extends('layouts.landing')
@section('content')
<section id="page" class="container inner-wrap">
  <div class="row">

    <div class="col-sm-8">
      <div class="panel-body frameLR bg-white shadow mTop-30">
        <hr data-symbol="BUTTONS">
        <div class="bs-docs-section">
          <p>
            Use any of the available button classes to quickly create a styled button.
          </p>
          <div class="bs-example">
            <p>
              <button type="button" class="btn btn-default">
                Default
              </button>
              <button type="button" class="btn btn-primary">
                Primary
              </button>
              <button type="button" class="btn btn-success">
                Success
              </button>
              <button type="button" class="btn btn-info">
                Info
              </button>
              <button type="button" class="btn btn-warning">
                Warning
              </button>
              <button type="button" class="btn btn-danger">
                Danger
              </button>
              <button type="button" class="btn btn-link">
                Link
              </button>
            </p>
          </div>
          <!-- Types -->
          <hr data-symbol="TYPES">
          <p>
            Use any of the available button classes to create a button. Also you can mix types.
          </p>
        </div>
        <div class="bs-example bs-example-type">
          <table class="table">
            <tbody>
              <tr>
                <td>
                  <button type="button" class="btn btn-default">
                    Default
                  </button>
                  <button type="button" class="btn btn-primary">
                    Primary
                  </button>
                  <button type="button" class="btn btn-info">
                    Info
                  </button>
                  <button type="button" class="btn btn-success">
                    Success
                  </button>
                  <button type="button" class="btn btn-link">
                    Link
                  </button>
                </td>
                <td class="type-info">
                  Default buttons
                </td>
              </tr>
              <tr>
                <td>
                  <button type="button" class="btn btn-raised btn-default">
                    Default
                  </button>
                  <button type="button" class="btn btn-raised btn-primary">
                    Primary
                  </button>
                  <button type="button" class="btn btn-raised btn-info">
                    Info
                  </button>
                  <button type="button" class="btn btn-raised btn-success">
                    Success
                  </button>
                  <button type="button" class="btn btn-raised btn-link">
                    Link
                  </button>
                </td>
                <td class="type-info">
                  Raised buttons
                </td>
              </tr>
              <tr>
                <td>
                  <button type="button" class="btn btn-flat btn-default">
                    Default
                  </button>
                  <button type="button" class="btn btn-flat btn-primary">
                    Primary
                  </button>
                  <button type="button" class="btn btn-flat btn-info">
                    Info
                  </button>
                  <button type="button" class="btn btn-flat btn-success">
                    Success
                  </button>
                  <button type="button" class="btn btn-flat btn-link">
                    Link
                  </button>
                </td>
                <td class="type-info">
                  Flat buttons
                </td>
              </tr>
              <tr>
                <td>
                  <button type="button" class="btn btn-circle btn-default">
                    <span class="ti-control-eject">
                    </span>
                  </button>
                  <button type="button" class="btn btn-circle btn-primary">
                    <span class="ti-volume">
                    </span>
                  </button>
                  <button type="button" class="btn btn-circle btn-info">
                    <span class="ti-control-play">
                    </span>
                  </button>
                  <button type="button" class="btn btn-circle btn-success">
                    <span class="ti-control-skip-forward">
                    </span>
                  </button>
                  <button type="button" class="btn btn-circle btn-link">
                    Link
                  </button>
                </td>
                <td class="type-info">
                  Circle buttons (FAB)
                </td>
              </tr>
              <tr>
                <td>
                  <button type="button" class="btn btn-circle btn-raised btn-default">
                    <span class="ti-control-forward">
                    </span>
                  </button>
                  <button type="button" class="btn btn-circle btn-raised btn-primary">
                    <span class="ti-control-play">
                    </span>
                  </button>
                  <button type="button" class="btn btn-circle btn-raised btn-info">
                    <span class="ti-ink-pen">
                    </span>
                  </button>
                  <button type="button" class="btn btn-circle btn-raised btn-success">
                    <span class="ti-gallery">
                    </span>
                  </button>
                  <button type="button" class="btn btn-circle btn-raised btn-link">
                    Link
                  </button>
                </td>
                <td class="type-info">
                  Circle + Raised buttons
                </td>
              </tr>
              <tr>
                <td>
                  <button type="button" class="btn btn-circle btn-flat btn-default">
                    <span class="ti-vector">
                    </span>
                  </button>
                  <button type="button" class="btn btn-circle btn-flat btn-primary">
                    <span class="ti-cloud-up">
                    </span>
                  </button>
                  <button type="button" class="btn btn-circle btn-flat btn-info">
                    <span class="ti-check-box">
                    </span>
                  </button>
                  <button type="button" class="btn btn-circle btn-flat btn-success">
                    <span class="ti-bolt-alt">
                    </span>
                  </button>
                  <button type="button" class="btn btn-circle btn-flat btn-link">
                    Link
                  </button>
                </td>
                <td class="type-info">
                  Circle + Flat buttons
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- Ripple effect -->
        <hr data-symbol="EFFECT">
        <p>
          Ripple effect requiers JS for creating DOM-element and controlling animation. Animation work on CSS3. If you
          want to use this effect, you should add class
          <code>
                  .ripple-effect
                </code>
          to your button.
        </p>
        <div class="bs-example bs-example-type">
          <table class="table">
            <tbody>
              <tr>
                <td>
                  <button type="button" class="btn ripple-effect btn-default">
                    Default
                  </button>
                  <button type="button" class="btn ripple-effect btn-primary">
                    Primary
                  </button>
                  <button type="button" class="btn ripple-effect btn-info">
                    Info
                  </button>
                  <button type="button" class="btn ripple-effect btn-success">
                    Success
                  </button>
                  <button type="button" class="btn ripple-effect btn-link">
                    Link
                  </button>
                </td>
                <td class="type-info">
                  Default buttons
                </td>
              </tr>
              <tr>
                <td>
                  <button type="button" class="btn btn-raised ripple-effect btn-default">
                    Default
                  </button>
                  <button type="button" class="btn btn-raised ripple-effect btn-primary">
                    Primary
                  </button>
                  <button type="button" class="btn btn-raised ripple-effect btn-info">
                    Info
                  </button>
                  <button type="button" class="btn btn-raised ripple-effect btn-success">
                    Success
                  </button>
                  <button type="button" class="btn btn-raised ripple-effect btn-link">
                    Link
                  </button>
                </td>
                <td class="type-info">
                  Raised buttons
                </td>
              </tr>
              <tr>
                <td>
                  <button type="button" class="btn btn-flat ripple-effect btn-default">
                    Default
                  </button>
                  <button type="button" class="btn btn-flat ripple-effect btn-primary">
                    Primary
                  </button>
                  <button type="button" class="btn btn-flat ripple-effect btn-info">
                    Info
                  </button>
                  <button type="button" class="btn btn-flat ripple-effect btn-success">
                    Success
                  </button>
                  <button type="button" class="btn btn-flat ripple-effect btn-link">
                    Link
                  </button>
                </td>
                <td class="type-info">
                  Flat buttons
                </td>
              </tr>
              <tr>
                <td>
                  <button type="button" class="btn btn-circle ripple-effect btn-default">
                    <span class="ti-bolt-alt">
                    </span>
                  </button>
                  <button type="button" class="btn btn-circle ripple-effect btn-primary">
                    <span class="ti-pulse">
                    </span>
                  </button>
                  <button type="button" class="btn btn-circle ripple-effect btn-info">
                    <span class="ti-shield">
                    </span>
                  </button>
                  <button type="button" class="btn btn-circle ripple-effect btn-success">
                    <span class="ti-stats-up">
                    </span>
                  </button>
                  <button type="button" class="btn btn-circle ripple-effect btn-link">
                    Link
                  </button>
                </td>
                <td class="type-info">
                  Circle buttons (FAB)
                </td>
              </tr>
              <tr>
                <td>
                  <button type="button" class="btn btn-circle btn-raised ripple-effect btn-default">
                    <span class="ti-star">
                    </span>
                  </button>
                  <button type="button" class="btn btn-circle btn-raised ripple-effect btn-primary">
                    <span class="ti-star">
                    </span>
                  </button>
                  <button type="button" class="btn btn-circle btn-raised ripple-effect btn-info">
                    <span class="ti-star">
                    </span>
                  </button>
                  <button type="button" class="btn btn-circle btn-raised ripple-effect btn-success">
                    <span class="ti-star">
                    </span>
                  </button>
                  <button type="button" class="btn btn-circle btn-raised ripple-effect btn-link">
                    Link
                  </button>
                </td>
                <td class="type-info">
                  Circle + Raised buttons
                </td>
              </tr>
              <tr>
                <td>
                  <button type="button" class="btn btn-circle btn-flat ripple-effect btn-default">
                    <span class="ti-star">
                    </span>
                  </button>
                  <button type="button" class="btn btn-circle btn-flat ripple-effect btn-primary">
                    <span class="ti-star">
                    </span>
                  </button>
                  <button type="button" class="btn btn-circle btn-flat ripple-effect btn-info">
                    <span class="ti-star">
                    </span>
                  </button>
                  <button type="button" class="btn btn-circle btn-flat ripple-effect btn-success">
                    <span class="ti-star">
                    </span>
                  </button>
                  <button type="button" class="btn btn-circle btn-flat ripple-effect btn-link">
                    Link
                  </button>
                </td>
                <td class="type-info">
                  Circle + Flat buttons
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <hr data-symbol="SIZES">
        <p>
          Fancy larger or smaller buttons? Add
          <code>
                  .btn-lg
                </code>
          ,
          <code>
                  .btn-sm
                </code>
          , or
          <code>
                  .btn-xs
                </code>
          for additional sizes.
        </p>
        <div class="bs-example bs-example-type">
          <table class="table">
            <tbody>
              <tr>
                <td>
                  <button type="button" class="btn btn-lg btn-raised ripple-effect btn-primary">
                    Raised
                  </button>
                  <button type="button" class="btn btn-lg btn-flat ripple-effect btn-primary">
                    Flat
                  </button>
                  <button type="button" class="btn btn-lg btn-circle btn-raised ripple-effect btn-primary">
                    <span class="ti-star">
                    </span>
                  </button>
                  <button type="button" class="btn btn-lg btn-circle btn-flat ripple-effect btn-primary">
                    <span class="ti-star">
                    </span>
                  </button>
                </td>
                <td class="type-info">
                  Large buttons
                </td>
              </tr>
              <tr>
                <td>
                  <button type="button" class="btn btn-raised ripple-effect btn-primary">
                    Raised
                  </button>
                  <button type="button" class="btn btn-flat ripple-effect btn-primary">
                    Flat
                  </button>
                  <button type="button" class="btn btn-circle btn-raised ripple-effect btn-primary">
                    <span class="ti-star">
                    </span>
                  </button>
                  <button type="button" class="btn btn-circle btn-flat ripple-effect btn-primary">
                    <span class="ti-star">
                    </span>
                  </button>
                </td>
                <td class="type-info">
                  Default buttons
                </td>
              </tr>
              <tr>
                <td>
                  <button type="button" class="btn btn-sm btn-raised ripple-effect btn-primary">
                    Raised
                  </button>
                  <button type="button" class="btn btn-sm btn-flat ripple-effect btn-primary">
                    Flat
                  </button>
                  <button type="button" class="btn btn-sm btn-circle btn-raised ripple-effect btn-primary">
                    <span class="ti-star">
                    </span>
                  </button>
                  <button type="button" class="btn btn-sm btn-circle btn-flat ripple-effect btn-primary">
                    <span class="ti-star">
                    </span>
                  </button>
                </td>
                <td class="type-info">
                  Small buttons
                </td>
              </tr>
              <tr>
                <td>
                  <button type="button" class="btn btn-xs btn-raised ripple-effect btn-primary">
                    Raised
                  </button>
                  <button type="button" class="btn btn-xs btn-flat ripple-effect btn-primary">
                    Flat
                  </button>
                  <button type="button" class="btn btn-xs btn-circle btn-raised ripple-effect btn-primary">
                    <span class="ti-star">
                    </span>
                  </button>
                  <button type="button" class="btn btn-xs btn-circle btn-flat ripple-effect btn-primary">
                    <span class="ti-star">
                    </span>
                  </button>
                </td>
                <td class="type-info">
                  Extra small buttons
                </td>
              </tr>
            </tbody>
          </table>
          <hr data-symbol="ALERTS">
          <div class="bs-example" data-example-id="simple-alerts">
            <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                  &times;
                </span>
              </button>
              <strong>
                Warning!
              </strong>
              Better check yourself, you're not looking too good.
            </div>
            <div class="alert alert-info alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                  &times;
                </span>
              </button>
              <strong>
                Warning!
              </strong>
              Better check yourself, you're not looking too good.
            </div>
            <div class="alert alert-warning alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                  &times;
                </span>
              </button>
              <strong>
                Warning!
              </strong>
              Better check yourself, you're not looking too good.
            </div>
            <div class="alert alert-danger alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">
                  &times;
                </span>
              </button>
              <strong>
                Warning!
              </strong>
              Better check yourself, you're not looking too good.
            </div>
          </div>
          <hr data-symbol="COLLAPSE">
          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
                    aria-controls="collapseOne">
                    <span class="ti-minus">
                    </span>
                    Collapsible Group Item #1
                  </a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                  moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                  shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                  proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                  aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                    aria-expanded="false" aria-controls="collapseTwo">
                    <span class="ti-plus">
                    </span>
                    Collapsible Group Item #2
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                  moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                  shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                  proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                  aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                    aria-expanded="false" aria-controls="collapseThree">
                    <span class="ti-plus">
                    </span>
                    Collapsible Group Item #3
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                  moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                  Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                  shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                  proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                  aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>
          <!-- menu samples -->

        </div>
        <hr data-symbol="SMALL INFO DEALS">
        <div class="row">
          <div class="col-sm-6">
            <div class="deal-entry green deal-entry-sm">
              <div class="offer-discount">
                $347
              </div>
              <div class="image ripple-effect">
                <a href="#" target="_blank" title="#">
                  <img src="http://placehold.it/700x400" alt="#" class="img-responsive">
                </a>
                <span class="bought">
                  <i class="ti-tag">
                  </i>
                  21
                </span>
                <div class="caption">
                  <h5 class="media-heading">
                    <a href="#">
                      Plaza Resort Hotel &amp; SPA
                    </a>
                  </h5>
                  <p class="stars">
                    <i class="ti-star">
                    </i>
                    <i class="ti-star">
                    </i>
                    <i class="ti-star">
                    </i>
                    <i class="ti-start">
                    </i>
                    <i class="ti-star">
                    </i>
                  </p>
                </div>
              </div>
              <footer class="clearfix">
                <div class="valueInfo">
                  <div class="value">
                    <p class="value">
                      $422
                    </p>
                    <p class="text">
                      Value
                    </p>
                  </div>
                  <div class="discount">
                    <p class="value">
                      64%
                    </p>
                    <p class="text">
                      Discount
                    </p>
                  </div>
                  <div class="save">
                    <p class="value">
                      $76
                    </p>
                    <p class="text">
                      SAVINGS
                    </p>
                  </div>
                </div>
              </footer>
            </div>
            <!-- /deal entry -->
          </div>
          <div class="col-sm-6">
            <div class="deal-entry green deal-entry-sm col-sm-6">
              <div class="offer-discount">
                $347
              </div>
              <div class="image ripple-effect">
                <a href="#" target="_blank" title="#">
                  <img src="http://placehold.it/700x400" alt="#" class="img-responsive">
                </a>
                <span class="bought">
                  <i class="ti-tag">
                  </i>
                  21
                </span>
                <div class="caption">
                  <h5 class="media-heading">
                    <a href="#">
                      Plaza Resort Hotel &amp; SPA
                    </a>
                  </h5>
                  <p class="stars">
                    <i class="ti-star">
                    </i>
                    <i class="ti-star">
                    </i>
                    <i class="ti-star">
                    </i>
                    <i class="ti-start">
                    </i>
                    <i class="ti-star">
                    </i>
                  </p>
                </div>
              </div>
              <footer class="clearfix">
                <div class="valueInfo">
                  <div class="value">
                    <p class="value">
                      $422
                    </p>
                    <p class="text">
                      Value
                    </p>
                  </div>
                  <div class="discount">
                    <p class="value">
                      64%
                    </p>
                    <p class="text">
                      Discount
                    </p>
                  </div>
                  <div class="save">
                    <p class="value">
                      $76
                    </p>
                    <p class="text">
                      SAVINGS
                    </p>
                  </div>
                </div>
              </footer>
            </div>
            <!-- /deal entry -->
          </div>
        </div>
        <!--/.row -->


        <hr data-symbol="CATEGORIE DEALS">

        <div class="deal-entry green result-entry clearfix">
          <div class="entry-left col-sm-5 col-lg-6">
            <div class="offer-discount">
              -71%
            </div>
            <div class="image bg-image entry-xs" data-image-src="http://placehold.it/700x400">

              <span class="bought">
                <i class="ti-tag">
                </i>
                169
              </span>
            </div>
          </div>
          <!-- /.image wrap -->
          <div class="entry-right col-sm-7 col-lg-6">
            <div class="title">
              <a href="#" target="_blank" title="ATLETIKA 3 mēnešu abonements">
                3-dnevni oddih za 2 v hotelu Ferienhotel Alber 4*
              </a>
            </div>
            <div class="entry-content">
              <div class="prices clearfix">
                <div class="procent">
                  -65%
                </div>
                <div class="price">
                  <i class="ti-money">
                  </i>

                  <b>
                    60,00
                  </b>
                </div>
                <div class="old-price">
                  <span>
                    <i class="ti-money">
                    </i>
                    171,00
                  </span>
                </div>
              </div>
              <p class="truncate">
                Immerse Yourself in the Magic of Cambodia with a Luxurious Eight Day/Seven Night Escape at Two of the
                World’s Finest Hotels!
              </p>

            </div>
            <!--/.entry content -->
            <footer class="info_bar clearfix">
              <ul class="unstyled list-inline row">

                <li class="time col-sm-7 col-xs-6 col-lg-8">
                  <i class="ti-timer">
                  </i>
                  <b>
                    8
                  </b>
                  d.
                  <b>
                    20
                  </b>
                  st.
                  <b>
                    58
                  </b>
                  min.
                </li>
                <li class="info_link col-sm-5 cl-xs-6 cl-lg-4">
                  <a href="#" class="btn btn-default btn-raised btn-sm">
                    Buy Now
                  </a>
                </li>
              </ul>
            </footer>
          </div>
          <!-- /entry right -->

        </div>

        <hr data-symbol="DEALS">
        <div class="row">
          <div class="col-sm-6">
            <div class="deal-entry  orange">
              <div class="offer-discount">
                -55%
              </div>
              <div class="image">
                <a href="#" target="_blank" title="#">
                  <img src="http://placehold.it/700x400" alt="#" class="img-responsive">
                </a>
                <span class="bought">
                  <i class="ti-tag">
                  </i>
                  169
                </span>
              </div>
              <!-- /.image -->
              <div class="title">
                <a href="#" target="_blank" title="ATLETIKA 3 mēnešu abonements">
                  3-dnevni oddih za 2 v hotelu Ferienhotel Alber 4*
                </a>
              </div>
              <div class="entry-content">
                <div class="prices clearfix">
                  <div class="procent">
                    -65%
                  </div>
                  <div class="price">
                    <i class="ti-money">
                    </i>

                    <b>
                      60,00
                    </b>
                  </div>
                  <div class="old-price">
                    <span>
                      <i class="ti-money">
                      </i>
                      171,00
                    </span>
                  </div>
                </div>
                <p>
                  Immerse Yourself in the Magic of Cambodia with a Luxurious Eight Day/Seven Night Escape at Two of the
                  World’s Finest Hotels!
                </p>
              </div>
              <!--/.entry content -->
              <footer class="info_bar clearfix">
                <ul class="unstyled list-inline row">
                  <li class="time col-sm-7 col-xs-6 col-lg-8">
                    <i class="ti-timer">
                    </i>
                    <b>
                      8
                    </b>
                    d.
                    <b>
                      20
                    </b>
                    st.
                    <b>
                      58
                    </b>
                    min.
                  </li>
                  <li class="info_link col-sm-5 col-xs-6 col-lg-4">
                    <a href="#" class="btn btn-block btn-default btn-raised btn-sm">
                      View Deal
                    </a>
                  </li>
                </ul>
              </footer>
            </div>
          </div>
          <!--/.col -->
          <div class="col-sm-6">
            <div class="deal-entry orange">
              <div class="offer-discount">
                -74%
              </div>
              <div class="image">
                <a href="#" target="_blank" title="#">
                  <img src="http://placehold.it/700x400" alt="#" class="img-responsive">
                </a>
                <span class="bought">
                  <i class="ti-tag">
                  </i>
                  169
                </span>
              </div>
              <!-- /.image -->
              <div class="title">
                <a href="#" target="_blank" title="ATLETIKA 3 mēnešu abonements">
                  3-dnevni oddih za 2 v hotelu Ferienhotel Alber 4*
                </a>
              </div>
              <div class="entry-content">
                <div class="prices clearfix">
                  <div class="procent">
                    -65%
                  </div>
                  <div class="price">
                    <i class="ti-money">
                    </i>

                    <b>
                      60,00
                    </b>
                  </div>
                  <div class="old-price">
                    <span>
                      <i class="ti-money">
                      </i>
                      171,00
                    </span>
                  </div>
                </div>
                <p>
                  Immerse Yourself in the Magic of Cambodia with a Luxurious Eight Day/Seven Night Escape at Two of the
                  World’s Finest Hotels!
                </p>
              </div>
              <!--/.entry content -->
              <footer class="info_bar clearfix">
                <ul class="unstyled list-inline row">
                  <li class="time col-sm-7 col-xs-6 col-lg-8">
                    <i class="ti-timer">
                    </i>
                    <b>
                      8
                    </b>
                    d.
                    <b>
                      20
                    </b>
                    st.
                    <b>
                      58
                    </b>
                    min.
                  </li>
                  <li class="info_link col-sm-5 col-xs-6 col-lg-4">
                    <a href="#" class="btn btn-block btn-default btn-raised btn-sm">
                      View Deal
                    </a>
                  </li>
                </ul>
              </footer>
            </div>
          </div>
        </div>


      </div>
      <!--/.col 8 -->
    </div>

    <div class="col-sm-4 sidebar">
      <div class="inner-side shadow">
        <div class="widget widget-add">
          <hr data-symbol="ADVERTISE">
          <img src="http://placehold.it/380x380" alt="add" class="img-responsive">
        </div>
        <div class="widget widget-subscribe">
          <hr data-symbol="SUBSCRIBE">
          <div class="newsletter">
            <h4>
              Get Updates
              <span class="color-orange">
                (it’s free)
              </span>
            </h4>
            <p>
              Subscribe to our newsletter for good deals, sent out every month.
            </p>
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Email">
              <span class="input-group-btn">
                <button class="btn btn-danger btn-raised ripple-effect" type="button">
                  Subscribe
                </button>
              </span>
            </div>
          </div>
        </div>
        <!-- /.widget -->
        <div class="widget widget-menu">
          <hr data-symbol="CATEGORIES">
          <!-- Sidebar navigation -->
          <ul class="nav sidebar-nav">
            <li class="dropdown open">
              <a class="ripple-effect dropdown-toggle" href="#" data-toggle="dropdown">
                <i class="ti-shine">
                </i>
                Travel
                <span class="sidebar-badge">
                  12
                </span>
                <b class="caret">
                </b>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="#" tabindex="-1">
                    Europe
                    <span class="sidebar-badge">
                      12
                    </span>
                  </a>
                </li>
                <li>
                  <a href="#" tabindex="-1">
                    Promo
                    <span class="sidebar-badge">
                      0
                    </span>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#">
                <i class="ti-gift">
                </i>
                Gifts
                <span class="sidebar-badge">
                  3
                </span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="ti-shopping-cart">
                </i>
                Products
                <span class="sidebar-badge">
                  456
                </span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="ti-ticket">
                </i>
                Tickets
                <span class="sidebar-badge badge-circle">
                  12
                </span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="ti-pulse">
                </i>
                Health
                <span class="sidebar-badge badge-circle">
                  45
                </span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="ti-direction-alt">
                </i>
                Things To Do
                <span class="sidebar-badge badge-circle">
                  117
                </span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="ti-cut">
                </i>
                Fashion
                <span class="sidebar-badge badge-circle">
                  117
                </span>
              </a>
            </li>
          </ul>
          <!-- Sidebar divider -->
        </div>
        <!-- /.widget -->
        <div class="widget widget-tags">
          <hr class="mBtm-50 mTop-30" data-symbol="POPULAR TAGS">
          <ul class="tags">
            <li>
              <a href="#" class="tag">
                Vacation
              </a>
            </li>
            <li>
              <a href="#" class="tag">
                Travel
              </a>
            </li>
            <li>
              <a href="#" class="tag">
                Discount
              </a>
            </li>
            <li>
              <a href="#" class="tag">
                Croatia
              </a>
            </li>
            <li>
              <a href="#" class="tag">
                Adriatic
              </a>
            </li>
            <li>
              <a href="#" class="tag">
                Europe
              </a>
            </li>
            <li>
              <a href="#" class="tag">
                Monte Negro
              </a>
            </li>
            <li>
              <a href="#" class="tag">
                New York
              </a>
            </li>
            <li>
              <a href="#" class="tag">
                Paris
              </a>
            </li>
          </ul>
        </div>
        <!-- /widget -->
        <div class="widget widget-featured">
          <hr data-symbol="BEST RATED">
          <div class="media media-sm entry-rating">
            <div class="media-left">
              <img class="media-object" src="http://placehold.it/200x150" alt="blog-thumb">
            </div>
            <div class="media-body">
              <h5 class="media-heading">
                <a href="#">
                  Sirenis Punta Cana Resort Casino
                </a>
              </h5>
              <p class="stars">
                <i class="ti-star">
                </i>
                <i class="ti-star">
                </i>
                <i class="ti-star">
                </i>
                <i class="ti-start">
                </i>
                <i class="ti-star disabled">
                </i>
              </p>
              <ul class="list-inline">
                <li>
                  <p class="price line-trough">
                    $399.00
                  </p>
                </li>
                <li>
                  <p class="price">
                    $99.00
                  </p>
                </li>
              </ul>
            </div>
          </div>
          <!-- /entry rating -->
          <div class="media media-sm entry-rating">
            <div class="media-left">
              <img class="media-object" src="http://placehold.it/200x150" alt="blog-thumb">
            </div>
            <div class="media-body">
              <h5 class="media-heading">
                <a href="#">
                  Plaza Resort Hotel &amp; SPA
                </a>
              </h5>
              <p class="stars">
                <i class="ti-star">
                </i>
                <i class="ti-star">
                </i>
                <i class="ti-star">
                </i>
                <i class="ti-start">
                </i>
                <i class="ti-star">
                </i>
              </p>
              <ul class="list-inline">
                <li>
                  <p class="price line-trough">
                    $423.00
                  </p>
                </li>
                <li>
                  <p class="price">
                    $86.00
                  </p>
                </li>
              </ul>
            </div>
          </div>
          <!-- /entry rating -->
          <div class="media media-sm entry-rating">
            <div class="media-left">
              <img class="media-object" src="http://placehold.it/200x150" alt="blog-thumb">
            </div>
            <div class="media-body">
              <h5 class="media-heading">
                <a href="#">
                  Wyndham Garden at Palmas del Mar
                </a>
              </h5>
              <p class="stars">
                <i class="ti-star">
                </i>
                <i class="ti-star">
                </i>
                <i class="ti-star">
                </i>
                <i class="ti-start">
                </i>
                <i class="ti-star">
                </i>
              </p>
              <ul class="list-inline">
                <li>
                  <p class="price line-trough">
                    $789.00
                  </p>
                </li>
                <li>
                  <p class="price">
                    $243.00
                  </p>
                </li>
              </ul>
            </div>
          </div>
          <!-- /entry rating -->
        </div>
        <!-- /widget -->
        <div class="widget widget-tabs">
          <div class="row">
            <div class="col-sm-12">
              <div role="tabpanel" id="tabs" class="tabbable responsive">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li class="dropdown pull-right tabdrop hide">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      <i class="ti-menu">
                      </i>

                      <b class="caret">
                      </b>
                    </a>
                    <ul class="dropdown-menu">
                    </ul>
                  </li>

                  <li role="presentation" class="active">
                    <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                      Latest
                    </a>
                  </li>
                  <li role="presentation">
                    <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                      Comments
                    </a>
                  </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="home">
                    <div class="deal-entry green deal-entry-sm">
                      <div class="offer-discount">
                        $347
                      </div>
                      <div class="image ripple-effect">
                        <a href="#" target="_blank" title="#">
                          <img src="http://placehold.it/700x400" alt="#" class="img-responsive">
                        </a>
                        <span class="bought">
                          <i class="ti-tag">
                          </i>
                          21
                        </span>
                        <div class="caption">
                          <h5 class="media-heading">
                            <a href="#">
                              Plaza Resort Hotel &amp; SPA
                            </a>
                          </h5>
                          <p class="stars">
                            <i class="ti-star">
                            </i>
                            <i class="ti-star">
                            </i>
                            <i class="ti-star">
                            </i>
                            <i class="ti-start">
                            </i>
                            <i class="ti-star">
                            </i>
                          </p>
                        </div>
                      </div>
                      <footer class="clearfix">
                        <div class="valueInfo">
                          <div class="value">
                            <p class="value">
                              $422
                            </p>
                            <p class="text">
                              Value
                            </p>
                          </div>
                          <div class="discount">
                            <p class="value">
                              64%
                            </p>
                            <p class="text">
                              Discount
                            </p>
                          </div>
                          <div class="save">
                            <p class="value">
                              $76
                            </p>
                            <p class="text">
                              SAVINGS
                            </p>
                          </div>
                        </div>
                      </footer>
                    </div>
                    <!--/.deal entry -->
                    <div class="deal-entry green deal-entry-sm">
                      <div class="offer-discount">
                        $245
                      </div>
                      <div class="image ripple-effect">
                        <a href="#" target="_blank" title="#">
                          <img src="http://placehold.it/700x400" alt="#" class="img-responsive">
                        </a>
                        <span class="bought">
                          <i class="ti-tag">
                          </i>
                          21
                        </span>
                        <div class="caption">
                          <h5 class="media-heading">
                            <a href="#">
                              Plaza Resort Hotel &amp; SPA
                            </a>
                          </h5>
                          <p class="stars">
                            <i class="ti-star">
                            </i>
                            <i class="ti-star">
                            </i>
                            <i class="ti-star">
                            </i>
                            <i class="ti-start">
                            </i>
                            <i class="ti-star">
                            </i>
                          </p>
                        </div>
                      </div>
                      <footer class="clearfix">
                        <div class="valueInfo">
                          <div class="value">
                            <p class="value">
                              $1,422
                            </p>
                            <p class="text">
                              Value
                            </p>
                          </div>
                          <div class="discount">
                            <p class="value">
                              59%
                            </p>
                            <p class="text">
                              Discount
                            </p>
                          </div>
                          <div class="save">
                            <p class="value">
                              $976
                            </p>
                            <p class="text">
                              SAVINGS
                            </p>
                          </div>
                        </div>
                      </footer>
                    </div>
                    <!--/.deal entry -->
                  </div>
                  <!-- /tab content -->
                  <div role="tabpanel" class="tab-pane" id="profile">
                    <div class="wrap mTop-20">
                      <div class="comment clearfix">
                        <div class="comment-avatar">
                          <img src="http://placehold.it/80x80" alt="avatar">
                        </div>
                        <header>
                          <h5>
                            Really Nice Vacation!
                          </h5>
                          <div class="comment-meta stars">
                            <i class="ti-star">
                            </i>
                            <i class="ti-star">
                            </i>
                            <i class="ti-star">
                            </i>
                            <i class="ti-start">
                            </i>
                            <i class="ti-star">
                            </i>
                            | Today, 10:31
                          </div>
                          <!--/.stars -->
                        </header>

                      </div>
                      <!--/.comments -->
                      <div class="mTop-20">
                      </div>
                      <div class="comment clearfix">
                        <div class="comment-avatar">
                          <img src="http://placehold.it/80x80" alt="avatar">
                        </div>
                        <header>
                          <h5>
                            Great deal guys
                          </h5>
                          <div class="comment-meta stars">
                            <i class="ti-star">
                            </i>
                            <i class="ti-star">
                            </i>
                            <i class="ti-star">
                            </i>
                            <i class="ti-start">
                            </i>
                            <i class="ti-star">
                            </i>
                            | Today, 20:47
                          </div>
                          <!--/.stars -->
                        </header>

                      </div>
                      <!--/.comments -->
                      <div class="mTop-20">
                      </div>
                      <div class="comment clearfix">
                        <div class="comment-avatar">
                          <img src="http://placehold.it/80x80" alt="avatar">
                        </div>
                        <header>
                          <h5>
                            This is Your ratings comment!
                          </h5>
                          <div class="comment-meta stars">
                            <i class="ti-star">
                            </i>
                            <i class="ti-star">
                            </i>
                            <i class="ti-star">
                            </i>
                            <i class="ti-start">
                            </i>
                            <i class="ti-star">
                            </i>
                            | Today, 20:47
                          </div>
                          <!--/.stars -->
                        </header>

                      </div>
                      <!--/.comments -->

                    </div>
                    <!--/wrap -->
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!--/.widget -->
        <div class="widget">
          <div class="box-icon">
            <div class="icon-wrap">
              <i class="ti-star">
              </i>
            </div>
            <div class="text">
              <h4>
                share &amp; get $5 in Deals
              </h4>

              <p>
                earn $5 in Bosnus Deal when a friend buys this Deal from your personalised link full terms apply
              </p>
            </div>
          </div>
        </div>
        <!--/.widget -->
      </div>
      <!-- /col 4 - sidebar -->
    </div>
  </div>
  <!--/.row -->
</section>
@stop
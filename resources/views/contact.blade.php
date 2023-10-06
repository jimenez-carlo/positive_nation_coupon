@extends('layouts.landing')
@section('content')
<section id="page" class="container mBtm-50">
  <div class="row">
    <div class="col-sm-8 mTop-30">
      <div class="inner-wrap frameLR bg-white shadow clearfix ">
        <hr data-symbol="OUR LOCATION">
        <div class="google-maps">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d180923.20573680187!2d18.431035300000026!3d44.88417339999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475c3ce74d1a2ad7%3A0xec92baaa82e344b0!2zR3JhZGHEjWFj!5e0!3m2!1sen!2sba!4v1430647606971"
            width="600" height="450" frameborder="0" style="border:0">
          </iframe>
        </div>
        <hr data-symbol="CONTACT FORM">
        <!-- widget -->
        <div class="widget contact-widget">
          <h4 class="widget-title">
            Your data will be safe!
          </h4>
          <form class="contact-form clearfix" action="#" method="post" novalidate="novalidate">
            <p>
              Your email address will not be published. Required fields are marked *
            </p>
            <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-12">
                <p class="input-block">
                  <label class="required">
                    Name
                    <span>
                      (*)
                    </span>
                  </label>
                  <input type="text" class="form-control" placeholder="Name">
                </p>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <p class="input-block">
                  <label class="required">
                    Email
                    <span>
                      (*)
                    </span>
                  </label>
                  <input type="text" class="form-control" placeholder="Email">
                </p>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <p class="input-block">

                  <label class="required">
                    Website
                  </label>
                  <input type="text" class="form-control" placeholder="Web site">

                </p>
              </div>
            </div>
            <!-- row -->

            <p class="textarea-block">

              <label class="required" for="contact_message">
                Your message
                <span>
                  (*)
                </span>
              </label>
              <textarea rows="6" cols="88" id="contact_message" name="message" class="form-control">
                      Your message (*)
                    </textarea>
            </p>
            <p class="contact-button clearfix">

              <input type="submit" class="btn btn-raised ripple-effect btn-success" id="submit-contact"
                value="Send message">
            </p>
          </form>
          <div id="response">
          </div>
        </div>
        <!-- punica-contact-widget -->
      </div>
      <!-- /inner wrap -->
    </div>
    <div class="col-sm-4 sidebar">
      <div class="inner-side shadow mTop-0">
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
        <div class="widget">
          <hr class="mBtm-50 mTop-30" data-symbol="ADDRESS">
          <address>
            Design Company
            <br>
            55 Eva. Avenue., 1004/115
            <br>
            Sarajevo, BA 00125-4587 BiH
            <br>
          </address>
        </div>

        <div class="widget">
          <hr class="mBtm-50 mTop-30" data-symbol="ADDRESS II">
          <address>
            Design Company
            <br>
            55 Eva. Avenue., 1004/115
            <br>
            Sarajevo, BA 00125-4587 BiH
            <br>
          </address>
        </div>



        <div class="widget">
          <hr class="mBtm-50 mTop-30" data-symbol="WORKSPACE">
          <div class="responsive-video">
            <div class="fluid-width-video-wrapper" style="padding-top: 56.2%;">
              <iframe src="https://player.vimeo.com/video/122994198" frameborder="0" webkitallowfullscreen=""
                mozallowfullscreen="" allowfullscreen="" id="fitvid0">
              </iframe>
            </div>
          </div>

        </div>


      </div>
    </div>
    <!-- /col 4 - sidebar -->
  </div>

</section>
@stop
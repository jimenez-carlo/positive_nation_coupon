@extends('layouts.landing')
@section('content')
<section id="page">
  <div class="container">

    <!-- Cart -->
    <div class="cart shadow">

      <!-- Cart Contents -->
      <table class="cart-contents">
        <thead>
          <tr>
            <th class="hidden-xs">
              Image
            </th>
            <th>
              Description
            </th>
            <th>
              Qty
            </th>
            <th class="hidden-xs">
              Price
            </th>
            <th>
              Total
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="image hidden-xs">
              <img src="http://placehold.it/100x50" alt="product">
            </td>
            <td class="details">
              <div class="clearfix">
                <div class="pull-left">
                  <a href="#" class="title">
                    Sirenis Punta Cana Resort Casino
                  </a>
                  <div class="rating">
                    <i class="ti-star">
                    </i>
                    <i class="ti-star">
                    </i>
                    <i class="ti-star">
                    </i>
                    <i class="ti-star disabled">
                    </i>
                    <i class="ti-star disabled">
                    </i>
                  </div>
                  <span>
                    Code: extradeal 003
                  </span>
                </div>
                <div class="action pull-right">
                  <div class="clearfix">
                    <button class="btn-default btn-raised ripple-effect">
                      <i class="ti-marker">
                      </i>
                    </button>
                    <button class="btn-primary btn-raised ripple-effect">
                      <i class="ti-reload">
                      </i>
                    </button>
                    <button class="btn-danger btn-raised ripple-effect">
                      <i class="ti-trash">
                      </i>
                    </button>

                  </div>
                </div>
              </div>
            </td>
            <td class="qty">
              <input type="text" value="1" name="">
            </td>
            <td class="unit-price hidden-xs">
              <span class="currency">
                $
              </span>
              1500.00
            </td>
            <td class="total-price">
              <span class="currency">
                $
              </span>
              1500.00
            </td>
          </tr>

          <tr>
            <td class="image hidden-xs">
              <img src="http://placehold.it/100x50" alt="product">
            </td>
            <td class="details">
              <div class="clearfix">
                <div class="pull-left">
                  <a href="#" class="title">
                    Sirenis Punta Cana Resort Casino
                  </a>
                  <div class="rating">
                    <i class="ti-star">
                    </i>
                    <i class="ti-star">
                    </i>
                    <i class="ti-star">
                    </i>
                    <i class="ti-star disabled">
                    </i>
                    <i class="ti-star disabled">
                    </i>
                  </div>
                  <span>
                    Code: extradeal 003
                  </span>
                </div>
                <div class="action pull-right">
                  <div class="clearfix">
                    <button class="btn-default btn-raised ripple-effect">
                      <i class="ti-marker">
                      </i>
                    </button>
                    <button class="btn-primary btn-raised ripple-effect">
                      <i class="ti-reload">
                      </i>
                    </button>
                    <button class="btn-danger btn-raised ripple-effect">
                      <i class="ti-trash">
                      </i>
                    </button>

                  </div>
                </div>
              </div>
            </td>
            <td class="qty">
              <input type="text" value="1" name="">
            </td>
            <td class="unit-price hidden-xs">
              <span class="currency">
                $
              </span>
              1500.00
            </td>
            <td class="total-price">
              <span class="currency">
                $
              </span>
              1500.00
            </td>
          </tr>

          <tr>
            <td class="image hidden-xs">
              <img src="http://placehold.it/100x50" alt="product">
            </td>
            <td class="details">
              <div class="clearfix">
                <div class="pull-left">
                  <a href="#" class="title">
                    Sirenis Punta Cana Resort Casino
                  </a>
                  <div class="rating">
                    <i class="ti-star">
                    </i>
                    <i class="ti-star">
                    </i>
                    <i class="ti-star">
                    </i>
                    <i class="ti-star disabled">
                    </i>
                    <i class="ti-star disabled">
                    </i>
                  </div>
                  <span>
                    Code: extradeal 003
                  </span>
                </div>
                <div class="action pull-right">
                  <div class="clearfix">
                    <button class="btn-default btn-raised ripple-effect">
                      <i class="ti-marker">
                      </i>
                    </button>
                    <button class="btn-primary btn-raised ripple-effect">
                      <i class="ti-reload">
                      </i>
                    </button>
                    <button class="btn-danger btn-raised ripple-effect">
                      <i class="ti-trash">
                      </i>
                    </button>

                  </div>
                </div>
              </div>
            </td>
            <td class="qty">
              <input type="text" value="1" name="">
            </td>
            <td class="unit-price hidden-xs">
              <span class="currency">
                $
              </span>
              1500.00
            </td>
            <td class="total-price">
              <span class="currency">
                $
              </span>
              1500.00
            </td>
          </tr>
        </tbody>

      </table>
      <!-- /Cart Contents -->

      <!-- Cart Summary -->
      <table class="cart-summary">
        <tbody>
          <tr>
            <td class="terms">

              <h5>
                <i class="ti-info-alt">
                </i>
                our return policy
              </h5>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
              </p>
            </td>
            <td class="totals">

              <table class="cart-totals">
                <tbody>
                  <tr>
                    <td>
                      Sub Total
                    </td>
                    <td class="price">
                      $ 4500.00
                    </td>
                  </tr>
                  <tr>
                    <td>
                      Shipping
                    </td>
                    <td class="price">
                      $ 500.00
                    </td>
                  </tr>
                  <tr>
                    <td>
                      VAT
                    </td>
                    <td class="price">
                      $ 250.00
                    </td>
                  </tr>
                  <tr>
                    <td class="cart-total">
                      total
                    </td>
                    <td class="cart-total price">
                      $ 5250.00
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>

      <!-- /Cart Summary -->

    </div>
    <!-- /Cart -->

    <!-- Cart Buttons -->
    <div class="cart-buttons clearfix mBtm-30">

      <a class="btn btn-raised btn-primary ripple-effect checkout" href="#">
        <i class="ti-shopping-cart">
        </i>
        checkout
      </a>
      <a class="btn btn-raised btn-success ripple-effect checkout" href="#">
        <i class="ti-plus">
        </i>
        continue shopping
      </a>
    </div>
    <!-- /Cart Buttons -->

  </div>
</section>
@stop
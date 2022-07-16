    @extends('front-end.master')
    @section('title')
        SHOPPING CART
    @endsection
    @section('body')
        <section class="main-container col1-layout">
            <div class="main container">
                <div class="col-main">
                    <div class="cart">
                        <div class="page-title">
                            <h1 class="text-center">Shopping Cart</h1>
                        </div>
                        <div class="table-responsive">
                                <fieldset>
                                    <table class="data-table cart-table" id="shopping-cart-table">
                                        <thead>
                                            <tr class="first last">
                                                <th rowspan="1">SL No</th>
                                                <th rowspan="1">Product Image</th>
                                                <th rowspan="1"><span class="nobr"> Name</span></th>
                                                <th colspan="1" class="a-center"><span class="nobr">Price Tk</span></th>
                                                <th class="a-center ">Qty</th>
                                                <th colspan="1" class="a-center">Subtotal</th>
                                                <th class="a-center" rowspan="1">Remove</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr class="first last">
                                                <td class="a-right last" colspan="50">
                                                    <button onclick="#" class="button btn-continue" title="Continue Shopping" type="button"><span>Continue Shopping</span></button>
                                                    <button class="button btn-update" title="Update Cart" value="update_qty" name="update_cart_action" type="submit"><span>Update Cart</span></button>
                                                    <button id="empty_cart_button" class="button" title="Clear Cart" value="empty_cart" name="update_cart_action" type="submit"><span>Clear Cart</span></button>
                                                </td>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        @php( $i = 1)
                                        @php( $sum = 0)
                                        @foreach( $cartProducts as $cartProduct )
                                            <tr class="first odd">
                                                <td>{!! $i++ !!}</td>
                                                <td class="image">
                                                        <img width="80" height="50" alt="Women's" src="{!! asset( $cartProduct->options->image) !!}">
                                                </td>
                                                <td><h2 class="product-name">{!! $cartProduct->name !!}</h2></td>
                                                <td class="a-center hidden-table"><span class="cart-price"> <span class="price">{!! $cartProduct->price !!}</span> </span></td>
                                                <td class="a-center movewishlist">
                                                    {!! Form::open(['route'=>'update-cart','method'=>'POST']) !!}
                                                        <input type="number" value="{!! $cartProduct->qty !!}" name="qty" min="1" maxlength="12" class="input-text qty" title="Qty" size="4" >
                                                        {!! Form::hidden('rowId',$cartProduct->rowId) !!}
                                                        <button type="submit" title="Update" class="edit-bnt btn-primary" ></button>
                                                    {!! Form::close() !!}
                                                </td>
                                                <td class="a-center movewishlist"><span class="cart-price">
                                                        <span class="price">{!! $total =$cartProduct->price* $cartProduct->qty !!}</span> 
                                                </td>
                                                <td class="a-center last">
                                                    <a href="{!! route('delete-cart-item',['rowId'=>$cartProduct->rowId]) !!}" class="button remove-item " title="Remove item" ><span><span>Remove item</span></span></a>
                                                </td>
                                            </tr>
                                            <?php $sum  = $sum + $total; ?>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </fieldset>
                                <div class="cart-collaterals row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4">
                                    <div class="totals">
                                        <h3>Shopping Cart Total</h3>
                                        <div class="inner">
                                            <table class="table shopping-cart-table-total table-hover table-dark table-striped" id="shopping-cart-totals-table">
                                                <colgroup>
                                                    <col>
                                                    <col width="1">
                                                </colgroup>
                                                <tbody>
                                                    <tr>
                                                        <td colspan="1" class="a-left"> Subtotal (Tk) </td>
                                                        <td class="a-right"><span class="price">{!! $sum !!}</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="1" class="a-left"> Total Vat (Tk) </td>
                                                        <td class="a-right"><span class="price">{!! $vat= 0 !!}</span></td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="1" class="a-left"><strong> Grand Total (Tk)</strong></td>
                                                        <td class="a-right"><strong><span class="price">{!! $orderTotal = $sum+$vat !!}</span></strong></td>
                                                        <?php Session::put('orderTotal', $orderTotal); ?>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <ul class="checkout">
                                            <li>
                                                <button class="button btn-proceed-checkout" title="Checkout" type="button">
                                                    @if(Session::get('customerId') && Session::get('shippingId'))
                                                        <span><a href="{!! route('checkout-payment') !!}">Proceed to Checkout</a></span>
                                                    @elseif(Session::get('customerId'))
                                                        <span><a href="{!! route('checkout-shipping') !!}">Proceed to Checkout</a></span>
                                                    @else
                                                        <span><a href="{!! route('checkout') !!}">Proceed to Checkout</a></span>
                                                    @endif
                                                </button>
                                            </li>
                                            <br>
                                            <li><a title="Checkout with Multiple Addresses" href="#">Checkout with Multiple Addresses</a> </li>
                                            <br>
                                        </ul>
                                    </div>
                                    <!--inner-->
                                </div>
                                <div class="col-sm-4"></div>
                                </div>
                        </div>
                        <!-- BEGIN CART COLLATERALS -->
                        <!--cart-collaterals-->
                    </div>
                </div>
            </div>
        </section>
    @endsection

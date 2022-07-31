<header>
    <div class="header-container">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <!-- Header Language -->
                    <div class="col-xs-7 col-sm-6">
                        <div class="dropdown block-language-wrapper hidden-xs"> <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="#"> <img src="{!! asset('/') !!}/front-end/images/english.png" alt="language"> English <span class="caret"></span> </a>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                    <img src="{!! asset('/front-end/images/english.png') !!}" alt="language"> English </a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                    <img src="{!! asset('/front-end/images/francais.png') !!}" alt="language"> French </a>
                                </li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">
                                    <img src="{!! asset('/front-end/images/german.png') !!}" alt="language"> German </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Header Language -->
                        <div class="welcome-msg hidden-xs"> Default welcome msg! </div>
                    </div>
                    <div class="col-xs-5 col-sm-6">
                        <div class="top-cart-contain pull-right">
                            <!-- Top Cart -->
                            <div class="mini-cart">
                                <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle">
                                    <a href=""> My Cart</a>
                                </div>
                                <div>
                                    <div class="top-cart-content" style="display: none;">
                                        <div class="actions">
                                            <button class="btn-checkout" title="Checkout" type="button"><span>Checkout</span></button>
                                            <a href="{!! route('show-cart') !!}" class="view-cart" ><span>View Cart</span></a> </div>
                                        <!--block-subtitle-->
                                        <ul class="mini-products-list" id="cart-sidebar">
                                            @foreach( $carts as $cart)
                                                <li class="item last">
                                                    <div class="item-inner"><a class="product-image" title="JP" href="#">
                                                            <img src="{!! asset( $cart->options->image) !!}" alt="JP">
                                                        </a>
                                                        <div class="product-details">
                                                            <div class="access">
                                                                <a class="btn-remove1" title="Remove This Item" href="#">Remove</a>
                                                                <a class="btn-edit" title="Edit item" href="#">
                                                                    <i class="icon-pencil"></i><span class="hidden">Edit item</span></a> </div>
                                                            <!--access--> <strong>1</strong> x <span class="price">{!! $cart->price !!}</span>
                                                            <p class="product-name"><a href="#">{!! $cart->name !!}</a></p>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                        <!--actions-->
                                    </div>
                                </div>
                            </div>
                            <!-- Top Cart -->
                            <div id="ajaxconfig_info" style="display:none"><a href="#/"></a>
                                <input value="" type="hidden">
                                <input id="enable_module" value="1" type="hidden">
                                <input class="effect_to_cart" value="1" type="hidden">
                                <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
                            </div>
                        </div>
                        <div class="top-search">
                            <div class="block-icon pull-right"> <a data-target=".bs-example-modal-lg" data-toggle="modal" class="search-focus dropdown-toggle links"> <i class="fa fa-search"></i> </a>
                                <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button aria-label="Close" data-dismiss="modal" class="close" type="button"><img src="{!! asset('/') !!}/front-end/images/interstitial-close.png" alt="close"> </button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="navbar-form">
                                                    <div id="search">
                                                        <div class="input-group">
                                                            <input name="search" placeholder="Search" class="form-control" type="text">
                                                            <button type="button" class="btn-search"><i class="fa fa-search"></i></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Header Top Links -->
                        <div class="toplinks">
                            <div class="links">
                                <div class="myaccount"><a title="My Account" href="login.html"><span class="hidden-xs">My Account</span></a></div>
                                <div class="check"><a title="Checkout" href="checkout.html"><span class="hidden-xs">Checkout</span></a></div>
                                <!-- Header Company -->
                                <!-- End Header Company -->
                                <div class="login">
                                    @if(Session::get('customerId'))
                                        <a href="#" onclick="document.getElementById('customerLogoutForm').submit(); "><span class="hidden-xs">LogOut</span></a>
                                        {!! Form::open(['route'=>'customer-logout', 'method'=>'POST','id'=>'customerLogoutForm']) !!}
                                        {!! Form::close() !!}
                                    @else
                                        <a href="{!! route('new-customer-login') !!}"><span class="hidden-xs">Log In</span></a>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <!-- End Header Top Links -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

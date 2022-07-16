@extends('front-end.master')
@section('title')
    CategoryProduct
@endsection
@section('body')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb">
                        <li><a href="{!! route('/') !!}">Home</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Holiday</a></li>
                        <li><a href="#">Jeans</a></li>
                        <li><a href="#">Retis lapen casen</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->
    <!-- Main Container -->
    <section class="main-container col2-left-layout bounceInUp animated">
        <div class="container">
            <div class="row">
                <div class="col-main col-sm-9 col-sm-push-3">
                    <div class="category-description std">
                        <div class="slider-items-products">
                            <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                                <div class="slider-items slider-width-col1 owl-carousel owl-theme">

                                    <!-- Item -->
                                    <div class="item"> <a href="#"><img alt="" src="{!! asset('/') !!}/front-end/images/category-img1.jpg"></a>
                                        <div class="cat-img-title cat-bg cat-box">
                                            <div class="small-tag"><span>Hot Sale</span> 49% OFF</div>
                                            <h2 class="cat-heading">Women Collection</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                        </div>
                                    </div>
                                    <!-- End Item -->

                                    <!-- Item -->
                                    <div class="item"> <a href="#"><img alt="" src="{!! asset('/') !!}/front-end/images/category-img2.jpg"></a>
                                        <div class="cat-img-title cat-bg cat-box">
                                            <div class="small-tag"><span>Hot Sale</span> 59% OFF</div>
                                            <h2 class="cat-heading">Men Collection</h2>
                                            <p>I like so much, consectetur adipiscing elit. </p>
                                        </div>
                                        <!-- End Item -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <article class="col-main">
                        <div class="page-title">
                            <h1>View list Women Product</h1>
                        </div>
                        <div class="toolbar">
                            <div class="sorter">
                                <div class="view-mode"><a href="{!! route('category-product') !!}"><span title="Grid" class="button button-active button-grid">&nbsp;</span></a>
                                    <a href="" title="List" class="button-list">&nbsp;</a>
                                </div>
                            </div>
                            <div id="sort-by">
                                <label class="left">Sort By: </label>
                                <ul>
                                    <li><a href="#">Position<span class="right-arrow"></span></a>
                                        <ul>
                                            <li><a href="#">Name</a></li>
                                            <li><a href="#">Price</a></li>
                                            <li><a href="#">Position</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <a class="button-asc left" href="#" title="Set Descending Direction"><span class="top_arrow"></span></a> </div>
                            <div class="pager">
                                <div id="limiter">
                                    <label>View: </label>
                                    <ul>
                                        <li><a href="#">15<span class="right-arrow"></span></a>
                                            <ul>
                                                <li><a href="#">20</a></li>
                                                <li><a href="#">30</a></li>
                                                <li><a href="#">35</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="pages">
                                    <label>Page:</label>
                                    <ul class="pagination">
                                        <li><a href="#">&laquo;</a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">&raquo;</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
{{--                        view-list-product--}}
                        <div class="category-products">
                            <ol class="products-list" id="products-list">
                                <li class="item first">
                                    <div class="product-image"> <a href="#" title="HTC Rhyme Sense"> <img class="small-image" src="{!! asset('/') !!}/front-end/products-images/product.jpg" alt="HTC Rhyme Sense"> </a> </div>
                                    <div class="product-shop">
                                        <h2 class="product-name"><a href="#/htc-rhyme-sense.html" title="HTC Rhyme Sense">HTC Rhyme Sense</a></h2>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div style="width:50%" class="rating"></div>
                                            </div>
                                            <p class="rating-links"> <a href="#/review/product/list/id/167/category/35/">1 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
                                        </div>
                                        <div class="desc std">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla... <a class="link-learn" title="" href="#">Learn More</a> </p>
                                        </div>
                                        <div class="price-box">

                                            <p class="special-price"> <span class="price-label"></span> <span class="price"> $222.99 </span> </p> <p class="old-price"> <span class="price-label"></span> <span class="price"> $442.99 </span> </p>
                                        </div>
                                        <div class="actions">
                                            <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                            <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="#"><span>Add to Compare</span></a> </span> </div>
                                    </div>
                                </li>
                                <li class="item even">
                                    <div class="product-image"> <a href="#/microsoft-natural-ergonomic-keyboard-4000.html" title="Microsoft Natural Keyboard"> <img class="small-image" src="{!! asset('/') !!}/front-end/products-images/product.jpg" alt="Microsoft Natural Keyboard"> </a> </div>
                                    <div class="product-shop">
                                        <h2 class="product-name"><a href="#/microsoft-natural-ergonomic-keyboard-4000.html" title="Microsoft Natural Keyboard">Microsoft Natural Keyboard</a></h2>
                                        <div class="desc std">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla... <a class="link-learn" title="" href="#">Learn More</a></p>
                                        </div>
                                        <div class="price-box"> <span class="regular-price"> <span class="price">$99.99</span> </span> </div>
                                        <div class="actions">
                                            <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                            <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="#"><span>Add to Compare</span></a> </span> </div>
                                    </div>
                                </li>
                                <li class="item odd">
                                    <div class="product-image"> <a href="#/30-flat-panel-tft-lcd-cinema-hd-monitor.html" title="30&quot; Flat-Panel HD Monitor"> <img class="small-image" src="{!! asset('/') !!}/front-end/products-images/product.jpg" alt="30&quot; Flat-Panel HD Monitor"> </a> </div>
                                    <div class="product-shop">
                                        <h2 class="product-name"><a href="#/30-flat-panel-tft-lcd-cinema-hd-monitor.html" title="30&quot; Flat-Panel HD Monitor">30" Flat-Panel HD Monitor</a></h2>
                                        <div class="desc std"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla... <a class="link-learn" title="" href="#">Learn More</a></p>
                                        </div>
                                        <div class="price-box"> <span class="regular-price"> <span class="price">$699.99</span> </span> </div>
                                        <div class="actions">
                                            <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                            <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="#"><span>Add to Compare</span></a> </span> </div>
                                    </div>
                                </li>
                                <li class="item even">
                                    <div class="product-image"> <a href="#/19-widescreen-flat-panel-lcd-monitor.html" title="19&quot; Widescreen LCD Monitor"> <img class="small-image" src="{!! asset('/') !!}/front-end/products-images/product.jpg" alt="19&quot; Widescreen LCD Monitor"> </a> </div>
                                    <div class="product-shop">
                                        <h2 class="product-name"><a href="#/19-widescreen-flat-panel-lcd-monitor.html" title="19&quot; Widescreen LCD Monitor">19" Widescreen LCD Monitor</a></h2>
                                        <div class="desc std"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla... <a class="link-learn" title="" href="#">Learn More</a> </p>
                                        </div>
                                        <div class="price-box"> <span class="regular-price"> <span class="price">$399.99</span> </span> </div>
                                        <div class="actions">
                                            <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                            <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="#"><span>Add to Compare</span></a> </span> </div>
                                    </div>
                                </li>
                                <li class="item odd">
                                    <div class="product-image"> <a href="#/250gb-5400rpm.html" title="Seagate 250GB HD "> <img class="small-image" src="{!! asset('/') !!}/front-end/products-images/product.jpg" alt="Seagate 250GB HD "> </a> </div>
                                    <div class="product-shop">
                                        <h2 class="product-name"><a href="#/250gb-5400rpm.html" title="Seagate 250GB HD ">Seagate 250GB HD </a></h2>
                                        <div class="desc std"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla... <a class="link-learn" title="" href="#">Learn More</a> </p>
                                        </div>
                                        <div class="price-box"> <span class="regular-price"> <span class="price">$99.00</span> </span> </div>
                                        <div class="actions">
                                            <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                            <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="#"><span>Add to Compare</span></a> </span> </div>
                                    </div>
                                </li>
                                <li class="item even">
                                    <div class="product-image"> <a href="#/500gb-5400rpm.html" title="Seagate 500GB HD"> <img class="small-image" src="{!! asset('/') !!}/front-end/products-images/product.jpg" alt="Seagate 500GB HD"> </a> </div>
                                    <div class="product-shop">
                                        <h2 class="product-name"><a href="#/500gb-5400rpm.html" title="Seagate 500GB HD">Seagate 500GB HD</a></h2>
                                        <div class="desc std"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla... <a class="link-learn" title="" href="#">Learn More</a> </p>
                                        </div>
                                        <div class="price-box"> <span class="regular-price"> <span class="price">$299<span class="sub">.00</span></span> </span> </div>
                                        <div class="actions">
                                            <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                            <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="#"><span>Add to Compare</span></a> </span> </div>
                                    </div>
                                </li>
                                <li class="item odd">
                                    <div class="product-image"> <a href="#" title="Intel Core 2 Extreme QX9775"> <img class="small-image" src="{!! asset('/') !!}/front-end/products-images/product.jpg" alt="Intel Core 2 Extreme QX9775"> </a> </div>
                                    <div class="product-shop">
                                        <h2 class="product-name"><a href="#" title="Intel Core 2 Extreme QX9775">Intel Core 2 Extreme QX9775</a></h2>
                                        <div class="desc std"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla... <a class="link-learn" title="" href="#">Learn More</a> </p>
                                        </div>
                                        <div class="price-box"> <span class="regular-price"> <span class="price">$2,049.99</span> </span> </div>
                                        <div class="actions">
                                            <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                            <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="#"><span>Add to Compare</span></a> </span> </div>
                                    </div>
                                </li>
                                <li class="item even">
                                    <div class="product-image"> <a href="#/24-widescreen-flat-panel-lcd-monitor.html" title="24&quot; Widescreen LCD Monitor"> <img class="small-image" src="{!! asset('/') !!}/front-end/products-images/product.jpg" alt="24&quot; Widescreen LCD Monitor"> </a> </div>
                                    <div class="product-shop">
                                        <h2 class="product-name"><a href="#/24-widescreen-flat-panel-lcd-monitor.html" title="24&quot; Widescreen LCD Monitor">24" Widescreen LCD Monitor</a></h2>
                                        <div class="desc std"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla... <a class="link-learn" title="" href="#">Learn More</a> </p>
                                        </div>
                                        <div class="price-box"> <span class="regular-price"> <span class="price">$699.99</span> </span> </div>
                                        <div class="actions">
                                            <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                            <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="#"><span>Add to Compare</span></a> </span> </div>
                                    </div>
                                </li>
                                <li class="item odd">
                                    <div class="product-image"> <a href="#/microsoft-wireless-optical-mouse-5004.html" title="Logitech Optical Trackman"> <img class="small-image" src="{!! asset('/') !!}/front-end/products-images/product.jpg" alt="Logitech Optical Trackman"> </a> </div>
                                    <div class="product-shop">
                                        <h2 class="product-name"><a href="#/microsoft-wireless-optical-mouse-5004.html" title="Logitech Optical Trackman">Logitech Optical Trackman</a></h2>
                                        <div class="desc std"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla... <a class="link-learn" title="" href="#">Learn More</a> </p>
                                        </div>
                                        <div class="price-box"> <span class="regular-price"> <span class="price">$79.99</span> </span> </div>
                                        <div class="actions">
                                            <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                            <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="#"><span>Add to Compare</span></a> </span> </div>
                                    </div>
                                </li>
                                <li class="item last even">
                                    <div class="product-image"> <a href="#/logitech-dinovo-edge-keyboard.html" title="Logitech diNovo Edge Keyboard"> <img class="small-image" src="{!! asset('/') !!}/front-end/products-images/product.jpg" alt="Logitech diNovo Edge Keyboard"> </a> </div>
                                    <div class="product-shop">
                                        <h2 class="product-name"><a href="#/logitech-dinovo-edge-keyboard.html" title="Logitech diNovo Edge Keyboard">Logitech diNovo Edge Keyboard</a></h2>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div style="width:80%" class="rating"></div>
                                            </div>
                                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Your Review</a> </p>
                                        </div>
                                        <div class="desc std"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla... <a class="link-learn" title="" href="#">Learn More</a> </p>
                                        </div>
                                        <div class="price-box"> <span class="regular-price"> <span class="price">$239.99</span> </span> </div>
                                        <div class="actions">
                                            <button class="button btn-cart ajx-cart" title="Add to Cart" type="button"><span>Add to Cart</span></button>
                                            <span class="add-to-links"> <a title="Add to Wishlist" class="button link-wishlist" href="#"><span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="#"><span>Add to Compare</span></a> </span> </div>
                                    </div>
                                </li>
                            </ol>
                        </div>
{{--                        end view-list-product--}}
                    </article>
                    <!--	///*///======    End article  ========= //*/// -->
                </div>
                <div class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
                    <aside class="col-left sidebar">
                        <div class="side-nav-categories">
                            <div class="block-title"> Categories </div>
                            <!--block-title-->
                            <!-- BEGIN BOX-CATEGORY -->
                            <div class="box-content box-category">
                                <ul>
                                    <li> <a class="active" href="#/women.html">Women</a> <span class="subDropdown minus"></span>
                                        <ul class="level0_415" style="display:block">
                                            <li> <a href="#/women/tops.html"> Handbags </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/women/tops/evening-tops.html"> Clutch Handbags </a> </li>
                                                    <li> <a href="#/women/tops/shirts-blouses.html"> Diaper Bags </a> </li>
                                                    <li> <a href="#/women/tops/tunics.html"> Back Bags </a> </li>
                                                    <li> <a href="#/women/tops/vests.html"> Hobo handbags </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="#/women/bags.html"> Jackets </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/women/bags/bags.html"> Bags </a> </li>
                                                    <li> <a href="#/women/bags/designer-handbags.html"> Designer Handbags </a> </li>
                                                    <li> <a href="#/women/bags/purses.html"> Purses </a> </li>
                                                    <li> <a href="#/women/bags/shoulder-bags.html"> Shoulder Bags </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="#/women/shoes.html"> Shoes </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/women/shoes/flat-shoes.html"> Flat Shoes </a> </li>
                                                    <li> <a href="#/women/shoes/flat-sandals.html"> Flat Sandals </a> </li>
                                                    <li> <a href="#/women/shoes/boots.html"> Boots </a> </li>
                                                    <li> <a href="#/women/shoes/heels.html"> Heels </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="#/women/Jewellery.html"> Jewellery </a>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/women/Jewellery/bracelets.html"> Bracelets </a> </li>
                                                    <li> <a href="#/women/Jewellery/necklaces-pendants.html"> Necklaces &amp; Pendants </a> </li>
                                                    <li> <a href="#/women/Jewellery/pins-brooches.html"> Pins &amp; Brooches </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="#/women/dresses.html"> Dresses </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/women/dresses/casual-dresses.html"> Casual Dresses </a> </li>
                                                    <li> <a href="#/women/dresses/evening.html"> Evening </a> </li>
                                                    <li> <a href="#/women/dresses/designer.html"> Designer </a> </li>
                                                    <li> <a href="#/women/dresses/party.html"> Party </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="#/women/swimwear.html"> Swimwear </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/women/swimwear/swimsuits.html"> Swimsuits </a> </li>
                                                    <li> <a href="#/women/swimwear/beach-clothing.html"> Beach Clothing </a> </li>
                                                    <li> <a href="#/women/swimwear/bikinis.html"> Bikinis </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                        </ul>
                                        <!--level0-->
                                    </li>
                                    <!--level 0-->
                                    <li> <a href="#/men.html">Men</a> <span class="subDropdown plus"></span>
                                        <ul class="level0_455" style="display:none">
                                            <li> <a href="#/men/shoes.html"> Shoes </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/men/shoes/flat-shoes.html"> Flat Shoes </a> </li>
                                                    <li> <a href="#/men/shoes/boots.html"> Boots </a> </li>
                                                    <li> <a href="#/men/shoes/heels.html"> Heels </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="#/men/Jewellery.html"> Jewellery </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/men/Jewellery/bracelets.html"> Bracelets </a> </li>
                                                    <li> <a href="#/men/Jewellery/necklaces-pendants.html"> Necklaces &amp; Pendants </a> </li>
                                                    <li> <a href="#/men/Jewellery/pins-brooches.html"> Pins &amp; Brooches </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="#/men/dresses.html"> Dresses </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/men/dresses/casual-dresses.html"> Casual Dresses </a> </li>
                                                    <li> <a href="#/men/dresses/evening.html"> Evening </a> </li>
                                                    <li> <a href="#/men/dresses/designer.html"> Designer </a> </li>
                                                    <li> <a href="#/men/dresses/party.html"> Party </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="#/men/jackets.html"> Jackets </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/men/jackets/coats.html"> Coats </a> </li>
                                                    <li> <a href="#/men/jackets/jackets.html"> Jackets </a> </li>
                                                    <li> <a href="#/men/jackets/leather-jackets.html"> Leather Jackets </a> </li>
                                                    <li> <a href="#/men/jackets/blazers.html"> Blazers </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="#/men/swimwear.html"> Swimwear </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/men/swimwear/swimsuits.html"> Swimsuits </a> </li>
                                                    <li> <a href="#/men/swimwear/beach-clothing.html"> Beach Clothing </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                        </ul>
                                        <!--level0-->
                                    </li>
                                    <!--level 0-->
                                    <li> <a href="#.html">Electronics</a> <span class="subDropdown plus"></span>
                                        <ul class="level0_482" style="display:none">
                                            <li> <a href="#/smartphones.html"> Smartphones </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/smartphones/samsung.html"> Samsung </a> </li>
                                                    <li> <a href="#/smartphones/apple.html"> Apple </a> </li>
                                                    <li> <a href="#/smartphones/blackberry.html"> Blackberry </a> </li>
                                                    <li> <a href="#/smartphones/nokia.html"> Nokia </a> </li>
                                                    <li> <a href="#/smartphones/htc.html"> HTC </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="#/cameras.html"> Cameras </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/cameras/digital-cameras.html"> Digital Cameras </a> </li>
                                                    <li> <a href="#/cameras/camcorders.html"> Camcorders </a> </li>
                                                    <li> <a href="#/cameras/lenses.html"> Lenses </a> </li>
                                                    <li> <a href="#/cameras/filters.html"> Filters </a> </li>
                                                    <li> <a href="#/cameras/tripod.html"> Tripod </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                            <li> <a href="#/accesories.html"> Accesories </a> <span class="subDropdown plus"></span>
                                                <ul class="level1" style="display:none">
                                                    <li> <a href="#/accesories/headsets.html"> HeadSets </a> </li>
                                                    <li> <a href="#/accesories/batteries.html"> Batteries </a> </li>
                                                    <li> <a href="#/accesories/screen-protectors.html"> Screen Protectors </a> </li>
                                                    <li> <a href="#/accesories/memory-cards.html"> Memory Cards </a> </li>
                                                    <li> <a href="#/accesories/cases.html"> Cases </a> </li>
                                                    <!--end for-each -->
                                                </ul>
                                                <!--level1-->
                                            </li>
                                            <!--level1-->
                                        </ul>
                                        <!--level0-->
                                    </li>
                                    <!--level 0-->
                                    <li> <a href="#/digital.html">Furniture</a> </li>
                                    <!--level 0-->
                                    <li class="last"> <a href="#/fashion.html">Kids</a> </li>
                                    <!--level 0-->
                                </ul>
                            </div>
                            <!--box-content box-category-->
                        </div>
                        <div class="block block-layered-nav">
                            <div class="block-title">Shop By</div>
                            <div class="block-content">
                                <p class="block-subtitle">Shopping Options</p>
                                <dl id="narrow-by-list">
                                    <dt class="odd">Price</dt>
                                    <dd class="odd">
                                        <ol>
                                            <li> <a href="#"><span class="price">$0.00</span> - <span class="price">$199.99</span></a> (6) </li>
                                            <li> <a href="#"><span class="price">$200.00</span> and above</a> (6) </li>
                                        </ol>
                                    </dd>
                                    <dt class="even">Manufacturer</dt>
                                    <dd class="even">
                                        <ol>
                                            <li> <a href="#">Superb</a> (9) </li>
                                            <li> <a href="#">Nexus</a> (4) </li>
                                            <li> <a href="#">Xperia</a> (1) </li>
                                        </ol>
                                    </dd>
                                    <dt class="odd">Color</dt>
                                    <dd class="odd">
                                        <ol>
                                            <li> <a href="#">Green</a> (1) </li>
                                            <li> <a href="#">White</a> (5) </li>
                                            <li> <a href="#">Black</a> (5) </li>
                                            <li> <a href="#">Gray</a> (4) </li>
                                            <li> <a href="#">Dark Gray</a> (3) </li>
                                            <li> <a href="#">Blue</a> (1) </li>
                                        </ol>
                                    </dd>
                                    <dt class="last even">Size</dt>
                                    <dd class="last even">
                                        <ol>
                                            <li> <a href="#">S</a> (6) </li>
                                            <li> <a href="#">M</a> (6) </li>
                                            <li> <a href="#">L</a> (4) </li>
                                            <li> <a href="#">XL</a> (4) </li>
                                        </ol>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="block block-cart">
                            <div class="block-title ">My Cart</div>
                            <div class="block-content">
                                <div class="summary">
                                    <p class="amount">There are <a href="#">2 items</a> in your cart.</p>
                                    <p class="subtotal"> <span class="label">Cart Subtotal:</span> <span class="price">$49.99</span> </p>
                                </div>
                                <div class="ajax-checkout">
                                    <button class="button button-checkout" title="Submit" type="submit"><span>Checkout</span></button>
                                </div>
                                <p class="block-subtitle">Recently added item(s) </p>
                                <ul>
                                    <li class="item"> <a href="#" title="Retis lapen casen" class="product-image"><img src="{!! asset('/') !!}/front-end/{!! asset('/') !!}/front-end/products-images/product.jpg" alt="Fisher-Price Bubble Mower"></a>
                                        <div class="product-details">
                                            <div class="access"> <a href="#" title="Remove This Item" class="btn-remove1"> <span class="icon"></span> Remove </a> </div>
                                            <strong>1</strong> x <span class="price">$19.99</span>
                                            <p class="product-name"> <a href="#">Office Colored Ladies Shirt</a> </p>
                                        </div>
                                    </li>
                                    <li class="item last"> <a href="#" title="Retis lapen casen" class="product-image"><img src="{!! asset('/') !!}/front-end/{!! asset('/') !!}/front-end/products-images/product.jpg" alt="Prince Lionheart Jumbo Toy Hammock"></a>
                                        <div class="product-details">
                                            <div class="access"> <a href="#" title="Remove This Item" class="btn-remove1"> <span class="icon"></span> Remove </a> </div>
                                            <strong>1</strong> x <span class="price">$8.00</span>
                                            <p class="product-name"> <a href="#">Office Colored Ladies Shirt</a> </p>

                                            <!--access clearfix-->
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="block block-compare">
                            <div class="block-title ">Compare Products (2)</div>
                            <div class="block-content">
                                <ol id="compare-items">
                                    <li class="item odd">
                                        <input type="hidden" value="2173" class="compare-item-id">
                                        <a class="btn-remove1" title="Remove This Item" href="#"></a> <a href="#" class="product-name"> Office Colored Ladies Shirt</a> </li>
                                    <li class="item last even">
                                        <input type="hidden" value="2174" class="compare-item-id">
                                        <a class="btn-remove1" title="Remove This Item" href="#"></a> <a href="#" class="product-name"> Office Colored Ladies Shirt</a> </li>
                                </ol>
                                <div class="ajax-checkout">
                                    <button type="submit" title="Submit" class="button button-compare"><span>Compare</span></button>
                                    <button type="submit" title="Submit" class="button button-clear"><span>Clear</span></button>
                                </div>
                            </div>
                        </div>
                        <div class="block block-list block-viewed">
                            <div class="block-title"> Recently Viewed </div>
                            <div class="block-content">
                                <ol id="recently-viewed-items">
                                    <li class="item odd">
                                        <p class="product-name"><a href="#"> Retis lapen casen</a></p>
                                    </li>
                                    <li class="item even">
                                        <p class="product-name"><a href="#"> Retis lapen casen</a></p>
                                    </li>
                                    <li class="item last odd">
                                        <p class="product-name"><a href="#"> Retis lapen casen</a></p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="block block-poll">
                            <div class="block-title">Community Poll </div>
                            <form id="pollForm" action="#" method="post" onSubmit="return validatePollAnswerIsSelected();">
                                <div class="block-content">
                                    <p class="block-subtitle">What is your favorite Magento feature?</p>
                                    <ul id="poll-answers">
                                        <li class="odd">
                                            <input type="radio" name="vote" class="radio poll_vote" id="vote_5" value="5">
                                            <span class="label"><label for="vote_5">Layered Navigation</label></span> </li>
                                        <li class="even">
                                            <input type="radio" name="vote" class="radio poll_vote" id="vote_6" value="6">
                                            <span class="label"><label for="vote_6">Price Rules</label></span>
                                        </li>
                                        <li class="odd">
                                            <input type="radio" name="vote" class="radio poll_vote" id="vote_7" value="7">
                                            <span class="label"><label for="vote_7">Category Management</label></span>
                                        </li>
                                        <li class="last even">
                                            <input type="radio" name="vote" class="radio poll_vote" id="vote_8" value="8">
                                            <span class="label"><label for="vote_8">Compare Products</label></span>
                                        </li>
                                    </ul>
                                    <div class="actions">
                                        <button type="submit" title="Vote" class="button button-vote"><span>Vote</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="block block-tags">
                            <div class="block-title"> Popular Tags</div>
                            <div class="block-content">
                                <ul class="tags-list">
                                    <li><a href="#" style="font-size:98.3333333333%;">Camera</a></li>
                                    <li><a href="#" style="font-size:86.6666666667%;">Hohoho</a></li>
                                    <li><a href="#" style="font-size:145%;">SEXY</a></li>
                                    <li><a href="#" style="font-size:75%;">Tag</a></li>
                                    <li><a href="#" style="font-size:110%;">Test</a></li>
                                    <li><a href="#" style="font-size:86.6666666667%;">bones</a></li>
                                    <li><a href="#" style="font-size:110%;">cool</a></li>
                                    <li><a href="#" style="font-size:86.6666666667%;">cool t-shirt</a></li>
                                    <li><a href="#" style="font-size:86.6666666667%;">crap</a></li>
                                    <li><a href="#" style="font-size:86.6666666667%;">good</a></li>
                                    <li><a href="#" style="font-size:86.6666666667%;">green</a></li>
                                    <li><a href="#" style="font-size:86.6666666667%;">hip</a></li>
                                    <li><a href="#" style="font-size:75%;">laptop</a></li>
                                    <li><a href="#" style="font-size:75%;">mobile</a></li>
                                    <li><a href="#" style="font-size:75%;">nice</a></li>
                                    <li><a href="#" style="font-size:86.6666666667%;">phone</a></li>
                                    <li><a href="#" style="font-size:98.3333333333%;">red</a></li>
                                    <li><a href="#" style="font-size:86.6666666667%;">tight</a></li>
                                    <li><a href="#" style="font-size:75%;">trendy</a></li>
                                    <li><a href="#" style="font-size:86.6666666667%;">young</a></li>
                                </ul>
                                <div class="actions"> <a href="#" class="view-all">View All Tags</a> </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Container End -->
@endsection

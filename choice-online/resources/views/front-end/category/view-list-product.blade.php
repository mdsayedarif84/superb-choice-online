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
                                    @foreach($categoryProducts as $categoryProduct)
                                    <div class="item"> <a href="#">
                                        <img alt="" src="{{asset($categoryProduct->product_image)}}"></a>
                                        <div class="cat-img-title cat-bg cat-box">
                                            <div class="small-tag"><span>{{ $categoryProduct->product_name }}</span> {{$categoryProduct->product_price}}</div>
                                            <h2 class="cat-heading">bdb</h2>
                                            <p>very nice </p>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- End Item -->
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
                                <div class="view-mode">
                                    <!-- Grid -->
                                    <a href="{{route('view-grid')}}">
                                        <span title="Grid" class="button button-active button-grid">&nbsp;</span></a>
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
                    {{--      view-list-product--}}
                        <div class="category-products">
                            <ol class="products-list" id="products-list">
                                @foreach($categoryProducts as $categoryProduct)
                                    <li class="item first">
                                        <div class="product-image"> <a href="{!! route('product-details',['id'=>$categoryProduct->id,'name'=>$categoryProduct->product_name]) !!}" title="HTC Rhyme Sense">
                                            <img class="small-image" src="{!! asset($categoryProduct->product_image) !!}" alt="HTC Rhyme Sense"> </a> </div>
                                        <div class="product-shop">
                                            <h2 class="product-name"><a href="#/htc-rhyme-sense.html" title="HTC Rhyme Sense">{{$categoryProduct->product_name }}</a></h2>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div style="width:50%" class="rating"></div>
                                                </div>
                                                <p class="rating-links"> <a href="#/review/product/list/id/167/category/35/">1 Review(s)</a> <span class="separator">|</span> <a href="#review-form">Add Your Review</a> </p>
                                            </div>
                                            <div class="desc std">
                                                <p>{{$categoryProduct->short_description }}</p>
                                            </div>
                                            <div class="price-box">
                                                <p class="special-price"> <span class="price-label"></span> 
                                                <span class="price"> {{$categoryProduct->product_price }} </span> </p> <p class="old-price">
                                                    <span class="price-label"></span> <span class="price"> $442.99 </span> </p>
                                            </div>
                                            <div class="add-to-box">
                                                <div class="actions">
                                                    <a href="{{ route('product-details',['id'=>$categoryProduct->id,'name'=>$categoryProduct->product_name]) }}" class="button btn-cart ajx-cart" title="Add to Cart" type="button">
                                                        <span>Add to Cart</span></a>
                                                    <span class="add-to-links">
                                                        <a title="Add to Wishlist" class="button link-wishlist" href="#">
                                                            <span>Add to Wishlist</span></a> <a title="Add to Compare" class="button link-compare" href="#">
                                                    <span>Add to Compare</span></a> </span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach                 
                            </ol>
                        </div>
                    {{-- end view-list-product--}}
                    </article>
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
                        
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <div class="our-features-box">
        <div class="container">
            <ul>
                <li>
                    <div class="feature-box red_bg"> <span class="icon-globe-alt"></span>
                        <div class="content">
                            <h3>FREE SHIPPING WORLDWIDE</h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="feature-box yellow_bg"> <span class="icon-support"></span>
                        <div class="content">
                        <h3>24/7 CUSTOMER SUPPORT</h3>
                        </div>
                    </div>
                </li>
                <li class="last">
                    <div class="feature-box brown_bg"> <span class="icon-share-alt"></span>
                        <div class="content">
                        <h3>RETURNS AND EXCHANGES</h3>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- Main Container End -->
@endsection

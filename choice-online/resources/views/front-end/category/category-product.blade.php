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
                            <li><a href="{!! route('/') !!}"></a></li>

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
                                            <div class="item"> <a href="#"><img class="col-sm-12" style="height: 400px" alt="" src="{!! asset($categoryProduct->product_image) !!}"></a>
                                                <div class="cat-img-title cat-bg cat-box">
                                                    <div class="small-tag"><span>Hot Sale</span> TK. {!!  $categoryProduct->product_price !!}</div>
                                                    <h2 class="cat-heading">{!! $categoryProduct->product_name !!}</h2>
                                                    <p>{!! $categoryProduct->short_description !!} </p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <article class="col-main">
                            <div class="page-title">
                                <h1>Women</h1>
                            </div>
                            <div class="toolbar">
                                <div class="sorter">
                                    <!-- list -->
                                    <div class="view-mode"> <span title="Grid" class="button button-active button-grid">&nbsp;</span>
                                        <a href="{!! route('view-list-product') !!}" title="List" class="button-list">&nbsp;</a>
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
                            <div class="category-products">
                                <ul class="products-grid">
                                    @foreach( $categoryProducts as $categoryProduct)
                                        <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info"><a href="{!! route('product-details',['id'=>$categoryProduct->id,'name'=>$categoryProduct->product_name]) !!}" title="Retis lapen casen" class="product-image">
                                                            <img src="{!! asset($categoryProduct->product_image) !!}" alt="Retis lapen casen"></a>
                                                        <div class="new-label new-top-left">New</div>
                                                        <div class="actions">
                                                            <div class="quick-view-btn">
                                                                <a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                                                            <div class="link-wishlist">
                                                                <a href="{!! route('product-details',['id'=>$categoryProduct->id,'name'=>$categoryProduct->product_name]) !!}" data-toggle="tooltip" data-placement="right" title="" data-original-title="product details"><span> Details</span></a></div>
                                                            <div class="link-compare">
                                                                <a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                                                            <div class="add_cart">
                                                                <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                                                            </div>
                                                        </div>
                                                        <div class="rating">
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:80%"></div>
                                                                </div>
                                                                <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title"><a href="#" title="Retis lapen casen">{!! $categoryProduct->product_name !!}</a> </div>
                                                        <div class="item-content">
                                                            <div class="item-price">
                                                                <div class="price-box"><span class="regular-price"><span class="price">{!! $categoryProduct->product_price !!}</span> </span> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </article>
                    </div>
                        {{--                    sidemenu--}}
                    <div class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
                        <aside class="col-left sidebar">
                            <div class="side-nav-categories">
                                <div class="block-title"> Categories </div>
                                <!-- BEGIN BOX-CATEGORY -->
                                <div class="box-content box-category">
                                    <ul>
                                        <li> <a class="active" href="#/women.html">Category</a> <span class="subDropdown minus"></span>
                                            <ul class="level0_415" style="display:block">
                                                @foreach( $categories as $category)
                                                    <li>
                                                        <a href="{!! route('category-product',['id'=>$category->id,'name'=>$category->category_name]) !!}"> {!! $category->category_name !!} </a> <span class="subDropdown plus"></span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li> <a href="#/digital.html">Furniture</a> </li>
                                    </ul>
                                </div>
                                <!--box-content box-category-->
                            </div>
                            <div class="block block-layered-nav">
                                <div class="block-title">Brands</div>
                                <div class="block-content">
                                    <dl id="narrow-by-list">
                                        <dt class="even">Brand</dt>
                                        <dd class="even">
                                            <ol>
                                                @foreach($brands as $brand)
                                                    <li> <a href="{{route('brand-product',['id'=>$brand->id,'name'=>$brand->brand_name])}}">{{$brand->brand_name}} </li>
                                                @endforeach
                                                
                                            </ol>
                                        </dd>
                                    </dl>
                                </div>
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

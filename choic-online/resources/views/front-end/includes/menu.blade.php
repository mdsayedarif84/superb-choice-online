<!-- Navbar -->
<nav class="bg-info" style="height: 140px; ">
    <div class="container">
        <!-- Header Logo -->
        <div class="logo"><a title="Datson" href=""><img alt="Datson" src="{!! asset('/') !!}/front-end/images/logo.png"></a></div>
        <!-- End Header Logo -->

        <div class="mm-toggle-wrap">
            <div class="mm-toggle"><i class="fa fa-reorder"></i><span class="mm-label">Menu</span> </div>
        </div>

        <ul class="nav hidden-xs menu-item menu-item-left">
            <li class="level0 parent drop-menu active"><a href="{!! route('/') !!}"><span>Home</span></a>

            </li>

            <li class="mega-menu"><a href="" class="level-top"><span>Product</span></a>
                <div style="left: 0px; display: none;" class="level0-wrapper dropdown-6col">
                    <div class="container">
                        <div class="level0-wrapper2">
                            <div class="col-1">
                                <div class="nav-block nav-block-center">
                                    <ul class="level0">
                                        <li class="level1 nav-6-1 parent item"><a href="#.html" class=""><span>Categories</span></a>
                                            <ul class="level1">
                                                @foreach( $categories as $category)
                                                    <li class="level2 nav-6-1-1"><a href="{!! route('category-product',['id'=>$category->id,'name'=>$category->category_name]) !!}" class="nav-link">
                                                            <span>{!! $category->category_name !!}</span></a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--nav-block nav-block-center-->
                            <div class="col-2">
                                <div class="menu_image"><a href="#" title=""><img src="{!! asset('/') !!}/front-end/images/menu_image.png" alt="menu_image"></a></div>
                            </div>
                        </div>
                        <!--level0-wrapper2--> </div>
                </div>
            </li>
        </ul>
        <ul class="nav hidden-xs menu-item menu-item-right">
            <li class="mega-menu"><a class="level-top" href=""><span>Login</span></a>
            </li>
            <li class="level0 nav-8 level-top"><a href="" class="level-top"><span>Register</span></a></li>
        </ul>
    </div>
</nav>
<!-- end nav -->

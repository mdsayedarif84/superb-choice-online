
<footer>
    <div class="footer-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12 col-lg-8">
                    <div class="footer-column pull-left">
                        <h4>CUSTOMMER SERVICE</h4>
                        <ul class="links">
                            <li class="first"><a href="#" title="Contact us">My Account</a></li>
                            <li><a href="#" title="About us">Order History</a></li>
                            <li><a href="#" title="faq">FAQ</a></li>
                            <li><a href="#" title="Popular Searches">Specials</a></li>
                        </ul>
                    </div>
                    <div class="footer-column pull-left">
                        <h4>Corporation</h4>
                        <ul class="links">
                            <li class="first"><a title="Your Account" href="#">About us</a></li>
                            <li><a title="Information" href="#">Customer Service</a></li>
                            <li><a title="Addresses" href="#">Company</a></li>
                            <li><a title="Addresses" href="#">Investor Relations</a></li>
                            <li class="last"><a title="Orders History" href="#">Advanced Search</a></li>
                        </ul>
                    </div>
                    <div class="footer-column pull-left">
                        <h4>Brand</h4>
                        <ul class="links">
                            @foreach( $brands as $brand)
                                <li class="first">
                                    <a href="{{ route('brand-product',['id'=>$brand->id,'name'=>$brand->brand_name]) }}" title="About us">{!! $brand->brand_name !!}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <div class="footer-column-last">
                        <div class="newsletter-wrap">
                            <h4>Sign up for emails</h4>
                            <form id="newsletter-validate-detail" method="post" action="#">
                                <div id="container_form_news">
                                    <div id="container_form_news2">
                                        <input type="text" class="input-text required-entry validate-email" value="Enter your email address" onFocus=" this.value='' " title="Sign up for our newsletter" id="newsletter" name="email">
                                        <button class="button subscribe" title="Subscribe" type="submit"><span>Subscribe</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <br>
                        <div class="social">
                            <h4>Follow Us</h4>
                            <ul class="link">
                                <li class="fb pull-left"><a href="#"></a></li>
                                <li class="tw pull-left"><a href="#"></a></li>
                                <li class="googleplus pull-left"><a href="#"></a></li>
                                <li class="rss pull-left"><a href="#"></a></li>
                                <li class="pintrest pull-left"><a href="#"></a></li>
                                <li class="linkedin pull-left"><a href="#"></a></li>
                                <li class="youtube pull-left"><a href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-sm-12 col-xs-12 footer-logo"><img alt="Datson" src="{!! asset('/') !!}/front-end/images/logo.png"></div>
            <address>
                <i class="fa fa-map-marker"></i>ThemesGround, 789 Main rd, Anytown, CA 12345  USA <i class="fa fa-mobile"></i><span> +(888) 123-4567</span> <i class="fa fa-envelope"></i><span> superb@themesground.com</span>
            </address>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12 coppyright">&copy; 2016 ThemesGround. All Rights Reserved.</div>
            </div>
        </div>
    </div>
</footer>

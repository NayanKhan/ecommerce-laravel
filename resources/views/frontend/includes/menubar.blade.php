
        <!-- Header Bottom Start -->
        <div class="header-bottom">
            <div class="header-sticky">
                <div class="container">
                    <div class="row align-items-center">

                        <!-- Header Logo Start -->
                        <div class="col-xl-2 col-6">
                            <div class="header-logo">
                                <a href="{{route ('home')}}"><img src="{{asset('frontend/images/logo/logo.png')}}" alt="Site Logo" /></a>
                            </div>
                        </div>
                        <!-- Header Logo End -->

                        <!-- Header Menu Start -->
                        <div class="col-xl-8 d-none d-xl-block">
                            <div class="main-menu position-relative">
                                <ul>
                                    <li><a href="{{route ('home')}}"> <span>Home</span></a></li>
                                    <li><a href="{{route ('about')}}"> <span>About</span></a></li>
                                    
                                    <li class="has-children position-static">
                                        <a href="{{route ('product.all')}}"><span>Shop</span> <i class="fa fa-angle-down"></i></a>
                                        <ul class="mega-menu row-cols-4">
                                            @foreach (App\Models\Backend\Category::orderBy('id', 'ASC')->where('parent_id', 0) ->get(); as $category)
                                            <li class="col">
                                                <h4 class="mega-menu-title"><a href="#">{{$category->name}}</a></h4>
                                                <ul class="mb-n2">
                                                    @foreach (App\Models\Backend\Category::orderBy('name', 'ASC')->where('parent_id', $category->id) ->get(); as $childCat)
                                                    <li><a href="{{route ('product.show', $childCat->slug)}}">{{$childCat->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            @endforeach
                                           
                                        </ul>
                                    </li>
                                    <li><a href="{{route ('blog')}}"> <span>Blog</span></a></li>
                                    <li><a href="{{route ('contact')}}"> <span>Contact</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Header Menu End -->

                        <!-- Header Action Start -->
                        <div class="col-xl-2 col-6">
                            <div class="header-actions">

                                <!-- Search Header Action Button Start -->
                                <a href="javascript:void(0)" class="header-action-btn header-action-btn-search"><i class="pe-7s-search"></i></a>
                                <!-- Search Header Action Button End -->

                                <!-- User Account Header Action Button Start -->
                                <a href="login-register.html" class="header-action-btn d-none d-md-block"><i class="pe-7s-user"></i></a>
                                <!-- User Account Header Action Button End -->

                                <!-- Wishlist Header Action Button Start -->
                                <a href="wishlist.html" class="header-action-btn header-action-btn-wishlist d-none d-md-block">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <!-- Wishlist Header Action Button End -->

                                <!-- Shopping Cart Header Action Button Start -->
                                <a href="javascript:void(0)" class="header-action-btn header-action-btn-cart">
                                    <i class="pe-7s-shopbag"></i>
                                    <span class="header-action-num">3</span>
                                </a>
                                <!-- Shopping Cart Header Action Button End -->

                                <!-- Mobile Menu Hambarger Action Button Start -->
                                <a href="javascript:void(0)" class="header-action-btn header-action-btn-menu d-xl-none d-lg-block">
                                    <i class="fa fa-bars"></i>
                                </a>
                                <!-- Mobile Menu Hambarger Action Button End -->

                            </div>
                        </div>
                        <!-- Header Action End -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Header Bottom End -->

        <!-- Mobile Menu Start -->
        <div class="mobile-menu-wrapper">
            <div class="offcanvas-overlay"></div>

            <!-- Mobile Menu Inner Start -->
            <div class="mobile-menu-inner">

                <!-- Button Close Start -->
                <div class="offcanvas-btn-close">
                    <i class="pe-7s-close"></i>
                </div>
                <!-- Button Close End -->

                <!-- Mobile Menu Start -->
                <div class="mobile-navigation">
                    <nav>
                        <ul class="mobile-menu">
                            <li class="has-children">
                                <a href="#">Home <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Home One</a></li>
                                    <li><a href="index-2.html">Home Two</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Shop <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="shop-grid.html">Shop Grid</a></li>
                                    <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                    <li><a href="shop-list-fullwidth.html">Shop List Fullwidth</a></li>
                                    <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                    <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="compare.html">Compare</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Product <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="single-product.html">Single Product</a></li>
                                    <li><a href="single-product-sale.html">Single Product Sale</a></li>
                                    <li><a href="single-product-group.html">Single Product Group</a></li>
                                    <li><a href="single-product-normal.html">Single Product Normal</a></li>
                                    <li><a href="single-product-affiliate.html">Single Product Affiliate</a></li>
                                    <li><a href="single-product-slider.html">Single Product Slider</a></li>
                                    <li><a href="single-product-gallery-left.html">Gallery Left</a></li>
                                    <li><a href="single-product-gallery-right.html">Gallery Right</a></li>
                                    <li><a href="single-product-tab-style-left.html">Tab Style Left</a></li>
                                    <li><a href="single-product-tab-style-right.html">Tab Style Right</a></li>
                                    <li><a href="single-product-sticky-left.html">Sticky Left</a></li>
                                    <li><a href="single-product-sticky-right.html">Sticky Right</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="404-error.html">Error 404</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="login-register.html">Loging | Register</a></li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Blog <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul class="dropdown">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                    <li><a href="blog-details-sidebar.html">Blog Details Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Mobile Menu End -->

                <!-- Language, Currency & Link Start -->
                <div class="offcanvas-lag-curr mb-6">
                    <h2 class="title">Languages</h2>
                    <div class="header-top-lan-curr-link">
                        <div class="header-top-lan dropdown">
                            <button class="dropdown-toggle" data-bs-toggle="dropdown">English <i class="fa fa-angle-down"></i></button>
                            <ul class="dropdown-menu dropdown-menu-right animate slideIndropdown">
                                <li><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">Japanese</a></li>
                                <li><a class="dropdown-item" href="#">Arabic</a></li>
                                <li><a class="dropdown-item" href="#">Romanian</a></li>
                            </ul>
                        </div>
                        <div class="header-top-curr dropdown">
                            <button class="dropdown-toggle" data-bs-toggle="dropdown">USD <i class="fa fa-angle-down"></i></button>
                            <ul class="dropdown-menu dropdown-menu-right animate slideIndropdown">
                                <li><a class="dropdown-item" href="#">USD</a></li>
                                <li><a class="dropdown-item" href="#">Pound</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Language, Currency & Link End -->

                <!-- Contact Links/Social Links Start -->
                <div class="mt-auto">

                    <!-- Contact Links Start -->
                    <ul class="contact-links">
                        <li><i class="fa fa-phone"></i><a href="#"> +012 3456 789 123</a></li>
                        <li><i class="fa fa-envelope-o"></i><a href="#"> info@example.com</a></li>
                        <li><i class="fa fa-clock-o"></i> <span>Monday - Sunday 9.00 - 18.00</span> </li>
                    </ul>
                    <!-- Contact Links End -->

                    <!-- Social Widget Start -->
                    <div class="widget-social">
                        <a title="Facebook" href="#"><i class="fa fa-facebook-f"></i></a>
                        <a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                        <a title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                        <a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                        <a title="Vimeo" href="#"><i class="fa fa-vimeo"></i></a>
                    </div>
                    <!-- Social Widget Ende -->
                </div>
                <!-- Contact Links/Social Links End -->
            </div>
            <!-- Mobile Menu Inner End -->
        </div>
        <!-- Mobile Menu End -->

        <!-- Offcanvas Search Start -->
        <div class="offcanvas-search">
            <div class="offcanvas-search-inner">

                <!-- Button Close Start -->
                <div class="offcanvas-btn-close">
                    <i class="pe-7s-close"></i>
                </div>
                <!-- Button Close End -->

                <!-- Offcanvas Search Form Start -->
                <form class="offcanvas-search-form" action="#">
                    <input type="text" placeholder="Search Here..." class="offcanvas-search-input">
                </form>
                <!-- Offcanvas Search Form End -->

            </div>
        </div>
        <!-- Offcanvas Search End -->

        <!-- Cart Offcanvas Start -->
        <div class="cart-offcanvas-wrapper">
            <div class="offcanvas-overlay"></div>

            <!-- Cart Offcanvas Inner Start -->
            <div class="cart-offcanvas-inner">

                <!-- Button Close Start -->
                <div class="offcanvas-btn-close">
                    <i class="pe-7s-close"></i>
                </div>
                <!-- Button Close End -->

                <!-- Offcanvas Cart Content Start -->
                <div class="offcanvas-cart-content">
                    <!-- Offcanvas Cart Title Start -->
                    <h2 class="offcanvas-cart-title mb-10">Shopping Cart</h2>
                    <!-- Offcanvas Cart Title End -->

                    <!-- Cart Product/Price Start -->
                    <div class="cart-product-wrapper mb-6">

                        <!-- Single Cart Product Start -->
                        <div class="single-cart-product">
                            <div class="cart-product-thumb">
                                <a href="single-product.html"><img src="assets/images/products/small-product/1.jpg" alt="Cart Product"></a>
                            </div>
                            <div class="cart-product-content">
                                <h3 class="title"><a href="single-product.html">Brother Hoddies in Grey</a></h3>
                                <span class="price">
								<span class="new">$38.50</span>
                                <span class="old">$40.00</span>
                                </span>
                            </div>
                        </div>
                        <!-- Single Cart Product End -->

                        <!-- Product Remove Start -->
                        <div class="cart-product-remove">
                            <a href="#"><i class="fa fa-trash"></i></a>
                        </div>
                        <!-- Product Remove End -->

                    </div>
                    <!-- Cart Product/Price End -->

                    <!-- Cart Product/Price Start -->
                    <div class="cart-product-wrapper mb-6">

                        <!-- Single Cart Product Start -->
                        <div class="single-cart-product">
                            <div class="cart-product-thumb">
                                <a href="single-product.html"><img src="assets/images/products/small-product/2.jpg" alt="Cart Product"></a>
                            </div>
                            <div class="cart-product-content">
                                <h3 class="title"><a href="single-product.html">Basic Jogging Shorts</a></h3>
                                <span class="price">
								<span class="new">$14.50</span>
                                <span class="old">$18.00</span>
                                </span>
                            </div>
                        </div>
                        <!-- Single Cart Product End -->

                        <!-- Product Remove Start -->
                        <div class="cart-product-remove">
                            <a href="#"><i class="fa fa-trash"></i></a>
                        </div>
                        <!-- Product Remove End -->

                    </div>
                    <!-- Cart Product/Price End -->

                    <!-- Cart Product/Price Start -->
                    <div class="cart-product-wrapper mb-6">

                        <!-- Single Cart Product Start -->
                        <div class="single-cart-product">
                            <div class="cart-product-thumb">
                                <a href="single-product.html"><img src="assets/images/products/small-product/3.jpg" alt="Cart Product"></a>
                            </div>
                            <div class="cart-product-content">
                                <h3 class="title"><a href="single-product.html">Enjoy The Rest T-Shirt</a></h3>
                                <span class="price">
								<span class="new">$20.00</span>
                                <span class="old">$21.00</span>
                                </span>
                            </div>
                        </div>
                        <!-- Single Cart Product End -->

                        <!-- Product Remove Start -->
                        <div class="cart-product-remove">
                            <a href="#"><i class="fa fa-trash"></i></a>
                        </div>
                        <!-- Product Remove End -->

                    </div>
                    <!-- Cart Product/Price End -->

                    <!-- Cart Product Total Start -->
                    <div class="cart-product-total">
                        <span class="value">Subtotal</span>
                        <span class="price">220$</span>
                    </div>
                    <!-- Cart Product Total End -->

                    <!-- Cart Product Button Start -->
                    <div class="cart-product-btn mt-4">
                        <a href="cart.html" class="btn btn-dark btn-hover-primary rounded-0 w-100">View cart</a>
                        <a href="checkout.html" class="btn btn-dark btn-hover-primary rounded-0 w-100 mt-4">Checkout</a>
                    </div>
                    <!-- Cart Product Button End -->

                </div>
                <!-- Offcanvas Cart Content End -->

            </div>
            <!-- Cart Offcanvas Inner End -->
        </div>
        <!-- Cart Offcanvas End -->

    </div>
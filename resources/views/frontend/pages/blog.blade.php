

@extends('frontend.layout.template')   

@section('body')

    @include('frontend.includes.breadcumb') 


    <!-- Blog Section Start -->
    <div class="section section-margin">
        <div class="container">

            <div class="row">

                <!-- Blog Sidebar Start -->
                <div class="col-lg-4 col-12 order-2 order-lg-1">
                    <!-- Sidebar Widget Start -->
                    <aside class="sidebar_widget mt-10 mt-lg-0">
                        <div class="widget_inner aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                            <div class="widget-list mb-10">
                                <h3 class="widget-title mb-4">Search</h3>
                                <div class="search-box">
                                    <input type="text" class="form-control" placeholder="Search Our Store" aria-label="Search Our Store">
                                    <button class="btn btn-dark btn-hover-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="widget-list mb-10">
                                <h3 class="widget-title mb-4">Menu Categories</h3>
                                <!-- Widget Menu Start -->
                                <nav>
                                    <ul class="category-menu mb-n3">
                                        <li class="menu-item-has-children pb-4">
                                            <a href="#">Women <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown" style="display: none;">
                                                <li><a href="#">Natural Cosmetic</a></li>
                                                <li><a href="#">Woven Fashion Tops</a></li>
                                                <li><a href="#">Knitted Fabrics</a></li>
                                                <li><a href="#">Smart Watch</a></li>
                                                <li><a href="#">Handmade Bag</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children pb-4">
                                            <a href="#">Men <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown" style="display: none;">
                                                <li><a href="#">Sunglasses</a></li>
                                                <li><a href="#">Belt and Wallet</a></li>
                                                <li><a href="#">Lather Shoe</a></li>
                                                <li><a href="#">Corporate Pant and Shirt</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children pb-4">
                                            <a href="#">Kids <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown" style="display: none;">
                                                <li><a href="#">Kids Fashion</a></li>
                                                <li><a href="#">Kids Toy</a></li>
                                                <li><a href="#">Playground</a></li>
                                                <li><a href="#">Video Games</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children pb-4">
                                            <a href="#">Fashion <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown" style="display: none;">
                                                <li><a href="#">World Famous Fashion</a></li>
                                                <li><a href="#">Champion Beauty</a></li>
                                                <li><a href="#">Fashion of Nation</a></li>
                                                <li><a href="#">Classic Looks</a></li>
                                                <li><a href="#">Eye Fashion</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children pb-4">
                                            <a href="#">Others <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown" style="display: none;">
                                                <li><a href="#">Winter Collection</a></li>
                                                <li><a href="#">Sun Protection</a></li>
                                                <li><a href="#">Water Resistant</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- Widget Menu End -->
                            </div>
                            <div class="widget-list mb-10">
                                <h3 class="widget-title">Categories</h3>
                                <div class="sidebar-body">
                                    <ul class="sidebar-list">
                                        <li><a href="#">All Product</a></li>
                                        <li><a href="#">Best Seller (5)</a></li>
                                        <li><a href="#">Featured (4)</a></li>
                                        <li><a href="#">New Products (6)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget-list mb-10">
                                <h3 class="widget-title">Color</h3>
                                <div class="sidebar-body">
                                    <ul class="checkbox-container categories-list">
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck12">
                                                <label class="custom-control-label" for="customCheck12">black (20)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck13">
                                                <label class="custom-control-label" for="customCheck13">red (6)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck14">
                                                <label class="custom-control-label" for="customCheck14">blue (8)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck11">
                                                <label class="custom-control-label" for="customCheck11">green (5)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck15">
                                                <label class="custom-control-label" for="customCheck15">pink (4)</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget-list mb-10">
                                <h3 class="widget-title mb-4">Tags</h3>
                                <div class="sidebar-body">
                                    <ul class="tags mb-n2">
                                        <li><a href="#">Men</a></li>
                                        <li><a href="#">Women</a></li>
                                        <li><a href="#">Fashion</a></li>
                                        <li><a href="#">Watch</a></li>
                                        <li><a href="#">Handmade</a></li>
                                        <li><a href="#">Lather</a></li>
                                        <li><a href="#">Fabrics</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget-list">
                                <h3 class="widget-title mb-4">Recent Products</h3>
                                <div class="sidebar-body product-list-wrapper mb-n6">
                                    <!-- Single Product List Start -->
                                    <div class="single-product-list product-hover mb-6">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="first-image" src="assets/images/products/small-product/1.jpg" alt="Product">
                                                <img class="second-image" src="assets/images/products/small-product/5.jpg" alt="Product">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Brother Hoddies in Grey</a></h5>
                                            <span class="price">
													<span class="new">$38.00</span>
                                            <span class="old">$42.50</span>
                                            </span>
                                            <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 100%"></span>
                                            </span>
                                            <span class="rating-num">(4)</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list product-hover mb-6">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="first-image" src="assets/images/products/small-product/2.jpg" alt="Product">
                                                <img class="second-image" src="assets/images/products/small-product/3.jpg" alt="Product">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Basic Jogging Shorts</a></h5>
                                            <span class="price">
													<span class="new">$21.00</span>
                                            <span class="old">$22.50</span>
                                            </span>
                                            <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 60%"></span>
                                            </span>
                                            <span class="rating-num">(4)</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Product List End -->

                                    <!-- Single Product List Start -->
                                    <div class="single-product-list product-hover mb-6">
                                        <div class="thumb">
                                            <a href="single-product.html" class="image">
                                                <img class="first-image" src="assets/images/products/small-product/4.jpg" alt="Product">
                                                <img class="second-image" src="assets/images/products/small-product/10.jpg" alt="Product">
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="single-product.html">Simple Woven Fabrics</a></h5>
                                            <span class="price">
													<span class="new">$86.00</span>
                                            <span class="old">$90.00</span>
                                            </span>
                                            <span class="ratings">
													<span class="rating-wrap">
														<span class="star" style="width: 80%"></span>
                                            </span>
                                            <span class="rating-num">(1)</span>
                                            </span>
                                        </div>
                                    </div>
                                    <!-- Single Product List End -->
                                </div>
                            </div>
                        </div>
                    </aside>
                    <!-- Sidebar Widget End -->
                </div>
                <!-- Blog Sidebar End -->

                <!-- Blog Area Start -->
                <div class="col-lg-8 col-12 order-1 order-lg-2">

                    <div class="row mb-n8">
                        <div class="col-md-6 mb-8 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                            <!-- Single Blog Start -->
                            <div class="blog-single-post-wrapper">
                                <div class="blog-thumb">
                                    <a class="blog-overlay" href="blog-details.html">
                                        <img src="assets/images/blog/blog-post/1.jpg" alt="Blog Post">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="post-meta">
                                        <span>By : <a href="#">Admin</a></span>
                                        <span>14 Jul 2021</span>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">Some Winter Collections</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempo</p>
                                    <a href="blog-details.html" class="link"><span>Read More</span></a>
                                </div>
                            </div>
                            <!-- Single Blog End -->
                        </div>
                        <div class="col-md-6 mb-8 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                            <!-- Single Blog Start -->
                            <div class="blog-single-post-wrapper">
                                <div class="blog-thumb">
                                    <a class="blog-overlay" href="blog-details.html">
                                        <img src="assets/images/blog/blog-post/2.jpg" alt="Blog Post">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="post-meta">
                                        <span>By : <a href="#">Admin</a></span>
                                        <span>20 Feb 2021</span>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">My Perty Fashion</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempo</p>
                                    <a href="blog-details.html" class="link"><span>Read More</span></a>
                                </div>
                            </div>
                            <!-- Single Blog End -->
                        </div>
                        <div class="col-md-6 mb-8 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                            <!-- Single Blog Start -->
                            <div class="blog-single-post-wrapper">
                                <div class="blog-thumb">
                                    <a class="blog-overlay" href="blog-details.html">
                                        <img src="assets/images/blog/blog-post/3.jpg" alt="Blog Post">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="post-meta">
                                        <span>By : <a href="#">Admin</a></span>
                                        <span>18 Mar 2021</span>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">Perfect Fashion House</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempo</p>
                                    <a href="blog-details.html" class="link"><span>Read More</span></a>
                                </div>
                            </div>
                            <!-- Single Blog End -->
                        </div>
                        <div class="col-md-6 mb-8 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                            <!-- Single Blog Start -->
                            <div class="blog-single-post-wrapper">
                                <div class="blog-thumb">
                                    <a class="blog-overlay" href="blog-details.html">
                                        <img src="assets/images/blog/blog-post/4.jpg" alt="Blog Post">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="post-meta">
                                        <span>By : <a href="#">Admin</a></span>
                                        <span>11 Jun 2021</span>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">Some Winter Collections</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempo</p>
                                    <a href="blog-details.html" class="link"><span>Read More</span></a>
                                </div>
                            </div>
                            <!-- Single Blog End -->
                        </div>
                        <div class="col-md-6 mb-8 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                            <!-- Single Blog Start -->
                            <div class="blog-single-post-wrapper">
                                <div class="blog-thumb">
                                    <a class="blog-overlay" href="blog-details.html">
                                        <img src="assets/images/blog/blog-post/5.jpg" alt="Blog Post">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="post-meta">
                                        <span>By : <a href="#">Admin</a></span>
                                        <span>02 Apr 2021</span>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">Flip Flops Year Round</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempo</p>
                                    <a href="blog-details.html" class="link"><span>Read More</span></a>
                                </div>
                            </div>
                            <!-- Single Blog End -->
                        </div>
                        <div class="col-md-6 mb-8 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                            <!-- Single Blog Start -->
                            <div class="blog-single-post-wrapper">
                                <div class="blog-thumb">
                                    <a class="blog-overlay" href="blog-details.html">
                                        <img src="assets/images/blog/blog-post/6.jpg" alt="Blog Post">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="post-meta">
                                        <span>By : <a href="#">Admin</a></span>
                                        <span>09 May 2021</span>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">Style For the Soul</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempo</p>
                                    <a href="blog-details.html" class="link"><span>Read More</span></a>
                                </div>
                            </div>
                            <!-- Single Blog End -->
                        </div>
                        <div class="col-md-6 mb-8 aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
                            <!-- Single Blog Start -->
                            <div class="blog-single-post-wrapper">
                                <div class="blog-thumb">
                                    <a class="blog-overlay" href="blog-details.html">
                                        <img src="assets/images/blog/blog-post/7.jpg" alt="Blog Post">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="post-meta">
                                        <span>By : <a href="#">Admin</a></span>
                                        <span>13 Aug 2021</span>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">Trends Only Here</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempo</p>
                                    <a href="blog-details.html" class="link"><span>Read More</span></a>
                                </div>
                            </div>
                            <!-- Single Blog End -->
                        </div>
                        <div class="col-md-6 mb-8 aos-init aos-animate" data-aos="fade-up" data-aos-delay="500">
                            <!-- Single Blog Start -->
                            <div class="blog-single-post-wrapper">
                                <div class="blog-thumb">
                                    <a class="blog-overlay" href="blog-details.html">
                                        <img src="assets/images/blog/blog-post/8.jpg" alt="Blog Post">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="post-meta">
                                        <span>By : <a href="#">Admin</a></span>
                                        <span>15 Dec 2021</span>
                                    </div>
                                    <h3 class="title"><a href="blog-details.html">Small Scale Style</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempo</p>
                                    <a href="blog-details.html" class="link"><span>Read More</span></a>
                                </div>
                            </div>
                            <!-- Single Blog End -->
                        </div>
                    </div>

                    <div class="row mb-2 mb-lg-0">

                        <!-- Pagination Start -->
                        <div class="col aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                            <nav class="mt-8 pt-8 border-top d-flex justify-content-center">
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">«</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">»</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Pagination End -->

                    </div>

                </div>
                <!-- Blog Area End -->

            </div>

        </div>
    </div>
    <!-- Blog Section End -->

    


    
@endsection
      

<div class="col-lg-3 col-12 col-custom">
                    <!-- Sidebar Widget Start -->
                    <aside class="sidebar_widget mt-10 mt-lg-0">
                        <div class="widget_inner" data-aos="fade-up" data-aos-delay="200">
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
                                <h3 class="widget-title mb-4">Categories</h3>
                                <!-- Widget Menu Start -->
                                <nav>
                                    <ul class="category-menu mb-n3">
                                    
                                         @foreach (App\Models\Backend\Category::orderBy('id', 'ASC')->where('parent_id', 0) ->get(); as $category)
                                         <li class="menu-item-has-children pb-4">
                                         <a href="{{route ('child.cat', $category->id)}}">{{$category->name}} <i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown">
                                                    @foreach (App\Models\Backend\Category::orderBy('name', 'ASC')->where('parent_id', $category->id) ->get(); as $childCat)
                                                    <li><a href="{{route ('child.cat', $childCat->id)}}">{{$childCat->name}}</a></li>
                                                
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endforeach
                                    </ul>
                                </nav>
                                <!-- Widget Menu End -->
                            </div>
                            <div class="widget-list mb-10">
                                <h3 class="widget-title mb-5">Price Filter</h3>
                                <!-- Widget Menu Start -->
                                <form action="#">
                                    <div id="slider-range"></div>
                                    <button class="slider-range-submit" type="submit">Filter</button>
                                    <input class="slider-range-amount" type="text" name="text" id="amount" />
                                </form>
                                <!-- Widget Menu End -->
                            </div>
                            <div class="widget-list mb-10">
                                <h3 class="widget-title">Brand</h3>
                                <div class="sidebar-body">
                                    <ul class="sidebar-list">
                                    @foreach (App\Models\Backend\Brand::orderBy('id', 'ASC') ->get(); as $brand)
                                        <li><a href="#">{{$brand->name}}</a></li>
                                    @endforeach
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
                                    @foreach ($Products as $Product)
                                        <li><a href="#">{{$Product->tags}}</a></li>
                                    @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="widget-list">
                                <h3 class="widget-title mb-4">Recent Products</h3>
                                <div class="sidebar-body product-list-wrapper mb-n6">

                                    @foreach ($Products as $Product)
                                    <!-- Single Product List Start -->
                                    <div class="single-product-list product-hover mb-6">
                                        <div class="thumb">
                                            <a href="{{route ('product.show', $Product->slug)}}" class="image">
                                                @php $j=1; @endphp
                                                @foreach ( $Product->images as $img)
                                                    @if ($j > 0)
                                                    <img src="{{asset('backend/img/products/'. $img->image)}}" alt="Product" />
                                                    @endif
                                                    @php $j--; @endphp
                                                @endforeach
                                            </a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="{{route ('product.show', $Product->slug)}}">{{ $Product->title}}</a></h5>
                                            <span class="price">
                                                @if (!is_null($Product->offerprice))
                                                    <span class="new">${{$Product->offerprice}}</span>
                                                    <span class="old">${{$Product->price}}</span>
                                                @else
                                                <span class="new">${{$Product->price}}</span>
                                                @endif
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
                                    @endforeach
                                 

                                    
                                </div>
                            </div>
                        </div>
                    </aside>
                    <!-- Sidebar Widget End -->
                </div>
 @extends('frontend.master')
 @section('main')


 @include('frontend.body.category_header')

 <!--slider area start-->

 @include('frontend.slider')
 
    <!--slider area end-->
    
       <!--home product area start-->
       <section class="home_product_area product_color_seven mb-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_tab_button tab_button_seven">
                        <ul class="nav" role="tablist">
                            <!-- <li>
                                <a class="active" data-bs-toggle="tab" href="#Products7" role="tab" aria-controls="Products7" aria-selected="true"> 
                                    New Products
                                </a>
                            </li> -->
                           
                            <li>
                                <a data-bs-toggle="tab" href="#featured7" role="tab" aria-controls="featured7" aria-selected="false">
                                    featured products
                                </a>
                            </li>
                        </ul>
                    </div>
                </div> 
            </div>       
            <div class="tab-content">
                <div class="tab-pane fade show active" id="Products7" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_style7 product_column4 owl-carousel">
                        @foreach($featured as $row)

                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="{{ route('product_details',['id'=>$row['id']]) }}"><img src="{{ $row['image'] }}" alt=""></a>
                                        <!-- <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div> -->
                                        
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="{{ route('product_details',['id'=>$row['id']]) }}">{{ Str::limit($row['title'], 50) }}</a></h3>
                                        </div>
                                        
                                         <div class="price_box">
                                            <span class="current_price">{{ $row['starting_prize'] }}</span>
                                            <!-- <span class="old_price">$70.00</span>    -->
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                        </div>
                    </div>
                </div>

                
                 
            </div> 
        </div>
    </section>

   <!--banner area start-->
   <div class="banner_area mt-30 mb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner mb-30">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="assets/img/bg/banner23.jpg" alt=""></a>
                        </div>
                       
                    </div>
                </div> 
                <div class="col-lg-6 col-md-6">
                    <div class="single_banner mb-30">
                        <div class="banner_thumb">
                            <a href="shop.html"><img src="assets/img/bg/banner24.jpg" alt=""></a>
                        </div>
                       
                    </div>
                </div>         
            </div>
        </div>
    </div>
    <!--banner area end-->
    <div class="home_blog_section mb-10">
       <div class="container">
           <div class="row">
               <div class="col-12">
                   <div class="section_title">
                        <h2> Categories</h2>
                    </div>
               </div>
              
           </div>
            
            
        </div>
    </div>
    <div class="tab-content">
                <div class="tab-pane fade show active" id="Products7" role="tabpanel">
                    <div class="row">
                        <div class="product_carousel product_style7 product_column4 owl-carousel">
                        @foreach($category as $row)


                            <div class="col-lg-3">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a href="/shop"><img src="{{ $row['image'] }}" alt=""></a>
                                        <!-- <div class="label_product">
                                            <span class="label_sale">sale</span>
                                        </div> -->
                                        
                                    </div>
                                    <div class="product_content">
                                        <div class="product_name">
                                            <h3><a href="/shop">{{ Str::limit($row['title'], 50) }}</a></h3>
                                        </div>
                                        
                                         
                                        
                                    </div>
                                </div>
                            </div>
                        @endforeach


                        </div>
                    </div>
                </div>

                
                 
            </div> 
     <br>
    <!--blog area start-->
    <div class="home_blog_section mb-10">
       <div class="container">
           <div class="row">
               <div class="col-12">
                   <div class="section_title">
                        <h2>latest blog</h2>
                    </div>
               </div>
               <div class="blog_carousel_seven  owl-carousel">
                    <div class="col-lg-4">
                        <div class="sidebar_blog_list">
                            <div class="sidebar_blog_thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog4.jpg" alt=""></a>
                            </div>
                            <div class="sidebar_blog_content">
                                <div class="post_meta">
                                    <p>By:  <a href="#">admin</a> - 10 August, 2021</p>
                                </div>
                                <div class="post_title">
                                    <h3><a href="blog-details.html">Blog image post</a></h3>
                                </div>
                                <div class="post_comment">
                                    <p><i class="zmdi zmdi-comment-alt-text"></i> <span>3</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar_blog_list">
                            <div class="sidebar_blog_thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog5.jpg" alt=""></a>
                            </div>
                            <div class="sidebar_blog_content">
                                <div class="post_meta">
                                    <p>By:  <a href="#">admin</a> - 10 August, 2021</p>
                                </div>
                                <div class="post_title">
                                    <h3><a href="blog-details.html">Post with Gallery</a></h3>
                                </div>
                                <div class="post_comment">
                                    <p><i class="zmdi zmdi-comment-alt-text"></i> <span>3</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="sidebar_blog_list">
                            <div class="sidebar_blog_thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/blog6.jpg" alt=""></a>
                            </div>
                            <div class="sidebar_blog_content">
                                <div class="post_meta">
                                    <p>By:  <a href="#">admin</a> - 10 August, 2021</p>
                                </div>
                                <div class="post_title">
                                    <h3><a href="blog-details.html">Post with Audio</a></h3>
                                </div>
                                <div class="post_comment">
                                    <p><i class="zmdi zmdi-comment-alt-text"></i> <span>3</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
           </div>
            
            
        </div>
    </div>
    <!--blog area end-->

@endsection
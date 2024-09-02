

@php
  $prefix = Request::route()->getPrefix();
  $route = Route::current()->getName();
 
@endphp

<header class="header_area header_seven">
        <!--header top start-->
        <div class="header_top header_top_seven">
            <div class="container">  
                <div class="row align-items-center">
                    <div class="col-lg-4">
                       <div class="welcome_text">
                           <p>Welcome to <span>Shopping Cart</span> </p>
                       </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="top_right text-right">
                            <ul>
                            <li class="top_links"><a href="#"><i class="zmdi zmdi-account"></i> My account <i class="zmdi zmdi-caret-down"></i></a>
                                    <ul class="dropdown_links">
                                    <li><a href="checkout">Checkout </a></li>
                                        <li><a href="my-account">My Account </a></li>
                                        <li><a href="login">Login/Register </a></li>
                                        <li><a href="logout">Logout </a></li>
                                        <li><a href="cart">Shopping Cart</a></li>
                                    </ul>
                                   
                                </li>

                            </ul>
                        </div> 
                    </div>
                    
                </div>
            </div>
        </div>
        <!--header top start-->
        <!--header center area start-->
        <div class="header_middle header_middle_seven">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="index.html"><img src="assets/img/logo/logo-4.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="header_middle_inner">
                            <div class="search-container">
                               <form action="#">
                                   
                                    <div class="search_box">
                                        <input placeholder="Search product..." type="text">
                                        <button type="submit"><i class="zmdi zmdi-search"></i></button> 
                                    </div>
                                </form>
                            </div>
                            <div class="mini_cart_wrapper">
                                <a href="javascript:void(0)"><i class="zmdi zmdi-shopping-basket"></i> <span>2items - $213.00</span> </a>
                                <!--mini cart-->
                                 <div class="mini_cart mini_cart_seven">
                                    <div class="cart_item">
                                       <div class="cart_img">
                                           <a href="#"><img src="assets/img/s-product/product.jpg" alt=""></a>
                                       </div>
                                        <div class="cart_info">
                                            <a href="#">Condimentum Watches</a>

                                            <span class="quantity">Qty: 1</span>
                                            <span class="price_cart">$60.00</span>

                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="cart_item">
                                       <div class="cart_img">
                                           <a href="#"><img src="assets/img/s-product/product2.jpg" alt=""></a>
                                       </div>
                                        <div class="cart_info">
                                            <a href="#">Officiis debitis</a>
                                            <span class="quantity">Qty: 1</span>
                                            <span class="price_cart">$69.00</span>
                                        </div>
                                        <div class="cart_remove">
                                            <a href="#"><i class="ion-android-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="mini_cart_table">
                                        <div class="cart_total">
                                            <span>Subtotal:</span>
                                            <span class="price">$138.00</span>
                                        </div>
                                    </div>

                                    <div class="mini_cart_footer">
                                       <div class="cart_button">
                                            <a href="cart">View cart</a>
                                            <a href="checkout">Checkout</a>
                                        </div>
                                    </div>

                                </div>
                                <!--mini cart end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header center area end-->
        
        <!--header middel start-->
        <div class="header_bottom header_bottom_seven">
            <div class="container">
                <div class="row align-items-left">
                    <div class="col-lg-3">
                       
                   </div>
                    <div class="col-lg-9">
                        <div class="main_menu menu_seven header_position"> 
                            <nav>  
                                <ul>

                                <li class="{{ ($route == '/')? 'active':'' }}"><a  href="/"><i class="zmdi zmdi-home"></i> home </a>
                                       
                                    </li>
                                    <li class="{{ ($route == 'shop')? 'active':'' }}"><a href="/shop"><i class="zmdi zmdi-shopping-basket"></i> shop </a> </li>                                   
                                                                            
                                    
                                    <li><a href="blog"><i class="zmdi zmdi-collection-music"></i> blog <i class="zmdi zmdi-caret-down"></i></a>
                                        <ul class="sub_menu pages">
                                            <li><a href="blogdetails">blog details</a></li>
                                           
                                        </ul>
                                    </li>
                                  
                                    <li><a href="testimonials"><i class="zmdi zmdi-comments"></i> Testimonials</a></li>

                                    <li><a href="about"><i class="zmdi zmdi-comments"></i> about Us</a></li>
                                    <li><a href="contact"><i class="zmdi zmdi-account-box-mail"></i>  Contact Us</a></li>
                                </ul>  
                            </nav> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header middel end-->
     
    </header>
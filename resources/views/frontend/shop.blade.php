@extends('frontend.master')

@section('main')

@include('frontend.body.header')


 <!--breadcrumbs area start-->
 <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="/">home</a></li>
                            <li>shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->

    <!--shop  area start-->
    <div class="shop_area shop_reverse mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                   <!--sidebar widget start-->
                    <aside class="sidebar_widget">
                        <div class="shop_sidebar_banner mb-50">
                            <a href="#"><img src="assets/img/bg/banner16.jpg" alt=""></a>
                        </div>
                        <div class="widget_list widget_categories" >

                        
                         
                            <h2>categories</h2>
                           
                            <ul class="list">
                   @php
      
                   $url =  url()->full();
                   $query_str = parse_url($url, PHP_URL_QUERY);                               
                    parse_str($query_str, $query_params);

        
                    $row_style="";
                    if($query_params==null){

                     $row_style='style=color:red; ';
                    }


                    @endphp 
                         
                              <li>
                                <a href="shop" {{ $row_style }} >All</a></li>



 @foreach($category as $row)

 @php

      
$url =  url()->full();
$query_str = parse_url($url, PHP_URL_QUERY);                               
parse_str($query_str, $query_params);

        
 $row_style="";
if($query_params!=null && $query_params['id']!=null && $row['id']==$query_params['id']){
    $row_style='style=color:red; ';
}


@endphp 




                                <li> 
                                            
                               
                                <a  href="{{ route('shop',['id'=>$row['id']]) }}" {{ $row_style }}  >
                                    
                                 {{ $row['title'] }} <span>{{ $row['total'] }}</span> </a>
                              
                                </li>
                                
                        @endforeach
                        
                            </ul>
                        </div>
                        
                        <div class="shop_sidebar_banner mb-50">
                            <a href="#"><img src="assets/img/bg/banner12.jpg" alt=""></a>
                        </div>
                        
                    </aside>
                    <!--sidebar widget end-->
                </div>
                <div class="col-lg-9 col-md-12">
                    <!--shop wrapper start-->
                    <!--shop toolbar start-->
                    <div class="shop_banner">
                        <img src="assets/img/bg/banner29.jpg" alt="">
                    </div>
                   


                    
                    <div class="shop_title">
                        <h1>shop</h1>
                    </div>

                    
                    <br>
                    
                    <div class="shop_toolbar_wrapper">
                        <div class="shop_toolbar_btn">


                            <button data-role="grid_4" type="button"  class=" btn-grid-4" data-bs-toggle="tooltip" title="4"></button>

                            <button data-role="grid_list" type="button"  class="btn-list" data-bs-toggle="tooltip" title="List"></button>
                        </div>
                       
                        <div class="page_amount">
                            <p>Showing 1–9 of 21 results</p>
                        </div>
                    </div>
                    <!--shop toolbar end-->

                     <div class="row no-gutters shop_wrapper">
                     @foreach($product as $row)

                        <div class="col-lg-4 col-md-4 col-12 ">

                            <div class="single_product">
                                <div class="product_thumb">
                                    <a href="{{ route('product_details',['id'=>$row['id']]) }}"><img src="{{ $row['image'] }}" alt=""></a>
                                   
                                   
                                </div>	
                                <div class="product_content grid_content">
                                    <div class="product_name">
                                        <h3><a href="{{ route('product_details',['id'=>$row['id']]) }}">{{ Str::limit($row['title'], 25) }}</a></h3>
                                    </div>
                                   
                                     <div class="price_box">
                                        <span class="current_price">₹ {{ $row['starting_prize'] }} </span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="product_content list_content">
                                    <div class="product_name">
                                        <h3><a href="product-details.html">{{ $row['title'] }}</a></h3>
                                    </div>
                                    
                                     <div class="price_box">
                                        <span class="current_price">₹ {{ $row['starting_prize'] }} </span>
                                    </div>
                                    <div class="action_links">
                                        <ul>
                                            <li class="add_to_cart"><a href="cart.html" title="add to cart"><i class="zmdi zmdi-shopping-cart-plus"></i> add to cart</a></li>
                                        </ul>
                                    </div>

                                    <!-- <div class="product_desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. Sed sit amet sem vitae urna fringilla tempus. </p>
                                    </div> -->
                                </div>
                            </div>


                        </div>
                        
                        @endforeach
    
                    </div>

@php




@endphp





               

                    <div class="shop_toolbar t_bottom">
                        <div class="pagination">
                            <ul>
                                <li class="current">1</li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#">next</a></li>
                                <li><a href="#">>></a></li>
                            </ul>
                        </div>
                    </div>


                    
                </div>
            </div>
        </div>
    </div>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    

@endsection
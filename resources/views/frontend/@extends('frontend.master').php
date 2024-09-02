@extends('frontend.master')

@section('main')

@include('frontend.body.header')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<!--breadcrumbs area start-->
<div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="/">HOME</a></li>
                            <li><a href="/shop">SHOP</a></li>
                            <li>SHOP PRODUCT</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    <div class="shop_area shop_reverse mt-50 mb-50">

                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">  
                    

                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" >
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{ $singleProduct['image'] }}" alt=""></a>    
                                            </div>
                                        </div>
                                        
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{ $singleProduct['support_image1'] }}" alt=""></a>    
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{ $singleProduct['support_image2'] }}" alt=""></a>    
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{ $singleProduct['support_image3'] }}" alt=""></a>    
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab5" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{ $singleProduct['support_image4'] }}" alt=""></a>    
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab6" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{ $singleProduct['support_image5'] }}" alt=""></a>    
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="modal_tab_button">      
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                        <li >
                                                <a class="nav-link active" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="{{ $singleProduct['image'] }}" alt=""></a>
                                            </li>
                                            <li>
                                                 <a class="nav-link" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="{{ $singleProduct['support_image1'] }}" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link button_three" data-bs-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="{{ $singleProduct['support_image2'] }}" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link" data-bs-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="{{ $singleProduct['support_image3'] }}" alt=""></a>
                                            </li>
                                            <li >
                                                <a class="nav-link active" data-bs-toggle="tab" href="#tab5" role="tab" aria-controls="tab5" aria-selected="false"><img src="{{ $singleProduct['support_image4'] }}" alt=""></a>
                                            </li>
                                            <li>
                                                 <a class="nav-link" data-bs-toggle="tab" href="#tab6" role="tab" aria-controls="tab6" aria-selected="false"><img src="{{ $singleProduct['support_image5'] }}" alt=""></a>
                                            </li>

                                        </ul>
                                    </div>    
                                </div>  
                            </div> 
                            
                            <div class="col-lg-7 col-md-7 col-sm-12">

                           
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>{{ $singleProduct['title'] }}</h2> 
                                    </div>
                                 @foreach($product_quantity as $item) 

                                    <div class="modal_price mb-10">
										<span id="price_span" class="discounted-price"> ₹ {{ $item['amount'] }}</span>

                                    </div>
                                    @endforeach


                                    <div class="modal_description mb-15">
                                        <p>{{ $singleProduct['description'] }}</p>
                                        
                                    </div> 

                            
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                           <h4>Options</h4>

                                           <select class="select_option">
                                           @foreach($product_quantity as $item) 
                                           
                                               <option selected value="1">{{ $item['quantity'] }} - ₹ {{ $item['amount'] }}</option>
                                               
                                         
                                               @endforeach
                                               
                                           </select>
                                        </div>
                                        
                                        </div> 
                                        <div class="shop-product__block shop-product__block--quantity mb-40">
										<div class="shop-product__block__title">Quantity: </div>

         @foreach($product_quantity as $item) 
										
           <td class="col-md-2" width="130px">
           <input type="hidden" class="product_id" value="{{ $item['id'] }}" >
        <div class="input-group quantity">
            <div class="input-group-prepend decrement-btn changeQuantity" style="cursor: pointer">
                <span class="input-group-text">-</span>
            </div>
            <input id="product_amt" hidden type="text" value="{{ $item['amount'] }}" >
            <input type="text" id="product_qty" class="qty-input form-control" maxlength="1" max="100" value="{{ $item['quantity'] }} ">
            <div class="input-group-append increment-btn changeQuantity" style="cursor: pointer"  >
                <span class="input-group-text">+</span>
            </div>
        </div>
        @endforeach

    </td>

										</div>
									</div>


                                    <br><br>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                
                                                <!-- <input min="0" max="100" step="1" value="1" type="number"> -->
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>   
                                    </div>
                                         
                                </div>  
                            
                            </div>    
                        </div>     
                    </div>
                    </div>
                
                
       
     <!-- modal area end-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

 <script type='text/javascript'>   

$(document).ready(function () {
   

$('.increment-btn').click(function (e) {
    e.preventDefault();
    var incre_value = $(this).parents('.quantity').find('.qty-input').val();
    var value = parseInt(incre_value, 10);
    value = isNaN(value) ? 0 : value;
    if(value<10){
        value++;
        $(this).parents('.quantity').find('.qty-input').val(value);
        var product_qty = document.getElementById("product_qty").value;
        var product_amt = document.getElementById("product_amt").value;
            console.log(product_amt);
             $("#price_span").text('₹ ' + product_amt * product_qty);
    }

});

$('.decrement-btn').click(function (e) {
    e.preventDefault();
    var decre_value = $(this).parents('.quantity').find('.qty-input').val();
    var value = parseInt(decre_value, 10);
    value = isNaN(value) ? 0 : value;
    if(value>1){
        value--;
        $(this).parents('.quantity').find('.qty-input').val(value);
        var product_qty = document.getElementById("product_qty").value;
        var product_amt = document.getElementById("product_amt").value;
            console.log(product_amt);
             $("#price_span").text('₹ ' + product_amt * product_qty);
    }
});

});



     </script>


     @endsection
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
                            <li>login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
 @if (Session::has('error'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
<strong>  {{ session::get('error')}}</strong> 
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
 @endif
    <!-- customer login start -->
    <div class="customer_login mt-60">
        <div class="container">
            <div class="row">
               <!--login area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form">
                        <h2>login</h2>
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <p>   
                                <label>Username  <span>*</span></label>
                                <input  id="username"  type="text" name="username">
                             </p>
                             <p>   
                                <label>Passwords <span>*</span></label>
                                <input type="password" id="password" name="password">
                              
                             </p>   
                            <div class="login_submit">
                               <a href="#">Lost your password?</a>
                                <label for="remember">
                                    <input id="remember" type="checkbox">
                                    Remember me
                                </label>
                                <button type="submit">login</button>
                                
                            </div>

                        </form>
                     </div>    
                </div>
                <!--login area start-->

                <!--register area start-->
                <div class="col-lg-6 col-md-6">
                    <div class="account_form register">
                        <h2>Register</h2>
                        <form method="POST" action="{{ route('register') }}">
                          @csrf
                            <p>   
                                <label>Name  <span>*</span></label>
                                <input type="text" id="name"  name="name" >
                             </p>
                             <p>   
                                <label>Email  <span>*</span></label>
                                <input type="email" id="email"  name="email" >
                             </p>
                             <p>   
                                <label>Password <span>*</span></label>
                                <input type="password" id="password" type="password" name="password">
                             </p>
                             <p>   
                                <label>Confirm Password <span>*</span></label>
                                <input type="password" id="password_confirmation" type="password" name="password_confirmation">
                                
                             </p>
                            <div class="login_submit">
                                <button type="submit">Register</button>
                            </div>
                        </form>
                    </div>    
                </div>
                <!--register area end-->
            </div>
        </div>    
    </div>
    <!-- customer login end -->


@endsection
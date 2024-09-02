@extends('frontend.master')
@section('main')
@include('frontend.body.header')


@php
use Illuminate\Support\Facades\Session;
    
@endphp

 <!--breadcrumbs area start-->
 <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="/">home</a></li>
                            <li>My account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    <!-- my account start  -->
    <section class="main_content_area">
        <div class="container">   
            <div class="account_dashboard">
                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <!-- Nav tabs -->
                        <div class="dashboard_tab_button">
                            <ul role="tablist" class="nav flex-column dashboard-list">
                                <li><a href="#dashboard" data-bs-toggle="tab" class="nav-link active">Dashboard</a></li>
                                <li><a href="#dashboard" data-bs-toggle="tab" class="nav-link active">Profile Update</a></li>
                                <li><a href="#dashboard" data-bs-toggle="tab" class="nav-link active">Change Password</a></li>
                                 <a href="{{ route('logout') }}" class="btn btn-danger btn-sm btn-block">Logout</a><br><br>

                                
                            </ul>
                        </div>    
                    </div>
                    <div class="col-sm-12 col-md-9 col-lg-9">
                        <!-- Tab panes -->
                        <div class="tab-content dashboard_content">
                            <div class="tab-pane fade show active" id="dashboard">
                                <h3 class="text-center"><span class="text-danger">Hi.....</span><strong></strong>  Update Your Profile</h3>
                                <div class="card-body">
                        <form method="POST" action="" >
                            @csrf
           <div class="form-group">
	    	<label class="info-title" for="exampleInputEmail2">Name <span></span></label>
	    	<input type="text" name="username"  class="form-control unicase-form-control text-input"  id="name"  >{{ Session::get('user')['user_id'] }}
             </div>

             <div class="form-group">
	    	<label class="info-title" for="exampleInputEmail2">Email <span></span></label>
	    	<input type="email" name="email"  class="form-control unicase-form-control text-input" id="email"  >	  	
             </div>
            
            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-info">Update</button>
	    	</div>
                        </form>

                    </div>

                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>  
        </div>        	
    </section>			
    <!-- my account end   --> 


@endsection
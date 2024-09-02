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
                            <li>blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->

     <!--blog area start-->
     <div class="main_blog_area mt-50 mb-50">
	        <div class="container">
	            <div class="row">
                    <div class="col-lg-9 col-md-12">
                        <div class="blog_left_area">
                            <div class="single_blog mb-50">   
                                <div class="blog_title">
                                    <span>
                                        <a href="#">Fashion</a>
                                        <a href="#">ecommerce</a>
                                    </span>
                                    <h2><a href="#">Blog image post</a></h2>
                                    <div class="blog_post">
                                        <ul>
                                            <li class="post_author">Posts by : admin</li>
                                            <li class="post_date"> August 12 2021	</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog_container">
                                    <div class="blog_thumb">
                                        <a href="blogdetails"><img src="assets/img/blog/blog-big1.jpg" alt=""></a>
                                    </div>
                                    <div class="blog_content">
                                        <p class="blog_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, tempore quos rem sunt? Itaque necessitatibus illum cupiditate dolor in qui modi obcaecati porro ex, tempora distinctio, esse omnis architecto accusantium sunt? Itaque.</p>
                                        <a href="blogdetails">Read more</a>
                                        <div class="blog_footer">
                                            <div class="blog_social">
                                                <p>Share this post</p>
                                                <ul>
                                                    <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#" title="Facebook"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#" title="Facebook"><i class="fa fa-pinterest"></i></a></li>
                                                    <li><a href="#" title="Facebook"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#" title="Facebook"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="blog_comment">
                                                <a href="#">3 comments</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single_blog mb-50">   
                                <div class="blog_title">
                                    <span>
                                        <a href="#">Fashion</a>
                                        <a href="#">ecommerce</a>
                                    </span>
                                    <h2><a href="#">Post with Gallery</a></h2>
                                    <div class="blog_post">
                                        <ul>
                                            <li class="post_author">Posts by : admin</li>
                                            <li class="post_date"> August 12 2021	</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog_container">
                                    <div class="blog_thumb_active owl-carousel">
                                       <div class="blog_thumb blog__hover">
                                            <a href="blogdetails"><img src="assets/img/blog/blog-big2.jpg" alt=""></a>
                                        </div>
                                        <div class="blog_thumb">
                                            <a href="blogdetails"><img src="assets/img/blog/blog-big3.jpg" alt=""></a>
                                        </div>
                                        <div class="blog_thumb">
                                            <a href="blogdetails"><img src="assets/img/blog/blog-big4.jpg" alt=""></a>
                                        </div>
                                        <div class="blog_thumb">
                                            <a href="blogdetails"><img src="assets/img/blog/blog-big5.jpg" alt=""></a>
                                        </div>
                                    </div>   
                                        
                                    <div class="blog_content">
                                        <p class="blog_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, tempore quos rem sunt? Itaque necessitatibus illum cupiditate dolor in qui modi obcaecati porro ex, tempora distinctio, esse omnis architecto accusantium sunt? Itaque.</p>
                                        <a href="blogdetails">Read more</a>
                                        <div class="blog_footer">
                                            <div class="blog_social">
                                                <p>Share this post</p>
                                                <ul>
                                                    <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#" title="Facebook"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#" title="Facebook"><i class="fa fa-pinterest"></i></a></li>
                                                    <li><a href="#" title="Facebook"><i class="fa fa-google-plus"></i></a></li>
                                                    <li><a href="#" title="Facebook"><i class="fa fa-linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="blog_comment">
                                                <a href="#">3 comments</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                          
                        
	                    </div>
	                    <!--blog pagination area start-->
                        <div class="blog_pagination">
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
                        <!--blog pagination area end-->
                    </div>
                    <div class="col-lg-3 col-md-8 offset-md-2 offset-lg-0">
                       
                       <div class="blog_sidebar_widget">
                           
                            <div class="widget_list recent_post">
                                <h2>Recent Posts</h2>
                                <ul>
                                    <li>
                                        <a href="#">Blog image post</a> 
                                    </li>
                                    <li>
                                        <a href="#">Post with Gallery</a> 
                                    </li>
                                    

                                </ul>
                            </div>
                           
                            <div class="widget_list widget_tags">
                                <h2>Tags</h2>
                                <div class="tag_cloud">
                                    <ul>
                                        <li><a href="#">asian</a></li>
                                        <li><a href="#">brown</a></li>
                                        <li><a href="#">camera</a></li>
                                        <li><a href="#">chilled</a></li>
                                        <li><a href="#">coctail</a></li>
                                        <li><a href="#">cool</a></li>
                                        <li><a href="#">dark</a></li>
                                        <li><a href="#">euro</a></li>
                                        <li><a href="#">fashion</a></li>
                                        <li><a href="#">food</a></li>
                                        <li><a href="#">france</a></li>
                                        <li><a href="#">hardware</a></li>
                                        <li><a href="#">light</a></li>
                                        <li><a href="#">mac</a></li>
                                        <li><a href="#">place</a></li>
                                        <li><a href="#">retro</a></li>
                                        <li><a href="#">t-shirt</a></li>
                                        <li><a href="#">teen</a></li>
                                        <li><a href="#">travel</a></li>
                                        <li><a href="#">video-2</a></li>
                                        <li><a href="#">watch</a></li>
                                        <li><a href="#">white</a></li>
                                    </ul>
                                </div>
                            </div>
                           
                       </div>
                    </div>
	            </div>
	        </div>
	    </div>
    <!--blog area end-->


@endsection
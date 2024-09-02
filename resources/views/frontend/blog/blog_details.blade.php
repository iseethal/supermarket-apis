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
                            
                            <li>blog details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->

     <!--blog body area start-->
     <div class="blog_details mt-50 mb-50">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-9 col-md-12">
                    <!--blog grid area start-->
                    <div class="blog_details_wrapper">
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
                            <div class="blog_thumb">
                           <a href="#"><img src="assets/img/blog/blog-big1.jpg" alt=""></a>
                       </div>
                            <div class="blog_content">
                                <div class="post_content">
                                    <p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                                    <blockquote>
                                        <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur. In venenatis elit ac ultrices convallis. Duis est nisi, tincidunt ac urna sed, cursus blandit lectus. In ullamcorper sit amet ligula ut eleifend. Proin dictum tempor ligula, ac feugiat metus. Sed finibus tortor eu scelerisque scelerisque.</p>
                                    </blockquote>
                                    <p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>
                                    <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. Vivamus finibus mi a neque pretium, ut convallis dui lacinia. Morbi a rutrum velit. Curabitur sagittis quam quis consectetur mattis. Aenean sit amet quam vel turpis interdum sagittis et eget neque. Nunc ante quam, luctus et neque a, interdum iaculis metus. Aliquam vel ante mattis, placerat orci id, vehicula quam. Suspendisse quis eros cursus, viverra urna sed, commodo mauris. Cras diam arcu, fringilla a sem condimentum, viverra facilisis nunc. Curabitur vitae orci id nulla maximus maximus. Nunc pulvinar sollicitudin molestie.</p>
                                </div>
                                <div class="entry_content">
                                    <div class="post_meta">
                                        <span>Tags: </span>
                                        <span><a href="#">, fashion</a></span>
                                        <span><a href="#">, t-shirt</a></span>
                                        <span><a href="#">, white</a></span>
                                    </div>

                                    <div class="social_sharing">
                                        <p>share this post:</p>
                                        <ul>
                                            <li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
                                            <li><a href="#" title="google+"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                           </div>
                            <div class="related_posts">
                           <h3>Related posts</h3>
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="single_related">
                                        <div class="related_thumb">
                                            <img src="assets/img/blog/blog3.jpg" alt="">
                                        </div>
                                        <div class="related_content">
                                           <h4><a href="#">Post with Gallery</a></h4>
                                           <span><i class="fa fa-calendar" aria-hidden="true"></i> August 12 2021 </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single_related">
                                        <div class="related_thumb">
                                            <img src="assets/img/blog/blog4.jpg" alt="">
                                        </div>
                                        <div class="related_content">
                                           <h4><a href="#">Post with Audio</a></h4>
                                           <span><i class="fa fa-calendar" aria-hidden="true"></i> August 12 2021 </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single_related column_3">
                                        <div class="related_thumb">
                                            <img src="assets/img/blog/blog5.jpg" alt="">
                                        </div>
                                        <div class="related_content">
                                           <h4><a href="#">Post with Video</a></h4>
                                           <span><i class="fa fa-calendar" aria-hidden="true"></i> August 12 2021 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       </div> 
                        </div>
                           
                         
                    </div>
                    <!--blog grid area start-->
                </div>
                <div class="col-lg-3 col-md-12">
                     <div class="blog_sidebar_widget">
                        
                        <div class="widget_list widget_search mb-30">
                           <h2>Search</h2>
                           <form action="#">
                               <input placeholder="search.." type="text">
                               <button type="submit"><i class="fa fa-search"></i></button>
                           </form>
                        </div>
                        <div class="widget_list recent_post">
                            <h2>Recent Posts</h2>
                            <ul>
                                <li>
                                    <a href="#">Blog image post</a> 
                                </li>
                                <li>
                                    <a href="#">Post with Gallery</a> 
                                </li>
                                <li>
                                    <a href="#">Post with Audio</a> 
                                </li>
                                <li>
                                    <a href="#">Post with Video</a> 
                                </li>
                                <li>
                                    <a href="#">Maecenas ultricies</a> 
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
    <!--blog section area end-->


@endsection
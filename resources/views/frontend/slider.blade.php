<section class="slider_section mb-50">
        <div class="container-fluid">
            <div class="row no-gutters"> 
                <div class="col-12">
                    
                    <div class="slider_area slider_three owl-carousel">
                    @foreach ($slider as $row) 

                        <div class="single_slider d-flex align-items-center" data-bgimg="{{ $row['image'] }}">
                            <div class="slider_content slider_content_three content_position_center">
                            <h1>reconditioned</h1>
                                <h2>laptops <span>from $99</span> </h2>
                                <span>We stock fully reconditioned machines</span>
                                <a href="shop">shop now</a>
                            </div>
                        </div>
                    @endforeach

                    </div>
                </div>
            </div>
        </div>   
        
    </section> 
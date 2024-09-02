<div class="categories_menu categori_seven">
                            <div class="categories_title">
                                <h2 class="categori_toggle">Categories</h2>
                            </div>
                            <div class="categories_menu_toggle">
                                <ul> 
                         @foreach($category as $row)

                                    <li class="menu_item_children categorie_list"><a href="#"><span></span> {{ $row['title'] }} <i class="fa fa-angle-right"></i></a>
                                       
                                    </li>
                          @endforeach



                                          </ul>
                            </div>
                        </div>
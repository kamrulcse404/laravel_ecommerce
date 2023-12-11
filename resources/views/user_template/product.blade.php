@extends('user_template.layouts.template')
@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="box_main">
                    <div class="tshirt_img">
                        <img src="man.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="box_main">
                    <div class="product-info">
                        <h4 class="shirt_text text-left">Man shirt</h4>
                        <p class="price_text text-left">Price <span style="color: #2626262;">$ 30</span></p>
                    </div>
                    <div class="my-3 product-details">
                        <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus labore
                            necessitatibus explicabo, ratione voluptatibus sequi cupiditate quo reprehenderit error aliquam
                            enim tenetur ea, magni consequuntur doloremque quasi dolorem cum porro?</p>
                        <ul class="p-2 bg-light my-2">
                            <li>Category - Electronice</li>
                            <li>Subcategory - Mobile</li>
                            <li>Available quantity - 10</li>
                        </ul>
                    </div>

                    <div class="btn_main">
                        <div class="btn btn-warning">
                            <a href="#">Add To Cart</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="fashion_section">
            <div id="main_slider" class="carousel slide" data-ride="carousel">


                <div class="container">
                    <h5 class="fashion_taital">Related Products</h5>
                    <div class="fashion_section_2">
                        <div class="row">

                            <div class="col-lg-4 col-sm-4">
                                <div class="box_main">
                                    <h4 class="shirt_text">Product Name</h4>
                                    <p class="price_text">Price <span style="color: #262626;">$
                                            30000</span></p>
                                    <div class="tshirt_img"><img src="">
                                    </div>
                                    <div class="btn_main">
                                        <div class="buy_bt"><a href="#">Buy Now</a></div>
                                        <div class="seemore_bt"><a href="#">See More</a></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

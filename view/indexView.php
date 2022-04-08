<div class="container">
    <div class="page-banner home-banner">
        <div class="row align-items-center flex-wrap-reverse h-100">
            <div class="col-md-6 py-5 wow fadeInLeft">
                <h1 class="mb-4">Get Start Market Place</h1>
                <p class="text-lg text-grey mb-5">How to use ?</p>
                <a target="_blank" href="https://github.com/turkayaltintas/phprestapiservice" class="btn btn-primary btn-split">Go Github
                    <div class="fab"><span class="mai-play"></span></div>
                </a>
            </div>
            <div class="col-md-6 py-5 wow zoomIn">
                <div class="img-fluid text-center">
                    <img src="../assets/img/banner_image_1.svg" alt="">
                </div>
            </div>
        </div>
        <a href="#about" class="btn-scroll" data-role="smoothscroll"><span class="mai-arrow-down"></span></a>
    </div>
</div>

<div class="page-section">
    <div class="container">
        <div class="text-center wow fadeInUp">
            <div class="subhead">Pricing Plan</div>
            <h2 class="title-section">Choose plan the for Bag</h2>
            <div class="divider mx-auto"></div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4 py-3 wow zoomIn">

            </div>

            <div class="col-lg-4 py-3 wow zoomIn">
                <div class="card-pricing marked">
                    <form action="/addtocart" method="post">
                        <div class="header">
                            <div class="price">
                                <span class="sterlin">£</span>
                                <h1>72</h1>
                            </div>
                            <h5>Per Bag</h5>
                        </div>
                        <div class="body">
                            <p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="width">Width: </span>
                                </div>
                                <input type="text" class="form-control" name="width" id="width" aria-describedby="width">
                                <div class="input-group-append">
                                    <span class="input-group-text">M</span>
                                </div>
                            </div>
                            <p>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="length">Length: </span>
                                    </div>
                                    <input type="text" class="form-control" name="length" id="length" aria-describedby="length">
                                    <div class="input-group-append">
                                        <span class="input-group-text">M</span>
                                    </div>
                                </div>
                            </p>
                            <p>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="width">Depth: </span>
                                    </div>
                                    <input type="text" class="form-control" name="depth" id="depth" aria-describedby="depth">
                                    <div class="input-group-append">
                                        <span class="input-group-text">CM</span>
                                    </div>
                                </div>
                            </p>
                            <p><input disabled type="text" class="form-control" name="bag" id="bag" aria-describedby="bag"></p>
                            <input type="hidden" name="price" value="72">
                        </div>
                        <div class="footer">
                            <button type="submit" class="btn btn-pricing btn-block">Add To Cart</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-4 py-3 wow zoomIn">

            </div>

        </div>
    </div> <!-- .container -->
</div> <!-- .page-section -->

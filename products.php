   <?php
    include 'includes/header.php';
    $page = 'home';
?>  
<section class="banner-section review-banner-content">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-12 col-lg-12 col-sm-12 col-xl-12 col-xxl-12">
        <h1>Wardrobing</h1>
      </div>
    </div>
  </div>
</section>
<section class="products">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-12 col-sm-12 col-lg-2 col-xl-2 col-xxl-2 p-0">
        <div class="side-bar-products">
          <h4>Catagory</h4>
          <ul>
            <li><a href="javavoid:;">Man</a></li>
            <li><a href="javavoid:;">Woman</a></li>
            <li><a href="javavoid:;">Bags</a></li>
            <li><a href="javavoid:;">Shirt</a></li>
            <li><a href="javavoid:;">Glasses</a></li>
            <li><a href="javavoid:;">Watch</a></li>
            <li><a href="javavoid:;">Jeans</a></li>
            <li><a href="javavoid:;">Jacket</a></li>
          </ul>
          <hr>  
          <h4>Sort By Price</h4>
          <div class="selector">
    <div class="price-slider">
        <div id="slider-range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
            <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
        </div>
        <span id="min-price" data-currency="$" class="slider-price">0</span> <span id="max-price" data-currency="$" data-max="3000"  class="slider-price">3000</span>
    </div> 
</div>
          <div class="row">
            <div class="col-12 col-md-12 col-sm-12 col-lg-5 col-xl-5 col-xxl-5">
              <div class="filter-btn">
              <a href="javavoid:;">Filter</a>
            </div>
            </div>
             <div class="col-12 col-md-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
             <h6>Max From $100 - $3000</h6>
            </div>
          </div>
          <hr>  
          <h4>Brand</h4>
          <ul>
            <li><a href="javavoid:;">Man</a></li>
            <li><a href="javavoid:;">Woman</a></li>
            <li><a href="javavoid:;">Bags</a></li>
            <li><a href="javavoid:;">Shirt</a></li>
            <li><a href="javavoid:;">Glasses</a></li>
            <li><a href="javavoid:;">Watch</a></li>
            <li><a href="javavoid:;">Jeans</a></li>
            <li><a href="javavoid:;">Jacket</a></li>
          </ul>
          <hr>  
          <div class="accordion-here">
            <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
        Style
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <hr>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Groubest Sellerp
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
         It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
          </div>
        </div>
      </div> 
      <div class="col-12 col-md-12 col-sm-12 col-lg-9 col-xl-9 col-xxl-9">
        <div class="products-main-content product__sec">
          <div class="row">
            <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-6 col-xxl-6">
              <ul>
                <li><a href="javavoid:;">Home /</a></li>
                <li><a class="active" href="javavoid:;">Shop</a></li>
              </ul>
            </div>
            <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-6 col-xxl-6">
              <div class="product-search-input">
              <input type="search" name="search" placeholder="search"><i class="far fa-search"></i>
              </div>
            </div>

          </div>
          <div class="product_content">
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-sm-12 col-md-12  col-lg-4  col-xl-4  col-xxl-4">
                        <div class="card__1">
                            <img src="images/product-1.png" alt="Product" class="img-fluid">
                            <div class="p-3 product-card-body">
                                <div class="d-flex justify-content-between">
                                    <h4>title here</h4>
                                    <h5>$20.00</h5>
                                </div>
                                <p>Placeholder text is the label for possible content.</p>
                                <a href="product-detail.php">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12  col-lg-4  col-xl-4  col-xxl-4">
                        <div class="card__1" >
                            <img src="images/product-2.png" alt="Product" class="img-fluid">
                            <div class="p-3 product-card-body">
                                <div class="d-flex justify-content-between">
                                    <h4>title here</h4>
                                    <h5>$20.00</h5>
                                </div>
                                <p>Placeholder text is the label for possible content.</p>
                                <a href="product-detail.php">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12  col-lg-4  col-xl-4  col-xxl-4">
                        <div class="card__1" >
                            <img src="images/product-3.png" alt="Product" class="img-fluid">
                            <div class="p-3 product-card-body">
                                <div class="d-flex justify-content-between">
                                    <h4>title here</h4>
                                    <h5>$20.00</h5>
                                </div>
                                <p>Placeholder text is the label for possible content.</p>
                                <a href="product-detail.php">Read More</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-sm-12 col-md-12  col-lg-4  col-xl-4  col-xxl-4">
                        <div class="card__1">
                            <img src="images/product-1.png" alt="Product" class="img-fluid">
                            <div class="p-3 product-card-body">
                                <div class="d-flex justify-content-between">
                                    <h4>title here</h4>
                                    <h5>$20.00</h5>
                                </div>
                                <p>Placeholder text is the label for possible content.</p>
                                <a href="product-detail.php">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12  col-lg-4  col-xl-4  col-xxl-4">
                        <div class="card__1" >
                            <img src="images/product-2.png" alt="Product" class="img-fluid">
                            <div class="p-3 product-card-body">
                                <div class="d-flex justify-content-between">
                                    <h4>title here</h4>
                                    <h5>$20.00</h5>
                                </div>
                                <p>Placeholder text is the label for possible content.</p>
                                <a href="product-detail.php">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12  col-lg-4  col-xl-4  col-xxl-4">
                        <div class="card__1" >
                            <img src="images/product-3.png" alt="Product" class="img-fluid">
                            <div class="p-3 product-card-body">
                                <div class="d-flex justify-content-between">
                                    <h4>title here</h4>
                                    <h5>$20.00</h5>
                                </div>
                                <p>Placeholder text is the label for possible content.</p>
                                <a href="product-detail.php">Read More</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row d-flex align-items-center">
                    <div class="col-12 col-sm-12 col-md-12  col-lg-4  col-xl-4  col-xxl-4">
                        <div class="card__1">
                            <img src="images/product-1.png" alt="Product" class="img-fluid">
                            <div class="p-3 product-card-body">
                                <div class="d-flex justify-content-between">
                                    <h4>title here</h4>
                                    <h5>$20.00</h5>
                                </div>
                                <p>Placeholder text is the label for possible content.</p>
                                <a href="product-detail.php">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12  col-lg-4  col-xl-4  col-xxl-4">
                        <div class="card__1" >
                            <img src="images/product-2.png" alt="Product" class="img-fluid">
                            <div class="p-3 product-card-body">
                                <div class="d-flex justify-content-between">
                                    <h4>title here</h4>
                                    <h5>$20.00</h5>
                                </div>
                                <p>Placeholder text is the label for possible content.</p>
                                <a href="product-detail.php">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12  col-lg-4  col-xl-4  col-xxl-4">
                        <div class="card__1" >
                            <img src="images/product-3.png" alt="Product" class="img-fluid">
                            <div class="p-3 product-card-body">
                                <div class="d-flex justify-content-between">
                                    <h4>title here</h4>
                                    <h5>$20.00</h5>
                                </div>
                                <p>Placeholder text is the label for possible content.</p>
                                <a href="product-detail.php">Read More</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
      </div>

    </div>
  </div>
</section>
<section class="get-in-touch">
    <div class="container">
        <div class="get-in-touch-content">
        <div class="row">
            <div class="col-12 col-md-12 col-sm-12 col-lg-5 col-xl-5 col-xxl-5  p-0">
                <div class="get-in-touch-img">
                <img src="images/get-in-touch.png" class="img-fluid" alt="img">
                </div>
            </div>
            <div class="col-12 col-md-12 col-sm-12 col-lg-7 col-xl-7 col-xxl-7 p-0">
                <form>
                    <h2>Get In Touch!</h2>
                    <div class="row">
                        <div class="col-12 col-md-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="custom-input">
                                <input type="text" name="text" placeholder="First Name*">
                            </div>
                        </div>
                          <div class="col-12 col-md-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="custom-input">
                                <input type="text" name="text" placeholder="Last Name*">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="custom-input">
                                <input type="Email" name="Email" placeholder="Email Address*">
                            </div>
                        </div>
                          <div class="col-12 col-md-12 col-sm-12 col-lg-6 col-xl-6 col-xxl-6">
                            <div class="custom-input">
                                <input type="text" name="text" placeholder="Phone Num*">
                            </div>
                        </div>
                    </div>
                    <div class="custom-input">
                        <textarea placeholder="Comment*"></textarea>
                    </div>
                    <button>Submit Now</button>
                </form>
            </div>

        </div>
    </div>
    </div>
</section>
      <?php
    include 'includes/footer.php';
    $page = 'home';
?>  
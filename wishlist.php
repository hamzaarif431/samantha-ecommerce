        <?php
    include 'includes/header.php';
    $page = 'home';
?>  
<section class="banner-section review-banner-content">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-12 col-lg-12 col-sm-12 col-xl-12 col-xxl-12">
        <h1>wishlist</h1>
      </div>
    </div>
  </div>
</section>

<section class="wishlist">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-sm-12 col-lg-11 col-xl-11 col-xxl-11">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 col-sm-12 col-xl-12 col-xxl-12">
                        <div class="breadcrumb-bar">
                            <ul>
                                <li><a href="javavoid:;">Home /</a></li>
                                <li><a href="javavoid:;">Shop /</a></li>
                                <li><a href="javavoid:;">Product-Deatil</a></li>
                                <li><a href="javavoid:;" class="active">/ Wishlist</a></li>

                            </ul>
                        </div>
                        <table class="table">
  <thead>
    <tr>
      <th scope="col">PRODUCT</th>
      <th scope="col">DESCRIPTION</th>
      <th scope="col">QUANTITY</th>
      <th scope="col">UNIT PRICE</th>
      <th scope="col">DELIVERY INFO</th>
      <th scope="col">SUB TOTAL</th>
      <th scope="col">ACTION</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <td><img src="images/wishlist-1.png" class="img-fluid" alt="img"></td>
      <td>
        <h2>Your Title Here</h2>
   <h4>Color:<span>Black</span></h4>
        <h4>Size:<span>Large</span></h4>
        <h4>Product code:<span>WA16Z</span></h4>
      </td>
      <td>
        <div class="input-group ">
                                <div class="input-group-prepend">
                                    <button class="btn  btn-sm" id="minus-btn"><i class="fa fa-minus"></i></button>
                                </div>
                                <input type="number" id="qty_input" class="form-control form-control-sm" value="1" min="1" disabled="">
                                <div class="input-group-prepend">
                                    <button class="btn  btn-sm" id="plus-btn"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
      </td>
      <td>$75</td>
      <td>Free Shipping</td>
      <td>$75</td>
      <td><i class="fas fa-trash-alt"></i></td>
    </tr>
    <tr>
      <td><img src="images/wishlist-2.png" class="img-fluid" alt="img"></td>
      <td>
        <h2>Your Title Here</h2>
        <h4>Color:<span>Black</span></h4>
        <h4>Size:<span>Large</span></h4>
        <h4>Product code:<span>WA16Z</span></h4>
      </td>
      <td>
        <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button class="btn  btn-sm" id="minus-btn2"><i class="fa fa-minus"></i></button>
                                </div>
                                <input type="number" id="qty_input2" class="form-control form-control-sm" value="1" min="1" disabled="">
                                <div class="input-group-prepend">
                                    <button class="btn  btn-sm" id="plus-btn2"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
      </td>
      <td>$75</td>
      <td>Free Shipping</td>
      <td>$75</td>
      <td><i class="fas fa-trash-alt"></i></td>
    </tr>
  </tbody>

</table>
  <div class="buttons-table">
<div class="row">
  <div class="col-md-12 col-12 col-sm-12 col-lg-8 col-xl-8 col-xxl-8">
    <div class="continueshopping">
      <a href="products.php">continue shopping</a>
    </div>
  </div>
  <div class="col-md-6 col-6 col-sm-6 col-lg-2 col-xl-2 col-xxl-2">
    <div class="clearcart">
      <a href="javavoid:;">clear cart</a>
    </div>
  </div>
  <div class="col-md-6 col-6 col-sm-6 col-lg-2 col-xl-2 col-xxl-2">
    <div class="updatecart">
      <a href="wishlist.php">update cart</a>
    </div>
  </div>
  </div>
</div>
<div class="cuppon-cards">
    <div class="row">
        <div class="col-12 col-md-12 col-sm-12 col-lg-4 col-xl-4 col-xxl-4">
          <div class="card">
            <div class="card-body">
              <h3>APPLY COUPON CODE HERE</h3>
              <div class="form-group">
             <label>Enter your coupon code</label>
             <input type="text" class="form-control">
          </div>
          <div class="applycodebutton">
            <a href="javavoid:;">apply code</a>
          </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-sm-12 col-lg-4 col-xl-4 col-xxl-4">
           <div class="card">
            <div class="card-body">
              <h3>ESTIMATE SHIPPING AND TAX</h3>
              <p>Enter your destination to get a shipping estimate</p>
              <div class="selectboxlabel">
                <div class="form-group">
    <label for="Counrty">Counrty*</label>
    <select class="form-control">
      <option>United States</option>
      <option>Pakistan</option>
      <option>India</option>
      <option>Dubai</option>
    </select>
  </div>
    <div class="form-group">
    <label for="State/Provine">State / Provine</label>
    <select class="form-control">
      <option>Please select region, State or province</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
    </select>
  </div>
              <div class="form-group">
             <label>ZIP / Postal Code</label>
             <input type="text" class="form-control">
          </div>
        </div>
          <div class="estimatebutton">
            <a href="javavoid:;">estimate now</a>
          </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-sm-12 col-lg-4 col-xl-4 col-xxl-4">
          <div class="card">
            <div class="card-body">
           <h4>SUB TOTAL <span>$150</span></h4>
           <h5>GRAND TOTAL <span>$150</span></h5>
              <div class="proceed-button">
                  <a href="check-out.php">PROCEED TO CHECKOUT</a>
              </div>
              <div class="lastcard">
              <p>Checkout with multiple addresses</p>
              </div>
            </div>
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
         <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-sm-12 col-lg-11 col-xl-11 col-xxl-11">
        <div class="get-in-touch-content" >
        <div class="row">
            <div class="col-12 col-md-12 col-sm-12 col-lg-5 col-xl-5 col-xxl-5  padding-left-only">
                <div class="get-in-touch-img">
                <img src="images/get-in-touch.png" class="img-fluid" alt="img">
                </div>
            </div>
            <div class="col-12 col-md-12 col-sm-12 col-lg-7 col-xl-7 col-xxl-7 padding-right-only">
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
</div>
</div>
</section>

         <?php
    include 'includes/footer.php';
    $page = 'home';
?>  
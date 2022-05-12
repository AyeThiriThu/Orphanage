@extends('frontend.master')
@section('content')

 <!-- ======= Banner Section ======= -->
  <section id="shop" class="d-flex align-items-center">
    
    <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
     

      <div class="row">
        <div class="col-lg-8">
          <h2 style="color: white;">MAKE A DIFFERENCE JOIN<span> & SUPPORT US</span></h2>        
          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto text-white">Contact Us</a>
          </div>

          <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          </div>
        </div>
       

      </div>
    </div>
  </section><!-- End Banner Section -->

  <main id="main">

   
  <div class="container my-5" style="background-color: white;">
    <div class="row">
      <div class="col-lg-12">
      <!--================Cart Area =================-->
  <section class="cart_area">
    <div class="container ">
      <div class="cart_inner">
        <div class="table-responsive">

          <table class="table">
            <thead>
              <tr>
                <th >Remove</th>
                <th >Photo</th>
                <th >name</th>
                <th>ADD</th>
                <th>QTY</th>
                <th>SUB</th>                
                <th>Subtotal</th>                
              </tr>
            </thead>

            <tbody id="mytable">                
                <th >
                  <button class="btn btn-outline-danger remove" data-id="${i}"><i class="fas fa-times"></i></button>
                </th>
                <th>
                  <img src="{{asset('frontendtemplate/assets/img/items.jpg')}}"  style="width: 150px;height: 150px;">
                </th>
                <th >Toy</th>
                <th>+</th>
                <th>1</th>
                <th>-</th>                
                <th>2</th>
            </tbody>

            <tfoot id="mytfoot">                
            </tfoot>
          </table>

        </div>
      </div>
    </div>

  </section></div> 

  <!--================End Cart Area =================-->

  <!-- add to cart button -->
  <div class="col-lg-2 py-5">
    <button class="btn btn-primary btn-block waves-effect waves-light checkout_btn" data-total=${total}>go to checkout</button>
  </div>
  <!-- end add to cart button -->

<div class="container">
  <div class="row">
    <div class="col-lg-12">
  <div class="card mb-3">
              <div class="card-body">

                <h5 class="mb-4">We accept</h5>

                <img class="mr-2" width="45px"
                src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                alt="Visa">
                <img class="mr-2" width="45px"
                src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
                alt="American Express">
                <img class="mr-2" width="45px"
                src="https://mdbootstrap.com/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
                alt="Mastercard">
                <img class="mr-2" width="45px"
                src="https://z9t4u9f6.stackpathcdn.com/wp-content/plugins/woocommerce/includes/gateways/paypal/assets/images/paypal.png"
                alt="PayPal acceptance mark">
              </div>
            </div>
            </div>
         </div> 
</div>
<div class="container py-5">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 my-5" >
      <h1 class="text-center mt-3">SHARE AND SPREAD THE WORLD</h1>
      <p class="text-center mt-3">Sharing is caring. It's vital for our association to be heard and known amongst the right people.</p>
      <div class="social-links mt-3"><center>
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a></center>
      </div>
    </div>
  </div>
</div>

   

  </main><!-- End #main -->

@endsection
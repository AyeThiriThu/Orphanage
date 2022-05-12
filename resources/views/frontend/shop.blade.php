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
<!-- item list -->
    <div class="container py-5">
      <div class="row">

        <!-- addtocart -->
        <div class="col-lg-10 my-3"></div>
        <div class="col-lg-2 my-3">                  
          <h3>My Cart<i class="fa fa-shopping-cart" style="font-size:40px;color:white;"></i></h3>              
        </div>

        <div class="col-lg-12 my-3"><h2>Handmade Things Made By Our Children</h2></div>

        <div class="col-lg-3 col-6">
          <img src="{{asset('frontendtemplate/assets/img/items.jpg')}}"  style="width: 250px;height: 250px;">
          <center></center>

            <!-- item detail -->
            <div class="card my-4" style="width: 250px;background-color: #17A589;">
              <div class="card-body">
                <h5 class="card-title">Name:Dreamcatcher</h5>
                <h4>Price: 5000 Ks</h4>
                <hr style="border-color: white;border-width:1px;">
               
                
                <center><a href="" class="cartbtn">
                  <i class='far fa-heart'></i> Add to cart</a>
                </center>
            <!-- end item detail -->

              </div>
            </div>
        </div>
<!-- end item list -->

    <div class="col-lg-3 col-6">
          <img src="{{asset('frontendtemplate/assets/img/items.jpg')}}"  style="width: 250px;height: 250px;">
          <center></center>

            <!-- item detail -->
            <div class="card my-4" style="width: 250px;background-color: #17A589;">
              <div class="card-body">
                <h5 class="card-title">Name:Dreamcatcher</h5>
                <h4>Price: 5000 Ks</h4>
                <hr style="border-color: white;border-width:1px;">
               <!--  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                
                <center><a href="" class="cartbtn">
                  <i class='far fa-heart'></i> Add to cart</a>
                </center>
            <!-- end item detail -->

              </div>
            </div>
        </div>

      <div class="col-lg-3 col-6">
          <img src="{{asset('frontendtemplate/assets/img/items.jpg')}}"  style="width: 250px;height: 250px;">
          <center></center>

            <!-- item detail -->
            <div class="card my-4" style="width: 250px;background-color: #17A589;">
              <div class="card-body">
                <h5 class="card-title">Name:Dreamcatcher</h5>
                <h4>Price: 5000 Ks</h4>
                <hr style="border-color: white;border-width:1px;">
               <!--  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                
                <center><a href="" class="cartbtn">
                  <i class='far fa-heart'></i> Add to cart</a>
                </center>
            <!-- end item detail -->

              </div>
            </div>
        </div>

      <div class="col-lg-3 col-md-6 col-sm-6">
          <img src="{{asset('frontendtemplate/assets/img/items.jpg')}}"  style="width: 250px;height: 250px;">
          <center></center>

            <!-- item detail -->
            <div class="card my-4" style="width: 250px;background-color: #17A589;">
              <div class="card-body">
                <h5 class="card-title">Name:Dreamcatcher</h5>
                <h4>Price:5000 Ks</h4>
                <hr style="border-color: white;border-width:1px;">
                <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                
                <center><a href="" class="cartbtn">
                  <i class='far fa-heart'></i> Add to cart</a>
                </center>
            <!-- end item detail -->

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
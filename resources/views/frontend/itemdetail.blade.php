@extends('frontend.master')
@section('content')

<!-- ======= Banner Section ======= -->
  <section id="volunteer" class="d-flex align-items-center">
    
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

    <div class="container py-3">
        <div class="item_detail">
            <div class="row">
                <div class="col-md-6 pt-5 pl-5 col-sm-12 pt-sm-5">
                    <img src="{{asset('frontendtemplate/assets/img/items.jpg')}}"  class="shadow-lg p-1 mb-5 bg-white rounded detailimg" style="width:400px;height: 300px;">
                </div>
                <div class="col-md-6 pl-1 col-sm-12">
                    <h5 class="pt-5">Name:Dreamcatcher</h5>
                    
                    <i>&#128151;</i>
                    <i>&#128151;</i>
                    <i>&#128151;</i>
                    <i>&#128151;</i>
                    <i>&#128151;</i>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
                    </p>

                    <hr class="shophr">

                    <p class="price">Price:500Ks</p>
                    <div >
                    <p class="d-inline-block mr-5" >Quantity:</p> <button class="shopicon"> <i class="fas fa-plus qtyicon"></i></button><input type="number" class="shopqty text-center" name="quantity" value="1"><button class="shopicon"><i class="fas fa-minus qtyicon"></i></button>
                    </div>

                    
                    <div class="btns">
                       <a href="#menu" class="btn-menu animated fadeInUp scrollto text-dark">
                        <i class="fa fa-shopping-basket"></i> Buy Now</a></div>
                    <div class="btns">
                      <a href="#menu" class="btn-menu animated fadeInUp scrollto text-dark">
                        <i class="fa fa-shopping-cart"></i> Add To Cart</a>
                     </div>
                </div>
                


            </div>
        </div>
    </div>>

   

  </main><!-- End #main -->

@endsection
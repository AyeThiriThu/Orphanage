@extends('frontend.master')
@section('content')

  <!-- ======= Banner Section ======= -->
  <section id="adopt_detail_bg" class="d-flex align-items-center">
    
    <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">

      <div class="row">
        <div class="col-lg-8">

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

<div class="container pt-5">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="inner">
       <center><img src="{{asset('frontendtemplate/assets/img/about.jpg')}}" style="width: 400px; height:400px;" class="img-fluid "></center>
       </div>
       <h4 class="text-center mt-3">Name: Aung Aung</h4>
        <h4 class="text-center mt-3">Age: 2</h4>
       <center><button class="btns" data-toggle="modal" data-target="#detail">Want To Adopt<i class="fas fa-heart ml-1"></i></button></center>
     
      
    </div>
  </div>
</div>

<div class="container">
   <!-- Modal -->
<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="donate_info" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: #89C1A5;">
      <div class="modal-header text-center">
       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-times"></i></span>
        </button>
      </div>

      <div class="modal-body">
        <div class="card">
          <div class="card-body">
           <center><img src="{{asset('frontendtemplate/assets/img/adopt.jpg')}}" class="img-fluid rounded-circle" style="width: 200px; height: 200px;"></center>
          </div>
          <div class="card-footer">
            <h4 style="font-weight: bold;" class="text-center">You can adopt at our orphanage leagelly!</h4><br>
         
         </div>
       </div>
       
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





  </main>
@endsection
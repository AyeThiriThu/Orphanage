@extends('frontend.master')
@section('content')


  <!-- ======= Banner Section ======= -->
  <section id="donate_bg" class="d-flex align-items-center">
    
    <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">

      <div class="row justify-content-center">
        <div class="col-lg-12 col-12">
          <h1 class="pt-5 text-center text-white d-lg-block d-md-none d-sm-none d-none">EMPOWERING ORPHANS AND VULNERABLE CHILDREN</h1>
            <h1 style="color: #17A589;" class="pt-5 text-center d-lg-block d-md-none d-sm-none d-none">To reach their FULL POTENTIAL!</h1>
            <h4 class="pt-5 text-center text-white d-md-block d-sm-block d-lg-none d-none">EMPOWERING ORPHANS AND VULNERABLE CHILDREN</h4>
            <h5 style="color: #17A589;" class="pt-5 text-center d-lg-none d-md-block d-sm-block d-none">To reach their FULL POTENTIAL!</h5>
         
          <div class="col-lg-12 col-12">
            <center>
          <div class="btns">
            <a href="#main" class="text-white">DONATE</a>
          </div>
          </center>
          </div>

        </div>
       

      </div>
    </div>
  </section><!-- End Banner Section -->

  <main id="main">

<div class="container py-5">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 my-5">
      <h1 class="text-center mt-3 display-3"><i class="fas fa-hand-holding-heart mb-2"></i></h1>
      <h1 class="text-center mt-3"><b>DONATE NOW AND HELP THE CAUSE</b></h1>

      <p class="text-center mt-5">Being honest and transparent are basic aspects of human nature and we strive to be truthful with you all to build solid friendships, an excellent reputation and a better future for our childrens and community. We simply cannot do what we are doing without your support.</p>
      <p class="text-center mt-5">All children deserve an education, nutrition, health, and protection—no matter where they live.</p>
      <p class="text-center mt-5">Your donation means the world to us, no matter how big and small and donating below is fast and secure. Support us and feel within!</p>
      
    </div>
  </div>
</div>

<div class="container-fluid">
    <!-- Button trigger modal -->
  
    <center><button type="button" class="btns mb-5 btn-lg" data-toggle="modal" data-target="#req_list">
     <span style="font-size: 20px;"><i class="fa fa-folder-open"></i>Check Our  Requirements</span>
    </button></center>
  
</div>
<div class="container py-5">
<!-- Requirent Modal -->
<div class="modal fade" id="req_list" tabindex="-1" role="dialog" aria-labelledby="req_list" aria-hidden="true" >
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color: #89C1A5;">
      <div class="modal-header text-center">
       <h5 class="modal-title " id="req_list">WE NEED THESE AT THIS MOMENT!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa fa-times"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table" style="background-color: #17A589;">
          <thead>
            <tr>
              <th scope="col"></th>
              <th scope="col">Name</th>
              <th scope="col">Quantity</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Diver</td>
              <td>15</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Blanket</td>
              <td>10</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Water</td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btns" data-dismiss="modal" data-toggle="modal" data-target="#req_list">Close</button>
       
      </div>
    </div>
  </div>
</div> <!-- End of model -->
</div>

<!-- Form part -->
<div class="container-fluid py-5" style="background-color: #17A589;">
  <div class="row my-5">
    <div class="col-12"><h2 class="text-center"><b>Please Choose Amount And Payment Method!</b></h2></div>
  </div>
  <div class="form-row justify-content-center" >
  <div class="col-lg-7 form-group">
    <label for="amount"><span style="color: black;" class="text-center">Choose Amount:</span></label> 
  </div>
</div>
<div class="form-row justify-content-center" >
  <div class="col-lg-7 form-group">
    <div class="row mb-3 justify-content-center">
      <div class="col-3"><button class="btns amtbtn" value="10000">10,000</button></div>
      <div class="col-3"><button class="btns amtbtn" value="30000">30,000</button></div>
      <div class="col-3"><button class="btns amtbtn" value="50000">50,000</button></div>
      <div class="col-3"><button class="btns amtbtn" value="100000">100,000</button></div>
    </div>
  
     <input type="text" name="amount" class="form-control" id="amount" placeholder="Other Amount" />
  </div>
</div>
<div class="form-row justify-content-center mt-3" >
  <div class="col-lg-7 form-group">
    <label for="gender"><span style="color: black;" class="text-center">Payment Method:</span></label>
  </div>
</div>
<div class="form-row justify-content-center" >
  <div class="col-lg-7 form-group">
    <center>
    <input type="radio" name="paymentype" value="kbz"><img src="{{asset('frontendtemplate/assets/img/kbz.png')}}" style="width: 50px; height: 50px;" class="img-fluid rounded-circle mr-5">
    <input type="radio" name="paymentype" value="wave"><img src="{{asset('frontendtemplate/assets/img/wavemoney.png')}}" style="width: 50px; height: 50px;" class="img-fluid rounded-circle mr-5">
    <input type="radio" name="paymentype" value="okdollar"><img src="{{asset('frontendtemplate/assets/img/okdollar.png')}}" style="width: 50px; height: 50px;" class="img-fluid rounded-circle mr-5">
    </center>
  </div>
</div>
<div class="row justify-content-center my-5">
  <div class="col-lg-7 form-group">
     <center><button type="submit" class="btns donate" data-dismiss="modal" data-toggle="modal" data-target="#donate_info">Donate</button></center>
  </div>
</div>
</div>
</div>
<!-- End Form part  -->

<div class="container">
  <!-- Donate Modal -->
<div class="modal fade" id="donate_info" tabindex="-1" role="dialog" aria-labelledby="donate_info" aria-hidden="true" >
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
           <center><img src="{{asset('frontendtemplate/assets/img/ZRTb6.gif')}}" class="img-fluid img" style="width: 150px; height: 150px;"></center>
          </div>
          <div class="card-footer">
            <h4 style="font-weight: bold;" class="text-center"><span id="amt"></span>MMK has been donated!</h4><br>
            <h4 style="color: #17A589; font-weight: bold;" class="text-center">We greatly hornered to your kindly Donation to us!</h4><br>
            <h4 style="color: #FFA07A; font-weight: bold;" class="text-center">Your donation is part of us!</h4>
          <!--   <table class="table" >
          <tbody>  
            <tr>
              <th scope="col">Name:</th>
              <td scope="col">Aye Thiri Thu</td>
            </tr>
            <tr>
              <th scope="col">Email:</th>
              <td scope="col">ayethirithu@gmail.com</td>
            </tr>
            <tr>
              <th scope="col">Phone:</th>
              <td scope="col">09777777777</td>
            </tr>
            <tr>
              <th scope="col">Address:</th>
              <td scope="col">Pyin Oo lwin</td>
            </tr>
          </tbody>
        </table> -->
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
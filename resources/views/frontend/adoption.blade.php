@extends('frontend.master')
@section('content')

  <!-- ======= Banner Section ======= -->
  <section id="adoption_bg" class="d-flex align-items-center">
    
    <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
     
     <div class="row justify-content-center">
        <div class="col-lg-12 col-12">
          <h1 class="pt-5 text-center text-white d-lg-block d-md-none d-sm-none d-none">ADOPTION ONE CHILD WON'T CHANG THE WORLD!</h1>
            <h1 style="color: #17A589;" class="pt-5 text-center d-lg-block d-md-none d-sm-none d-none">BUT FOR THAT ONE CHILD, THE WORLD WILL CHANGE!</h1>
            <h4 class="pt-5 text-center text-white d-md-block d-sm-block d-lg-none d-none">ADOPTION ONE CHILD WON'T CHANG THE WORLD!</h4>
            <h4 style="color: #17A589;" class="pt-5 text-center d-lg-none d-md-block d-sm-block d-none">BUT FOR THAT ONE CHILD, THE WORLD WILL CHANGE!</h4>
         
          

        </div>
       

      </div>
    </div>
  </section><!-- End Banner Section -->

<main id="main">
<!-- start form area -->
<div class="container" id="adoptform">
  <div class="row my-5">
          <div class="col-lg-12 mt-5 mt-lg-0">

            <div class="section-title mt-5">
              <p class="text-center">Please Fill Up For Your Adoption!</p>
            </div>
            <div class="section-title mt-5 col-lg-12">
              <h4 class="text-center text-white">Select Gender And Age You Want To Adopt!</h4>
            </div>

            
            <div class="contact">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">

              <div class="form-row justify-content-center" >
                <div class="col-lg-2 form-group" style="background: #17A589;">
                  <label for="gender"><span style="color: black;">GENDER:</span></label>
                </div>
                <div class="col-lg-5 form-group" style="background: #17A589 ">
                  <input type="radio" name="gender" value="male"><span style="color: black;">Male</span>
                  <input type="radio" name="gender" value="female"><span style="color: black;">Female</span>
                  <div class="validate"></div>
                </div>
                <div class="col-lg-7 form-group">
                   <select name="age" class="form-control">
                     <option value="1">Age Under 1</option>
                     <option value="2">Age Between 1 and 3</option>
                     <option value="3">Age Between 3 and 5</option>
                     <option value="4">Age Above 5</option>
                   </select>
                </div>
                <div class="section-title mt-5 col-lg-12">
              <h4 class="text-center text-white">Fill Your Information!</h4>
            </div>
                <div class="col-lg-7 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-lg-7 form-group">
                  <input type="text" name="age" class="form-control" id="age" placeholder="Age" />
                  <div class="validate"></div>
                </div>
                <div class="col-lg-7 form-group">
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Phone" />
                  <div class="validate"></div>
                </div>
                <div class="col-lg-7 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" />
                  <div class="validate"></div>
                </div>
                <div class="col-lg-7 form-group">
                  <input type="text" class="form-control" name="income" id="income" placeholder="Your Income"/>
                  <div class="validate"></div>
                </div>
                <div class="col-lg-7 form-group">
                  <textarea class="form-control" name="address" id="income" Value="Address"></textarea>
                  <div class="validate"></div>
                </div>
              
                <div class="col-lg-7 form-group">
                  <div class="text-center">
                    <button type="submit" class="btns">Submit</button>
                  </div>
                </div>
            </form>
            </div>
            


          </div>
        </div>
</div>
<!-- End form area -->


</main> <!-- end main section -->
@endsection
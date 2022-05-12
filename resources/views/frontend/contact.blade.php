@extends('frontend.master')
@section('content')

  <!-- ======= Banner Section ======= -->
  <section id="hero-contact" class="d-flex align-items-center">
    
    <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">

      

      
    </div>
  </section><!-- End Banner Section -->

  <hr class="featurette-divider">

      <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        
      </div>
      <div class="container">
        <div data-aos="fade-up">

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30548.867518610434!2d96.102502644832!3d16.845770232157097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c194e7ee58f64d%3A0x6e974e7cb775f1a9!2sHlaing%20Township%2C%20Yangon!5e0!3m2!1sen!2smm!4v1593401507434!5m2!1sen!2smm" width="600" height="450" frameborder="0" style="border:0; width: 100%; height: 350px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>


        
      </div>
      

      <div class="container" data-aos="fade-up">

        <div class="row my-5">
          
          <div class="col-lg-4">
              <div class="address info">
                <center>
                <i class="icofont-google-map"></i><br>
                <h4>Location:</h4>
                <p>A108 Insein Road, Hlaing Township , Yangon</p>
                </center>
              </div>
          </div>
          <div class="col-lg-4">
              <div class="email info">
                <center>
                <i class="icofont-envelope"></i><br>
                <h4>Email:</h4>
                <p>info@example.com</p>
                </center>
              </div>
          </div>
          <div class="col-lg-4">
              <div class="phone info">
                <center>
                <i class="icofont-phone"></i><br>
                <h4>Call:</h4>
                <p>09777777777</p>
                </center>
              </div>
          </div>
          
      </div>
      <div class="row my-5">
          <div class="col-lg-12 mt-5 mt-lg-0">

            <div class="section-title mt-5">
              <p class="text-center">Contact Us!</p>
            </div>
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">

              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder=" Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Phone Number" data-rule="minlen:4" data-msg="Please enter phone number" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Address" data-rule="email" data-msg="Please enter your address" />
                  <div class="validate"></div>
                </div>
              </div>              
              <div class="form-group">
                <textarea class="form-control" name="message" rows="8" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button class="btns" type="submit">Send Message</button></div>
            </form>

          </div>
        </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

@endsection
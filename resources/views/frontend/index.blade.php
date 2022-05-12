@extends('frontend.master')
@section('content')

  <!-- ======= Banner Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    
    <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
      

      <div class="row">
        <div class="col-lg-8">
          <h1>Future For <span>KIDS</span></h1>
          <h2>We have two hands! One to help ourselves, the second to help others!</h2>

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

    

    <!-- ======= Donate, Volunteer, Adopt ======= -->
    <section id="why-us" class="why-us">
      <div class="container py-5" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <center><h1><i class="fas fa-hand-holding-heart mb-2"></i></h1>
              <span>DONATE</span>
              <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p></center>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <center><h1><i class="fas fa-handshake mb-2"></i></h1>
              <span>BE A VOLUNTEER</span>
              <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p></center>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <center><h1><i class="fas fa-heart mb-2"></i></h1>
              <span>ADOPT A CHILD</span>
              <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p></center>
            </div>
          </div>

        </div>

      </div>
    </section><!-- Donate, Volunteer, Adopt -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row abtbg">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="{{asset('frontendtemplate/assets/img/abt.jpg')}}" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Orphanage in Myanmar, nonprofit organization for children</h3>
            <p class="font-italic" style="background-color: #17A589;">
              Our orphanage was born on Mother’s Day 2000.
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> We know the very best thing for a child is to be part of a loving family—it’s where they thrive. That’s why everything we do as a children’s charity is designed to accomplish just that.</li>
              <li><i class="icofont-check-circled"></i> Our goal is a loving family for every child and the end of the need for orphanages. We believe that together, we can change the way we care for children and help to get them into stable, loving, nurturing environments.</li>
              <li><i class="icofont-check-circled"></i> We believe in partnerships, and with generous gifts from people like you, we can make their dream of living with a family a reality.</li>
            </ul>            
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

     <!-- =======Shop Section ======= -->    
     <div id="shop">
       <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-12 my-5">
            <h3 class="display-3 text-center d-lg-block d-sm-none d-md-none">
            Buy Things Made By Childrens</h3> 
            <h5 class="text-center d-md-block d-sm-block d-md-block d-lg-none">
            Buy Things Made By Childrens</h5>  
            <center><a href="" class="btn text-white mb-4" id="seemore">
            BUY HERE</a></center>            
          </div>
        </div>
      </div>
    </div>     
    <!-- End Shop Section -->


    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title py-5">          
          <h4>Some photos from Our Orphanage</h5>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="" class="venobox" data-gall="gallery-item">
                <img src="{{asset('frontendtemplate/assets/img/gallery/g1.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="" class="venobox" data-gall="gallery-item">
                <img src="{{asset('frontendtemplate/assets/img/gallery/g2.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="" class="venobox" data-gall="gallery-item">
                <img src="{{asset('frontendtemplate/assets/img/gallery/g3.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="" class="venobox" data-gall="gallery-item">
                <img src="{{asset('frontendtemplate/assets/img/gallery/g4.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="" class="venobox" data-gall="gallery-item">
                <img src="{{asset('frontendtemplate/assets/img/gallery/g5.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="" class="venobox" data-gall="gallery-item">
                <img src="{{asset('frontendtemplate/assets/img/gallery/g6.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="" class="venobox" data-gall="gallery-item">
                <img src="{{asset('frontendtemplate/assets/img/gallery/g7.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="" class="venobox" data-gall="gallery-item">
                <img src="{{asset('frontendtemplate/assets/img/gallery/g8.jpg')}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">       
      

      <div class="container" data-aos="fade-up">

        
      <div class="row my-5">
          <div class="col-lg-12  mt-lg-0">

            <div class="section-title ">
              <p class="text-center">GET IN TOUCH</p>
            </div>
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">

              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="8" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
                <div class="text-center"><button class="btns" type="submit">Send Message</button></div>
              </div>              
            </form>

          </div>
        </div>

         <div class="row my-5">
          
          <div class="col-lg-4">
              <div class="address info">
                <center>
                <i class="icofont-google-map"></i><br>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
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
        
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  @endsection
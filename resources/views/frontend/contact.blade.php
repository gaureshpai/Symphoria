@extends('layouts.front')

@section('meta')
    <meta name="description" content="Contact us for any queries related to SYMPHORIA-2025.">
    <meta name="keywords" content="Contact, SYMPHORIA-2025, AJ Institute of Dental Sciences">
    <meta name="author" content="Darshan Bhandary">
    <meta name="copyright" content="Darshan Bhandary">
@endsection

@section('content')
    <header class="page-header" {{-- data-background="{{asset('frontend/images/contactUs.png')}}" --}}>
        <div class="container">
            <div class="inner">
                <h6>REACH OUR EVENT & COORDINATORS
                </h6>
                <h2>Contact</h2>
            </div>
            <!-- end inner -->
        </div>
        <!-- end container -->
    </header>
    <section class="content-section no-bottom-spacing">
        <span class="section-bg" data-background="images/section-bg01.png" data-scroll data-scroll-speed="1"></span>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div data-scroll data-scroll-speed="0.5">
                        <div class="section-title">
                            <h6>YOU CAN REACH US BY PHONE OR EMAIL. </h6>
                            <h2>Get in touch!</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div data-scroll data-scroll-speed="-0.5">
                        <div class="contact-box">
                            <h6>Address:</h6>
                            <p>AJ Institute of Dental Sciences, <br />NH-66, Kuntikana, <br /> Mangaluru - 575 004</p>
                            <h6>Phone:</h6><p> <a href="callto:+918147034455">+91 81470 34455</a></p>
                        </div>

                        <div class="contact-box">
                            <h6>For general enquiries:</h6>
                            <p>Use the mail given below for any queries related to SYMPHORIA-2025. <br>
                                We will get back to you soon.</p>
                            <a href="mailto:symphoria@ajids.edu.in">symphoria@ajids.edu.in</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div data-scroll data-scroll-speed="0.5">
                        <form action="https://formspree.io/f/mdobyybg" method="POST">
                            <div class="contact-form">
                                <h5>If you have any questions, let us know!</h5>
                                <div class="col-form-label">
                                    <input type="text" placeholder="Complete Name" name="name" required>
                                </div>
                                <div class="col-form-label">
                                    <input type="text" placeholder="E-mail Address" name="email" required>
                                </div>
                                <diV class="col-form-label">
                                    <input type="text" placeholder="Phone Number" name="phoneNumber" required>
                                </div>
                                <div class="col-form-label">
                                    <textarea placeholder="Your Message" required name="message"></textarea>
                                </div>
                                <div class="col-form-label">
                                    <input type="submit" value="SEND MESSAGE">
                                </div>
                            </div>
                    </div>
                    {{-- <div class="col-lg-6">
			      <div data-scroll data-scroll-speed="0.5">
              <form action="https://formspree.io/f/mdobyybg" method="POST">
                <div class="contact-form">
                  <h5>If you have any questions, let us know!</h5>
                  <div class="col-form-label">
                    <input type="text" placeholder="Complete Name" required>
                  </div>
                  <div class="col-form-label">
                    <input type="text" placeholder="E-mail Address">
                  </div>
                  <div class="col-form-label">
                    <input type="text" placeholder="Phone Number" required>
                  </div>
                  <div class="col-form-label">
                    <textarea placeholder="Your Message"></textarea>
                  </div>
                  <div class="col-form-label">
                    <input type="submit" value="SEND MESSAGE">
                  </div>
                </div>
              </form> 
				    </div>
          </div>  --}}
                </div>
            </div>
    </section>
    <div class="google-maps mt-4">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4785.447705515733!2d74.84375047507523!3d12.89963438740916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba35bfb9683df07%3A0x516656cc48b6f990!2sAJ%20Institute%20of%20Dental%20Sciences!5e1!3m2!1sen!2sin!4v1743822362915!5m2!1sen!2sin"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection

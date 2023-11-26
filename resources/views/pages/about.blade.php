@extends('layouts.master')

@section('title', 'About Me')

@section('content')
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
      
              <div class="section-title">
                <h2>About</h2>
                <p>I'm Sayem and I'm a Computer Science Enthusiast and Software Engineer. I'm also a problem solover and keen to create something new. Please find more at below about me. </p>
              </div>
      
              <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                  <img src="{{ asset('assets/images/Sayem_about.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                  <h3>Software and Web Developer.</h3>
                  <p class="fst-italic">
                    Active since 2020. Experienced in developing some modern applications with some modern technologies like JavaScript, PHP, Laravel, React and VueJs.
                  </p>
                  <div class="row">
                    <div class="col-lg-6">
                      <ul>
                        <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>18 July 1991</span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.abusayem.com</span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+88 01770 716151</span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Current City:</strong> <span>Gazipur, Bangladesh</span></li>
                      </ul>
                    </div>
                    <div class="col-lg-6">
                      <ul>
                        <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>30</span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>B.Sc in CSE</span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>sayem74@gmail.com</span></li>
                        <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                      </ul>
                    </div>
                  </div>
                  <p class="text-justify">
                    I'm <strong>Md. Abu Sayem Amir</strong> from Dinajpur, Bangladesh. I recently graduated from Uttara University, Dhaka, Bangladesh achieving Bachelor of Science degree in Computer Science and Engineering. I'm a web developer who's interested in studying javascript, PHP-Laravel and other front-end technologies. Besides that, I have iOS development experience. I appreciate learning new web technologies and experimenting with them.
                  </p>
                </div>
              </div>
      
            </div>
          </section><!-- End About Section -->
    @endsection

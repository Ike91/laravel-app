@extends('layouts.default_layout')
@section('content')
<main id="main">
  <div class="contentx">
  <div class="aboutwrapper">  
    <section>
        <div class = "image">
           <img src="img/logo/logo3.jpg" alt="Academia logo" style="color: white;">
        </div>
        <div class = "conten">
            <h2>About Us</h2>
            <span><!-- line here --></span>
            <p>
              Academia provides support to students in need of academic help. 
              You can get support if you're struggling with a topic or concept in your studies,
              or you may have missed what your teachers explained in class.
              We'll answer any question you have as soon as possible. alternatively, 
              you can book a one-on-one session with one of our tutors. Moreover,
              our platform offers affordable prices for purchasing or selling products
              Get the most out of academia by becoming a member. <a href="/register" style="color: green; text-decoration:none;">Become a member here</a>
            </p>
        </div>
    </section><br>
</div>
<div class="wrapperrr">
  <div class="aboutust">
    <div class="heading white-heading">
        Our Team
    </div>
    </div>
    <br>
    <br>
    <div class="team">
      <div class="team_member">
        <div class="team_img">
          <img src="img/dev.jpeg" alt="Team_image">
        </div>
        <h3>Nduduzo Khomo</h3>
        <p class="role">Tutor</p>
        <p>
          Final year student at University of Johannesburg doing Applied Mathematics and Computer Science with Exceptional skills and interests in mathematics and programming,
          Experienced tutor in Science field and academics.

        </p>
        <div class="teamsx">
        <div class="social-media">
          <div class="social-icons">
            <a href="#" target="_black">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#"  target="_black">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#"  target="_black">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#"  target="_black">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div><br>
        </div>
      </div>
      </div>
      <div class="team_member">
        <div class="team_img">
          <img src="img/isaac.jpeg" alt="Team_image">
        </div>
        <h3>Isaac Mhlanga</h3>
        <p class="role">Team Leader</p>
        <p>
          Currently, I am a third year student at the University of Johannesburg studying applied mathematics and computer sciences.
          I also tutor second year students in computer sciences.
        </p>
        <br>
        <div class="teamsx">
          <div class="social-media">
            <div class="social-icons">
              <a href="#" target="_black">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#"  target="_black">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#"  target="_black">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#"  target="_black">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div><br>
          </div>
        </div>
      </div>
      <div class="team_member">
        <div class="team_img">
          <img src="img/ranks.jpg" alt="Team_image">
        </div>
        <h3>Frans Chacha</h3>
        <p class="role">Tutor</p>
        <p>
          I am 3rd year student at UJ , doing Bachelor of Commerce in Sportsmanagement. I tutor high school Mathematics and Sciences. 
          As well as Analytical Techniques , Kinesiology and Anatomy & Physiology in Varsity.
        </p>
          <div class="teamsx">
            <div class="social-media">
              <div class="social-icons">
                <a href="#" target="_black">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#"  target="_black">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#"  target="_black">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="#"  target="_black">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div><br>
            </div>
          </div>
  
      </div>
    </div>
  </div>

<div class="aboutust">
    <section class="testimonial text-center">
        <div class="container">
            <div class="heading white-heading">
                Testimonial
            </div>
            <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="testimonial4_slide">
                            <img src="img/Nomkhosi_maseko.jpg" class="img-circle img-responsive" />
                            <p>
                                I was an open-distance learning student when I first took up a programming module. I had been vaguely familiar with c++, 
                                but I had my above fair share of incompetence. I then decide to turn to one of the tutors for help, and I am happy to say
                                that he has held my hand until the end of the semester. I finished my first programming module with a decent mark,
                                and really could not have gone through my assignments without my tutor!
                            </p>
                            <h4>Nomkhosi Maseko<br>UCT</h4>
                           
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                          <img src="img/Nomkhosi_maseko.jpg" class="img-circle img-responsive" />
                          <p>
                              I was an open-distance learning student when I first took up a programming module. I had been vaguely familiar with c++, 
                              but I had my above fair share of incompetence. I then decide to turn to one of the tutors for help, and I am happy to say
                              that he has held my hand until the end of the semester. I finished my first programming module with a decent mark,
                              and really could not have gone through my assignments without my tutor!
                          </p>
                          <h4>Nomkhosi Maseko<br>UCT</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                          <img src="img/Nomkhosi_maseko.jpg" class="img-circle img-responsive" />
                          <p>
                              I was an open-distance learning student when I first took up a programming module. I had been vaguely familiar with c++, 
                              but I had my above fair share of incompetence. I then decide to turn to one of the tutors for help, and I am happy to say
                              that he has held my hand until the end of the semester. I finished my first programming module with a decent mark,
                              and really could not have gone through my assignments without my tutor!
                          </p>
                          <h4>Nomkhosi Maseko<br>UCT</h4>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#testimonial4" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </section>
  </div>
</div>
</main>
@endsection
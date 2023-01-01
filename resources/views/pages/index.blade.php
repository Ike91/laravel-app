@extends('layouts.default_layout')
@include('inc.general.header')
@section('content')
<main id="main"> 
  <div class="">
    <div class="abot clearfi">
       <div class="row">
          <div class="col-md-9">
            <!-- About Me Box -->
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
               <!-- /.card -->
            </div>
            <div class="col-md-3">
                <br>
                <div class="card card-primary homeprimary"> 
                    <div class="card-header">
                         <h3 class="card-title" style="font-family: 'Times New Roman', Times, serif">Like and Follow us</h3>
                     </div>
                         <!-- /.card-header -->
                         <div class="card-body homeside">
                             <div class="fb-page" data-href="https://www.facebook.com/Academia-105517252038405" data-tabs="timeline" data-width="300" data-height="300" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Academia-105517252038405" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Academia-105517252038405">Academia</a></blockquote>
                             </div>      
                         </div>
                         <!-- /.card-body -->
                 </div>    
            </div>
        </div>
    </div>
    <hr style="color: white !important;">

    <div class="ourservice">
    <div class="container-fluid mb-5">
        <div class="aboutust">
        <div class="heading white-heading">
            Our services
        </div>
        </div>
        
        <div class="row">
            <div class="col-md-4">
                <div class="box">
                    <div class="our-services settings">
                     
                        <h4>Tutoring</h4>
                        <br>
                        <p>
                            Our tutoring services are designed for students who have difficulty grasping certain concepts on their own,
                            or simply need more help.
                            Our students are guided by their needs and how quickly they grasp concepts
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <div class="our-services speedup">
                     
                        <h4 class="text-center">Tutor Booking</h4>
                        <br>
                        <p>
                            Students have the option to book one-on-one appointments with our tutors.
                            Please note that not all modules have a tutor at the moment, but we are working on it.
                        </p>
                      
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <div class="our-services privacy">
                    </p>
                    <h4>Notes summary request</h4>
                    <br>
                    <p>
                        Notes summaries can be requested by students following a one on one session with our tutors, 
                        this must be communicated to our tutors.
                        It is not a requirement that a tutor provide notes summaries
                    </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="box">
                    <div class="our-services backups">
                     
                        <h4>Video Tutorials request</h4>
                        <br>
                        <p>
                            Video tutorials can be requested by students in case of a lack of time for one-on-one sessions but they need explanations of certain concepts
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <div class="our-services ssl">
                        <h4>University Q/A</h4>
                        <br>
                        <p>
                            The platform allows students the opportunity to ask as many questions as they wish, 
                            and our experienced tutors will answer their questions as soon as possible
                     
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="box">
                    <div class="our-services database text-center">
                        <h4>Buy and sell products</h4>
                        <br>
                        <p>
                            Students who are registered with our platform can both sell and buy products at affordable prices,
                             which is to assist students,
                             as we know that not everyone can afford to buy new text books at book stores or any other study material.
                        </p>
                      
                    </div>
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
    <br>
  </div>
 </div>
</main>   
@endsection
          
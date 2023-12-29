@extends('frontend.layouts.base')
@section('main-container')
    <div class="home">
        <div class="container-fluid">

            <!-- Home Slider -->
            <div class="row banner-container">
                <div class="col-md-6">
                    <img src="images/back2.png" alt="Small Image" class="overlay-image">


                </div>
                <div class="col-md-6 text-center">
                    <h3>Welcome to</h3>
                    <h1 class="pt-1" style="color: #2a3b8f; text-decoration: underline; font-weight: bold;font-size:60px;">
                        RAMFIT</h1>
                    <p style="font-size: 18px; padding: 60px;font-family:Georgia, 'Times New Roman', Times, serif;">
                        <b>RAMFIT</b> is working with the objectives to learn and
                        apply Islamic rulings on medicine, amending fatwas
                        and explanations regarding medical fiqh, and establishing Islamic shariah-based hospitals.
                    </p>
                    <div class="d-flex justify-content-center align-items-center gap-5">
                        <button onmouseover="this.style.backgroundColor='#2980b9'"
                            onmouseout="this.style.backgroundColor='#2a3b8f'"
                            style="background: #2a3b8f;border:2px solid #2a3b8f;color:white;" class="p-2">About Us <i
                                class="fa fa-user"></i></button>
                        <button style="background: white;margin-left:16px;border:2px solid #2a3b8f;" class="p-2">Contact
                            <i class="fa fa-map"></i></button>
                    </div>
                    <div class="d-flex justify-content-center align-items-center gap-5 p-4">
                        <i style="font-size:20px;" class="fa fa-star  text-white bg-danger p-2 mx-1"></i>
                        <i style="font-size:20px;" class="fa fa-star  text-white bg-danger p-2 mx-1"></i>
                        <i style="font-size:20px;" class="fa fa-star  text-white bg-danger p-2 mx-1"></i>
                        <i style="font-size:20px;" class="fa fa-star  text-white bg-danger p-2 mx-1"></i>
                        <i style="font-size:20px;" class="fa fa-star  text-white bg-danger p-2 mx-1"></i>
                    </div>
                    <div style="margin-top:-20px;" class="justify-content-center align-items-center">
                        <h4 style="color:#33afe8;">Rated 5/5 by 500+ Students</h4>
                    </div>


                </div>






            </div>
        </div>

        <!-- Home Slider Nav -->

    </div>

    <!-- Features -->

    <div class="features">
        <div class="container">

            <div class="row features_row">

                <!-- Features Item -->
                <div class="col-lg-4 feature_col">
                    <div class="feature text-center trans_400">
                        <div class="feature_icon"><img src="images/au.png" alt=""></div>
                        <h3 class="feature_title">Authentic Islamic Knowledge</h3>
                        <div class="feature_text">
                            <p>These unique courses provide an in-depth introduction to the field of Medical Fiqh and its
                                relationship with Islamic bioethics.</p>
                        </div>
                    </div>
                </div>

                <!-- Features Item -->
                <div class="col-lg-4 feature_col">
                    <div class="feature text-center trans_400">
                        <div class="feature_icon"><img src="images/th.png" alt=""></div>
                        <h3 class="feature_title">Think out of the Box</h3>
                        <div class="feature_text">
                            <p>Our goal is to establish a shariah-based hospital offering medical services by skilled
                                medical professionals in every department.</p>
                        </div>
                    </div>
                </div>

                <!-- Features Item -->
                <div class="col-lg-4 feature_col">
                    <div class="feature text-center trans_400">
                        <div class="feature_icon"><img src="images/fe.png" alt=""></div>
                        <h3 class="feature_title">Fellowship within 2 Years</h3>
                        <div class="feature_text">
                            <p>After completion of the course, a certificate will be provided that will qualify you to give
                                opinions on medical fiqh issues.</p>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>

    {{-- core objective --}}
    <div class="features" style="background:#def0ee;">
        <div class="container">
            <h2 style="color: #2a3b8f;" class="text-center pt-4">Our Core Objectives</h2>
            <div class="lines"></div>

            <style>
                .lines {
                    width: 150px;
                    /* Adjust the width to your desired length */
                    border-bottom: 4px solid #33afe8;
                    margin: 0 auto;
                    margin-top: 40px;
                    /* Center the line horizontally */
                }
            </style>

            <div class="container">
                <p style="padding:70px; font-size:16px;" class="text-center">RAMFIT is working with the objectives to learn
                    and
                    apply Islamic rulings on medicine, amending fatwas and
                    explanations regarding medical fiqh, and establishing Islamic shariah-based hospitals</p>
            </div>

            <div class="row features_row">

                <!-- Features Item -->
                <div class="col-lg-3  ">
                    <div class="text-center trans_400">
                        <div class="feature_icon"><img src="images/med.png" alt=""></div>
                        <h3 style="color:#33afe8;" class="feature_title">Medical Fiqh</h3>

                    </div>
                </div>

                <!-- Features Item -->
                <div class="col-lg-3">
                    <div class="text-center trans_400">
                        <div class="feature_icon"><img src="images/fat.png" alt=""></div>
                        <h3 style="color:#33afe8;" class="feature_title">Fatwa Collaboration</h3>

                    </div>
                </div>

                <!-- Features Item -->
                <div class="col-lg-3">
                    <div class="text-center trans_400">
                        <div class="feature_icon"><img src="images/medi.png" alt=""></div>
                        <h3 style="color:#33afe8;" class="feature_title">Medical Research</h3>

                    </div>
                </div>

                <!-- Features Item -->
                <div class="col-lg-3">
                    <div class="text-center trans_400">
                        <div class="feature_icon"><img src="images/sha.png" alt=""></div>
                        <h3 style="color:#33afe8;" class="feature_title">Shariah Hospital</h3>

                    </div>
                </div>



            </div>
            <div class="text-center"> <button onmouseover="this.style.backgroundColor='#33afe8'"
                    onmouseout="this.style.backgroundColor='#2a3b8f'"
                    style="background: #2a3b8f;border:2px solid #2a3b8f;color:white; margin-top:70px;" class="p-2">Learn
                    About Us
                </button></div>
        </div>
    </div>


    {{-- journey --}}
    <div class="features"
        style="background: url('images/back3x.jpg');background-size: cover; background-repeat: no-repeat;">
        <div class="container">
            <h2 style="color: white;" class="text-center pt-4">Enriching Our Journey</h2>
            <div class="line"></div>

            <style>
                .line {
                    width: 150px;
                    /* Adjust the width to your desired length */
                    border-bottom: 4px solid #2a3b8f;
                    margin: 0 auto;
                    margin-top: 40px;
                    /* Center the line horizontally */
                }

                .line2 {
                    width: 150px;
                    /* Adjust the width to your desired length */
                    border-bottom: 4px solid #2a3b8f;
                    margin: 0;
                    margin-top: 40px;
                    /* Center the line horizontally */
                }
            </style>

            <div class="d-flex justify-content-center align-items-center gap-5 p-4">
                <i style="font-size:20px;" class="fa fa-star  text-white bg-danger p-2 mx-1"></i>
                <i style="font-size:20px;" class="fa fa-star  text-white bg-danger p-2 mx-1"></i>
                <i style="font-size:20px;" class="fa fa-star  text-white bg-danger p-2 mx-1"></i>
                <i style="font-size:20px;" class="fa fa-star  text-white bg-danger p-2 mx-1"></i>
                <i style="font-size:20px;" class="fa fa-star  text-white bg-danger p-2 mx-1"></i>
            </div>

            <div class="container">
                <p style="padding:20px; font-size:16px;color:white;" class="text-center">This is a short summary about our
                    glorious journey to the path of Medical Fiqh…</p>
            </div>

            <div class="row features_row">

                <!-- Features Item -->
                <div style="border:1px solid white;padding-bottom:30px;" class="col-lg-3  ">
                    <div class="text-center trans_400">
                        <div class="feature_icon"><img src="images/med.png" alt=""></div>
                        <h3 style="color:#33afe8;font-size:28px;color:white;" class="feature_title">499+ Attentive
                            Students</h3>

                    </div>
                </div>

                <!-- Features Item -->
                <div style="border:1px solid white;padding-bottom:30px;" class="col-lg-3">
                    <div class="text-center trans_400">
                        <div class="feature_icon"><img src="images/fat.png" alt=""></div>
                        <h3 style="color:#33afe8;font-size:28px;color:white;" class="feature_title">4 Qualityful Courses
                        </h3>

                    </div>
                </div>

                <!-- Features Item -->
                <div style="border:1px solid white;padding-bottom:30px;" class="col-lg-3  ">
                    <div class="text-center trans_400">
                        <div class="feature_icon"><img src="images/medi.png" alt=""></div>
                        <h3 style="color:#33afe8;font-size:28px;color:white;" class="feature_title">9999+ Hours Long
                            Videos</h3>

                    </div>
                </div>

                <!-- Features Item -->
                <div style="border:1px solid white;padding-bottom:30px;" class="col-lg-3  ">
                    <div class="text-center trans_400">
                        <div class="feature_icon"><img src="images/sha.png" alt=""></div>
                        <h3 style="color:#33afe8;font-size:28px;color:white;" class="feature_title">4 Countries Reached
                        </h3>

                    </div>
                </div>



            </div>

        </div>
    </div>

    <!-- Popular Courses -->

    <div class="courses">
        <div class="section_background parallax-window" data-parallax="scroll"
            data-image-src="images/courses_background.jpg" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">
                        <h2 style="color: #2a3b8f" class="section_title">Popular Online Courses</h2>
                        <div class="section_subtitle">
                            <p>Online courses open the chance for learning to almost anyone. Here, you will learn the
                                medical fiqh in depth that will help you in practical and theological approaches in the
                                field of medicine.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row courses_row">

                <!-- Course -->
                <div class="col-lg-4 course_col">
                    <div class="course">
                        <div class="course_image"><img src="images/course_1.jpg" alt=""></div>
                        <div class="course_body">
                            <h3 style="color: #2a3b8f" class="course_title"><a href="course.html">Software Training</a>
                            </h3>
                            <div class="course_teacher">Mr. John Taylor</div>
                            <div class="course_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
                            </div>
                        </div>
                        <div class="course_footer">
                            <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                <div class="course_info">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                    <span>20 Student</span>
                                </div>
                                <div class="course_info">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <span>5 Ratings</span>
                                </div>
                                <div class="course_price ml-auto">$130</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course -->
                <div class="col-lg-4 course_col">
                    <div class="course">
                        <div class="course_image"><img src="images/course_2.jpg" alt=""></div>
                        <div class="course_body">
                            <h3 style="color: #2a3b8f" class="course_title"><a href="course.html">Developing Mobile
                                    Apps</a></h3>
                            <div class="course_teacher">Ms. Lucius</div>
                            <div class="course_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
                            </div>
                        </div>
                        <div class="course_footer">
                            <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                <div class="course_info">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                    <span>20 Student</span>
                                </div>
                                <div class="course_info">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <span>5 Ratings</span>
                                </div>
                                <div class="course_price ml-auto">Free</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Course -->
                <div class="col-lg-4 course_col">
                    <div class="course">
                        <div class="course_image"><img src="images/course_3.jpg" alt=""></div>
                        <div class="course_body">
                            <h3 style="color: #2a3b8f" class="course_title"><a href="course.html">Starting a Startup</a>
                            </h3>
                            <div class="course_teacher">Mr. Charles</div>
                            <div class="course_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
                            </div>
                        </div>
                        <div class="course_footer">
                            <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                <div class="course_info">
                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                    <span>20 Student</span>
                                </div>
                                <div class="course_info">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <span>5 Ratings</span>
                                </div>
                                <div class="course_price ml-auto"><span>$320</span>$220</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <div class="courses_button trans_200"><a href="#">view all courses</a></div>
                </div>
            </div>
        </div>
    </div>

    {{-- Youtube --}}

    <div class="courses">
        <div class="section_background parallax-window" data-parallax="scroll"
            data-image-src="images/courses_background.jpg" data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">
                        <h2 style="color: #2a3b8f" class="section_title">Ramfit Tube</h2>
                        <div class="line"></div>

                        <div class="mt-4">
                            <iframe width="620" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY">
                            </iframe>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row courses_row">

                <!-- Course -->
                <div class="col-lg-3 course_col">

                    <div class="mt-4">
                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                        </iframe>
                    </div>

                </div>
                <div class="col-lg-3 course_col">

                    <div class="mt-4">
                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                        </iframe>
                    </div>

                </div>
                <div class="col-lg-3 course_col">

                    <div class="mt-4">
                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                        </iframe>
                    </div>

                </div>
                <div class="col-lg-3 course_col">
                    <div class="mt-4">
                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                        </iframe>
                    </div>
                </div>

                <div class="col-lg-3 course_col">
                    <div class="mt-4">
                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                        </iframe>
                    </div>
                </div>

                <div class="col-lg-3 course_col">
                    <div class="mt-4">
                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                        </iframe>
                    </div>
                </div>

                <div class="col-lg-3 course_col">
                    <div class="mt-4">
                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                        </iframe>
                    </div>
                </div>

                <div class="col-lg-3 course_col">
                    <div class="mt-4">
                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                        </iframe>
                    </div>
                </div>


                <div class="col-lg-3 course_col">
                    <div class="mt-4">
                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                        </iframe>
                    </div>
                </div>


                <div class="col-lg-3 course_col">
                    <div class="mt-4">
                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                        </iframe>
                    </div>
                </div>


                <div class="col-lg-3 course_col">
                    <div class="mt-4">
                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                        </iframe>
                    </div>
                </div>


                <div class="col-lg-3 course_col">
                    <div class="mt-4">
                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY">
                        </iframe>
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col">
                    <div class="courses_button trans_200"><a href="#">view all</a></div>
                </div>
            </div>
        </div>
    </div>


    <div class="counter">
        <div class="counter_background" style="background-image:url(images/joinus.png)"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="counter_content">
                        <h1 style="color:#14bdee;font-size:60px;">JOIN <b style="color: #2a3b8f;">US</b></h1>
                        <div class="line2"></div>
                        <h2 style="color:#14bdee;" class="pt-4">To Develop an</h2>
                        <h2 style="color:#2a3b8f;">Islamic Medical System</h2>
                        <div style="background: #2a3b8f; color: white;margin-top:15px;padding:8px;"
                            onmouseover="this.style.background='#14bdee'" onmouseout="this.style.background='#2a3b8f'"
                            class="btn btn-default">
                            <a style="color: white;" href="#">DONATE NOW</a>
                        </div>




                    </div>

                </div>
            </div>



        </div>
    </div>


    <div class="counter">
        <div class="counter_background" style="background-image:url(images/1.jpg)"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">

                    <img style="width:100%" src="images/director.png" alt="">

                </div>

                <div class="col-lg-6">

                    <h1 style="color:#2a3b8f;;font-size:40px;padding-top:100px;"> Paints for the Future</h1>
                    <div class="line2"></div>
                    <p class="text-left pt-4">It is easy to dream but difficult to make it happen. To convert our dream into reality, we need many
                        dedicated people who will give utmost priority to seeking knowledge & implementing shariah in
                        personal and medical life. And we hope RAMFIT will be a platform for every Muslim doctor to be
                        competent in academic and Islamic knowledge. With all these, In sha Allah we’ll be a role model in
                        the medical community. Let’s do our part properly and be sure that ALLAH will help us, In sha Allah
                        our journey will go forward.</p>

                        <div  class="pt-2 pb-2"><h4 class="text-right" style="color:#2a3b8f;padding-top:20px;"> Dr. Md. Shariful Islam</h4>
                        <h4 class="text-right" style="color:#16181f;"> Founding Director, RAMFIT.</h4></div>


                </div>
            </div>



        </div>
    </div>





    <!-- Counter -->

    <div class="counter">
        <div class="counter_background" style="background-image:url(images/courses_background.jpg)"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="counter_content">
                        <h2 class="counter_title text-dark">Register Now</h2>
                        <div class="counter_text">
                            <p class="text-dark">Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                                industry’s standard dumy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book.</p>
                        </div>

                        <!-- Milestones -->

                        <div class="milestones d-flex flex-md-row flex-column align-items-center justify-content-between">

                            <!-- Milestone -->
                            <div class="milestone">
                                <div class="milestone_counter" data-end-value="15">0</div>
                                <div class="milestone_text">years</div>
                            </div>

                            <!-- Milestone -->
                            <div class="milestone">
                                <div class="milestone_counter" data-end-value="120" data-sign-after="k">0</div>
                                <div class="milestone_text">years</div>
                            </div>

                            <!-- Milestone -->
                            <div class="milestone">
                                <div class="milestone_counter" data-end-value="670" data-sign-after="+">0</div>
                                <div class="milestone_text">years</div>
                            </div>

                            <!-- Milestone -->
                            <div class="milestone">
                                <div class="milestone_counter" data-end-value="320">0</div>
                                <div class="milestone_text">years</div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="counter_form">
                <div class="row fill_height">
                    <div class="col fill_height">
                        <form class="counter_form_content d-flex flex-column align-items-center justify-content-center"
                            action="#">
                            <div class="counter_form_title">courses now</div>
                            <input type="text" class="counter_input" placeholder="Your Name:" required="required">
                            <input type="tel" class="counter_input" placeholder="Phone:" required="required">
                            <select name="counter_select" id="counter_select" class="counter_input counter_options">
                                <option>Choose Subject</option>
                                <option>Subject</option>
                                <option>Subject</option>
                                <option>Subject</option>
                            </select>
                            <textarea class="counter_input counter_text_input" placeholder="Message:" required="required"></textarea>
                            <button type="submit" class="counter_form_button">submit now</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <!-- Events -->

    {{-- <div class="events">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">
                        <h2 class="section_title">Upcoming events</h2>
                        <div class="section_subtitle">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu.
                                Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row events_row">

                <!-- Event -->
                <div class="col-lg-4 event_col">
                    <div class="event event_left">
                        <div class="event_image"><img src="images/event_1.jpg" alt=""></div>
                        <div class="event_body d-flex flex-row align-items-start justify-content-start">
                            <div class="event_date">
                                <div class="d-flex flex-column align-items-center justify-content-center trans_200">
                                    <div class="event_day trans_200">21</div>
                                    <div class="event_month trans_200">Aug</div>
                                </div>
                            </div>
                            <div class="event_content">
                                <div class="event_title"><a href="#">Which Country Handles Student Debt?</a>
                                </div>
                                <div class="event_info_container">
                                    <div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>15.00 -
                                            19.30</span></div>
                                    <div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>25
                                            New York City</span></div>
                                    <div class="event_text">
                                        <p>Policy analysts generally agree on a need for reform, but not on which
                                            path...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Event -->
                <div class="col-lg-4 event_col">
                    <div class="event event_mid">
                        <div class="event_image"><img src="images/event_2.jpg" alt=""></div>
                        <div class="event_body d-flex flex-row align-items-start justify-content-start">
                            <div class="event_date">
                                <div class="d-flex flex-column align-items-center justify-content-center trans_200">
                                    <div class="event_day trans_200">27</div>
                                    <div class="event_month trans_200">Aug</div>
                                </div>
                            </div>
                            <div class="event_content">
                                <div class="event_title"><a href="#">Repaying your student loans (Winter
                                        2017-2018)</a></div>
                                <div class="event_info_container">
                                    <div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>09.00 -
                                            17.30</span></div>
                                    <div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>25
                                            Brooklyn City</span></div>
                                    <div class="event_text">
                                        <p>This Consumer Action News issue covers topics now being debated before...
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Event -->
                <div class="col-lg-4 event_col">
                    <div class="event event_right">
                        <div class="event_image"><img src="images/event_3.jpg" alt=""></div>
                        <div class="event_body d-flex flex-row align-items-start justify-content-start">
                            <div class="event_date">
                                <div class="d-flex flex-column align-items-center justify-content-center trans_200">
                                    <div class="event_day trans_200">01</div>
                                    <div class="event_month trans_200">Sep</div>
                                </div>
                            </div>
                            <div class="event_content">
                                <div class="event_title"><a href="#">Alternative data and financial
                                        inclusion</a></div>
                                <div class="event_info_container">
                                    <div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>13.00 -
                                            18.30</span></div>
                                    <div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>25
                                            New York City</span></div>
                                    <div class="event_text">
                                        <p>Policy analysts generally agree on a need for reform, but not on which
                                            path...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Team -->

    <div class="team">
        <div class="team_background parallax-window" data-parallax="scroll" data-image-src="images/team_background.jpg"
            data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">
                        <h2 class="section_title">The Best Tutors in Town</h2>
                        <div class="section_subtitle">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu.
                                Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row team_row">

                <!-- Team Item -->
                <div class="col-lg-3 col-md-6 team_col">
                    <div class="team_item">
                        <div class="team_image"><img src="images/team_1.jpg" alt=""></div>
                        <div class="team_body">
                            <div class="team_title"><a href="#">Jacke Masito</a></div>
                            <div class="team_subtitle">Marketing & Management</div>
                            <div class="social_list">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Item -->
                <div class="col-lg-3 col-md-6 team_col">
                    <div class="team_item">
                        <div class="team_image"><img src="images/team_2.jpg" alt=""></div>
                        <div class="team_body">
                            <div class="team_title"><a href="#">William James</a></div>
                            <div class="team_subtitle">Designer & Website</div>
                            <div class="social_list">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Item -->
                <div class="col-lg-3 col-md-6 team_col">
                    <div class="team_item">
                        <div class="team_image"><img src="images/team_3.jpg" alt=""></div>
                        <div class="team_body">
                            <div class="team_title"><a href="#">John Tyler</a></div>
                            <div class="team_subtitle">Quantum mechanics</div>
                            <div class="social_list">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Team Item -->
                <div class="col-lg-3 col-md-6 team_col">
                    <div class="team_item">
                        <div class="team_image"><img src="images/team_4.jpg" alt=""></div>
                        <div class="team_body">
                            <div class="team_title"><a href="#">Veronica Vahn</a></div>
                            <div class="team_subtitle">Math & Physics</div>
                            <div class="social_list">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}

    <!-- Latest News -->

    <div class="news" style="background-image:url(images/courses_background.jpg)">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title_container text-center">
                        <h2 class="section_title">About RAMFIT</h2>

                        <div class="section_subtitle">
                            <p>Our goal is to establish a shariah-based hospital offering medical services by skilled medical professionals in every department. Fellowship within 2 Years.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row news_row">
                <div class="col-lg-7 news_col">

                    <!-- News Post Large -->
                    <div class="news_post_large_container">
                        <div class="news_post_large">
                            <div class="news_post_image"><img style="width:60%; " src="images/back2.png" alt=""></div>
                            <div class="news_post_large_title"><a href="blog_single.html">Here’s What You Need to
                                    Know About Online Courses We Provide</a></div>
                            <div class="news_post_meta">
                                <ul>
                                    <li><a href="#">admin</a></li>
                                    <li><a href="#">november 11, 2017</a></li>
                                </ul>
                            </div>
                            <div class="news_post_text">
                                <p>Policy analysts generally agree on a need for reform, but not on which path
                                    policymakers should take. Can America learn anything from other nations...</p>
                            </div>
                            <div class="news_post_link"><a href="blog_single.html">read more</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 news_col">
                    <div class="news_posts_small">

                        <!-- News Posts Small -->
                        <div class="news_post_small">
                            <div class="news_post_small_title"><a href="blog_single.html">Educational References</a></div>
                            <div class="news_post_meta">
                                <ul>
                                    <li><a href="#">admin</a></li>
                                    <li><a href="#">november 11, 2017</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- News Posts Small -->
                        <div class="news_post_small">
                            <div class="news_post_small_title"><a href="blog_single.html">2018 Fall Issue: Credit
                                    Card Comparison Site Survey (Summer 2018)</a></div>
                            <div class="news_post_meta">
                                <ul>
                                    <li><a href="#">admin</a></li>
                                    <li><a href="#">november 11, 2017</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- News Posts Small -->
                        <div class="news_post_small">
                            <div class="news_post_small_title"><a href="blog_single.html">Cuentas de cheques
                                    gratuitas una encuesta de Consumer Action</a></div>
                            <div class="news_post_meta">
                                <ul>
                                    <li><a href="#">admin</a></li>
                                    <li><a href="#">november 11, 2017</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- News Posts Small -->
                        <div class="news_post_small">
                            <div class="news_post_small_title"><a href="blog_single.html">Troubled borrowers have
                                    fewer repayment or forgiveness options</a></div>
                            <div class="news_post_meta">
                                <ul>
                                    <li><a href="#">admin</a></li>
                                    <li><a href="#">november 11, 2017</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter -->

    <div class="newsletter">
        <div class="newsletter_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg"
            data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div
                        class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

                        <!-- Newsletter Content -->
                        <div class="newsletter_content text-lg-left text-center">
                            <div class="newsletter_title">sign up for news and offers</div>
                            <div class="newsletter_subtitle">Subcribe to lastest smartphones news & great deals we
                                offer</div>
                        </div>

                        <!-- Newsletter Form -->
                        <div class="newsletter_form_container ml-lg-auto">
                            <form action="#" id="newsletter_form"
                                class="newsletter_form d-flex flex-row align-items-center justify-content-center">
                                <input type="email" class="newsletter_input" placeholder="Your Email"
                                    required="required">
                                <button type="submit" class="newsletter_button">subscribe</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .banner-container {
            position: relative;
            height: 800px;
            /* Adjust the height as needed */
            background: url('images/back.png') center/cover no-repeat;
            /* Replace 'background-image.jpg' with your actual background image URL */
            color: #fff;
            /* Text color on the banner */
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .overlay-image {
            position: top;
            top: 10px;
            /* Adjust the top position as needed */
            left: 50%;
            transform: translateX(-10%);
            width: 450px;
            /* Adjust the initial width of the small image */
            height: auto;
            z-index: 1;
            /* Ensure the small image is above the background */
            transition: all 0.3s ease-in-out;
            /* Add a smooth transition on hover */
        }

        .overlay-image:hover {
            width: 550px;
            /* Adjust the larger width on hover */
            cursor: pointer;
            /* Change cursor on hover */
        }

        @media (max-width: 767px) {

            /* Adjust the size for smaller screens */
            .overlay-image {
                padding-top: 100px;
                width: 260px;
            }

            .overlay-image:hover {
                width: 290px;
            }
        }
    </style>
@endsection

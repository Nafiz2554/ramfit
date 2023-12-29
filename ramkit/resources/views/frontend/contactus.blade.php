@extends('frontend.layouts.base')
@section('main-container')
    <div class="container-fluid" style="padding-top: 150px;background:url('images/courses_background.jpg')">

        <div class="row">
            <div class="col-md-12">
                <div class="embed-responsive embed-responsive-16by9" style="max-width: 1140px; margin: 0 auto;">
                    <iframe class="embed-responsive-item"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.9023245182166!2d90.39063927420709!3d23.750862288760764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8a2acd19a37%3A0x13d24f94c4cde2d4!2zRGV2bmV0IExpbWl0ZWQv4Kah4KeH4Kat4Kao4KeH4KafIOCmsuCmv-CmruCmv-Cmn-Cnh-CmoQ!5e0!3m2!1sen!2sbd!4v1702366091718!5m2!1sen!2sbd"
                        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        style="height: 400px; border: 1px solid #ccc; border-radius: 5px;"></iframe>
                </div>
            </div>
        </div>







        <div class="container" style="margin-top:-200px;">

            <div class="row">
                <div class="col-md-6">
                    <h3 class="mt-4 mb-4">Get in Touch</h3>
                    <!-- Contact Form -->
                    <form id="contactForm">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    </form>
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-center">
                    <!-- Google Maps Embed -->
                    <div class="container text-center"
                        style="background:url('images/back.png'); background-size: cover; background-repeat: no-repeat;">
                        <h3 class="pt-4 pb-2">Call Us</h3>
                        <p style="padding: 50px;">Give us a call to discuss anything you need to discuss. Book your online
                            courses, ask questions, or make suggestions.</p>
                        <a class="btn btn-primary mb-2" href="tel:+8801713483396">+880 1713-483396</a><br>
                        <img class="pb-4" src="images/fabicon.png" alt="">
                    </div>
                </div>

            </div>


        </div>



    </div>


@endsection

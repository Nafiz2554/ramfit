@extends('frontend.layouts.base')
@section('main-container')
    <!-- Counter -->
    <div style="padding-top: 100px;">
        <div class="counter">
            <div class="counter_background" style="background-image:url(images/back.png)"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="counter_content">
                            <h2 style="color: #2a3b8f;" class="counter_title">Register Now</h2>
                            <div class="counter_text">
                                <p style="color: #2a3b8f;">Research Academy for Medical FIqh & Islamic Treatment<span>
                                        (RAMFIT) </span> an academy that aims to
                                    establish a medical community that will work to correlate contemporary medicine with
                                    prophetic medicine and ahadeeths, thus medical fellows can practice medicine under the
                                    bindings of shariah.</p>
                            </div>

                            <!-- Milestones -->

                            <div
                                class="milestones d-flex flex-md-row flex-column align-items-center justify-content-between">
                                <!-- Milestone -->
                                <div class="milestone">
                                    <div class="milestone_counter" data-end-value="9999" data-sign-after="+">0</div>
                                    <div style="color: #2a3b8f;" class="milestone_text">Hours Long Videos</div>
                                </div>

                                <!-- Milestone -->
                                <div class="milestone">
                                    <div class="milestone_counter" data-end-value="4">0</div>
                                    <div style="color: #2a3b8f;" class="milestone_text">Qualityful Courses</div>
                                </div>

                                <!-- Milestone -->
                                <div class="milestone">
                                    <div class="milestone_counter" data-end-value="499" data-sign-after="+">0</div>
                                    <div style="color: #2a3b8f;" class="milestone_text">Attentive Students</div>
                                </div>



                                <!-- Milestone -->
                                <div class="milestone">
                                    <div class="milestone_counter" data-end-value="4">0</div>
                                    <div style="color: #2a3b8f;" class="milestone_text">Countries Reached</div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>


                <div class="counter_form">
                    <div class="row fill_height">
                        <div class="col fill_height">
                            {{-- <form class="counter_form_content d-flex flex-column align-items-center justify-content-center"
                                action="/register" method="POST">
                                @csrf
                                <div class="counter_form_title">Register now</div>
                                <input name="name" type="text" class="counter_input" placeholder="Your Name:"
                                    required="required">
                                <input name="email" type="email" class="counter_input" placeholder="Your Email:"
                                    required="required">
                                <input name="phone" type="tel" class="counter_input" placeholder="Phone:"
                                    required="required">
                                <input name="password" type="password" class="counter_input" placeholder="Your Password:"
                                    required="required">
                                <input type="password" name="password_confirmation" class="counter_input"
                                    placeholder="Confirm Password:" required="required">

                                <button type="submit" class="counter_form_button">submit now</button>
                            </form> --}}

                            <!-- resources/views/registration.blade.php -->

                            <form class="counter_form_content d-flex flex-column align-items-center justify-content-center"
                                action="{{ url('/register') }}" method="post">
                                @csrf
                                <div class="counter_form_title">Register now</div>

                                <!-- Display validation errors -->
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <input type="text" name="name" class="counter_input" placeholder="Your Name:"
                                    required="required" value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                                <input type="email" name="email" class="counter_input" placeholder="Your Email:"
                                    required="required" value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                                <input type="tel" name="phone" class="counter_input" placeholder="Phone:"
                                    required="required" value="{{ old('phone') }}">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                                <input type="password" name="password" class="counter_input" placeholder="Your Password:"
                                    required="required">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                                <input type="password" name="password_confirmation" class="counter_input"
                                    placeholder="Confirm Password:" required="required">

                                <button type="submit" class="counter_form_button">Submit now</button>
                            </form>




                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection

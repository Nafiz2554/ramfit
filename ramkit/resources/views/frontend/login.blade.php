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
                            <h3 style="color: #2a3b8f;" class="counter_title">Visit Your Dashboard</h3>
                            <div class="counter_text">
                                <p style="color: #2a3b8f;">Research Academy for Medical FIqh & Islamic Treatment<span>
                                        (RAMFIT) </span> an academy that aims to
                                    establish a medical community that will work to correlate contemporary medicine with
                                    prophetic medicine and ahadeeths, thus medical fellows can practice medicine under the
                                    bindings of shariah.</p>
                            </div>

                        </div>

                    </div>
                </div>


                <div class="counter_form">
                    <div class="row fill_height">
                        <div class="col fill_height">


                            <form class="counter_form_content d-flex flex-column align-items-center justify-content-center"
                                action="{{ url('/login') }}" method="post">
                                @csrf
                                @if (session('info'))
                                    <div class="alert alert-info">
                                        {{ session('info') }}
                                    </div>
                                @endif

                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                <div class="counter_form_title">Login</div>

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

                                <input type="email" name="email" class="counter_input" placeholder="Your Email:"
                                    required="required" value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                                <input type="password" name="password" class="counter_input" placeholder="Your Password:"
                                    required="required">
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                                <button type="submit" class="counter_form_button">Login</button>
                            </form>

                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>
@endsection

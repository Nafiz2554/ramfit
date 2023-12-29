<header class="header">

    <!-- Top Bar -->
    <div class="top_bar">
        <div class="top_bar_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                            <div class="col-md-7">
                                <ul class="top_bar_contact_list">

                                    <li>
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <div>001-1234-88888</div>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        <div>info.deercreative@gmail.com</div>
                                    </li>
                                </ul>

                            </div>
                            <div style="margin-left: 4rem;" class="col-md-5 d-flex">
                                <ul class="top_bar_contact_list social">

                                    <li>
                                        <a style="font-size:12px;" class="text-white" href=" ">Fatwas</a>

                                    </li>
                                    <li>
                                        <a style="font-size:12px;" class="text-white" href=" ">Publication</a>

                                    </li>

                                    <li>
                                        <i class="fa fa-facebook" aria-hidden="true"></i>

                                    </li>
                                    <li>
                                        <i class="fa fa-twitter" aria-hidden="true"></i>

                                    </li>
                                    <li>
                                        <i class="fa fa-instagram" aria-hidden="true"></i>

                                    </li>
                                    <li>
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>

                                    </li>
                                    <li>
                                        <i class="fa fa-youtube-play" aria-hidden="true"></i>

                                    </li>
                                    <li>
                                        <i class="fa fa-refresh" aria-hidden="true"></i>

                                    </li>
                                    <li>
                                        <a class="text-white" href=" ">|</a>

                                    </li>
                                </ul>
                                <div class="shopping_cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>


                            </div>




                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Content -->
    <div class="header_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start">
                        <div class="logo_container">
                            <a href="#">
                                <div class="logo_text">
                                    <img src="{{ asset('images/ramfit.png') }}" alt="Desktop Logo" class="desktop-logo">
                                    <img src="{{ asset('images/fabicon.png') }}" alt="Mobile Logo" class="mobile-logo">
                                </div>
                            </a>
                        </div>

                        <nav class="main_nav_contaner ml-auto">
                            <ul class="main_nav">
                                <li><a href="/">Home</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        About
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/about-ramfit">About Ramfit</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="/team-ramfit">Team Ramfit</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="/contact-us">Contact Us</a>
                                    </div>
                                </li>
                                <li><a href="/all-courses">Courses</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        Study
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/all-schedule">Schedule</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Workshop</a>
                                    </div>
                                </li>
                                <li><a href="#">Mediverse</a></li>
                                <button class="custom-button p-2">Donate Now</button>

                                <li class="nav-item dropdown">
                                    <a style="background: #2a3b8f;color:white;" class="nav-link dropdown-toggle"
                                        href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Account
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/login">Sign in</a>
                                        <a class="dropdown-item" href="/sign-up">Sign up</a>

                                    </div>
                                </li>


                            </ul>


                            <!-- Hamburger -->


                            <div class="hamburger menu_mm">
                                <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                            </div>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Search Panel -->
    <div class="header_search_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_search_content d-flex flex-row align-items-center justify-content-end">
                        <form action="#" class="header_search_form">
                            <input type="search" class="search_input" placeholder="Search" required="required">
                            <button
                                class="header_search_button d-flex flex-column align-items-center justify-content-center">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div style="border:1px solid grey;" class="menu d-flex flex-column align-items-center justify-content-start text-center menu_mm trans_400">
    <div class="menu_close_container">
        <div class="menu_close">
            <div></div>
            <div></div>
        </div>
    </div>
    <img style="margin-right: 21px;" src="images/fabicon.png" alt="">

    <nav class="menu_nav" style="border:1px solid black; padding:10px; border-radius:20px;">
        <ul class="menu_mm">
            <li class="menu_mm"><a href=" "><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a></li>
            <li class="menu_mm"><a href="/">Home</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    About
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/about-ramfit">About Ramfit</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/team-ramfit">Team Ramfit</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/contact-us">Contact Us</a>
                </div>
            </li>
            <li class="menu_mm"><a href="/all-courses">Courses</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Study
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/all-schedule">Schedule</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Workshop</a>
                </div>
            </li>
            <li class="menu_mm"><a href="#">Mediverse</a></li>
            <button class="custom-button p-2">Donate Now</button>

            <li class="nav-item dropdown mt-1">
                <a style="background: #2a3b8f;color:white;" class="nav-link dropdown-toggle" href="#"
                    id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Account
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/login">Sign in</a>
                    <a class="dropdown-item" href="/sign-up">Sign up</a>

                </div>
            </li>
        </ul>
    </nav>
</div>
<style>
    /* CSS for desktop screens */
    @media (min-width: 768px) {
        .mobile-logo {
            display: none;
        }
    }

    /* CSS for mobile screens */
    @media (max-width: 767px) {
        .desktop-logo {
            display: none;
        }
    }


    .nav-item.dropdown:hover .dropdown-menu {
        display: block;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 0;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
        padding: 10px;
    }

    .dropdown-menu::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        /* Adjust the height as needed */
        background-color: #2a3b8f;
    }

    /* Initial button style */
    .custom-button {
        background: #336e6a;
        border: #fff;
        color: #fff;
        padding: 8px 20px;
        transition: background 0.3s ease-in-out;
    }

    /* Hover effect */
    .custom-button:hover {
        background: #2a3b8f;
        /* Change to the desired hover background color */
    }

    .social {
        font-size: 18px;
        color: white;

        padding: 5px;
    }
</style>

@extends('auth.layouts.base')
@section('main-container')
    <div class="container" style="padding-top: 150px; padding-bottom: 20px;">
        <div class="row align-items-center">
            <div class="col-md-4 text-center">
                {{-- <img src="/images/a3.png" alt="" class="profile-img1"> --}}
                @if (isset($profile->profile_img))
                    <img src="{{ asset('/storage/' . $profile->profile_img) }}" class="profile-img1">
                @else
                    <img src="images/du.jpg" class="img-fluid profile-img1">
                @endif

            </div>
            <div class="col-md-8">
                @if (isset($profile->f_name))
                    <h2 style="color: #2a3b8f;" class="user-heading text-center">Howdy, <span style="color: #336e6a;">
                            {{ $profile->f_name }}.</span></h2>
                @else
                    <h2 style="color: #2a3b8f;" class="user-heading text-center">Howdy, <span style="color: #336e6a;">
                            {{ $user->name }}.</span></h2>
                @endif
            </div>
        </div>
    </div>


    @if (session('success'))
        <div class="container">
            <div class="alert alert-success text-center">
                {{ session('success') }}
            </div>
        </div>
    @endif
    @if (session('info'))
        <div class="container">
            <div class="alert alert-info text-center">
                {{ session('info') }}
            </div>
        </div>
    @endif

    <div class="container" style="border-top: 1px solid lightgrey; padding-bottom:20px;">
        <div class="row">
            <div class="col-md-3" style="border-right: 1px solid lightgrey; padding-right:20px;">
                <nav class="mt-4">
                    <ul class="nav flex-column">
                        <li class="nav-item active">
                            <a class="nav-link" href="#dashboard" data-toggle="tab"><i class="fa fa-tachometer"></i> <span
                                    class="px-1"></span> Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#profile" data-toggle="tab"><i class="fa fa-user-circle"></i> <span
                                    class="px-1"></span> My Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#subscription" data-toggle="tab"><i class="fa fa-graduation-cap"></i>
                                <span style="padding-right:5px;"></span> Enrolled Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#downloads" data-toggle="tab"><i class="fa fa-heart"></i> <span
                                    class="px-1"></span> Wishlists</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#addresses" data-toggle="tab"><i class="fa fa-star-half-o"></i> <span
                                    class="px-1"></span> Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#account-details" data-toggle="tab"><i class="fa fa-history"></i>
                                <span class="px-1"></span> Quiz Attempts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#logout" data-toggle="tab"><i class="fa fa-shopping-cart"></i> <span
                                    class="px-1"></span> Purchase History</a>
                        </li>
                        <hr class="hr hr-blurry" />
                        <li class="nav-item">
                            <a class="nav-link" href="#settings" data-toggle="tab"><i class="fa fa-cog"></i> <span
                                    class="px-1"></span> Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#logout" data-toggle="tab"><i class="fa fa-sign-out"></i> <span
                                    class="px-1"></span> Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-md-9">
                <div id="content" class="tab-content">
                    <div class="tab-pane fade show active" id="dashboard">
                        <!-- Table for Dashboard -->
                        <table>
                            <!-- Add your Dashboard table content here -->
                            <thead>
                                <tr>
                                    <th>Column1</th>
                                    <th>Column2</th>
                                    <!-- Add more columns as needed -->
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Data1</td>
                                    <td>Data2</td>
                                    <!-- Add more rows as needed -->
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="profile">

                        <h3 class="mt-4">My Profile</h3>
                        <div class="lines"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <table>

                                    <tbody>
                                        <tr>
                                            <td class="text-primary">Registration Date:</td>
                                            <td class="text-dark">{{ $user->created_at }}</td>

                                        </tr>

                                        <tr>
                                            <td class="text-primary">First Name:</td>
                                            <td class="text-dark">{{ isset($profile->f_name) ? $profile->f_name : 'N/A' }}
                                            </td>

                                        </tr>

                                        <tr>
                                            <td class="text-primary">Last Name:</td>
                                            <td class="text-dark">{{ isset($profile->l_name) ? $profile->l_name : 'N/A' }}
                                            </td>

                                        </tr>

                                        <tr>
                                            <td class="text-primary">Gender:</td>
                                            <td class="text-dark">{{ isset($profile->gender) ? $profile->gender : 'N/A' }}
                                            </td>

                                        </tr>

                                        <tr>
                                            <td class="text-primary">Email:</td>
                                            <td class="text-dark">{{ $user->email }}</td>

                                        </tr>

                                        <tr>
                                            <td class="text-primary">Phone:</td>
                                            <td class="text-dark">{{ isset($profile->phone) ? $profile->phone : 'N/A' }}
                                            </td>

                                        </tr>

                                        <tr>
                                            <td class="text-primary">BIO:</td>
                                            <td class="text-dark">{{ isset($profile->bio) ? $profile->bio : 'N/A' }}</td>

                                        </tr>

                                        <tr>
                                            <td class="text-primary">Medical College:</td>
                                            <td class="text-dark">
                                                {{ isset($profile->college) ? $profile->college : 'N/A' }}</td>

                                        </tr>

                                    </tbody>
                                </table>

                            </div>



                            <div class="col-md-6">
                                <table>
                                    <tbody>

                                        <tr>
                                            <td class="text-primary">Session:</td>
                                            <td class="text-dark">
                                                {{ isset($profile->session) ? $profile->session : 'N/A' }}</td>

                                        </tr>

                                        <tr>
                                            <td class="text-primary">Current Position:</td>
                                            <td class="text-dark">
                                                {{ isset($profile->position) ? $profile->position : 'N/A' }}</td>

                                        </tr>

                                        <tr>
                                            <td class="text-primary">Address:</td>
                                            <td class="text-dark">
                                                {{ isset($profile->address) ? $profile->address : 'N/A' }}</td>

                                        </tr>

                                        <tr>
                                            <td class="text-primary">Town/City:</td>
                                            <td class="text-dark">{{ isset($profile->city) ? $profile->city : 'N/A' }}
                                            </td>

                                        </tr>

                                        <tr>
                                            <td class="text-primary">Website:</td>
                                            <td class="text-dark"><a
                                                    href="{{ isset($profile->website) ? $profile->website : 'N/A' }}"
                                                    target="_blank">{{ isset($profile->website) ? $profile->website : 'N/A' }}</a>
                                            </td>

                                        </tr>

                                        <tr>
                                            <td class="text-primary">Facebook:</td>
                                            <td class="text-dark"><a
                                                    href="{{ isset($profile->facebook) ? $profile->facebook : 'N/A' }}"
                                                    target="_blank">{{ isset($profile->facebook) ? $profile->facebook : 'N/A' }}</a>
                                            </td>

                                        </tr>

                                        <tr>
                                            <td class="text-primary">Twitter:</td>
                                            <td class="text-dark"><a
                                                    href="{{ isset($profile->twitter) ? $profile->twitter : 'N/A' }}"
                                                    target="_blank">{{ isset($profile->twitter) ? $profile->twitter : 'N/A' }}</a>
                                            </td>

                                        </tr>

                                        <tr>
                                            <td class="text-primary">Linkedin:</td>
                                            <td class="text-dark"><a
                                                    href="{{ isset($profile->linkedin) ? $profile->linkedin : 'N/A' }}"
                                                    target="_blank">{{ isset($profile->linkedin) ? $profile->linkedin : 'N/A' }}</a>
                                            </td>

                                        </tr>



                                    </tbody>
                                </table>

                            </div>
                        </div>



                    </div>
                    <div class="tab-pane fade" id="subscription">
                        <!-- Table for My Subscription -->
                        <table>
                            <!-- Add your Subscription table content here -->
                            <!-- ... -->
                        </table>
                    </div>
                    <div class="tab-pane fade" id="downloads">
                        <!-- Table for Downloads -->
                        <table>
                            <!-- Add your Downloads table content here -->
                            <!-- ... -->
                        </table>
                    </div>
                    <div class="tab-pane fade" id="addresses">
                        <!-- Table for Addresses -->
                        <table>
                            <!-- Add your Addresses table content here -->
                            <!-- ... -->
                        </table>
                    </div>
                    <div class="tab-pane fade" id="account-details">
                        <!-- Table for Account Details -->
                        <table>
                            <!-- Add your Account Details table content here -->
                            <!-- ... -->
                        </table>
                    </div>
                    <div class="tab-pane fade" id="logout">
                        <!-- Table for Logout -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-head">
                                        <h4>Course 1</h4>

                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-info">Visit Dashboard</button>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-head">
                                        <h4>Course 2</h4>

                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-info">Visit Dashboard</button>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-head">
                                        <h4>Course 3</h4>

                                    </div>
                                    <div class="card-body">
                                        <button class="btn btn-info">Visit Dashboard</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="settings">

                        <div class="row mt-4">
                            <div class="col-md-12">
                                <div class="card">
                                    <!-- Cover Image -->
                                    <div class="cover-image">
                                        @if (isset($profile->cover_img))
                                            <img src="{{ asset('/storage/' . $profile->cover_img) }}"
                                                class="img-fluid cover-img" alt="Cover Image">
                                        @else
                                            <img src="images/back.png" class="img-fluid cover-img" alt="Cover Image">
                                        @endif

                                    </div>
                                    <!-- Profile Picture -->
                                    <div class="profile-pic">
                                        @if (isset($profile->profile_img))
                                            <img src="{{ asset('/storage/' . $profile->profile_img) }}"
                                                class="img-fluid profile-img" alt="Profile Picture">
                                        @else
                                            <img src="images/du.jpg" class="img-fluid profile-img" alt="Profile Picture">
                                        @endif

                                    </div>

                                </div>
                            </div>


                        </div>

                        <div class="row p-3" style="margin-top:100px;">
                            <form action="{{ url('/profiles/') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Change Cover Image</label>
                                        <input style="color: grey;" type="file" name="cover_img"
                                            class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Change Profile Image</label>
                                        <input style="color: grey;" type="file" name="profile_img"
                                            class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>First Name</label>
                                        <input style="color: grey;" name="f_name" type="text" class="form-control"
                                            value="{{ isset($profile->f_name) ? $profile->f_name : '' }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Last Name</label>
                                        <input style="color: grey;" name="l_name" type="text" class="form-control"
                                            value="{{ isset($profile->l_name) ? $profile->l_name : '' }}">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Mobile Number</label>
                                        <input style="color: grey;" name="phone" type="text" class="form-control"
                                            value="{{ isset($profile->phone) ? $profile->phone : '' }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Gender</label>
                                        <select id="menu-dropdown" name="gender" class="form-control"
                                            style="color: grey;" required>
                                            <option {{ isset($profile->gender) ? 'selected disabled' : '' }}>Select
                                            </option>
                                            <option value="male"
                                                {{ isset($profile->gender) && $profile->gender === 'male' ? 'selected' : '' }}>
                                                Male</option>
                                            <option value="female"
                                                {{ isset($profile->gender) && $profile->gender === 'female' ? 'selected' : '' }}>
                                                Female</option>
                                            <option value="other"
                                                {{ isset($profile->gender) && $profile->gender === 'other' ? 'selected' : '' }}>
                                                Others</option>
                                        </select>


                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Medical College</label>
                                        <input style="color: grey;" type="text" name="college" class="form-control"
                                            value="{{ isset($profile->college) ? $profile->college : '' }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Session (Years)</label>
                                        <input style="color: grey;" type="text" name="session" class="form-control"
                                            value="{{ isset($profile->session) ? $profile->session : '' }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>City</label>
                                        <input style="color: grey;" type="text" name="city" class="form-control"
                                            value="{{ isset($profile->city) ? $profile->city : '' }}">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Current Position</label>
                                        <select id="menu-dropdown" name="position" class="form-control" required
                                            style="color: grey;">
                                            <option {{ isset($profile->position) ? 'selected disabled' : '' }}>Select
                                            </option>
                                            <option value="non-medical"
                                                {{ isset($profile->position) && $profile->position === 'non-medical' ? 'selected' : '' }}>
                                                Non-Medical Person</option>
                                            <option value="mbbs"
                                                {{ isset($profile->position) && $profile->position === 'mbbs' ? 'selected' : '' }}>
                                                MBBS Student</option>
                                            <option value="bds"
                                                {{ isset($profile->position) && $profile->position === 'bds' ? 'selected' : '' }}>
                                                BDS Student</option>
                                            <option value="doctor"
                                                {{ isset($profile->position) && $profile->position === 'doctor' ? 'selected' : '' }}>
                                                Doctor</option>
                                            <option value="postgrade"
                                                {{ isset($profile->position) && $profile->position === 'postgrade' ? 'selected' : '' }}>
                                                Post-Graduate Student</option>
                                            <option value="special"
                                                {{ isset($profile->position) && $profile->position === 'special' ? 'selected' : '' }}>
                                                Specialist</option>
                                        </select>


                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Address</label>
                                        <textarea style="color: grey;" name="address" class="form-control ckeditor">{{ isset($profile->address) ? $profile->address : '' }}</textarea>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>BIO</label>
                                        <textarea style="color: grey;" name="bio" class="form-control ckeditor">{{ isset($profile->bio) ? $profile->bio : '' }}</textarea>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Website URL </label>
                                        <input style="color: grey;" type="text" name="website" class="form-control"
                                            value="{{ isset($profile->website) ? $profile->website : '' }}">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Facebook URL</label>
                                        <input style="color: grey;" type="text" name="facebook" class="form-control"
                                            value="{{ isset($profile->facebook) ? $profile->facebook : '' }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Twitter URL</label>
                                        <input style="color: grey;" type="text" name="twitter" class="form-control"
                                            value="{{ isset($profile->twitter) ? $profile->twitter : '' }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Linkedin URL</label>
                                        <input style="color: grey;" type="text" name="linkedin" class="form-control"
                                            value="{{ isset($profile->linkedin) ? $profile->linkedin : '' }}">
                                    </div>

                                </div>

                                <div class="text-center"><button type="submit" class="btn btn-primary">SAVE NOW</button>
                                </div>
                            </form>



                        </div>







                    </div>
                </div>
            </div>
        </div>
    </div>


    <style>
        .nav-item {
            border: 1px solid #ccc;
            margin-bottom: 5px;
            border-radius: 5px;
        }

        .nav-item a {
            padding: 10px;
            display: block;
            text-decoration: none;
            color: #333;
        }

        .nav-item a:hover {
            background-color: #f8f9fa;
        }

        .nav-item.active {
            border-color: #007bff;
        }

        .nav-item.active a {
            color: #007bff;
        }

        /* Add styles for the tables */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: white;
        }


        /* Adjustments for smaller, round profile image */
        .profile-img1 {
            width: 170px;
            /* Set desired width */
            height: 170px;
            /* Set desired height */
            border-radius: 50%;
            /* Make the image round */
            object-fit: cover;
            /* Ensure the image covers the container */
        }

        /* Style for user heading */
        .user-heading {
            margin-top: 0;
            /* Remove top margin */
        }

        /* Responsive adjustments */
        @media (max-width: 767px) {
            .profile-img1 {
                width: 100px;
                /* Adjust size for smaller screens */
                height: 100px;

                /* Adjust size for smaller screens */
            }

            .user-heading {
                font-size: 24px;
                padding-top: 20px;

                /* Adjust font size for smaller screens */
            }
        }


        /* Custom CSS for Cover Image */
        .cover-image {
            position: relative;
            overflow: hidden;
            max-height: 300px;
            /* Set your desired height for the cover image */
        }

        .cover-img {
            width: 100%;
            height: auto;
            object-fit: cover;
            /* Maintain aspect ratio and cover container */
        }

        /* Custom CSS for Profile Picture */
        .profile-pic {
            position: absolute;
            top: calc(100% - 75px);
            /* Adjust the positioning */
            left: 50%;
            transform: translateX(-50%);
            border-radius: 50%;
            /* Make it perfectly round */
            width: 150px;
            /* Set your desired width for the profile picture */
            height: 150px;
            /* Set your desired height for the profile picture */
            overflow: hidden;
        }

        .profile-img {
            width: 100%;
            height: auto;
            object-fit: cover;
            /* Maintain aspect ratio and cover container */
            border: 4px solid #fff;
            /* Optional: Add a border around the profile picture */
            border-radius: 50%;
            /* Make the image perfectly round */
        }

        /* Media query for mobile responsiveness */
        @media (max-width: 767px) {
            .profile-pic {
                top: calc(100% - 50px);
                /* Adjust the positioning for mobile */
                width: 100px;
                /* Set a smaller width for mobile */
                height: 100px;
                /* Set a smaller height for mobile */
            }
        }


        .lines {
            width: 150px;
            border-bottom: 4px solid #33afe8;
            margin-bottom: 6px;
            margin-top: 10px;

        }
    </style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.nav-item a').on('click', function() {
                $('.nav-item').removeClass('active'); // Remove 'active' class from all nav items
                $(this).parent().addClass('active'); // Add 'active' class to the clicked nav item
            });
        });
    </script>
@endsection

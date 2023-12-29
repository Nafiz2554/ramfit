@extends('auth.layouts.base')
@section('main-container')
    <h3 class="text-center" style="padding-top:150px;padding-bottom:20px;">Welcome, <b style="color: #2a3b8f;">
            {{ $user->name }}</b></h3>
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

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <nav class="">
                    <ul class="nav flex-column">
                        <li class="nav-item active">
                            <a class="nav-link" href="#dashboard" data-toggle="tab">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#orders" data-toggle="tab">Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#subscription" data-toggle="tab">My Subscription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#downloads" data-toggle="tab">Downloads</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#addresses" data-toggle="tab">Addresses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#account-details" data-toggle="tab">Account details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#logout" data-toggle="tab">Courses</a>
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
                    <div class="tab-pane fade" id="orders">
                        <!-- Table for Orders -->
                        <table>
                            <!-- Add your Dashboard table content here -->
                            <thead>
                                <tr>
                                    <th>Order1</th>
                                    <th>Order2</th>
                                    <!-- Add more columns as needed -->
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>100</td>
                                    <td>200</td>
                                    <!-- Add more rows as needed -->
                                </tr>
                            </tbody>
                        </table>
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
    </style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function(){
        $('.nav-item a').on('click', function(){
            $('.nav-item').removeClass('active'); // Remove 'active' class from all nav items
            $(this).parent().addClass('active'); // Add 'active' class to the clicked nav item
        });
    });
</script>



@endsection

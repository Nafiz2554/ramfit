@extends('admin.admin_master')
@section('admin_content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Post</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href=" ">Add Post</a></li>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            <p class="alert-info text-center">
                <?php
                $message = Session()->get('message');
                if ($message) {
                    echo $message;
                    Session()->put('message', null);
                }
                ?>
            </p>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Post Info</h4>
                            <form action="{{ url('/all-posts/') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">


                                        <div class="form-group">
                                            <label>Menu:</label>
                                            <select id="menu-dropdown" name="menu_id" class="form-control" required>
                                                <option value="">-- Select Menu --</option>
                                                @foreach ($menus as $data)
                                                    <option value="{{ $data->id }}">
                                                        {{ $data->title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Page:</label>
                                            <select id="page-dropdown" name="page_id" class="form-control" required>
                                            </select>
                                        </div>



                                        {{-- <div class="form-group">
                                            <label>Select Menu:</label>
                                            <select name="menu_id" class="form-control" required>
                                                <option selected disabled>Select ⮟</option>
                                                @foreach ($menus as $menu)
                                                    <option value="{{ $menu->id }}">{{ $menu->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Select Page:</label>
                                            <select name="page_id" class="form-control" required>
                                                <option selected disabled>Select ⮟</option>
                                                @foreach ($page as $page)
                                                    <option value="{{ $page->id }}">{{ $page->title }}</option>
                                                @endforeach
                                            </select>
                                        </div> --}}
                                        <div class="form-group">
                                            <label>Short Description/Member Info:</label>
                                            <textarea class="form-control" name="short_desc" id="editor" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>URL/Passport(NOC):</label>
                                            <input type="text" class="form-control" name="url">
                                        </div>
                                        <div class="form-group">
                                            <label>Add thumbnail:</label>
                                            <input type="file" class="form-control" name="thum_img">
                                        </div>
                                        <div class="form-group">
                                            <label>Add Image_A:</label>
                                            <input type="file" class="form-control" name="img_a">
                                        </div>
                                        <div class="form-group">
                                            <label>Add Image_B:</label>
                                            <input type="file" class="form-control" name="img_b">
                                        </div>
                                        <div class="form-group">
                                            <label>Add Image_C:</label>
                                            <input type="file" class="form-control" name="img_c">
                                        </div>



                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Post Title/Name:</label>
                                            <input type="text" class="form-control" name="title">
                                        </div>
                                        <div class="form-group">
                                            <label>Type/Designation:</label>
                                            <select id="menu-dropdown" name="subtitle" class="form-control" required>
                                                <option selected disabled> Select</option>
                                                <option value="chairman">Board of Governors-Chairman</option>
                                                <option value="member">Board of Governors-Member</option>
                                                <option value="secretary">Board of Governors-Secretary</option>
                                                <option value="banner"> Homepage-Banner</option>
                                                <option value="about"> Homepage-About</option>

                                                <option value="seminar"> Homepage-latestEvent-Seminar/Conference</option>
                                                <option value="epls"> Homepage-latestEvent-EPLS/CLS</option>
                                                <option value="inhouse"> Homepage-latestEvent-In House Seminr</option>
                                                <option value="mrm"> Homepage-latestEvent-MRM</option>
                                                <option value="workshop"> Homepage-latestEvent-Workshop/Training</option>

                                                <option value="recognition"> Homepage-Recognition</option>
                                                <option value="notice"> Homepage-Notice</option>
                                                <option value="hchairman"> Homepage-chairman</option>
                                                <option value="dg"> Homepage-DG</option>
                                                <option value="upcoming"> Homepage-Upcoming-Publication</option>
                                                <option value="latest"> Homepage-latest-Publication</option>
                                                <option value="media"> Homepage-BIISS-In-Media</option>
                                                {{-- <option value="gallery"> Homepage-General-Gallery</option>
                                                <option value="visit"> Homepage-Gallery-Distinguished-Visits</option>
                                                <option value="forum">Homepage-Gallery-International-Forums</option> --}}
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Full Description:</label>
                                            {{-- <input type="text" class="form-control" name="full_desc" required> --}}
                                            <textarea class="form-control" name="full_desc" id="editors" required></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Timelines:</label>
                                            <input type="date" class="form-control" name="timeline">
                                        </div>
                                        <div class="form-group">
                                            <label>Add Image/Video(MP4):</label>
                                            <input type="file" class="form-control" name="img">
                                        </div>

                                        <div class="form-group">
                                            <label>Add Image_D:</label>
                                            <input type="file" class="form-control" name="img_d">
                                        </div>
                                        <div class="form-group">
                                            <label>Add Image_E:</label>
                                            <input type="file" class="form-control" name="img_e">
                                        </div>
                                        <div class="form-group">
                                            <label>Add Image_F:</label>
                                            <input type="file" class="form-control" name="img_f">
                                        </div>



                                        <div class="form-group">
                                            <label>Add PDF:</label>
                                            <input type="file" class="form-control" name="pdf_file">
                                        </div>


                                    </div>
                                </div>
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-outline-primary">Add Post</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            // initialize CKEditor
            CKEDITOR.replace('editor');
        });
    </script>
    <script>
        $(document).ready(function() {
            // initialize CKEditor
            CKEDITOR.replace('editors');
        });
    </script>

    {{-- DROPDOWN --}}


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {


            $('#menu-dropdown').on('change', function() {
                var idMenu = this.value;
                $("#page-dropdown").html('');
                $.ajax({
                    url: "{{ url('api/fetch-pages') }}",
                    type: "POST",
                    data: {
                        menu_id: idMenu,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        $('#page-dropdown').html(
                            '<option value="">-- Select Page --</option>');
                        $.each(result.pages, function(key, value) {
                            $("#page-dropdown").append('<option value="' + value
                                .id + '">' + value.title + '</option>');
                        });

                    }
                });
            });


        });
    </script>
@endsection

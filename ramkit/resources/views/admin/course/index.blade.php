@extends('admin.admin_master')
@section('admin_content')
    <div class="midde_cont mt-4">


        <!-- row -->
        <div class="row">

            <!-- table section -->
            <div class="col-md-12">
                <div class="white_shd full margin_bottom_30">
                    <div class="full graph_head">
                        <div class="heading1 margin_0">
                            <h2>Courses</h2>

                            <p class="alert-success">
                                <?php
                                $message = Session()->get('message');
                                if ($message) {
                                    echo $message;
                                    Session()->put('message', null);
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                    <div class="table_section padding_infor_info">
                        <div class="table-responsive-sm">
                            <table class="table">
                                <thead>
                                    <tr class="text-dark">
                                        <th>Sl No.</th>
                                        <th>Course Name</th>
                                        <th>Subtitle</th>
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Discount Price</th>
                                        <th>Tutor</th>
                                        <th>Duration</th>
                                        <th>Tag</th>
                                        <th>Short Description</th>
                                        <th>Full Description</th>
                                        <th>Image A</th>
                                        <th>Image B</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                @foreach ($course as $courses)
                                    <tbody>
                                        <tr>
                                            <td>{{ $courses->id }}</td>
                                            <td>{{ $courses->title }}</td>
                                            <td>{{ Str::limit($courses->subtitle, 60) }}</td>
                                            <td>{{ $courses->type }}</td>
                                            <td>{{ $courses->price }}</td>
                                            <td>{{ $courses->price_a }}</td>
                                            <td>{{ $courses->tutor }}</td>
                                            <td>{{ $courses->duration }}</td>
                                            <td>{{ $courses->tag }}</td>
                                            <td>{!! html_entity_decode(Str::limit($courses->short_desc, 60)) !!}</td>
                                            <td>{!! html_entity_decode(Str::limit($courses->full_desc, 60)) !!}</td>
                                            <td><img src="{{ asset('/storage/' . $courses->img_1) }}"
                                                    style="width: 105px; height:105px;"> </td>
                                            <td><img src="{{ asset('/storage/' . $courses->img_2) }}"
                                                    style="width: 105px; height:105px;"> </td>

                                            <td>
                                                <div class="d-flex align-items-center">


                                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#exampleModal{{ $courses->id }}">
                                                        <i class="fa fa-edit"></i> Edit
                                                    </button>





                                                    <form style="padding-left:10px;"
                                                        action="{{ url('/course-delete/' . $courses->id) }}"
                                                        method="post" id="deleteForm">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit" onclick="confirmDelete()">
                                                            <i class="fa fa-trash"></i> Trash
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{ $courses->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel{{ $courses->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModal{{ $courses->id }}">
                                                        Edit
                                                        Course Information</h5>
                                                    <button type="button" class="btn btn-warning" data-dismiss="modal"
                                                        aria-label="Close"> Close</button>
                                                </div>
                                                <div class="modal-body">

                                                    <form action="{{ url('/update-course/' . $courses->id) }}"
                                                        method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label>Course Title/Name:</label>
                                                                    <input type="text" class="form-control"
                                                                        name="title" value="{{ $courses->title }}">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Course Subtitle:</label>
                                                                    <input type="text" class="form-control"
                                                                        name="subtitle" value="{{ $courses->subtitle }}">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Type:</label>
                                                                    <input type="text" class="form-control"
                                                                        name="type" value="{{ $courses->type }}">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Price:</label>
                                                                    <input type="text" class="form-control"
                                                                        name="price" value="{{ $courses->price }}">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Discount Price:</label>
                                                                    <input type="text" class="form-control"
                                                                        name="price_a" value="{{ $courses->price_a }}">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Tutor:</label>
                                                                    <input type="text" class="form-control"
                                                                        name="tutor" value="{{ $courses->tutor }}">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Duration:</label>
                                                                    <input type="text" class="form-control"
                                                                        name="duration" value="{{ $courses->duration }}">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Tag:</label>
                                                                    <input type="text" class="form-control"
                                                                        name="tag" value="{{ $courses->tag }}">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Short Description:</label>
                                                                    <textarea class="form-control ckeditor" name="short_desc">{{ $courses->short_desc }}</textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Full Description:</label>
                                                                    <textarea class="form-control ckeditor" name="full_desc">{{ $courses->full_desc }}</textarea>

                                                                </div>

                                                                <div class="form-group">
                                                                    <label> Image A:</label>
                                                                    <input type="file" class="form-control"
                                                                        name="img_1">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label> Image B:</label>
                                                                    <input type="file" class="form-control"
                                                                        name="img_2">
                                                                </div>


                                                            </div>
                                                        </div>
                                                        <div class="text-end mt-4">
                                                            <button type="submit" class="btn btn-primary">Update</button>
                                                        </div>
                                                    </form>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <script>
        ClassicEditor
            .create(document.querySelectorAll('.ckeditor', ))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        function confirmDelete() {
            if (confirm('Are you sure you want to delete this course?')) {
                document.getElementById('deleteForm').submit();
            } else {
                // Optionally, you can provide feedback to the user that the deletion was canceled.
                event.preventDefault();
            }
        }
    </script>
@endsection

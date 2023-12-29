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
                            <h2>All Lessions/Course Materials</h2>

                            <p class="text-success" style="font-weight:500;">
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
                                        <th>Lession Title</th>
                                        <th>Course Name</th>
                                        <th>Vedio 1</th>
                                        <th>Vedio 2</th>
                                        <th>PDF 1</th>
                                        <th>PDF 2</th>
                                        <th>Image A</th>
                                        <th>Image B</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                @foreach ($lession as $lessions)
                                    <tbody>
                                        <tr>
                                            <td>{{ $lessions->id }}</td>
                                            <td>{{ $lessions->title }}</td>

                                            @php $courseNameDisplayed = false; @endphp
                                            @foreach ($data as $d)
                                                @if ($d->courseId == $lessions->course_id && !$courseNameDisplayed)
                                                    <td>
                                                        <p class="alert-success p-1" style="font-weight:500;">
                                                            {{ $d->courseName }}</p>
                                                    </td>
                                                    @php $courseNameDisplayed = true; @endphp
                                                @endif
                                            @endforeach

                                            <td><a target="_blank" href="{{ $lessions->url1 }}" onmouseover="this.style.color='blue'" onmouseout="this.style.color='black'">{{ $lessions->url1 }}</a></td>
                                            <td><a target="_blank" href="{{ $lessions->url2 }}" onmouseover="this.style.color='blue'" onmouseout="this.style.color='black'">{{ $lessions->url2 }}</a></td>

                                            <td>
                                                @if (!empty($lessions->pdf1file_path))
                                                    <a class="btn btn-light" target="_blank"
                                                        href="{{ route('show.pdf1', $lessions->id) }}">{{ $lessions->pdf1name }}</a>
                                                @else
                                                    <p>N/A</p>
                                                @endif
                                            </td>

                                            <td>
                                                @if (!empty($lessions->pdf2file_path))
                                                    <a class="btn btn-light" target="_blank"
                                                        href="{{ route('show.pdf2', $lessions->id) }}">{{ $lessions->pdf2name }}</a>
                                                @else
                                                    <p>N/A</p>
                                                @endif
                                            </td>




                                            <td><img src="{{ asset('/storage/' . $lessions->img_1) }}"
                                                    style="width: 105px; height:105px;"> </td>
                                            <td><img src="{{ asset('/storage/' . $lessions->img_2) }}"
                                                    style="width: 105px; height:105px;"> </td>

                                            <td>
                                                <div class="d-flex align-items-center">


                                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#exampleModal{{ $lessions->id }}">
                                                        <i class="fa fa-edit"></i> Edit
                                                    </button>





                                                    <form style="padding-left:10px;"
                                                        action="{{ url('/lession-delete/' . $lessions->id) }}"
                                                        method="post" id="deleteForm">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit"
                                                            onclick="confirmDelete()">
                                                            <i class="fa fa-trash"></i> Trash
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{ $lessions->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel{{ $lessions->id }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModal{{ $lessions->id }}">
                                                        Edit
                                                        Lession/Course Materials</h5>
                                                    <button type="button" class="btn btn-warning" data-dismiss="modal"
                                                        aria-label="Close"> Close</button>
                                                </div>
                                                <div class="modal-body">

                                                    <form action="{{ url('/update-lession/' . $lessions->id) }}"
                                                        method="post" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-12">

                                                                <div class="form-group">
                                                                    <label>Select Course:</label>
                                                                    <select name="course_id" class="form-control" required>
                                                                        <option selected disabled>Select ⮟</option>
                                                                        @foreach ($courses as $course)
                                                                            <option value="{{ $course->id }}"
                                                                                @if ($lessions->course_id == $course->id) selected @endif>
                                                                                {{ $course->title }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>


                                                                <div class="form-group">
                                                                    <label>Lession Title/Name:</label>
                                                                    <input type="text" class="form-control"
                                                                        name="title" value="{{ $lessions->title }}">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Lession Vedio URL 1</label>
                                                                    <input name="url1" type="text"
                                                                        class="form-control" value="{{ $lessions->url1 }}">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Lession Vedio URL 2</label>
                                                                    <input name="url2" type="text"
                                                                        class="form-control" value="{{ $lessions->url2 }}">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Add PDF 1:</label>
                                                                    <input type="file" class="form-control"
                                                                        name="pdf_file1">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Add PDF 2:</label>
                                                                    <input type="file" class="form-control"
                                                                        name="pdf_file2">
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

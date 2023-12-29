@extends('admin.admin_master')
@section('admin_content')
    <div class="container mt-4">

        <h4 class="text-muted">Create Your Course Lession</h4>
        <p class="alert-info text-center">
            <?php
            $message = Session()->get('message');
            if ($message) {
                echo $message;
                Session()->put('message', null);
            }
            ?>
        </p>
        <form action="{{ url('/lessions/') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Select Course:</label>
                    <select name="course_id" class="form-control" required>
                        <option selected disabled>Select ⮟</option>
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label>Lession Title</label>
                    <input name="title" type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Lession Vedio URL 1</label>
                    <input name="url1" type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Lession Vedio URL 2</label>
                    <input name="url2" type="text" class="form-control">
                </div>

                <div class="form-group col-md-6">
                    <label>Add PDF 1:</label>
                    <input type="file" class="form-control" name="pdf_file1">
                </div>

                <div class="form-group col-md-6">
                    <label>Add PDF 2:</label>
                    <input type="file" class="form-control" name="pdf_file2">
                </div>

                <div class="form-group col-md-6">
                    <label>Image A</label>
                    <input type="file" name="img_1" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Image B</label>
                    <input type="file" name="img_2" class="form-control">
                </div>
            </div>

            <button type="submit" class="btn btn-primary">SAVE</button>
        </form>
    </div>


@endsection

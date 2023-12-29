@extends('admin.admin_master')
@section('admin_content')
    <div class="container mt-4">

        <h4 class="text-muted">Create Your Course</h4>
        <p class="alert-info text-center">
            <?php
            $message = Session()->get('message');
            if ($message) {
                echo $message;
                Session()->put('message', null);
            }
            ?>
        </p>
        <form action="{{ url('/courses/') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-row">

                <div class="form-group col-md-6">
                    <label>Course Name</label>
                    <input name="title" type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Subtitle</label>
                    <input name="subtitle" type="text" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Course Type</label>
                    <select id="menu-dropdown" name="type" class="form-control" required>
                        <option selected disabled> Select</option>
                        <option value="diploma">Diploma</option>
                        <option value="academic">Academic</option>
                        <option value="special">Special</option>
                        <option value="undergraduate">Undergraduate</option>
                        <option value="Postgraduate">Postgraduate</option>
                        <option value="professional">Professional</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label>Price</label>
                    <input type="text" name="price" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Price After Discount</label>
                    <input type="text" name="price_a" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Tutor Name</label>
                    <input type="text" name="tutor" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Duration</label>
                    <input type="text" name="duration" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Tag</label>
                    <input type="text" name="tag" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>Short Description</label>
                    <textarea name="short_desc" class="form-control ckeditor"></textarea>
                </div>

                <div class="form-group col-md-6">
                    <label>Full Description</label>
                    <textarea name="full_desc" class="form-control ckeditor"></textarea>
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

    <script>
        ClassicEditor
            .create(document.querySelectorAll('.ckeditor', ))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection

@extends('admin.admin_master')
@section('admin_content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Post</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href=" "><i class="fa fa-angle-double-right fa-lg"></i> All
                                    Posts</a></li>
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


            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-sm-12 col-md-6">
                        <form class="py-2" action="{{ url('/post-search') }}" method="GET">
                            <div class="input-group">
                                <input class="form-control" style="border:2px solid black;border-radius:5px;padding:4px;"
                                    type="text" placeholder="Search Post By Id/Title..." name="searchId">
                                <button class="bg-primary btn btn-default mx-2 text-white" type="submit"><i
                                        class="fa fa-search"></i>
                                    Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">
                            <div class="table-responsive" style="width: 100%;height:600px;">
                                <table class="table table-center table-hover datatable">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Id</th>
                                            <th>Post Title/Name</th>
                                            <th>Page Name</th>
                                            <th>Menu Name</th>
                                            <th>Type/Designation</th>
                                            <th>Short Description</th>
                                            <th>Full Description</th>
                                            <th>Timelines</th>
                                            <th>URL</th>
                                            <th>Thumbnail</th>
                                            <th>Image</th>
                                            <th>Image_A</th>
                                            <th>Image_B</th>
                                            <th>Image_C</th>
                                            <th>Image_D</th>
                                            <th>Image_E</th>
                                            <th>Image_F</th>
                                            <th>PDF</th>
                                            <th>Status</th>
                                            <th class="text-center">Actions</th>

                                        </tr>
                                    </thead>
                                    @if ($post_search)
                                        @foreach ($post_search as $post)
                                            <tbody>
                                                <tr>
                                                    <td>{{ $post->id }}</td>
                                                    <td class="text-wrap">{{ $post->title }}</td>

                                                    @php $pageNameDisplayed = false; @endphp
                                                    @foreach ($data1 as $d)
                                                        @if ($d->pageId == $post->page_id && !$pageNameDisplayed)
                                                            <td class="text-wrap">{{ $d->pageName }}</td>
                                                            @php $pageNameDisplayed = true; @endphp
                                                        @endif
                                                    @endforeach

                                                    @php $menuNameDisplayed = false; @endphp
                                                    @foreach ($data as $d)
                                                        @if ($d->menuId == $post->menu_id && !$menuNameDisplayed)
                                                            <td>{{ $d->menuName }}</td>
                                                            @php $menuNameDisplayed = true; @endphp
                                                        @endif
                                                    @endforeach



                                                    <td>{{ $post->subtitle }}</td>
                                                    <td class="text-wrap">{!! html_entity_decode(Str::limit($post->short_desc, 40)) !!}</td>
                                                    <td class="text-wrap"> {!! html_entity_decode(Str::limit($post->full_desc, 100)) !!}</td>
                                                    <td>{{ $post->timeline }}</td>
                                                    <td>{{ $post->url }}</td>
                                                    <td><img src="{{ asset('/storage/' . $post->thum_img) }}"
                                                            style="width: 105px; height:105px;"> </td>
                                                    <td><img src="{{ asset('/storage/' . $post->img) }}"
                                                            style="width: 105px; height:105px;"> </td>

                                                    <td><img src="{{ asset('/storage/' . $post->img_a) }}"
                                                            style="width: 105px; height:105px;"> </td>
                                                    <td><img src="{{ asset('/storage/' . $post->img_b) }}"
                                                            style="width: 105px; height:105px;"> </td>
                                                    <td><img src="{{ asset('/storage/' . $post->img_c) }}"
                                                            style="width: 105px; height:105px;"> </td>
                                                    <td><img src="{{ asset('/storage/' . $post->img_d) }}"
                                                            style="width: 105px; height:105px;"> </td>
                                                    <td><img src="{{ asset('/storage/' . $post->img_e) }}"
                                                            style="width: 105px; height:105px;"> </td>
                                                    <td><img src="{{ asset('/storage/' . $post->img_f) }}"
                                                            style="width: 105px; height:105px;"> </td>
                                                    <td class="text-wrap">{{ $post->file_name }}</td>
                                                    <td>
                                                        @if ($post->status == 1)
                                                            <span class="badge bg-primary">Active</span>
                                                        @else
                                                            <span class="badge bg-warning">Deactive</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            @if ($post->status == 1)
                                                                <a href="{{ url('/post-status' . $post->id) }}"
                                                                    class="btn btn-success">
                                                                    <i class="fa fa-thumbs-down"></i> status
                                                                </a>
                                                            @else
                                                                <a href="{{ url('/post-status' . $post->id) }}"
                                                                    class="btn btn-danger">
                                                                    <i class="fa fa-thumbs-up"></i> status
                                                                </a>
                                                            @endif


                                                            <button style="margin-left:10px;" type="button"
                                                                class="btn btn-primary" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal{{ $post->id }}">
                                                                <i class="fa fa-edit"></i> Edit
                                                            </button>


                                                            <form style="padding-left:10px;"
                                                                action="{{ url('/post-delete/' . $post->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger" type="submit">
                                                                    <i class="fa fa-trash"></i> Trash
                                                                </button>
                                                            </form>
                                                        </div>

                                                    </td>

                                                </tr>

                                            </tbody>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal{{ $post->id }}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel{{ $post->id }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModal{{ $post->id }}">
                                                                Edit
                                                                Post</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <form action="{{ url('/update-post/' . $post->id) }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label>Post Title/Name:</label>
                                                                            <input type="text" class="form-control"
                                                                                name="title"
                                                                                value="{{ $post->title }}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Menu:</label>
                                                                            <select class="form-control">
                                                                                @foreach ($data as $d)
                                                                                    @if ($d->postId == $post->id)
                                                                                        <option> {{ $d->menuName }}
                                                                                        </option>
                                                                                    @endif
                                                                                @endforeach
                                                                            </select>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label>Page:</label>
                                                                            <select class="form-control">
                                                                                @foreach ($data1 as $d)
                                                                                    @if ($d->postId == $post->id)
                                                                                        <option> {{ $d->pageName }}
                                                                                        </option>
                                                                                    @endif
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Type/Designation:</label>
                                                                            <input type="text" class="form-control"
                                                                                name="subtitle"
                                                                                value="{{ $post->subtitle }}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>URL:</label>
                                                                            <input type="text" class="form-control"
                                                                                name="url"
                                                                                value="{{ $post->url }}">
                                                                        </div>



                                                                        <div class="form-group">
                                                                            <label>Short Description:</label>
                                                                            <textarea class="form-control ckeditor" name="short_desc"><?php echo strip_tags($post->short_desc); ?></textarea>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Full Description:</label>
                                                                            <textarea class="form-control ckeditor" name="full_desc"><?php echo strip_tags($post->full_desc); ?></textarea>

                                                                        </div>


                                                                        <div class="form-group">
                                                                            <label>Timelines:</label>
                                                                            <input type="date" class="form-control"
                                                                                name="timeline"
                                                                                value="{{ $post->timeline }}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label> Thumnail:</label>
                                                                            <input type="file" class="form-control"
                                                                                name="thum_img">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label> Image:</label>
                                                                            <input type="file" class="form-control"
                                                                                name="img">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label> Image_A:</label>
                                                                            <input type="file" class="form-control"
                                                                                name="img_a">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label> Image_B:</label>
                                                                            <input type="file" class="form-control"
                                                                                name="img_b">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label> Image_C:</label>
                                                                            <input type="file" class="form-control"
                                                                                name="img_c">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label> Image_D:</label>
                                                                            <input type="file" class="form-control"
                                                                                name="img_d">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label> Image_E:</label>
                                                                            <input type="file" class="form-control"
                                                                                name="img_e">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label> Image_F:</label>
                                                                            <input type="file" class="form-control"
                                                                                name="img_f">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label> PDF:</label>
                                                                            <input type="file" class="form-control"
                                                                                name="pdf_file">
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                                <div class="text-end mt-4">
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Edit</button>
                                                                </div>
                                                            </form>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            {{-- modalend --}}
                                        @endforeach
                                    @else
                                        @foreach ($posts as $post)
                                            <tbody>
                                                <tr>
                                                    <td>{{ $post->id }}</td>
                                                    <td class="text-wrap">{{ $post->title }}</td>

                                                    @php $pageNameDisplayed = false; @endphp
                                                    @foreach ($data1 as $d)
                                                        @if ($d->pageId == $post->page_id && !$pageNameDisplayed)
                                                            <td class="text-wrap">{{ $d->pageName }}</td>
                                                            @php $pageNameDisplayed = true; @endphp
                                                        @endif
                                                    @endforeach

                                                    @php $menuNameDisplayed = false; @endphp
                                                    @foreach ($data as $d)
                                                        @if ($d->menuId == $post->menu_id && !$menuNameDisplayed)
                                                            <td>{{ $d->menuName }}</td>
                                                            @php $menuNameDisplayed = true; @endphp
                                                        @endif
                                                    @endforeach



                                                    <td>{{ $post->subtitle }}</td>
                                                    <td class="text-wrap">{!! html_entity_decode(Str::limit($post->short_desc, 40)) !!}</td>
                                                    <td class="text-wrap"> {!! html_entity_decode(Str::limit($post->full_desc, 100)) !!}</td>
                                                    <td>{{ $post->timeline }}</td>
                                                    <td>{{ $post->url }}</td>
                                                    <td><img src="{{ asset('/storage/' . $post->thum_img) }}"
                                                            style="width: 105px; height:105px;"> </td>
                                                    <td><img src="{{ asset('/storage/' . $post->img) }}"
                                                            style="width: 105px; height:105px;"> </td>

                                                    <td><img src="{{ asset('/storage/' . $post->img_a) }}"
                                                            style="width: 105px; height:105px;"> </td>
                                                    <td><img src="{{ asset('/storage/' . $post->img_b) }}"
                                                            style="width: 105px; height:105px;"> </td>
                                                    <td><img src="{{ asset('/storage/' . $post->img_c) }}"
                                                            style="width: 105px; height:105px;"> </td>
                                                    <td><img src="{{ asset('/storage/' . $post->img_d) }}"
                                                            style="width: 105px; height:105px;"> </td>
                                                    <td><img src="{{ asset('/storage/' . $post->img_e) }}"
                                                            style="width: 105px; height:105px;"> </td>
                                                    <td><img src="{{ asset('/storage/' . $post->img_f) }}"
                                                            style="width: 105px; height:105px;"> </td>
                                                    <td class="text-wrap">{{ $post->file_name }}</td>
                                                    <td>
                                                        @if ($post->status == 1)
                                                            <span class="badge bg-primary">Active</span>
                                                        @else
                                                            <span class="badge bg-warning">Deactive</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            @if ($post->status == 1)
                                                                <a href="{{ url('/post-status' . $post->id) }}"
                                                                    class="btn btn-success">
                                                                    <i class="fa fa-thumbs-down"></i> status
                                                                </a>
                                                            @else
                                                                <a href="{{ url('/post-status' . $post->id) }}"
                                                                    class="btn btn-danger">
                                                                    <i class="fa fa-thumbs-up"></i> status
                                                                </a>
                                                            @endif


                                                            <button style="margin-left:10px;" type="button"
                                                                class="btn btn-primary" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal{{ $post->id }}">
                                                                <i class="fa fa-edit"></i> Edit
                                                            </button>


                                                            <form style="padding-left:10px;"
                                                                action="{{ url('/post-delete/' . $post->id) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-danger" type="submit">
                                                                    <i class="fa fa-trash"></i> Trash
                                                                </button>
                                                            </form>
                                                        </div>

                                                    </td>

                                                </tr>

                                            </tbody>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal{{ $post->id }}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel{{ $post->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModal{{ $post->id }}">
                                                                Edit
                                                                Post</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">

                                                            <form action="{{ url('/update-post/' . $post->id) }}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label>Post Title/Name:</label>
                                                                            <input type="text" class="form-control"
                                                                                name="title"
                                                                                value="{{ $post->title }}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Menu:</label>
                                                                            <select class="form-control">
                                                                                @foreach ($data as $d)
                                                                                    @if ($d->postId == $post->id)
                                                                                        <option> {{ $d->menuName }}
                                                                                        </option>
                                                                                    @endif
                                                                                @endforeach
                                                                            </select>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label>Page:</label>
                                                                            <select class="form-control">
                                                                                @foreach ($data1 as $d)
                                                                                    @if ($d->postId == $post->id)
                                                                                        <option> {{ $d->pageName }}
                                                                                        </option>
                                                                                    @endif
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Type/Designation:</label>
                                                                            <input type="text" class="form-control"
                                                                                name="subtitle"
                                                                                value="{{ $post->subtitle }}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>URL:</label>
                                                                            <input type="text" class="form-control"
                                                                                name="url"
                                                                                value="{{ $post->url }}">
                                                                        </div>



                                                                        <div class="form-group">
                                                                            <label>Short Description:</label>
                                                                            <textarea class="form-control ckeditor" name="short_desc"><?php echo strip_tags($post->short_desc); ?></textarea>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label>Full Description:</label>
                                                                            <textarea class="form-control ckeditor" name="full_desc"><?php echo strip_tags($post->full_desc); ?></textarea>

                                                                        </div>


                                                                        <div class="form-group">
                                                                            <label>Timelines:</label>
                                                                            <input type="date" class="form-control"
                                                                                name="timeline"
                                                                                value="{{ $post->timeline }}">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label> Thumnail:</label>
                                                                            <input type="file" class="form-control"
                                                                                name="thum_img">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label> Image:</label>
                                                                            <input type="file" class="form-control"
                                                                                name="img">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label> Image_A:</label>
                                                                            <input type="file" class="form-control"
                                                                                name="img_a">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label> Image_B:</label>
                                                                            <input type="file" class="form-control"
                                                                                name="img_b">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label> Image_C:</label>
                                                                            <input type="file" class="form-control"
                                                                                name="img_c">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label> Image_D:</label>
                                                                            <input type="file" class="form-control"
                                                                                name="img_d">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label> Image_E:</label>
                                                                            <input type="file" class="form-control"
                                                                                name="img_e">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label> Image_F:</label>
                                                                            <input type="file" class="form-control"
                                                                                name="img_f">
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label> PDF:</label>
                                                                            <input type="file" class="form-control"
                                                                                name="pdf_file">
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                                <div class="text-end mt-4">
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Edit</button>
                                                                </div>
                                                            </form>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            {{-- modalend --}}
                                        @endforeach
                                    @endif
                                </table>
                            </div>
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
@endsection

@extends('backend.layouts.main')
@section('main-container')



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Categories</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Simple Tables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    @if(Session::has('status'))
    <div class="alert alert-success" role="alert" id="statusMessage">
        {{ Session::get('status') }}
    </div>
    @endif
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add New Category</h3>
        </div>
        <br>
        <form method="POST" action="{{url('admin/storeCat')}}" class="form-inline" enctype="multipart/form-data">
            @csrf
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th style="width: 40%">Category Decscription</th>
                        <th style="width: 20%">Category Image</th>
                        <th style="width: 10%">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <td>
                        <div class="form-group mb-2">
                            <input type="text" name="name" class="form-control" id="categoryName" placeholder="Enter Category Name" required>
                        </div>
                        @error('name')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    </td>

                    <td>
                        <div class="form-group">
                            <textarea class="form-control" name="cat_desc" rows="1" cols="70" placeholder="Enter Description Here" required></textarea>
                        </div>
                        @error('cat_desc')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    </td>

                    <td>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="cat_image" class="custom-file-input" id="exampleInputFile" required>
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>

                            </div>
                        </div>
                        @error('cat_image')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                    </td>
                    <td><button type="submit" class="btn btn-primary mb-2 ml-2">Add</button></td>
        </form>
        </tbody>
        </table>

    </div>
    <!-- /.card -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Categories</h3>
                    <div class="flash-message">

                        @if(Session::has('info'))
                        <div class="alert alert-info" role="alert" id="statusMessage">
                            {{ Session::get('info') }}
                        </div>
                        @endif
                        @if(Session::has('Danger'))
                        <div class="alert alert-danger" role="alert" id="statusMessage">
                            {{ Session::get('Danger') }}
                        </div>
                        @endif
                    </div>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Category Image</th>
                                <th>Category Name</th>
                                <th>Category Decscription</th>
                                <th style="width: 300px">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 1;
                            @endphp
                            @foreach ($data as $cat)
                            <input type="hidden" name="id">
                            <tr>
                                <td>{{$i++}}</td>
                                <td><img src=" {{ asset('storage/'.$cat->cat_image) }}" width="50px" height="50px" alt=""></td>
                                <td>{{$cat->name}}</td>
                                <td>{{$cat->cat_desc}}</td>
                                <td>
                                    {{-- <button type="button" class="btn btn-info editBtn" data-id="{{ $cat->id }}" data-name="{{ $cat->name }}">Edit</button> --}}
                                    <a href="{{url('admin/delete_cat/'.$cat->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="modal fade" id="editCategoryModal" tabindex="-1" role="dialog" aria-labelledby="editCategoryModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editCategoryModalLabel">Edit Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editCategoryForm" method="POST" action="{{url('admin/edit_cat')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="categoryId" name="id">
                        <div class="form-group">
                            <label for="categoryName">Category Name</label>
                            <input type="text" class="form-control" id="categoryName" name="name" required>
                            <label for="categoryName">Category Description</label>
                            <input type="text" class="form-control" id="categoryName" name="cat_desc" required>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" id="saveCategoryChanges">change</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div> --}}

</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const editButtons = document.querySelectorAll('.editBtn');
        const editCategoryModal = new bootstrap.Modal(document.getElementById('editCategoryModal'), {
            keyboard: false
        });
        editButtons.forEach(button => {
            button.addEventListener('click', function() {
                const categoryId = this.getAttribute('data-id');
                const categoryName = this.getAttribute('data-name');

                document.getElementById('categoryId').value = categoryId;
                document.getElementById('categoryName').value = categoryName;

                editCategoryModal.show();
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        var alertMessages = document.querySelectorAll('.alert');

        alertMessages.forEach(function(message) {
            setTimeout(function() {
                message.style.display = 'none';
            }, 5000); // 5000 milliseconds = 5 seconds
        });
    });

</script>
@endsection

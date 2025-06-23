@extends('backend.layouts.main')
@section('main-container')



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Users</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Users</h3>

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
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone No</th>
                                <th>Status</th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i = 1;
                            @endphp
                            @foreach ($data as $pro)
                                <input type="hidden" name="id">
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$pro->name}}</td>
                                    <td>{{$pro->email}}</td>
                                    <td>{{$pro->ph_no}}</td>
                                    <td>{{$pro->status}}</td>

                                    <td>
                                        @if ($pro->status === 'active')
                                        <a href="{{ url('admin/block_customer/'.$pro->id) }}" class="btn btn-danger">Block</a>
                                        @else
                                        <a href="{{ url('admin/unblock_customer/'.$pro->id) }}" class="btn btn-success">Unblock</a>
                                        @endif
                                    </td>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
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

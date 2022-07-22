@extends('admin.master')
@section('title')
    manageUser
@endsection
@section('body')
    <div class="container">
        <div class="text-center text-success">
            <marquee direction="right"><h1 class="text-primary font-weight-bolder">Welcome Back Manage Category </h1></marquee>
        </div>
        <div class="card">
            <div class="card-header">
                <h4> Manage User
                    <a href="" class="btn btn-primary btn-sm float-right">Add User</a>
                </h4>
            </div>
            <div class="container-fluid">
                @if($message   =   Session::get('message'))
                    <h1 class="text-center text-primary" id="msg">{{ $message }}</h1>
                @endif
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-dark table-striped " id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center text-uppercase text-info">
                                        <th>SL </th>
                                        <th>ID </th>
                                        <th>User  Name</th>
                                        <th>emmail</th>
                                        <th>Publication Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php($i=1)
                                @foreach($users as $user)
                                    <tr class="text-center">
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td></td>
                                        <td>
                                            @if($user->publication_status == 1)
                                                <a class="btn btn-info btn-sm" href="" title="Published">
                                                    <span class=" fas fa-arrow-up fa-sm"></span>
                                                </a>
                                            @else
                                                <a class="btn btn-warning btn-sm" href="" title="UnPublished">
                                                    <span class=" fas fa-arrow-down fa-sm"></span>
                                                </a>
                                            @endif
                                            <a class="btn btn-success btn-sm" href="" title="Edit">
                                                <span class=" fas fa-edit fa-sm"></span>
                                            </a>
                                            <a href="" onclick="return confirm('Are you sure to delete this ??')" class="btn btn-danger btn-sm" title="Delete">
                                                <span class=" fas fa-trash fa-sm"></span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
        <marquee><h3 class="text-success font-weight-bolder">This Site Developed By MD.Sayed Arif. For contact*01634173029 </h3></marquee>
    </div>
@endsection

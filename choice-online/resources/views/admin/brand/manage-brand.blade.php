@extends('admin.master')
@section('title')
    ManageBrand
@endsection
@section('body')
    <div class="container">
        <div class="text-center text-success">
            <marquee direction="right"><h1 class="text-primary font-weight-bolder">Welcome Back Manage Brand </h1></marquee>
        </div>
        <div class="card">
            <div class="card-header">
                <h4> Manage Brand
                    <a href="{!! route('add-brand') !!}" class="btn btn-primary btn-sm float-right">Add Brand</a>
                </h4>
            </div>
            <div class="container-fluid">
                @if($message   =   Session::get('message'))
                    <h1 class="text-center text-primary" id="msg">{{ $message }}</h1>
                @endif
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-dark table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center text-success text-uppercase">
                                        <th>SL</th>
                                        <th>Brand Name</th>
                                        <th>Brand Description</th>
                                        <th>Publication Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php($i=1)
                                    @foreach($brands as $brand)
                                        <tr class="text-center">
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $brand->brand_name }}</td>
                                            <td>{{ $brand->brand_description }}</td>
                                            <td>{{ $brand->publication_status == 1 ? 'published' : 'Unpublished' }}</td>
                                            <td>
                                                @if($brand->publication_status == 1)
                                                    <a class="btn btn-info btn-sm" href="{!! route('unpublished-brand',['id'=>$brand->id]) !!}" title="Published">
                                                        <span class=" fas fa-arrow-up fa-sm"></span>
                                                    </a>
                                                @else
                                                    <a class="btn btn-warning btn-sm" href="{!! route('published-brand',['id'=>$brand->id]) !!}" title="UnPublished">
                                                        <span class=" fas fa-arrow-down fa-sm"></span>
                                                    </a>
                                                @endif

                                                <a class="btn btn-success btn-sm" href="{!! route('edit-brand',['id'=>$brand->id]) !!}" title="Edit">
                                                    <span class=" fas fa-edit fa-sm"></span>
                                                </a>
                                                <a href="{!! route('delete-brand',['id'=>$brand->id]) !!}" onclick="return confirm('Are you sure to delete this ??')" class="btn btn-danger btn-sm" title="Delete">
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
            <!-- /.container-fluid -->
        </div>
        <marquee><h3 class="text-success font-weight-bolder">This Site Developed By MD.Sayed Arif. For contact*01634173029 </h3></marquee>
    </div>
@endsection

@extends('admin.master')
@section('title')
    AddCategory
@endsection
@section('body')
    <div class="container">
        <marquee><h3 class="text-danger font-weight-bolder">Welcome Back Our Add Category Page.</h3></marquee>
        <div class="card">
            @if($message   =   Session::get('message'))
                <h1 class="text-center text-primary" id="msg">{{ $message }}</h1>
            @endif
            <div class="card-body">
                <div class="card">
                    <div class="card-header">
                        <h4> Add Category
                            <a href="{!! route('manage-category') !!}" class="btn btn-danger btn-sm float-right">
                                <i class="far fa-hand-point-right"> </i>Manage Category</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form class="user" action="{!! route('new-category') !!}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text"name="category_name" class="form-control form-control-user" id="exampleFirstName"
                                           placeholder="Category Name">
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-md-4">Publication Status</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="publication_status">
                                                <option value="1">Published</option>
                                                <option value="0">Unpublished</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea type="text" name="category_description" class="form-control form-control-user" id="exampleInputEmail"
                                          placeholder="Category Description"></textarea>
                            </div>

                            <hr>
                            <div class="form-group row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-google btn-user btn-block font-weight-bolder">
                                        <i class="fas fa-save" aria-hidden="true"></i> Save Category Info
                                    </button>
                                </div>
                                <div class="col-sm-4"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

@extends('admin.master')
@section('title')
    AddBrand
@endsection
@section('body')
    <div class="container">
        <marquee><h3 class="text-danger font-weight-bolder">Welcome Back Our Add Brand Page.</h3></marquee>
        <div class="card">
            @if($message   =   Session::get('message'))
                <h1 class="text-center text-primary" id="msg">{{ $message }}</h1>
            @endif
            <div class="card-body">
                <div class="card">
                    <div class="card-header">
                        <h4> Add Brand
                            <a href="{!! route('manage-brand') !!}" class="btn btn-danger btn-sm float-right">
                                <i class="far fa-hand-point-right"> </i>Manage Brand</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        {!! Form::open(['class'=>'user','route'=>'new-brand', 'method'=>'POST']) !!}
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    {!! Form::text('brand_name', 'Brand Name',['class'=>'form-control form-control-user']) !!}
                                    <span class="text-danger">{{ $errors->has('brand_name') ? $errors->first('brand_name') : ' ' }}</span>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        {!! Form::label('publication_status','Publication Status',['class'=>'col-sm-4 col-md-4']) !!}
                                        <div class="col-sm-6">
                                            <select class="form-control" name="publication_status">
                                                <option value="select">Select Option</option>
                                                <option value="1">Published</option>
                                                <option value="0">Unpublished</option>
                                            </select>
                                            <span class="text-danger">{{ $errors->has('publication_status') ? $errors->first('publication_status') : ' ' }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea type="text" name="brand_description" class="form-control form-control-user" id="exampleInputEmail"
                                          placeholder="Brand Description"></textarea>
                                <span class="text-danger">{{ $errors->has('brand_description') ? $errors->first('brand_description') : ' ' }}</span>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-4">
                                    <button type="submit" class="btn btn-google btn-user btn-block font-weight-bolder">
                                        <i class="fas fa-save" aria-hidden="true"></i> Save Brand Info
                                    </button>
                                </div>
                                <div class="col-sm-4"></div>
                            </div>
                        {!! Form::close() !!}
                            <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

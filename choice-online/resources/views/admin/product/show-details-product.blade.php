    @extends('admin.master')
    @section('title')
        ShowDetails
    @endsection
    @section('body')
        <div class="container-fluid">
            <div class="text-center text-success">
                <marquee direction="right"><h1 class="text-primary font-weight-bolder">Welcome Back Show Details Product </h1></marquee>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4>Show Details Product
                        <a href="{!! route('manage-product') !!}" class="btn btn-primary btn-sm float-right">Manage Product</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table-responsive table-dark">
                        <tr class="col-sm-12">
                            <th class="col-sm-4">ID</th>
                            <td class="col-sm-8"></td>
                        </tr>
                        <tr>
                            <th>Category id</th>
                            <td>{!! $product->category_id !!}</td>
                        </tr>
                        <tr>
                            <th>Brand Name</th>
                            <td>{!! $product->brand_id !!}</td>
                        </tr>
                        <tr>
                            <th>Product Name</th>
                            <td>{!! $product->product_name !!}</td>
                        </tr>
                        <tr>
                            <th>hi</th>
                            <td>4</td>
                        </tr>
                        <tr>
                            <th>hi</th>
                            <td>4</td>
                        </tr>
                        <tr>
                            <th>hi</th>
                            <td>4</td>
                        </tr>
                        <tr>
                            <th>hi</th>
                            <td>4</td>
                        </tr>
                        <tr>
                            <th>hi</th>
                            <td>4</td>
                        </tr>
                        <tr>
                            <th>hi</th>
                            <td>4</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    @endsection

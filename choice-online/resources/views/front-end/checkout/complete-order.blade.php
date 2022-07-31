@extends('front-end.master')

@section('title')
    OrderComplete
@endsection
@section('body')
    <section style="background: url('{{asset('/product-image/Apple.jpg')}}'); background-size: 100% 100%; background-attachment: fixed;" >
    <div class="row">
    <div class="col-md-3"></div>   
        <div class="row col-md-6">
            <div class="card">
                <div class="card-body" style="background-image: url('{{asset('product-image/Hp.jpg')}}'); height: 300px;" >
                    <h1 class="text-center text-primary" style="padding-top: 150px;">{{ $message}}</h1>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>  
    </section>
@endsection

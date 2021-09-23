@extends('admin.master')
@section('title')
    ViewOrderInvoice
@endsection
@section('body')
    <style>
        table { font-size: 75%; table-layout: fixed; width: 100%; }
        table { border-collapse: separate; border-spacing: 2px; }
        th, td { border-width: 1px; padding: 0.5em; position: relative; text-align: left; }
    </style>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 col-sm-12">
                <div class="card card-default">
                    <div class="card-body">
                        <header>
                            <h1>Invoice</h1>
                            <div class="container">
                                <div class="col-md-12">
                                    <div class="col-md-4 float-right"><h4>Shipping Info</h4>
                                        <address >
                                            <p>{!! $shipping->full_name !!}</p>
                                            <p>{!! $shipping->address !!}</p>
                                            <p>{!! $shipping->phone_number !!}</p>
                                        </address></div>
                                    <div class="col-md-4"></div>
                                    <div class="col-md-4"><h4>Billing Info</h4>
                                        <address >
                                            <p>{!! $customer->first_name.' '.$customer->last_name !!}</p>
                                            <p>{!! $customer->address !!}</p>
                                            <p>{!! $customer->phone_number !!}</p>
                                        </address></div>
                                </div>
                            </div>

                        </header>
                        <article>
                            <h1>Recipient</h1>
                            <address >
                                <p>My Company<br>Choice_Online</p>
                            </address>
                            <table class="meta">
                                <tr>
                                    <th><span >Invoice #</span></th>
                                    <td><span >0000{!! $order->id !!}</span></td>
                                </tr>
                                <tr>
                                    <th><span >Date</span></th>
                                    <td><span >{!! $order->created_at !!}</span></td>
                                </tr>
                                <tr>
                                    <th><span >Amount Due</span></th>
                                    <td>TK {!! $order->order_total !!} </td>
                                </tr>
                            </table>
                            <table class="inventory">
                                <thead>
                                <tr>
                                    <th><span >Item</span></th>
                                    <th><span >Description</span></th>
                                    <th><span >Rate</span></th>
                                    <th><span >Quantity</span></th>
                                    <th><span >Total Price</span></th>
                                </tr>
                                </thead>
                                <tbody>
                                @php($sum=0)
                                @foreach($orderDetails as $orderDetail)
                                    <tr>
                                        <td><a class="cut">-</a><span >{!! $orderDetail->product_name !!}</span></td>
                                        <td><span >Experience Review</span></td>
                                        <td><span data-prefix>Tk </span><span >{!! $orderDetail->product_price !!}</span></td>
                                        <td><span >{!! $orderDetail->product_quantity !!}</span></td>
                                        <td><span data-prefix>Tk </span><span>{!! $total = $orderDetail->product_price* $orderDetail->product_quantity!!}</span></td>
                                    </tr>
                                    @php($sum = $sum+$total)
                                @endforeach
                                </tbody>
                            </table>
                            {{--                            <a class="add">+</a>--}}
                            <table class="balance">
                                <tr>
                                    <th><span >Total</span></th>
                                    <td><span data-prefix>Tk </span><span>{!! $sum !!}</span></td>
                                </tr>
                                <tr>
                                    <th><span >Amount Paid</span></th>
                                    <td><span data-prefix>TK. </span><span >{!! $sum !!}</span></td>
                                </tr>
                                <tr>
                                    <th><span >Balance Due</span></th>
                                    <td><span data-prefix>Tk. </span><span>0</span></td>
                                </tr>
                            </table>
                        </article>
                        <aside>
                            <h1><span >Additional Notes</span></h1>
                            <div >
                                <p class="text-center">A finance charge of 1.5% will be made on unpaid balances after 30 days.</p>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

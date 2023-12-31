@extends('admin.layouts.template')
@section('page_title')
    Pending Orders - Single Ecom
@endsection
@section('content')
    <div class="container my-2">
        <div class="card">
            <div class="card-title">
               <h2 class="text-center mt-3"> Pending orders</h2>
            </div>
            <div class="card-body">

                <table class="table">
                    <tr>
                        <th>User Id</th>
                        <th>Shipping Info</th>
                        <th>Product Id</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>

                    </tr>
                    @foreach ($pending_orders as $order)
                        <tr>
                            <td>{{ $order->userid }}</td>
                            <td>
                                <ul>
                                    <li>Phone Number: {{ $order->shipping_phoneNumber }}</li>
                                    <li>City: {{ $order->shipping_city }}</li>
                                    <li>Postal Code: {{ $order->shipping_postalcode }}</li>
                                </ul>
                            </td>
                            <td>{{ $order->product_id }}</td>
                            <td>{{ $order->quantity }}</td>
                            <td>{{ $order->total_price }}</td>
                            <td><a href="" class="btn btn-success">Aprove Now</a></td>
                        </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>
@endsection

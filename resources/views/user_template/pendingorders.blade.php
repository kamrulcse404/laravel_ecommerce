@extends('user_template.layouts.user_profile_template')
@section('profilecontent')
    <div class="row">
        <div class="col-12">

            <h3>Pending Orders</h3>

            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="main_box">

                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Product ID</th>
                            <th>Price</th>
                        </tr>

                        @foreach ($pending_orders as $order)
                            <tr>
                                <td>{{ $order->product_id }}</td>
                                <td>{{ $order->total_price }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection

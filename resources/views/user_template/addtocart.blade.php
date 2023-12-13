@php

@endphp

@extends('user_template.layouts.template')
@section('main-content')
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="box_main">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>

                        @foreach ($cart_items as $cart_item)
                            <tr>
                                @php
                                    $product_name = App\Models\Product::where('id', $cart_item->product_id)->value('product_name');

                                    $product_image = App\Models\Product::where('id', $cart_item->product_id)->value('product_img');
                                @endphp
                                <td><img src="{{ asset($product_image) }} " style='width: 80px'></td>
                                <td>{{ $product_name }}</td>
                                <td>{{ $cart_item->quantity }}</td>
                                <td>{{ $cart_item->price }}</td>
                                <td><a href="" class="btn btn-warning">Remove</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

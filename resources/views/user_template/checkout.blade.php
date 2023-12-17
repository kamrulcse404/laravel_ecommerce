@extends('user_template.layouts.template')
@section('main-content')
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <h2>Final step to place your order</h2>

    <div class="row">
        <div class="col-4">
            <div class="main_box">
                <h4>Product will send at- </h4>
                @php
                    $user = App\Models\User::find($shipping_address->user_id);
                @endphp
                <p>Name : {{ ucfirst($user->name) }}</p>
                <p>Phone: {{ $shipping_address->phone_number }}</p>
                <p>City / Village : {{ $shipping_address->city_name }}</p>
                <p>Postal Code: {{ $shipping_address->postal_code }}</p>

            </div>
        </div>
        <div class="col-8">
            <div class="main_box">
                <h4>Your final product are-</h4>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                        </tr>

                        @php
                            $total = 0;
                        @endphp
                        @foreach ($cart_items as $cart_item)
                            @php
                                $total = $total + $cart_item->price;
                            @endphp
                            <tr>
                                @php
                                    $product_name = App\Models\Product::where('id', $cart_item->product_id)->value('product_name');

                                    $product_image = App\Models\Product::where('id', $cart_item->product_id)->value('product_img');
                                @endphp
                                <td><img src="{{ asset($product_image) }} " style='width: 80px'></td>
                                <td>{{ $product_name }}</td>
                                <td>{{ $cart_item->quantity }}</td>
                                <td>{{ $cart_item->price }}</td>
                                

                            </tr>
                        @endforeach

                        @if ($total > 0)
                            <tr>
                                <td></td>
                                <td></td>
                                <td>Total</td>
                                <td>{{ $total }}</td>
                                
                            </tr>
                        @endif
                    </table>
                </div>
            </div>
        </div>

        <form action="{{ route('placeorder') }}" method="POST" >
            @csrf

            <input type="submit" value="Place Order" class="btn btn-primary mr-4">

        </form>

        <form action="" method="POST">
            @csrf

            <input type="submit" value="Cancle Order" class="btn btn-danger">

        </form>


    </div>
@endsection

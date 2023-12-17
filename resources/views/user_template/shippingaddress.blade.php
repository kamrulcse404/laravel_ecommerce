@extends('user_template.layouts.template')
@section('main-content')
    <div class="row">
        <div class="col-12">
            <div class="box_main">
                <form action="{{ route('addshippingaddress') }}" method="POST">


                    @csrf


                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input type="text" id="phone_number" name="phone_number" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="city_name">City/village Name</label>
                        <input type="text" id="city_name" name="city_name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="postal_code">Postal Code</label>
                        <input type="text" id="postal_code" name="postal_code" class="form-control">
                    </div>

                    <input type="submit" value="Next" class="btn btn-primary">

                </form>
            </div>
        </div>
    </div>
@endsection
